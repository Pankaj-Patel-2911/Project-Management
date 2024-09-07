<?php
// Include database connection
include 'db_conn.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $projectid = $_POST['projectid'];
    $studentid = $_POST['studentid'];
    $facultyid = $_POST['facultyid'];

    // Check if the project exists
    $sql = "SELECT * FROM project WHERE project_id =?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $projectid);
    $stmt->execute();
    $result = $stmt->get_result();
    $projectExists = $result->fetch_assoc();

    // If the project does not exist, display an error message and exit
    if (!$projectExists) {
        echo "Project not found.";
        $stmt->close();
        $con->close();
        exit();
    }

    // Check if the faculty exists
    $sql = "SELECT * FROM faculty WHERE faculty_id =?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $facultyid);
    $stmt->execute();
    $result = $stmt->get_result();
    $facultyExists = $result->fetch_assoc();

    // If the faculty does not exist, display an error message and exit
    if (!$facultyExists) {
        echo "Faculty not found.";
        $stmt->close();
        $con->close();
        exit();
    }

    // Check if the student exists
    $sql = "SELECT * FROM student WHERE student_id =?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $studentid);
    $stmt->execute();
    $result = $stmt->get_result();
    $studentExists = $result->fetch_assoc();

    // If the student does not exist, display an error message and exit
    if (!$studentExists) {
        echo "Student not found.";
        $stmt->close();
        $con->close();
        exit();
    }

    // Check if the student already has a project
    $sql = "SELECT * FROM student WHERE student_id =? AND project_id IS NOT NULL";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $studentid);
    $stmt->execute();
    $result = $stmt->get_result();
    $studentHasProject = $result->fetch_assoc();

    if (!$studentHasProject) {
        // Check if the project can be allotted to max 2 students
        $sql = "SELECT COUNT(*) as total FROM student WHERE project_id =?";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("s", $projectid);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();

        if ($data['total'] < 2) {
            // Assign project to student
            $sql = "UPDATE student SET project_id =?, faculty_id =? WHERE student_id =?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("sss", $projectid, $facultyid, $studentid);
            $result = $stmt->execute();

            if ($result) {
                echo "Project assigned successfully.";
            } else {
                echo "Error: ". $sql. "<br>". $con->error;
            }
        } else {
            echo "This project has already been allotted to 2 students.";
        }
    } else {
        echo "Student already has a project.";
    }

    $stmt->close();
    $con->close();
}
?>