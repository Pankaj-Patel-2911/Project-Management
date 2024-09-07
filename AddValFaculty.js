function facultyVal() {
    // Get form data
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const facultyid = document.getElementById("facultyid").value.trim();
  
    // Validate form data
    if (name === "" || email === "" || facultyid === "") {
      alert("All fields are required.");
      return false;
    }
  
    // Validate email format
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email.match(emailRegex)) {
      alert("Please enter a valid email address.");
      return false;
    }
  
    // Validate faculty ID format
    const facultyidRegex = /^[A-Z]{3}\d{4}$/;
    if (!facultyid.match(facultyidRegex)) {
      alert("Faculty ID must be in the format XXXXX, where X is an uppercase letter and XXXXX is a 4-digit number.");
      return false;
    }
  
    // If all validations pass, submit the form
    return true;
  }