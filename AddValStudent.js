function studentVal() {
    // Get input values
    var name = document.getElementById("name").value.trim();
    var email = document.getElementById("email").value.trim();
    var studentID = document.getElementById("studentid").value.trim();
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    // Check if all fields are empty
    if (name === "" || email === "" || studentID === "") {
        alert("All fields are mandatory to fill");
        return false; // Exit function if any field is empty
    }

    // Validate name
    else if (name === "") {
        alert("Please enter your name");
        return false;
    }

    // Validate email
     else if (email === "") {
        alert("Please enter your email address");
        return false;
    }

    // Validate email format

    else if (!email.match(emailRegex)) {
        alert("Please enter a valid email address");
        return false;
    }

    // Validate student ID
    else if (studentID === "") {
        alert("Please enter your student ID");
        return false;
    }

    // All fields are valid
    return true;
}



