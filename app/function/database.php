<?php

class database
{

    function connect()
    {
        return mysqli_connect("localhost", "root", "", "ticketing1");
    }

    function tampil_data()
    {
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        $query = "SELECT * FROM pengunjung";
        $result = mysqli_query($this->connect(), $query);
        $chart_data = '';

        // cek result
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                $hasil[] = $row;
            }
            return $hasil;
        }
    }

    function tampil_data_users()
    {
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        $query = "SELECT * FROM user";
        $result = mysqli_query($this->connect(), $query);
        $chart_data = '';

        // cek result
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                $hasil[] = $row;
            }
            return $hasil;
        }
    }
        function tampil_data_penjualan()
    {
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        $query = "SELECT pengunjung.jadwal, ticket.jumlah, ticket.harga FROM pengunjung INNER JOIN ticket ON pengunjung.id = ticket.id;";
        $result = mysqli_query($this->connect(), $query);
        $chart_data = '';

        // cek result
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                $hasil[] = $row;
            }
            return $hasil;
        }
    }

    function tampil_data_ticket()
    {
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        $query = "SELECT * FROM ticket";
        $result = mysqli_query($this->connect(), $query);
        $chart_data = '';

        // cek result
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                $hasil[] = $row;
            }
            return $hasil;
        }
    }


    function edit_ticket($id)
    {
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        $query = "SELECT * FROM ticket where id = $id";
        $result = mysqli_query($this->connect(), $query);
        $chart_data = '';
        // cek result
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                $hasil[] = $row;
            }
            // print_r($hasil);exit;
            return $hasil;
        }
    }

    function edit_pengunjung($id)
    {
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        $query = "SELECT * FROM pengunjung where id = $id";
        $result = mysqli_query($this->connect(), $query);
        $chart_data = '';
        // cek result
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                $hasil[] = $row;
            }
            // print_r($hasil);exit;
            return $hasil;
        }
    }
    function edit_user($id)
    {
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        $query = "SELECT * FROM user where id = $id";
        $result = mysqli_query($this->connect(), $query);
        $chart_data = '';
        // cek result
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                $hasil[] = $row;
            }
            // print_r($hasil);exit;
            return $hasil;
        }
    }
    function tampil_data_ticketing()
    {
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        $query = "SELECT * FROM ticket";
        $result = mysqli_query($this->connect(), $query);
        $chart_data = '';
        // cek result
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                $hasil[] = $row;
            }
            // print_r($hasil);exit;
            return $hasil;
        }
    }
    function tampil_data_booking()
    {
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        $query = "SELECT pengunjung.nama,pengunjung.no_ktp, transaksi.kode FROM pengunjung INNER JOIN transaksi ON pengunjung.id = transaksi.id;";
        $result = mysqli_query($this->connect(), $query);
        $chart_data = '';

        // cek result
        if ($result) {
            while ($row = mysqli_fetch_array($result)) {
                $hasil[] = $row;
            }
            return $hasil;
        }
    }
    /** Generate Unix Code
     */
    function generate_kode($unix, $order_number, $digit = 5)
    {
        $unix_number = (($order_number == null) ? 1 : intval(substr($order_number, -$digit)) + 1);
        $unix_number = str_pad($unix_number, $digit, '0', STR_PAD_LEFT);
        return $unix . $unix_number;
    }
    function generate_transaksi(){
        $tgl   = date('Y/m');
        $query = "SELECT kode FROM transaksi ORDER BY id DESC;";
        $data = mysqli_query($this->connect(),$query);
        $hasil = [];
        if ($data) {
            while ($row = mysqli_fetch_array($data)) {
                $hasil[] = $row;
            }
        }
        $kode  = $this->generate_kode("RTS/$tgl", $hasil[0]['kode'], 5);
        return $kode;
    }

}
