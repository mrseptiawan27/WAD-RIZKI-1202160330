<?php
session_start();

if ( isset($_COOKIE['login'])){
    if($_COOKIE['login'] == 'true') {
        $_SESSION ['login'] = true;
    }
}

if(isset($_SESSION["login"])){
    header("Location: indexlogin.php");
    exit;
}

require 'functions.php';

if(isset($_POST["login"])){

    $email      =$_POST["email"];
    $password   =$_POST["password"];

    $result = mysqli_query ($conn,"SELECT * FROM user WHERE email='$email'");

    if(mysqli_num_rows($result) === 1 )   {

        $row = mysqli_fetch_assoc($result);

        if (password_verify($password,$row["password"])) {

            $_SESSION["login"] = true;
            if (isset($_POST ['remember'])){
                setcookie('login', 'true', time() + 60);
            }
            header ("Location: indexlogin.php");
            exit;
        }
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
    <title>Login</title>
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

<?php
if(isset($error)): ?>
<p  style="color: red; font-style: italic;"> username atau password salah </p>
<?php endif; ?>


<div class="container">
    <form action="" method="post">
        <ul>
            <div class="mb-3">
                <li>
                <lable for="email"> Email : </lable>
                <input type="email" name="email" id="email" class="form-control">
                </li>
            </div>
            <div class="mb-4">
                <li>
                <lable for="password"> Password : </lable>
                <input type="password" name="password" id="password" class="form-control">
                </li>
            </div>
            <div class="mb-3 form-check">
                <lable for="remember"> Ingat Saya </lable>
                <input type="checkbox" name="remember" id="remember" class="form-check-input" >    
            </div>
            <div class="mb-4">
                <button type="submit" name="login" class="btn btn-primary form-control"> Login</button>
            </div>
            <label for="daftardisini" class="daftarhere text-dark">Belum punya akun? daftar </label>
            <a href="register.php">Di Sini</a>
        </ul>
    </form>
</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
</body>

</html>