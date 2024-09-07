<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
    <title>Login Page</title>
    <script defer src="login.js"></script>
</head>
<body>
    <!-- main container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="d-flex row border rounded-5 p-3 shadow box-area" style="width: 700px;">
            <div class="header-text mb-4 justify-content-center align-items-center d-flex" >
                <h3>Login</h3>
            </div>
            <form action="login.php"  method="Post">
           <!-- <div class="input-group d-flex justify-content-between mb-3" id="form">
                <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Name" id="name" name="name"style="margin-right: 8px;">
              
            </div>-->
            <div class="input-group mb-3">
                <input type="email"  name = "email" class="form-control form-control-lg bg-light fs-6" placeholder="Email ID" id="email" >
            </div>
            <!--<div class="input-group mb-3" id="studentIdGroup" style="display: none;">
                <input type="number"  name = "studentid" class="form-control form-control-lg bg-light fs-6" placeholder="Student ID" id="studentId"  style="width: 100%;">
            </div>-->
            <div class="input-group mb-3">
                <input type="password"  name = "password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" id="password">
            </div>
            <div class="input-group d-flex justify-content-between mb-3">
                <div class="form-check">
                    
                    <input class="form-check-input" type="radio" value="admin" name="userType" id="adminRadio" checked>
                    <label class="form-check-label" for="adminRadio">
                      Admin
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio"  value="faculty" name="userType" id="facultyRadio">
                    <label class="form-check-label" for="facultyRadio">
                      Faculty
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="student" name="userType" id="studentRadio">
                    <label class="form-check-label" for="studentRadio">
                      Student
                    </label>
                  </div>
            </div>
            <div class="input-group mb-3">
                <input class="form-control form-control-lg bg-light fs-6" type="submit" value="Login">
            </div>
        </form>
        </div>
    </div>

    <script>
function validate(){
        const name = document.getElementById('name');
        const email = document.getElementById('email');
        const studentId = document.getElementById('studentId');
        const password = document.getElementById('password');

        form.addEventListener('submit', e =>{
            e.preventDefault();

            validateInputs();

        });

        const setError = (element,message) =>{
            const inputControl = element.parentElement;
            const errorDisplay = inputControl.querySelector('.error');

            errorDisplay.innerText = message;
            inputControl.classList.add('error');
            inputControl.classList.remove('success');
        }

        const setSuccess = element =>{
            const inputControl = element.parentElement;
            const errorDisplay = inputControl.querySelector('.error');

            errorDisplay.innerText = '';
            inputControl.classList.add('success');
            inputControl.classList.remove('error');

        };

        const isValidEmail = email => {
            const re =  /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());


        const validateInputs = () => {
            const nameValue = name.value.trim();
            const emailValue = email.value.trim();
            const studentIdValue = studentId.value.trim();
            const passwordValue = password.value.trim();

            if(nameValue === ''){
                setError(name, 'Name is required');
            } else{
                setSuccess(name);

            }

            if (emailValue === ''){
                setError(email, 'email is required');
            } else if(isValidEmail(emailValue)){
                setError(email, 'Provide a valid email address');
            } else{
                setSuccess(email);
            }

            if(studentIdValue ===''){
                setError(studentId, 'studentId is required');
            } else if(studentIdValue.length > 9){
                setError(studentId,'StudentId should be of 9 digits');
            } else{
                setSuccess(studentId);
            }

            if(passwordValue === ''){
                setError(password,'Password is required');
            } else if(passwordValue.length < 8){
                setError(password, 'Password must be atleast 8 character.');
            } else{
                setSuccess(password);
            }
    
            }

        };
    }

        // Add event listeners to radio buttons to toggle Student ID input visibility
        document.getElementById('adminRadio').addEventListener('change', function () {
            document.getElementById('studentIdGroup').style.display = 'none';
        });

        document.getElementById('facultyRadio').addEventListener('change', function () {
            document.getElementById('studentIdGroup').style.display = 'none';
        });

        document.getElementById('studentRadio').addEventListener('change', function () {
            document.getElementById('studentIdGroup').style.display = 'block';
        });

       
       
          

    </script>
</body>
</html>