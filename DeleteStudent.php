<?php

// Check if student ID is provided via POST
if(isset($_POST['studentid'])) {
    $studentid = $_POST['studentid'];

    // Include database connection
    include 'db_conn.php';

    // Prepare and execute SQL statement to check if student ID exists
    $stmt_check = $con->prepare("SELECT * FROM student WHERE student_id = ?");
    $stmt_check->bind_param("s", $studentid);
    $stmt_check->execute();
    $result = $stmt_check->get_result();

    // If student ID exists, proceed with deletion
    if ($result->num_rows > 0) {
        // Prepare and execute SQL statement to delete student record
        $stmt_delete = $con->prepare("DELETE FROM student WHERE student_id = ?");
        $stmt_delete->bind_param("s", $studentid);
        $stmt_delete->execute();

        // Check if deletion was successful
        if ($stmt_delete->affected_rows > 0) {
            echo "Student with ID $studentid deleted successfully.";
        } else {
            echo "Error occurred while deleting the student.";
        }

        $stmt_delete->close();
    } else {
        echo "Student with ID $studentid does not exist.";
    }

    $stmt_check->close();
    $con->close();
} else {
    echo "Student ID is not provided.";
}
?>
