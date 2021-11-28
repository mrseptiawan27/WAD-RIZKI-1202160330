<?php
session_start();

if(isset($_SESSION["login"])){
    header("Location: indexlogin.php");
    exit;
}
require 'functions.php';

if(isset($_POST["register"])){

    if(registrasi($_POST) > 0 ){
        echo "<script>
        alert ('Berhasil Daftar')
        </script)";
    }
}

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
    <title>Hello, world!</title>
</head>

<body>
<div class="navbar container">
        <a class="navbar-brand" href="index.php">EAD Travel</a>

        <ul class="nav justify-content-end">
        <li class="nav-item dropdown">
        <a class="navbar-brand" href="register.php">Register</a>
        <a class="navbar-brand" href="login.php">Login</a>
    </div>
    <br>
</div>

<div class="container">
    <form action="" method="post">
        <ul>
        <div class="mb-3">
            <li>
            <lable for="nama"> nama : </lable>
            <input type="text" name="nama" id="nama" class="form-control">
            </li>
        </div>
        <div class="mb-3">
            <li>
            <lable for="email"> Email : </lable>
            <input type="email" name="email" id="email" class="form-control">
            </li>
        </div>
        <div class="mb-3">
            <li>
            <lable for="nohp"> No HP : </lable>
            <input type="number" name="nohp" id="nohp" class="form-control">
            </li>
        </div>
        <div class="mb-3">
            <li>
                <lable for="password"> password : </lable>
                <input type="password" name="password" id="password" class="form-control">
            </li>
        </div>
        <div class="mb-3">
            <li>
                <lable for="password2">konfirmasi password : </lable>
                <input type="password" name="password2" id="password2" class="form-control">
            </li>
        </div>
        <div class="mb-3">
                <button type="submit" name="register"  class="btn btn-success form-control"> Register</button>
        </div>
        </ul>
    </form>
</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
</body>

</html>