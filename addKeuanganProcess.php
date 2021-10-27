<?php

    if(isset($_POST['tambahKeuangan']))
    {
        include('db.php');

        $tanggal = $_POST['tanggal'];
        $uangmasuk = $_POST['uangmasuk'];
        $uangkeluar = $_POST['uangkeluar'];
        $saldo = $_POST['saldo'];
        $keterangan = $_POST['keterangan'];

        $query = mysqli_query($con,
        "INSERT INTO keuangan(tanggal, uangmasuk, uangkeluar, saldo, keterangan)
        VALUES
        ('$tanggal', '$uangmasuk', '$uangkeluar', '$saldo', '$keterangan')")
        or die(mysqli_error($con)); 

        if($query)
        {
            echo
            '<script>
            alert("Tambah data Keuangan berhasil"); window.location = "listKeuanganPage.php"
            </script>';
        }
        else
        {
            echo
            '<script>
            alert("Tambah data Keuangan gagal");
            </script>';
        }

    }
    else
    {
         echo
        '<script>
        window.history.back()
        </script>';
    }
?>