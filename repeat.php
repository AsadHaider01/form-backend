<?php
include('connect.php');

if(isset($_POST['submit'])){
  extract($_POST);
  $sname = $_POST['sname'];
  $sclass = $_POST['class'];
  $semail = $_POST['email'];
  $spassword = $_POST['password'];

  // $query = "INSERT INTO 'class' ( name,class,email,password)VALUES('$sname','$sclass','$semail','$spassword') ";
  $query = "INSERT INTO `class` (name, class, email, password) VALUES ('$sname', '$sclass', '$semail', '$spassword')";
  mysqli_query($conn,$query);
  unset($_POST['submit']);

}



?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="bg-primary bg-gradient d-flex align-items-center" style="min-height: 100vh;">

  <div class="container">
    <div class="row justify-content-center" style="margin-top:-300px;">
      <div class="col-md-5 col-lg-4">
        <div class="card shadow-lg border-0">
          <div class="bg-dark text-white text-center py-3 rounded-top" >
            <h4><i class="bi bi-person-circle me-2"></i>Student Login</h4>
          </div>
          <div class="card-body bg-light"  >

            <form method="POST" role="form">

              <div class="mb-2">
                <label for="studentName" class="form-label">Student Name</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-person"></i></span>
                  <input type="text" class="form-control" id="studentName" placeholder="Enter your name" name="sname">
                </div>
              </div>

              <div class="mb-2">
                <label for="class" class="form-label">Class</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-mortarboard"></i></span>
                  <input type="text" class="form-control" id="class" placeholder="Enter your class" name="class">
                </div>
              </div>

              <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                  <input type="text email" class="form-control" id="email" placeholder="Enter your email" name="email">
                </div>
              </div>

              <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-lock"></i></span>
                  <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password">
                </div>
              </div>

              <div class="d-grid mt-4">
                <input type="submit" class="btn btn-primary btn-lg" name = "submit" value = "submit">
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>