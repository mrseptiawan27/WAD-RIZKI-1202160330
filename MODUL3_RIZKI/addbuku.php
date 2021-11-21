<!DOCTYPE html>
<html>

<head>
	<title>Rent Book</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<img src="image/logo.png" width="130px">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
				aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>


			<button type="button" class="btn btn-primary">+ Add Book</button>
		</div>
	</nav>
	<br><br><br>
	<div class="container">
		<h2 style="text-align: center;">Add Book</h2>
		<form action="user_act.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Judul Buku :</label>
				<input type="text" class="form-control" placeholder="Masukan Judul Buku" name="judul_buku" id="judul_buku" required="required">
			</div>
			<div class="form-group">
				<label>Penulis :</label>
				<input type="text" class="form-control" placeholder="Masukan Nama Penulis" name="penulis_buku" id="penulis_buku"
					required="required">
			</div>
			<div class="form-group">
				<label>Tahun Terbit :</label>
				<input class="form-control" name="tahun_terbit" id="tahun_terbit" require="required"></input>
			</div>
			<div class="form-group">
				<label>Deskripsi :</label>
				<textarea class="form-control" name="deskripsi" id="deskripsi" required="required"></textarea>
			</div>

			<div class="form-checke form-check-inline" value="bahasa" id="bahasa" name="bahasa" >
				<label> Bahasa :  </label>
				<input type="radio" />Indonesia </input>
				<input type="radio" />English </input>
			</div>
			<br>
			<div class="form-check form-check-inline">
				<label> Tag : </label>
				<input class="form-check-input" type="checkbox">
				<label class="form-check-label" for="inlineCheckbox1"> Program</label>
			</div>
			<div class="form-check form-check-inline" id="tag" value="tag" name="tag">
				<input class="form-check-input" type="checkbox">
				<label class="form-check-label" for="inlineCheckbox2">Film</label>
			</div>
			<div class="form-check form-check-inline" id="tag" value="tag" name="tag">
				<input class="form-check-input" type="checkbox" >
				<label class="form-check-label" for="inlineCheckbox3">Lainnya</label>
			</div>
			<div class="form-group">
				<label>Gambar :</label>
				<input type="file" name="gambar" id="gambar" required="required">
			</div>
			<input type="submit" name="submit" value="submit" class="btn btn-primary">
		</form>
	</div>

</body>

</html>