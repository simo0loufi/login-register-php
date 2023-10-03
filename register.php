<?php
include("connectDb.php");

if(isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$sql = "INSERT INTO `users`(firstName, lastName, email, password) VALUES('$firstname','$lastname' ,'$email','$pass')";

  $result = mysqli_query($connect, $sql)
    or die("Could not execute the select query.");

    if ($result) {
      $_SESSION['firstname'] = $firstname;
      header('Location:home.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Login</title>
</head>
<body>
  <form method="post">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" name="firstname" id="form3Example1" class="form-control" />
        <label class="form-label" for="form3Example1">First name</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" name="lastname" id="form3Example2" class="form-control" />
        <label class="form-label" for="form3Example2">Last name</label>
      </div>
    </div>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" name="email" id="form3Example3" class="form-control" />
    <label class="form-label" for="form3Example3">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" name="password" id="form3Example4" class="form-control" />
    <label class="form-label" for="form3Example4">Password</label>
  </div>


  <!-- Submit button -->
  <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

  <!-- login buttons -->
  <div class="text-center">
    <p>You are a member? <a href="login.php">Login</a></p>
  </div>
</form>
<style>
  body{
  display: flex;
  height: 100vh;
  justify-content: center;
  align-items: center;
  }
  form{
    height: fit-content;
  }
</style>
</body>
</html>