function deletefacultyval() {
    var facultyid = document.getElementById("facultyid").value.trim(); // Get the value of studentid input field

    if(facultyid === "") {
        alert('Please Enter the Faculty_id:');
        return false;
    } else {
        return true;
    }
 
}