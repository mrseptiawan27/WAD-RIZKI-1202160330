<?php
session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
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
    <link rel="stylesheet" href="css/css.css">
    <title>Profile</title>
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
    </div>   
    <div class="container">
        <form method="post">
            <div class="from group ">
                <label>Email</lable>
                <input type="email" name="email" id="email"  value="<?php echo $_SESSION['$conn, $login']?>"  class="form-control">
            </div>
            <div class="from group">
                <label>nama</lable>
                <input type="text" name="nama" id="nama"  class="form-control">
            </div>
            <div class="from group">
                <label>Nomor HP</lable>
                <input type="text" name="nohp" id="nohp"  class="form-control">
            </div>
            <br>
            <div class="from group">
                <label>Password</lable>
                <input type="password" name="password" id="password"  class="form-control">
            </div>
            <div class="from group">
                <label>Ulangi Password</lable>
                <input type="password" name="password2" id="password2"  class="form-control">
            </div>
        </form>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
</body>

</html>