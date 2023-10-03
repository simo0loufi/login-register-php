<?php session_start();
$user = $_SESSION['firstname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SimoWeb-Home</title>
</head>
<body>
<h1>
  Hello in My website
</h1>
<div class="text-center">
    <p>Not a member? <a href="logout.php">Logout</a></p>
  </div>
<style>
  body{
    font-family: monospace;
  display: flex;
  height: 100vh;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  }
   h1{
    font-size: 60px;
    display: block;
  }
  form{
    height: fit-content;
  }
  p{
    font-size: 25px;
  }
</style>
</body>
</html>