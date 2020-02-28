<?php require_once '../includes/db.php'; global $conn; ?>
<?php 
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $login = mysqli_query($conn, "SELECT * FROM `users` WHERE username = '".$username."' AND pass = '".$pass."';");
    if (mysqli_num_rows($login) == 1) {
      session_start();
      $_SESSION['username'] = $username;
      $_SESSION['successMessage'] = "Login SuccessFul!";
      header('Location: allposts.php');
    }else{
      $errorMessage = "Login Failed!";
    }

  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <?php 
            if (isset($_SESSION['successMessage'])) {
              echo "<div class='alert alert-success'>".$_SESSION['successMessage']."</div>";
            }elseif (isset($errorMessage)) {
              echo "<div class='alert alert-danger'>".$errorMessage."</div>";
            }
        ?>
        <form action="index.php" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputEmail" name="username" class="form-control" placeholder="User Name" required="required" autofocus="autofocus">
              <label for="inputEmail">User Name</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <button name="submit" type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="#">Register an Account</a>
          <a class="d-block small" href="#">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
