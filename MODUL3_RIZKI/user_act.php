<?php 
include 'koneksi.php';


$judul_buku 			= "";
$penulis_buku			= "";
$tahun_terbit			= "";
$deskripsi 				= "";
$gambar					= "";
$bahasa 				= "";
$tag 					= "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}


if (isset($_POST['simpan']))
$judul_buku 			= $_POST['judul_buku'];
$penulis_buku			= $_POST['penulis_buku'];
$tahun_terbit			= $_POST['tahun_terbit'];
$deskripsi 				= $_POST['deskripsi'];
$gambar					= $_POST['gambar']; 
$bahasa 				= $_POST['bahasa'];
$tag 					= $_POST['tag'];


if ($judul_buku && $judul_buku && $tahun_terbit && $deskripsi && $gambar && $bahasa && $tag ) {
	if ($op != 'edit') { //untuk update
		$sql1       = "update  set buku_table = '$judul_buku',penulis_buku='$penulis_buku',tahun_terbit = '$tahun_terbit',deskripsi='$deskripsi',gambar = '$gambar,'bahasa = '$bahasa',tag = '$tag',where id = 'id'";
		$q1         = mysqli_query($koneksi, $sql1);
		if ($q1) {
			$sukses = "Data berhasil diupdate";
		} else {
			$error  = "Data gagal diupdate";
		}
	} else { //untuk insert
		$sql1   = "insert into buku_table (judul_buku,penulis_buku,tahun_terbit,deskripsi,gambar,bahasa,tag) values ('$judul_buku','$penulis_buku','$tahun_terbit','$deskripsi','$gambar','$bahasa','$tag')";
		$q1     = mysqli_query($koneksi, $sql1);
		if ($q1) {
			$sukses     = "Berhasil memasukkan data baru";
		} else {
			$error      = "Gagal memasukkan data";
		}
	}
} else {
	$error = "Silakan masukkan semua data";
}


$rand = rand();
$ekstensi =  array('PNG','jpg','jpeg','gif');
$filename = $_FILES['gambar']['name'];
$ukuran = $_FILES['gambar']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO user VALUES(NULL,'$','$penulis','$tahun_terbit','$xx')");
		header("location:index.php?alert=berhasil");
	}else{
		header("location:index.php?alert=gagak_ukuran");
	}
}
