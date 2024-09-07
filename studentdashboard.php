<!DOCTYPE html>
<html lang="en">

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
            <a href="studentdashboard.php" class="sidebar-link">
              <i class="fa-solid fa-list pe-2"></i>
               Student Dashboard
            </a>
          </li>
          <!--<li class="sidebar-item">
            <a href="#" class="sidebar-link" data-bs-toggle="modal" data-bs-target="#add-student-modal">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-plus"
                viewBox="0 0 16 16">
                <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5z" />
                <path
                  d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1" />
              </svg>
              Add Student
            </a>
          </li>-->
          <!--<li class="sidebar-item">
            <a href="#" class="sidebar-link" data-bs-toggle="modal" data-bs-target="#add-faculty-modal">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-plus"
                viewBox="0 0 16 16">
                <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5z" />
                <path
                  d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1" />
              </svg>
              View Faculty
            </a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link" data-bs-toggle="modal" data-bs-target="#remove-student-modal">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-x"
                viewBox="0 0 16 16">
                <path
                  d="M6.146 6.146a.5.5 0 0 1 .708 0L8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 0 1 0-.708" />
                <path
                  d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1" />
              </svg>
              Remove Students
            </a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link" data-bs-toggle="modal" data-bs-target="#remove-faculty-modal">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-x"
                viewBox="0 0 16 16">
                <path
                  d="M6.146 6.146a.5.5 0 0 1 .708 0L8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 0 1 0-.708" />
                <path
                  d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1" />
              </svg>
              Remove Faculties
            </a>
          </li>-->
          <li class="sidebar-item">
            <a href="studentViewFaculty.php" class="sidebar-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-view-list"
                viewBox="0 0 16 16">
                <path
                  d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2m0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14" />
              </svg>
              View Faculties
            </a>
          </li>
          <!--<li class="sidebar-item">
            <a href="./view_students.html" class="sidebar-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-view-list"
                viewBox="0 0 16 16">
                <path
                  d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2m0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14" />
              </svg>
              View Students
            </a>
          </li>-->
          <li class="sidebar-item">
            <a href="studentViewProject.php" class="sidebar-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-view-list" viewBox="0 0 16 16">
                <path d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2m0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14"/>
              </svg>
              View Projects
            </a>
          </li>
          <li class="sidebar-item">
            <a href="./view_project.html" class="sidebar-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-view-list"
                viewBox="0 0 16 16">
                <path
                  d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2m0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14" />
              </svg>
               Project Update
            </a>
          </li>
        </ul>
      </div>
    </aside>
    <div class="main">
      <nav class="navbar navbar-expand px-3 border-bottom">
        <button class="btn" id="sidebar-toggle" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse navbar">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                <img src="logo1.png" class="avatar image-fluid rounded" alt="">
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <a href="#" class="dropdown-item">Profile</a>
                <a href="logout.php" class="dropdown-item">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <main class="content px-3 py-2">
        <!-- cards for showing content -->
        <div class="container-fluid">
          <div class="mb-3">
            <h3>Student Dashboard!</h3>
          </div>
          <div class="row">
            <!-- number of faculties card  -->
            <div class="col-12 col-md-6 d-flex">
              <div class="card flex-fill border-0 illustration">
                <div class="card-body p-0 d-flex flex-fill">
                  <div class="row g-0 w-100">
                    <div class="col-6">
                      <div class="p-3 m-1">
                      <?php
include 'db_conn.php';

// Query to fetch the count of faculties
$query = "SELECT COUNT(*) AS faculty_count FROM faculty";

// Execute the query
$result = mysqli_query($con, $query);

// Check if query execution was successful
if ($result) {
    // Fetch the result as an associative array
    $row = mysqli_fetch_assoc($result);
    $faculty_count = $row['faculty_count'];

    // Close the result set
    mysqli_free_result($result);
} else {
    // If query execution failed, set faculty count to 0
    $faculty_count = 0;
}

// Close database connection
mysqli_close($con);
?>

