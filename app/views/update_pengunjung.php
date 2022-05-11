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


<h3>update Pengunjung</h3>
<div class="container">
    <form action="../controllers/Controller.php?aksi=update" method="post">
        <?php
        foreach ($db->edit_pengunjung($_GET['id']) as $d) {
        ?>
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $d['nama'] ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">No Ktp</label>
                <input type="text" name="no_ktp" class="form-control" id="exampleInputPassword1" value="<?php echo $d['no_ktp'] ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">No HP</label>
                <input type="text" name="no_hp" class="form-control" id="exampleInputPassword1" value="<?php echo $d['no_hp'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        <?php } ?>
    </form>
</div>