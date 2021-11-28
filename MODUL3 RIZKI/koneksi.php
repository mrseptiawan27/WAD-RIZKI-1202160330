<?php 
$host="localhost";
$user="root";
$pass="";
$database="modul3";

$koneksi = mysqli_connect("localhost","root","","modul3");

if ($koneksi){
    $buka=mysqli_select_db ($koneksi,$database);
    echo "terhubung";
    if (!$buka){
        echo "tidak terhubung";
    }
} else {
    echo "MySql tidak terhubung";
}
?>