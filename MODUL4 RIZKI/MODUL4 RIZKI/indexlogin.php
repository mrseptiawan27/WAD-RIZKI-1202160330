<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}

require 'functions.php';

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cs.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>Home</title>
</head>

<body>
    <div class="navbar container">
    <a class="navbar-brand" href="#">EAD Travel</a>
    <a href="chart.php" class="text-reset">
    <i class="fas fa-shopping-cart" ></i>

    <ul class="nav justify-content-end">

    <li class="nav-item dropdown">
        
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Menu</a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
    </ul>
    </li>

    <form action="" method="post">
    </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
</body>

</html>