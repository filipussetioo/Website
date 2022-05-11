<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="view/css/font-awesome.css">
    <script src="https://kit.fontawesome.com/bd45d9ab9b.js" crossorigin="anonymous"></script>
    <title>Register Page</title>
</head>

<body>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "Jumlah tiket melebihi yg telah ditentukan";
        } elseif ($_GET['pesan'] == "hari") {
            echo "Tanggal belum dipilih";
        } elseif ($_GET['pesan'] == "kosong") {
            echo "Tidak ada jadwal pada hari yg dipilih";
        } elseif ($_GET['pesan'] == "over") {
            echo "Jumlah pesan tiket melebihi yg ditentukan pemilik";
        }
    }
    include '../function/database.php';
    $db = new database();
    ?>
    <form action="../controllers/Controller.php?aksi=create_pengunjung" method="POST">
    <div class="login_page" style="background-image: url(./view/img/roman-kraft-g_gwdpsCVAY-unsplash\ -\ Copy.jpg);">
            <div class="login_pagebox1">
                <img src="view/img/cut.png" width="200px" height="180px">
                <div>
                    <a id="user" style="margin-right:6px"><i class="fa fa-user"></i></a>
                    <input type="text" id="texttt" name="nama" placeholder="Nama">
                </div>
                <div>
                    <a id="user" style="margin-right:4px"><i class="fas fa-id-card"></i></a>
                    <input type="text" id="texttt" name="no_ktp" placeholder="No. KTP">
                </div>
                <div>
                    <a id="user" style="margin-right:4px"><i class="fas fa-phone"></i></a> 
                    <input type="text" id="texttt" name="no_hp" placeholder="No. HP">
                </div>
                <div>
                    <a id="user" style="margin-right:3px"><i class="fa fa-ticket"></i></a> 
                    <input type="number" id="texttt"name="jumlah" placeholder="Jumlah Tiket" width="20px" height="20px">
                </div>
                <div>
                    <a id="user" style="margin-right:4px"><i class="fas fa-calendar"></i></a>
                    <input type="date" name="jadwal" id="jadwal" onchange="search()" placeholder="Jadwal" width="20px" height="20px">
                </div>
                <div class= "buttondaftar">
                    <a id="back" href="index.html"><i class="fa fa-angle-left"></i></a>
                 </div>
                 <div class="buttondaftar1">
                    <input type="submit" id="buttondaf" value="Submit">
                </div>
                <div class="harga">
                    <label for="harga">Harga : </label> 
                    <a type="text" disabled id="harga"></a>
                </div>
            </div>
        </div>
    </form>
</body>

</html>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    // $(document).ready(function(){

    function search() {

        var tanggal = $("#jadwal").val();

        if (tanggal != "") {
            $.ajax({
                type: "post",
                url: "search_jadwal.php",
                data: "jadwal=" + tanggal,
                success: function(data) {
                    console.log(data);
                    $("#harga").html(data);

                }
            });
        }



    }

    // });
</script>