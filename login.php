<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include database connection
include 'db_conn.php';

// Check if user type is provided via POST
if (isset($_POST['userType'])) {
    $usertype = $_POST['userType'];

    // Check user type and perform login logic accordingly
    switch ($usertype) {
        case "admin":
            loginUser("admin_email", "admin");
            break;
        case "faculty":
            loginUser("faculty_email", "faculty");
            break;
        case "student":
            loginUser("student_email", "student");
            break;
        default:
            echo "<h2>Invalid user type</h2>";
            break;
    }
} else {
    echo "<h2>User type is required</h2>";
}

// Function to handle user login
function loginUser($emailColumn, $userType)
{
    // Check if email and password are provided via POST
    if (isset($_POST['email']) && isset($_POST['password'])) {
        // Sanitize user inputs
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Prepare and execute SQL statement using prepared statement
        global $con;
        $stmt = $con->prepare("SELECT * FROM $userType WHERE $emailColumn=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if user with provided email exists
        if ($result->num_rows > 0) {
            $userData = $result->fetch_assoc();
            // Verify password
            if ($userData['password'] === $password) {
                // Password matches, redirect to respective dashboard
                header("Location: {$userType}dashboard.php");
                exit(); // Ensure script stops after redirection
            } else {
                // Invalid password
                echo "<h2>Invalid Email or Password</h2>";
            }
        } else {
            // User not found
            echo "<h2>Invalid Email or Password</h2>";
        }
    } else {
        // Handle the case when email or password is not provided
        echo "<h2>Email and Password are required</h2>";
    }
}
?>