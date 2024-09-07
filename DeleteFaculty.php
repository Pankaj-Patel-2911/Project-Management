<?php

// Include database connection
include 'db_conn.php';

// Check if faculty ID is provided via POST
if (isset($_POST['facultyid'])) {
    $facultyId = $_POST['facultyid'];

    // Prepare and execute SQL statement to check if faculty ID exists
    $stmt_check = $con->prepare("SELECT * FROM faculty WHERE faculty_id = ?");
    $stmt_check->bind_param("s", $facultyId);
    $stmt_check->execute();
    $result = $stmt_check->get_result();

    // If faculty ID exists, proceed with deletion
    if ($result->num_rows > 0) {
        // Prepare and execute SQL statement to delete faculty record
        $stmt_delete = $con->prepare("DELETE FROM faculty WHERE faculty_id = ?");
        $stmt_delete->bind_param("s", $facultyId);
        $stmt_delete->execute();

        // Check if deletion was successful
        if ($stmt_delete->affected_rows > 0) {
            echo "Faculty member with ID $facultyId deleted successfully.";
        } else {
            echo "Error occurred while deleting the faculty member.";
        }

        $stmt_delete->close();
    } else {
        echo "Faculty member with ID $facultyId does not exist.";
    }

    $stmt_check->close();
} else {
    echo "Faculty ID is not provided.";
}

$con->close();

?>