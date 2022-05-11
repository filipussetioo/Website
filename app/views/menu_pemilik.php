<?php
include '../function/database.php';
$db = new database();

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="view/css/font-awesome.css">
    <script src="https://kit.fontawesome.com/bd45d9ab9b.js" crossorigin="anonymous"></script>
    <title>Tempat Wisata</title>
</head>


<div class="nav">
        <ul class="nav_left">
        </ul>
        <ul class="nav_mid">
            <li><a>Owner's Page</a></li>
        </ul>
        <ul class="nav_right">
            <li><a id="back" href="index.html"><i class="fa fa-sign-out"></i></a></li>
        </ul>
</div>
<div class="menupem" style="background-image: url(view/img/annie-spratt-JMjNnQ2xFoY-unsplash.jpg);">
        <div class="but">
            <div class="box" style="background-image:url(view/img/stat.jpg);">
            <a href="users.php" class="data">Data User</a>
            <a href="pengunjung.php" class="data">Data Pengunjung</a>
            <a href="ticket.php" class="data">Data Ticket</a>
            <a href="pengunjung_pemilik.php" class="data">Laporan Pengunjung</a>
            <a href="penjual_booking.php" class="data">Laporan booking</a>
            <a href="penjualan_pemilik.php" class="data">Laporan penjualan</a>
        </div>
    </div>
</div>

<script>
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>