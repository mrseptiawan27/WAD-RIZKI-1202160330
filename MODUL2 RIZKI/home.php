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
        <center> WELCOM TO ESD VENUE RESERVATION </center>
        <div class="container">
            <p class="highlight"> Find your best deal for your event, Here! </p>



            <div class="row">
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/nusantara.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nusantara Hall</h5>
                            <p class="card-text">Rp. 500.000/Jam</p>
                            <p>5000 Capacity</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item text-success">Free Parking</li>
                            <li class="list-group-item text-success">Full Ac</li>
                            <li class="list-group-item text-success">Cleaning Service</li>
                            <li class="list-group-item text-success">Covid-19 Health Protocol</li>
                        </ul>
                        <<div class="card" align="center">
                        <form action="Booking.php" method="GET">
                            <button type="submit" value="Nusantara" name="type" class="btn btn-primary">Book Now</button>
                        </form>
                    </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card" style="width: 18rem;">
                            <img src="img/keong.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Gedung Keong</h5>
                                <p class="card-text">Rp. 250.000/Jam</p>
                                <p>2500 Capacity</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-success">Free Parking</li>
                                <li class="list-group-item text-success">Full Ac</li>
                                <li class="list-group-item text-danger">Cleaning Service</li>
                                <li class="list-group-item text-success">Covid-19 Health Protocol</li>
                            </ul>
                            <div class="card" align="center">
                        <form action="Booking.php" method="GET">
                            <button type="submit" value="Keong" name="type" class="btn btn-primary">Book Now</button>
                        </form>
                    </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card" style="width: 18rem;">
                            <img src="img/gsg.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Gedung Serba Guna</h5>
                                <p class="card-text">Rp. 100.000/Jam</p>
                                <p>500 Capacity</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-danger">Free Parking</li>
                                <li class="list-group-item text-danger">Full Ac</li>
                                <li class="list-group-item text-danger">Cleaning Service</li>
                                <li class="list-group-item text-success">Covid-19 Health Protocol</li>
                            </ul>
                            <div class="card" align="center">
                        <form action="Booking.php" method="GET">
                            <button type="submit" value="Serbaguna" name="type" class="btn btn-primary">Book Now</button>
                        </form>
                    </div>
                        </div>

                    </div>
                </div>

                <div id="ngepost">
            <?php
            if(empty($type)) {
                '<img src="img/nusantara.jpg" class="gambar">';
            } else {
            $type = $_GET['type'];
            if ($type === "Standard") {
                '<img src="1326889680.jpg" class="gambar">';
            } else if ($type === "Superior") {
                '<img src="1489467437.jpg" class="gambar">';
            } else if ($type === "Luxury") {
                '<img src="1382696876.jpg" class="gambar">';
            } else {
                '<img src="1326889680.jpg" class="gambar">';
            }
        }
            ?>
            
        </div>
</div>
    </main>

    <footer class="bg-light">
        <div class="text-center p-3" style="backround:#cccccc">
            Created By: Rizki_1202160330

    </footer>
</body>

</html>-