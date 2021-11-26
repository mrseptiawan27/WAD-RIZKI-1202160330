<?php 
$host="localhost";
$user="root";
$pass="";
$database="wad-modul3";

$conf = mysqli_connect("localhost","root","",$database);

if ($koneksi){
    $buka=mysqli_select_db ($conf,$database);
    echo "terhubung";
    if (!$buka){
        echo "tidak terhubung";
    }
} else {
    echo "MySql tidak terhubung";
}
