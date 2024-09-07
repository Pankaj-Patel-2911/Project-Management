function Addproject() {
    // Get the values of project ID, project name, and description fields
    var projectId = document.getElementById("projectid").value.trim();
    var projectName = document.getElementById("projectName").value.trim();
    var description = document.getElementById("description").value.trim();

    // Check if project ID is empty
    if (projectId === "") {
        alert("Please enter the project ID.");
        return false;
    }

    // Check if project name is empty
    if (projectName === "") {
        alert("Please enter the project name.");
        return false;
    }

    // Check if description is empty
    if (description === "") {
        alert("Please enter the project description.");
        return false;
    }

    // All fields are filled, proceed with form submission
    return true;
}