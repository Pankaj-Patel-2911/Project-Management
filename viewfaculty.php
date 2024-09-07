<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="dashboard.css">
  <title>Project Management Portal</title>
</head>
<body>
  <div class="container">
    <aside id="sidebar">
      <!-- content for sidebar -->
      <div class="h-100">
        <div class="user-name">
          <a href="#">Username</a>
        </div>
        <ul class="sidebar-nav">
          <li class="sidebar-item">
            <a href="admindashboard.php" class="sidebar-link">
              <i class="fa-solid fa-list pe-2"></i>
              Dashboard
            </a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link" data-bs-toggle="modal" data-bs-target="#add-student-modal">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16">
                <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5z"/>
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1"/>
              </svg>
              Add Student
            </a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link" data-bs-toggle="modal" data-bs-target="#add-faculty-modal">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16">
                <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5z"/>
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1"/>
              </svg>
              Add Faculty
            </a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link" data-bs-toggle="modal" data-bs-target="#remove-student-modal">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-x" viewBox="0 0 16 16">
                <path d="M6.146 6.146a.5.5 0 0 1 .708 0L8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 0 1 0-.708"/>
                <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1"/>
              </svg>
              Remove Students
            </a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link" data-bs-toggle="modal" data-bs-target="#remove-faculty-modal">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-x" viewBox="0 0 16 16">
                <path d="M6.146 6.146a.5.5 0 0 1 .708 0L8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 0 1 0-.708"/>
                <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1"/>
              </svg>
              Remove Faculties
            </a>
          </li>
          <li class="sidebar-item">
            <a href="viewfaculty.php" class="sidebar-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-view-list" viewBox="0 0 16 16">
                <path d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2m0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14"/>
              </svg>
              View Faculties
            </a>
          </li>
          <li class="sidebar-item">
            <a href="viewstudent.php" class="sidebar-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-view-list" viewBox="0 0 16 16">
                <path d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2m0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14"/>
              </svg>
              View Students
            </a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link" data-bs-toggle="modal" data-bs-target="#assign-project-modal">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-app" viewBox="0 0 16 16">
                <path d="M11 2a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4z"/>
              </svg>
              Assign Project
            </a>
          </li>
          <li class="sidebar-item">
            <a href="viewproject.php" class="sidebar-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-view-list" viewBox="0 0 16 16">
                <path d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2m0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14"/>
              </svg>
              View Projects
            </a>
          </li>
        </ul>
      </div>
    </aside>
    <?php
// Include database connection
include 'db_conn.php';

// Query to fetch data from the faculty table
$query = "SELECT faculty_id, faculty_name, faculty_email FROM faculty";

// Execute the query
$result = mysqli_query($con, $query);

// Check if query execution was successful
if ($result) {
    ?>
    <div class="main">
        <nav class="navbar navbar-expand px-3 border-bottom">
            <!-- Navbar content -->
        </nav>
        <main class="content px-3 py-2">
            <div class="card-border-0">
                <div class="card-header">
                    <h3 class="class-title" style="margin-left: 40% ; padding: 20px;">
                        List of Faculties
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Faculty ID</th>
                                <th scope="col">Faculty Name</th>
                                <th scope="col">Faculty Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Counter for numbering rows
                            $count = 1;

                            // Loop through each row in the result set
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $count++; ?></th>
                                    <td><?php echo $row['faculty_id']; ?></td>
                                    <td><?php echo $row['faculty_name']; ?></td>
                                    <td><?php echo $row['faculty_email']; ?></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
    <?php
} else {
    // Query execution failed
    echo "Error: " . mysqli_error($con);
}

// Close database connection
mysqli_close($con);
?>

