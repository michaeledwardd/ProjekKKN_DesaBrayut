<?php

    if(isset($_POST['pesan']))
    {
        include('db.php');

        $namaPembeli = $_POST['namaPembeli'];
        $notelp = $_POST['notelp'];
        $namaBarang = $_POST['namaBarang'];
        $deskripsiBarang = $_POST['deskripsiBarang'];
        $alamatkirim = $_POST['alamatkirim'];

        $query = mysqli_query($con,
        "INSERT INTO pemesanan(namaPembeli, notelp, namaBarang, deskripsiBarang, alamatKirim)
        VALUES
        ('$namaPembeli', '$notelp', '$namaBarang', '$deskripsiBarang', '$alamatkirim')")
        or die(mysqli_error($con)); 

        if($query)
        {
            echo
            '<script>
            alert("Pesanan berhasil diinputkan"); window.location = "index.php"
            </script>';
        }
        else
        {
            echo
            '<script>
            alert("Terdapat kesalahan menginputkan data");
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