function Addprojectval() {
    // Get input values
    
    var projectid = document.getElementById("projectid").value.trim();
    var studentId = document.getElementById("studentId").value.trim();

    // Check if any field is empty
    if ( projectid === "" || studentId === "") {
        alert("Please fill in all fields.");
        return false;
    } else {
        return true;
    }
}


