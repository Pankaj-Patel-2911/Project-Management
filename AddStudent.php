<?php
$name = $_POST['name'];
$email = $_POST['email'];
$studentid = $_POST['studentid'];

include 'db_conn.php';

// Check if student ID already exists
$stmt_check = $con->prepare("SELECT student_id FROM student WHERE student_id = ?");
$stmt_check->bind_param("s", $studentid);
$stmt_check->execute();
$stmt_check->store_result();

// If student ID already exists, display an error message
if ($stmt_check->num_rows > 0) {
    echo "Student ID already exists. Please choose a different ID.";
} else {
    // If student ID does not exist, proceed with the insertion
    $stmt_check->close();

    // Insert the new record
    $stmt_insert = $con->prepare("INSERT INTO student (student_id, student_name, student_email) VALUES (?, ?, ?)");
    $stmt_insert->bind_param("sss", $studentid, $name, $email);
    $stmt_insert->execute();
    
    // Check if insertion was successful
    if ($stmt_insert->affected_rows > 0) {
        echo "Successfully added.";
    } else {
        echo "Error occurred while adding the student.";
    }

    $stmt_insert->close();
}

$con->close();
?>

