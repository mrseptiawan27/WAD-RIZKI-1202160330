                <?php
                $host = "localhost";
                $user = "root";
                $pass = "";
                $database = "wad-rizki-1202160330";

                $connf = mysqli_connect("localhost", "root", "", "wad-rizki-1202160330");


                function registrasi($data)
                {
                    global $conn;
                    $nama = ($data["nama"]);
                    $email = ($data["email"]);
                    $password = ($data["password"]);
                    $password2 = ($data["password2"]);
                    $nohp = ($data["nohp"]);

                    if ($password !== $password2) {
                        echo "<script>
                        alert('ulangi Password')</script>";
                        return false;
                    }

                    $password = password_hash($password, $data['password']);

                    mysqli_query($conn, "INSERT INTO users
                    VALUES
                    ('$password','$nama','$email','$password','$nohp')
                    ");
                }
