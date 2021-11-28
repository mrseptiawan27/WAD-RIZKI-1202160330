<?php
$host="localhost";
$user="root";
$pass="";
$database="wad_modul4";

$conn = mysqli_connect("localhost","root","","wad_modul4");


function registrasi ($data) {
global $conn;
    $nama =($data["nama"]);
    $email =($data["email"]);
    $password =($data["password"]);
    $password2 =($data["password2"]);
    $nohp =($data["nohp"]);

    if($password !== $password2) {
        echo "<script>
        alert('ulangi Password')</script>";
    return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user
    VALUES
    ('','$nama','$email','$password','$nohp')
    ");

}
?>