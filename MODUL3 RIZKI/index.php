<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>

<head>
	<title>hasil</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
	<section id="Booking">
		<section id="nav">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<<img src="image/logo.png" width="130px">
					<div class="container-fluid">
						<div class="collapse navbar-collapse" id="navbarNav">
							<div class="card-body" style="text-align: right; ">
								<a class="btn btn-primary" href="addbuku.php">Add Book</a>
							</div>
						</div>
					</div>
			</nav>
		</section>
		<div class="container">
			<h2 style="text-align: center;">Daftar Buku</h2>
			<br>
			<?php 
		if(isset($_GET['alert'])){
			if($_GET['alert']=='gagal_ekstensi'){
				?>
			<div class="alert alert-warning alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
				Ekstensi Tidak Diperbolehkan
			</div>
			<?php
			}elseif($_GET['alert']=="gagal_ukuran"){
				?>
			<div class="alert alert-warning alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check"></i> Peringatan !</h4>
				Ukuran File terlalu Besar
			</div>
			<?php
			}elseif($_GET['alert']=="berhasil"){
				?>
			<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check"></i> Success</h4>
				Berhasil Disimpan
			</div>
			<?php
			}
		}
		?>
			<br>
			<a href="addbuku.php" class="btn btn-info btn-sm">Tambah Data</a>
			<br>
			<br>
			<table class="table table-bordered">
				<tr>
					<th width="20%">Judul Buku</th>
					<th width="20%">Judul Buku</th>
					<th width="40%">Penulis buku</th>
					<th width="20%">Tahun Terbit</th>
					<th width="20%">Deskripsi</th>
					<th width="40%">tag</th>
					<th width="20%">Foto</th>
				</tr>
				<?php 
			$data = mysqli_query($koneksi,"select * from user");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $d['id_buku']; ?></td>
					<td><?php echo $d['judul_buku']; ?></td>
					<td><?php echo $d['penulis_buku']; ?></td>
					<td><?php echo $d['tahun_terbit']; ?></td>
					<td><?php echo $d['deskripsi']; ?></td>
					<td><?php echo $d['tag']; ?></td>
					<td><?php echo $d['bahasa']; ?></td>
					<td><img src="gambar/<?php echo $d['gambar'] ?>" width="35" height="40"></td>
				</tr>
				<?php
			}

			?>
			
			</table>
		</div>


</body>


<section id="Heading">
			<div class="container-md">
				<h2
					style="text-align: center; height: 40px; vertical-align: middle; line-height: 40px; margin-top: 200px;">
					Belum Ada Buku
				</h2>
				<p style="text-align: center; background-color:rgb(0, 17, 255); height:3px; vertical-align: middle;">
				</p>
				<div class="heading">
					<h6
						style="text-align: center; height: 40px; vertical-align: middle; line-height: 30px; margin-bottom: 150px;">
						Silahkan Menambahkan Buku
					</h6>
				</div>
			</div>
		</section>
		<!-- Content-->

		<!-- Footer-->
		<footer class="text-center text-lg-start bg-light text-muted ">

			<section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
				<div class="center container p-4 ">
					<div class="col-lg-6 col-md-12 mb-4 mb-md-0 center">
						<img src="image/logo.png" width="130px">
						<p class="center" style="text-align: center;"><b>Perpustakaan EAD</b></p>
						<p class="center" style="text-align: center;">Muhammad R</p>
					</div>
				</div>
			</section>
		</footer>
		<!-- Footer-->

</html>