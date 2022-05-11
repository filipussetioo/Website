<?php
 include '../function/database.php';
 $db = new database();
 
//  $jadwal=$_POST["jadwal"];
 
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


 $query = "SELECT * FROM ticket where hari = '".$hari_ini."'";
        $result = mysqli_query($db->connect(), $query);
        $hasil = [];
        // cek result
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                $hasil[] = $row;
            }
            $harga = isset($hasil[0]['harga']) ? $hasil[0]['harga'] : 'harga tiket tidak ditemukan';
            echo $harga;
        }
