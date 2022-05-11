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
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="view/css/font-awesome.css">
    <script src="https://kit.fontawesome.com/bd45d9ab9b.js" crossorigin="anonymous"></script>
    <title>Tempat Wisata</title>
</head>


<div class="nav">
        <ul class="nav_left">
			<li><a id="back" href="menu_pemilik.php"><i class="fa fa-angle-left"></i></a></li>
            <div class="dropdown">
                <li><button class="dropbtn">Data</button></li>
                <div class="dropdown-content">
                    <a href="users.php" class="">Data User</a></td>
                    <a href="pengunjung.php" class="">Data Pengunjung</a>
                    <a href="ticket.php" class="">Data Ticket</a>
                    <a href="pengunjung_pemilik.php" class="">Laporan Pengunjung</a>
                    <a href="penjual_booking.php" class="">Laporan booking</a>
                    <a href="penjualan_pemilik.php" class="">Laporan penjualan</a>
                </div>
            </div>
            <li><a class="" href="input_users.php">Input Data</a></li>
        </ul>
		<ul class="nav_mid">
            <li><a>User's Data</a></li>
        </ul>
        <ul class="nav_right">
			<li><a id="back" href="index.html"><i class="fa fa-sign-out"></i></a></li>
        </ul>
</div>

<div class="conback" style="background-image: url(view/img/annie-spratt-JMjNnQ2xFoY-opac.jpg);">	
<br><br><br>
<div class="container">
	<div class="col-md-12">
		<table id="example" class="table table-striped table-dark" data-page-size="10"style="width:100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Username</th>
					<th>Level</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<?php
			$no = 1;
			foreach ($db->tampil_data_users() as $x) {
			?>
				<tbody class="">
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $x['username']; ?></td>
						<td><?php echo $x['level']; ?></td>
						<td>
						<a class="btn btn-primary" href="update_user.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
						<a class="btn btn-danger" href="../controllers/Controller.php?id=<?php echo $x['id']; ?>&aksi=hapus_user"">Hapus</a>
						</td>
					</tr>
				</tbody>
			<?php
			}
			?>
			<tfoot>
				<tr>
					<th>No</th>
					<th>Username</th>
					<th>Level</th>
					<th>Aksi</th>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
</div>
<script>
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>