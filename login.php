<?php session_start()?>

<?php
include("connectDb.php");

if(isset($_POST['submit'])) {
	$email =  $_POST['email'];
	$pass = $_POST['password'];
  $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
		$result = mysqli_query($connect, $sql)
					or die("Could not execute the select query.");
	
		$row = mysqli_fetch_assoc($result);
		if(is_array($row) && !empty($row)) {
			$_SESSION['firstname'] = $row['firstname'];
			$_SESSION['lastname'] = $row['lastname'];
			$_SESSION['id'] = $row['id'];
			header('Location:home.php');			
		}else
    {
      header('Location:register.php');
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
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" name="email" id="form2Example1" class="form-control" />
    <label class="form-label" for="form2Example1" required>Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" name="password" class="form-control" />
    <label class="form-label" for="form2Example2" required>Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">

  </div>

  <!-- Submit button -->
  <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="register.php">Register</a></p>
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