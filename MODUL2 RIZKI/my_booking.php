<!DOCTYPE html>
<html>
<?php
        $addService = 0;
        $price = 0;
        
        $nama = $_GET['nama'];
        $date = $_GET['date'];
        $duration = $_GET['duration'];
        $type = $_GET['type'];
        $phone = $_GET['phone'];
        if (($_GET['Fasilitas'])) {
            $Fasilitas = $_GET['Fasilitas'];
        }
?>

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
            <a class="nav-link active"aria-current="page"href="home.php">Home</a></li>
            <li class="nav-item"><a class="nav-link"href="booking.php">Booking</a></li>
            </a></ul>
            </nav></div>
    </header>
            
    <div class="post">
        <fieldset>
            <table class="table">
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Type</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Service</th>
                    <th scope="col">Total Price</th>
                </tr>

                <tr>
                    <th scope="row">
                        <?php
                        $a=1;
                        $b=100;
                        $hasil=rand($a, $b);
                        echo $hasil;
                        ?>
                        </th>

                            <td><?=$nama ?></td>
                            <td><?=$date ?></td>

                        <td>
                            <?php $duration=$_GET['duration'];
                            $date=$date;
                            $dateNew=new DateTime($date);
                            $dateout=$dateNew->modify("+$duration days");
                            echo $dateout->format("d-m-Y");
                            ?>
                        </td>

                        <td><?=$type ?></td>
                        <td><?=$phone ?></td>

                    <td>
                            <?php
                            if (empty($Fasilitas)) {
                            echo ("no service");
                            }
                            else {
                            $c=round($Fasilitas);
                            echo "<ul>";
                            for ($i=0; $i<$c; $i++) {
                                echo "<li> $Fasilitas[$i] </li>";
                                if ($Fasilitas[$i]==="Catering"|| $Fasilitas[$i]==="Sound System") {
                                    $addService+=100000;
                                }
                            }
                            echo "</ul>";
                            }
                            ?>
                    </td>
                        <td>
                                <?php
                                $duration=$_GET['duration'];
                                if ($type==="Nusantara") {
                                    $price+=300000;
                                }
                                else if ($type==="Keong") {
                                    $price+=200000;
                                }
                                else if ($type==="Serbaguna") {
                                    $price+=100000;
                                }
                                else {
                                    $price+=0;
                                }

                                $total=($price * $duration)+$addService;
                                echo $total=0;
                                    ?>
                        </td>
                </tr>
            </table>
        </fieldset>
    </div>
</body>
</html>