<!-- HTML to display the faculty count -->
<h4>Number of Faculties</h4>
<h2><?php echo $faculty_count; ?></h2>

                      </div>
                    </div>
                    <div class="col-6 align-self-end text-end">
                      <img src="../../images/professor.png" class="img-fluid illustration-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- number of students card  -->
            <div class="col-12 col-md-6 d-flex">
              <div class="card flex-fill border-0 illustration">
                <div class="card-body p-0 d-flex flex-fill">
                  <div class="row g-0 w-100">
                    <div class="col-6">
                      <div class="p-3 m-1">
                        <h4>Number of Faculties Available</h4>
                        <h2>50</h2>
                      </div>
                    </div>
                    <div class="col-6 align-self-end text-end">
                      <img src="../../images/student.png" class="img-fluid illustration-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- on going projects card  -->
            <div class="col-12 col-md-6 d-flex">
              <div class="card flex-fill border-0 illustration">
                <div class="card-body p-0 d-flex flex-fill">
                  <div class="row g-0 w-100">
                    <div class="col-6">
                      <div class="p-3 m-1">
                      <?php
include 'db_conn.php';

// Query to fetch the count of projects
$query = "SELECT COUNT(*) AS project_count FROM project";

// Execute the query
$result = mysqli_query($con, $query);

// Check if query execution was successful
if ($result) {
    // Fetch the result as an associative array
    $row = mysqli_fetch_assoc($result);
    $project_count = $row['project_count'];

    // Close the result set
    mysqli_free_result($result);
} else {
    // If query execution failed, set project count to 0
    $project_count = 0;
}

// Close database connection
mysqli_close($con);
?>

<!-- HTML to display the project count -->
<h4>Total Number of Projects</h4>
<h2><?php echo $project_count; ?></h2>

                      </div>
                    </div>
                    <div class="col-6 align-self-end text-end">
                      <img src="../../images/on_going.png" class="img-fluid illustration-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- completed projects card  -->
            <div class="col-12 col-md-6 d-flex">
              <div class="card flex-fill border-0 illustration">
                <div class="card-body p-0 d-flex flex-fill">
                  <div class="row g-0 w-100">
                    <div class="col-6">
                      <div class="p-3 m-1">
                      <?php
include 'db_conn.php';

// Query to fetch the count of projects
$query = "SELECT COUNT(*) AS unassigned_projects_count
FROM project
WHERE project_id NOT IN (SELECT project_id FROM student);
";

// Execute the query
$result = mysqli_query($con, $query);

// Check if query execution was successful
if ($result) {
    // Fetch the result as an associative array
    $row = mysqli_fetch_assoc($result);
    $project_count = $row['unassigned_projects_count'];

    // Close the result set
    mysqli_free_result($result);
} else {
    // If query execution failed, set project count to 0
    $project_count = 0;
}

// Close database connection
mysqli_close($con);
?>

<!-- HTML to display the project count -->
<h4>Projects Available</h4>
<h2><?php echo $project_count; ?></h2>

                      </div>
                    </div>
                    <div class="col-6 align-self-end text-end">
                      <img src="../../images/completed.png" class="img-fluid illustration-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        
    </div>
  </div>
  </div>
  </div>
  <!-- table for projects -->
  <!-- <div class="card-border-0">
    <div class="card-header">
      <h3 class="class-title" style="margin-left: 40% ; padding: 20px;">
        Projects List
      </h3>
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div> -->
  </main>
  </div>
  </div>

  <!-- popup for adding student-->

  <!-- <div class="modal fade" id="add-student-modal" tabindex="-1" aria-labelledby="addStudentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addStudentModalLabel">Add Student</h5>
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
              <label for="exampleFormControlInput3" class="id-label">Student ID</label>
              <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Student ID">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Add Student</button>
        </div>
      </div>
    </div>
  </div> -->


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
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="uploadExcelTab" data-bs-toggle="tab" href="#uploadExcel" role="tab"
                            aria-controls="uploadExcel" aria-selected="false">Upload Excel</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content mt-2">
                    <!-- Add One Tab -->
                    <div class="tab-pane fade show active" id="addOne" role="tabpanel" aria-labelledby="addOneTab">
                        <form>
                            <!-- Your form elements for adding one student go here -->
                            <!-- For example -->
                              <div class="mb-3">
                                <label for="exampleFormControlInput1" class="name-label">Name</label>
                                <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Name">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput2" class="email-label">Email Address</label>
                                <input type="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email ID">
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlInput3" class="id-label">Student ID</label>
                                <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Student ID">
                              </div>
                          </div>
                            <!-- ... Other form fields ... -->
                        </form>
                    </div>

                    <!-- Upload Excel Tab -->
                    <div class="tab-pane fade" id="uploadExcel" role="tabpanel" aria-labelledby="uploadExcelTab">
                        <form>
                            <!-- Your form elements for uploading Excel go here -->
                            <!-- For example -->
                            <div class="mb-3">
                                <label for="excelFile" class="form-label">Upload Excel File</label>
                                <input type="file" class="form-control" id="excelFile" accept=".xlsx, .xls">
                            </div>
                            <!-- ... Other form fields ... -->
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add Student</button>
            </div>
            </div>
        </div>
    </div>
