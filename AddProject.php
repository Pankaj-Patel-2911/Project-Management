<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the required fields are empty
    if (empty($_POST["projectId"]) || empty($_POST["facultyId"]) || empty($_POST["projectName"]) || empty($_POST["projectDesc"]) || empty($_POST["projectSD"]) || empty($_POST["projectED"])) {
        echo "Please fill in Project ID, Project Name, Start & End Date, and Description.";
    } else {
        // Retrieve the form data
        include 'db_conn.php';

        // Get form data
        $projectId = $_POST["projectId"];
        $projectName = $_POST["projectName"];
        $projectDesc = $_POST["projectDesc"];
        $startDate = $_POST["projectSD"];
        $endDate = $_POST["projectED"];
        $facultyId = $_POST["facultyId"];

        // Check if end date is less than start date
        if ($endDate < $startDate) {
            echo "End date cannot be less than start date.";
        } else {
           

            // Prepare and bind the insert statement
            $stmt = $con->prepare("INSERT INTO project (project_id, project_name, description, faculty_id, start_date, end_date) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $projectId, $projectName, $projectDesc, $facultyId, $startDate, $endDate);

            // Execute the insert statement
            if ($stmt->execute()) {
                echo "Project added successfully.";
            } else {
                echo "Error adding project: " . $stmt->error;
            }

            // Close the statement and connection
            $stmt->close();
            $con->close();
        }
    }
}
?>