<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/bd45d9ab9b.js" crossorigin="anonymous"></script>
    <title>Login </title>
</head>


<body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <!-- cek pesan notifikasi -->
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "Login gagal! username dan password salah!";
                } else if ($_GET['pesan'] == "logout") {
                    echo "Anda telah berhasil logout";
                } else if ($_GET['pesan'] == "belum_login") {
                    echo "Anda harus login untuk mengakses halaman admin";
                }
            }
            ?>
            <form  method="post" action="cek_login.php">
            <div class="login_page" style="background-image: url(./view/img/roman-kraft-g_gwdpsCVAY-unsplash\ -\ Copy.jpg);">
                    <div class="login_pageboxPem">
                        <div class="center">
                            <img src="view/img/cut.png" width="200px" height="180px">
                        </div>
                        <div>
                            <a id="user"><i class="fa fa-users"></i></a>
                            <input type="text" name="username" id="textt" placeholder="Nama">
                        </div>
                        <div>
                            <a id="pass" style="font-size: 20px;margin-right: 3px;"><i class="fa fa-lock"></i></a>
                            <input type="password" name="password" id="textt" placeholder="Password">
                        </div>
                        <div class="buttondaftarr2">
                            <a id="back" href="index.html"><i class="fa fa-angle-left"></i></a>
                        </div>
                        <div class="buttondaftar2">
                            <button type="submit" id="buttonlog">Login</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>