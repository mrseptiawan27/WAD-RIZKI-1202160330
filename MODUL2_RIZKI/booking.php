<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark  d-flex justify-content-center">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking.php">Booking</a>
                </li>
                </a>
            </ul>
        </nav>
        </div>
    </header>

    <main>

        <div class="container">
            <br>
            <p class="highlight"> Find your best deal for your event, Here! </p>




            <div class="row">
                <form action="my_booking.php" method="get">
                    <div class="col-sm-6 offset-6">

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="Nama" name="nama" placeholder="Nama_Nim">
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Event date</label>
                            <input type="date" class="form-control" id="Date" name="date" placeholder="MM / DD / YYYY">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Duration</label>
                            <input type="number" class="form-control" id="Duration" name="duration" placeholder="Hari">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Type</label>
                            <?php
                        if (isset($_GET['type'])) {
                            $type =$_GET['type'];
                        }
                        if (!empty($type)) {
                            echo '<input type="text" class="form-control" id="Nusantara" name="type" readonly value = '.$type.'>';
                        } else {
                            echo '<select id="disabledSelect" class="form-control" name="type">';
                            echo '<option value="Nusantara">Nusantara</option>';
                            echo '<option value="Keong" selected>Gedung Keong</option>';
                            echo '<option value="Serbaguna">Gedung Serba guna</option>';
                            echo '</select>';
                        }
                        ?>
                        </div>  
        
                    <td style="font-size:12px;">Silahkan Pilih Fasilitas</td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Catering" id=""
                            name="Fasilitas[]">
                            Catering / 100.000
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Sound System" id=""
                            name="Fasilitas[]">
                            Sound system / 100.000
                            </label>
                        </div>
                        <td>
                        <td>

                            <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="+62XXXXXXXX">
                            </div>

                            <tr>
                                <td><input type="submit" value="Book" class="btn btn-primary" size="50"
                                        style="width:390px;"></td>
                            </tr>
                    </div>
                <div id="gambar">
                    <?php
                    if(empty($type)) {
                    '<img src="img/nusantara.jpg" class="gambar">';
                    } else {
                    $type = $_GET['type'];
                    if ($type === "Nusantara") {
                    '<img src="img/nusantara.jpg" class="gambar">';
                    } else if ($type === "Keong") {
                    '<img src="img/keong.jpg" class="gambar">';
                    } else if ($type === "Serbaguna") {
                    '<img src="img/gsg.jpg" class="gambar">';
                    } else {
                    '<img src="img/nusantara.jpg" class="gambar">';
                    }
                    }
                    ?>
            


                </form>


    </main>
    <br><br><br>

    <footer class="bg-light">
        <div class="text-center p-3" style="backround:#cccccc">
            Created By: Rizki_1202160330

    </footer>
</body>

</html>