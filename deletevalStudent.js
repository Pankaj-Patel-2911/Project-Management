function deletestudentval() {
    let studentid = document.getElementById("studentid").value.trim(); // Get the value of studentid input field

    if (!studentid) {
        alert('Please Enter the student_id:');
        return false;
    } else {
        return true;
    }
}