</div>


  <!-- pop-up for adding faculty -->

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
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="uploadExcelFacultyTab" data-bs-toggle="tab"
                            href="#uploadExcelFaculty" role="tab" aria-controls="uploadExcelFaculty"
                            aria-selected="false">Upload Excel</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content mt-2">
                    <!-- Add One Tab -->
                    <div class="tab-pane fade show active" id="addOneFaculty" role="tabpanel"
                        aria-labelledby="addOneFacultyTab">
                        <form>
                            <!-- Your form elements for adding one faculty go here -->
                            <!-- For example -->
                            <div class="mb-3">
                                <label for="facultyName" class="name-label">Name</label>
                                <input type="text" class="form-control form-control-lg bg-light fs-6"
                                    placeholder="Faculty Name">
                            </div>
                            <div class="mb-3">
                                <label for="facultyEmail" class="email-label">Email Address</label>
                                <input type="email" class="form-control form-control-lg bg-light fs-6"
                                    placeholder="Email ID">
                            </div>
                            <div class="mb-3">
                                <label for="facultyID" class="id-label">Faculty ID</label>
                                <input type="text" class="form-control form-control-lg bg-light fs-6"
                                    placeholder="Faculty ID">
                            </div>
                        </form>
                    </div>

                    <!-- Upload Excel Tab -->
                    <div class="tab-pane fade" id="uploadExcelFaculty" role="tabpanel"
                        aria-labelledby="uploadExcelFacultyTab">
                        <form>
                            <!-- Your form elements for uploading Excel go here -->
                            <!-- For example -->
                            <div class="mb-3">
                                <label for="excelFileFaculty" class="form-label">Upload Excel File</label>
                                <input type="file" class="form-control" id="excelFileFaculty" accept=".xlsx, .xls">
                            </div>
                            <!-- ... Other form fields ... -->
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add Faculty</button>
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
          <form id="removeStudentForm">
            <div class="mb-3">
              <label for="studentId" class="form-label">Student ID</label>
              <input type="text" class="form-control" placeholder="Enter student ID">
            </div>
            <button type="button" class="btn btn-primary" onclick="addStudent()">Remove Student</button>

            <!-- Display added students -->
            <div class="mt-3">
              <p><strong>Removed Students:</strong></p>
              <ul id="removedStudentsList"></ul>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="submitAssignment()">Remove Students</button>
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
          <form id="removeStudentForm">
            <div class="mb-3">
              <label for="studentId" class="form-label">Faculty ID</label>
              <input type="text" class="form-control" placeholder="Enter Faculty ID">
            </div>
            <button type="button" class="btn btn-primary" onclick="addStudent()">Remove Faculty</button>

            <!-- Display added students -->
            <div class="mt-3">
              <p><strong>Removed Faculties:</strong></p>
              <ul id="removedStudentsList"></ul>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="submitAssignment()">Remove Faculties</button>
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
          <form id="assignProjectForm">
            <div class="mb-3">
              <label for="projectName" class="form-label">Project Name</label>
              <input type="text" class="form-control" id="projectName" placeholder="Enter project name">
            </div>
            <div class="mb-3">
              <label for="studentId" class="form-label">Student ID</label>
              <input type="text" class="form-control" id="studentId" placeholder="Enter student ID">
            </div>
            <button type="button" class="btn btn-primary" onclick="addStudent()">Add Student</button>

            <!-- Display added students -->
            <div class="mt-3">
              <p><strong>Added Students:</strong></p>
              <ul id="addedStudentsList"></ul>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary"  data-bs-dismiss="modal" onclick="submitAssignment()">Assign Project</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../JS/script.js"></script>
</body>

</html>