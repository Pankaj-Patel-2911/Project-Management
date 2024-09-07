<?php
// Include database connection
include 'db_conn.php';
// Validate form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $contact = $_POST["contact"];
  $facultyid = $_POST["facultyid"];

  if ($name === "" || $email === "" || $contact === "" || $facultyid === "") {
    echo "All fields are required.";
    exit();
  }

  // Validate email format
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Please enter a valid email address.";
    exit();
  }

  // Validate contact number format
  if (!preg_match("/^[0-9]{10}$/", $contact)) {
    echo "Contact number must be a 10-digit number.";
    exit();
  }

 
 
  // Insert data into the database
  $sql = "INSERT INTO faculty (faculty_name,faculty_email,contact_number,faculty_id ) VALUES (?, ?, ?, ?)";
  $stmt = $con->prepare($sql);
  $stmt->bind_param("ssis", $name, $email, $contact, $facultyid);

  if ($stmt->execute()) {
    echo "Faculty member added successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }

  $stmt->close();
  $con->close();
}

?>