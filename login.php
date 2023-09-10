<?php

session_start();

$username = isset($_GET["email"]) ? $_GET["email"] : "";
$password = isset($_GET["password"]) ? $_GET["password"] : "";


if($password === "password") {
    $_SESSION["username"] = $username;

    header('Location: ./dashboard.php');
    die;
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">

    <!-- Libraries -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Custom CSS -->

    <link rel="stylesheet" href="css/style.css">
    <title>PHP - Password Generator</title>
</head>

<body>

<div class="container p-5">

  <form action="login.php" class="card" method="GET">
    <div class="card-body">
      <div class="mb-3">
        <label>Email</label>
        <input type="text" class="form-control" name="email">
      </div>
      <div class="mb-3">
        <label>Password</label>
        <input type="password" class="form-control" name="password">
      </div>

      <button class="btn btn-primary" type="submit">Accedi</button>
    </div>
  </form>
</div>
</body>

</html>