<?php
include '../function/database.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "hapus") {
    $query = "delete FROM pengunjung where id =" . $_GET['id'] . "";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/pengunjung.php");
    }
} elseif ($aksi == "register_users") {
    $query = "INSERT INTO user (username, password, level) VALUES ( '" . $_POST['username'] . "',  '" . $_POST['password'] . "',  '" . $_POST['level'] . "')";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/index.html");
    }
} elseif ($aksi == "create_users") {
    $query = "INSERT INTO user (username, password, level) VALUES ( '" . $_POST['username'] . "',  '" . $_POST['password'] . "',  '" . $_POST['level'] . "')";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/users.php");
    }
} elseif ($aksi == "hapus_user") {
    $query = "delete FROM user where id =" . $_GET['id'] . "";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/users.php");
    }
} elseif ($aksi == "update") {
    $query = "update pengunjung set nama = '" . $_POST['nama'] . "', no_ktp = '" . $_POST['no_ktp'] . "', no_hp = '" . $_POST['no_hp'] . "' where id =" . $_POST['id'] . "";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/pengunjung.php");
    }
} elseif ($aksi == "update_user") {
    $query = "update user set username = '" . $_POST['username'] . "', password = '" . $_POST['password'] . "', level = '" . $_POST['level'] . "' where id =" . $_POST['id'] . "";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/users.php");
    }
} elseif ($aksi == "create_pengunjung") {
    $hari = isset($_POST['jadwal']) ? date('D', strtotime($_POST['jadwal'])) : '';
    switch ($hari) {
        case 'Sun':
            $hari_ini = "Minggu";
            break;

        case 'Mon':
            $hari_ini = "Senin";
            break;

        case 'Tue':
            $hari_ini = "Selasa";
            break;

        case 'Wed':
            $hari_ini = "Rabu";
            break;

        case 'Thu':
            $hari_ini = "Kamis";
            break;

        case 'Fri':
            $hari_ini = "Jumat";
            break;

        case 'Sat':
            $hari_ini = "Sabtu";
            break;

        default:
            $hari_ini = "Tidak di ketahui";
            break;
    }

    if ($hari_ini == 'Tidak di ketahui') {
        header("location:../views/register.php?pesan=hari");
    }
    $query = "select * from ticket where hari = '" . $hari_ini . "'";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            $hasil[] = $row;
        }
    }
    $cek = mysqli_num_rows($result);
    if ($cek > 0) {
        if ($_POST['jumlah'] > $hasil[0]['jumlah']) {
            header("location:../views/register.php?pesan=over");
        } else {
            $query = "INSERT INTO pengunjung (nama, no_ktp , no_hp, jadwal) VALUES ( '" . $_POST['nama'] . "',  '" . $_POST['no_ktp'] . "',  '" . $_POST['no_hp'] . "',  '" . $_POST['jadwal'] . "')";
            $result = mysqli_query($db->connect(), $query);
            /* get id pengujung */
            $query = "select id from pengunjung order by id DESC";
            $result = mysqli_query($db->connect(), $query);
            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    $hasil[] = $row;
                }
            }
            $kode = $db->generate_transaksi();
            $query = "INSERT INTO transaksi (kode, tanggal , pengunjung_id, jadwal) VALUES ( '" . $kode . "',  '" . $_POST['tanggal'] . "', ". $hasil[0]['id'] .",  '" . $_POST['jadwal'] . "')";
            $result = mysqli_query($db->connect(), $query);

            header("location:../views/register_success.php?pesan=".$kode."");
                
        }
    } else {
        header("location:../views/register.php?pesan=kosong");
    }

} elseif ($aksi == "create_ticket") {
    $query = "INSERT INTO ticket (jumlah, harga , hari) VALUES ( '" . $_POST['jumlah'] . "',  '" . $_POST['harga'] . "',  '" . $_POST['hari'] . "')";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/ticket.php");
    }
} elseif ($aksi == "hapus_ticket") {
    $query = "delete FROM ticket where id =" . $_GET['id'] . "";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/ticket.php");
    }
} elseif ($aksi == "update_ticket") {
    $query = "update ticket set jumlah = '" . $_POST['jumlah'] . "', harga = '" . $_POST['harga'] . "', hari = '" . $_POST['hari'] . "' where id =" . $_POST['id'] . "";
    $result = mysqli_query($db->connect(), $query);
    if ($result) {
        header("location:../views/ticket.php");
    }
}