<div class="modal fade" id="add-student-modal" tabindex="-1" aria-labelledby="addStudentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addStudentModalLabel">Add Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="myTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="addOneTab" data-bs-toggle="tab" href="#addOne" role="tab"
                            aria-controls="addOne" aria-selected="true">Add One</a>
                    </li>
                   <!-- <li class="nav-item" role="presentation">
                        <a class="nav-link" id="uploadExcelTab" data-bs-toggle="tab" href="#uploadExcel" role="tab"
                            aria-controls="uploadExcel" aria-selected="false">Upload Excel</a>
                    </li> -->
                </ul>

                <!-- Tab panes -->
                <div class="tab-content mt-2">
                    <!-- Add One Tab -->
                    <div class="tab-pane fade show active" id="addOne" role="tabpanel" aria-labelledby="addOneTab">
                        <form action="AddStudent.php" onsubmit=" return studentVal()" method="POST" >
                            <!-- Your form elements for adding one student go here -->
                            <!-- For example -->
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="name-label">Name</label>
                                <input type="text"  id="name" name="name" class="form-control form-control-lg bg-light fs-6" placeholder="Name">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput2" class="email-label">Email Address</label>
                                <input type="email" id="email" name="email"class="form-control form-control-lg bg-light fs-6" placeholder="Email ID">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput3" class="id-label">Student ID</label>
                                <input type="text"  id="studentid" name="studentid" class="form-control form-control-lg bg-light fs-6" placeholder="Student ID">
                              </div>
                              <div class="modal-footer">
                             
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit"  class="btn btn-primary">ADD STUDENT</button>
                            </form>
                           </div>
                          </div>
                            <!-- ... Other form fields ... -->
                       
                    </div>

                    <!-- Upload Excel Tab 
                    <div class="tab-pane fade" id="uploadExcel" role="tabpanel" aria-labelledby="uploadExcelTab">
                        <form>
                             Your form elements for uploading Excel go here -->
                            <!-- For example -->
                            <!--<div class="mb-3">
                                <label for="excelFile" class="form-label">Upload Excel File</label>
                                <input type="file" class="form-control" id="excelFile" accept=".xlsx, .xls">
                            </div>
                             ... Other form fields ... -->
                        </form>
                    </div>
                </div>
               <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add Student</button>
            </div>--> 
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="add-faculty-modal" tabindex="-1" aria-labelledby="addFacultyModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFacultyModalLabel">Add Faculty</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="facultyTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="addOneFacultyTab" data-bs-toggle="tab" href="#addOneFaculty"
                            role="tab" aria-controls="addOneFaculty" aria-selected="true">Add One</a>
                    </li>
                   <!-- <li class="nav-item" role="presentation">
                        <a class="nav-link" id="uploadExcelFacultyTab" data-bs-toggle="tab"
                            href="#uploadExcelFaculty" role="tab" aria-controls="uploadExcelFaculty"
                            aria-selected="false">Upload Excel</a>
                    </li>-->
                </ul>

                <!-- Tab panes -->
                <div class="tab-content mt-2">
                    <!-- Add One Tab -->
                    <div class="tab-pane fade show active" id="addOneFaculty" role="tabpanel"
                        aria-labelledby="addOneFacultyTab">
                        <form action="AddFaculty.php" method="POST" onsubmit="return facultyVal()">
                            <!-- Your form elements for adding one faculty go here -->
                            <!-- For example -->
                            <div class="mb-3">
                                <label for="facultyName" class="name-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control form-control-lg bg-light fs-6"
                                    placeholder="Faculty Name">
                            </div>
                            <div class="mb-3">
                                <label for="facultyEmail"  class="email-label">Email Address</label>
                                <input type="email" name="email" id="email" class="form-control form-control-lg bg-light fs-6"
                                    placeholder="Email ID">
                            </div>
                            <div class="mb-3">
                                <label for="facultyID" class="id-label">Faculty ID</label>
                                <input type="text" name="facultyid" id="facultyid" class="form-control form-control-lg bg-light fs-6"
                                    placeholder="Faculty ID">
                            </div>
                        
                    </div>

                    <!-- Upload Excel Tab -->
                   <!-- <div class="tab-pane fade" id="uploadExcelFaculty" role="tabpanel"
                        aria-labelledby="uploadExcelFacultyTab">
                        <form>
                             Your form elements for uploading Excel go here -->
                            <!-- For example -->
                           <!-- <div class="mb-3">
                                <label for="excelFileFaculty" class="form-label">Upload Excel File</label>
                                <input type="file" class="form-control" id="excelFileFaculty" accept=".xlsx, .xls">
                            </div>
                             ... Other form fields ... -->
                             <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add Faculty</button>
                </form>
            </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>





  <!-- <div class="modal fade" id="add-faculty-modal" tabindex="-1" aria-labelledby="addFacultyModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addFacultyModalLabel">Add Faculty</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Your form goes here -->
          <!-- <form>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="name-label">Name</label>
              <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Name">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput2" class="email-label">Email Address</label>
              <input type="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email ID">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput3" class="id-label">Faculty ID</label>
              <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Faculty ID">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Add Faculty</button>
        </div>
      </div>
    </div>
  </div> --> 

  <!-- pop-up for removing student -->
  <div class="modal fade" id="remove-student-modal" tabindex="-1" aria-labelledby="removeStudentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="removeStudentModalLabel">Remove Students</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Your form for assigning a project goes here -->
          <form id="removeStudentForm" method="POST" onsubmit="return deletestudentval()" action="DeleteStudent.php">
            <div class="mb-3">
              <label for="studentId" class="form-label">Student ID</label>
              <input type="text"  id= "studentid" name="studentid"class="form-control" placeholder="Enter student ID">
            </div>
            
            <!-- Display added students -->
           <!-- <div class="mt-3">
              <p><strong>Removed Students:</strong></p>
              <ul id="removedStudentsList"></ul>
            </div>-->
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" >Remove Students</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- pop-up for removing faculty -->

  <div class="modal fade" id="remove-faculty-modal" tabindex="-1" aria-labelledby="removeFacultyModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="removeFacultyModalLabel">Remove Faculties</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Your form for assigning a project goes here -->
          <form id="removeStudentForm" action="DeleteFaculty.php" onsubmit="return deletefacultyval()">
            <div class="mb-3">
              <label for="studentId" class="form-label">Faculty ID</label>
              <input type="text" id="facultyid" name="facultyid" class="form-control" placeholder="Enter Faculty ID">
            </div>
        

            <!-- Display added students -->
            <!--<div class="mt-3">
              <p><strong>Removed Faculties:</strong></p>
              <ul id="removedStudentsList"></ul>
            </div>-->
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" >Remove Faculties</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Pop up for assigning Project -->
  <div class="modal fade" id="assign-project-modal" tabindex="-1" aria-labelledby="assignProjectModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="assignProjectModalLabel">Assign Project</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Your form for assigning a project goes here -->
          <form id="assignProjectForm" action="AssignProject.php"  method="POST"onsubmit="return  Addprojectval()">
           <!-- <div class="mb-3">
              <label for="projectName" class="form-label">Project Name</label>
              <input type="text" class="form-control" id="projectName"  name="projectName" placeholder="Enter project name">
            </div> -->
            <div class="mb-3">
              <label for="projectName" class="form-label">Project Id</label>
              <input type="text" class="form-control" id="projectid" name="projectid" placeholder="Enter project name">
            </div>
            <div class="mb-3">
              <label for="studentId" class="form-label">Student ID</label>
              <input type="text" class="form-control" id="studentId" name="studentid" placeholder="Enter student ID">
            </div>
           

            
            
       
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary"  data-bs-dismiss="modal" >Assign Project</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../JS/script.js"></script>
  <script src="AddValStudent.js"></script>
  <script src="AddValFaculty.js"></script>
  
  
  
</body>


</html>