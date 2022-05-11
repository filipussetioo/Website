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
<!-- <?php 
// $rand = uniqid(rand(), true);
// print_r($rand);exit;
?> -->
<body>
    <form action="../controllers/Controller.php?aksi=register_users" method="POST">
    <div class="login_page" style="background-image: url(./view/img/roman-kraft-g_gwdpsCVAY-unsplash\ -\ Copy.jpg);">
        <div class="login_pagebox" >
                <img src="view/img/cut.png" width="200px" height="180px">
            <div>
                <a id="user" style="margin-right:4px"><i class="fa fa-user"></i></a>
                <input type="text" id="textt" name="username" placeholder="Nama">
            </div>
            <div >
                <a id="pass" style="font-size: 15px;margin-right: 4px;"><i class="fa fa-lock"></i></a>
                <input type="password" id="textt" name="password" placeholder="Password">
            </div>
            <div >
                <a id="user" style="font-size:15px;"><i class="fa fa-user-tag"></i></a>
                <input type="text" id="textt" name="level" placeholder="Level">
            </div>
            <div class="buttondaftar">
            <a id="back" href="index.html"><i class="fa fa-angle-left"></i></a>
            </div>
            <div class="buttondaftar1">
            <input type="submit" id="buttonlog"value="Daftar">
            </div>
        </div>
    </div>
    </form>
</body>
</html>