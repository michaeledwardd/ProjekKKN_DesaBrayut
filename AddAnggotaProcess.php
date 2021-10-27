<?php

    if(isset($_POST['tambahAnggota']))
    {
        include('db.php');

        $namaAnggota = $_POST['namaAnggota'];
        $jenisKelamin = $_POST['jenisKelamin'];
        $usia = $_POST['usia'];
        $kelompok = $_POST['kelompok'];
        $alamatAnggota = $_POST['alamatAnggota'];

        $query = mysqli_query($con,
        "INSERT INTO anggota(namaAnggota, jenisKelamin, usia, kelompok, alamatAnggota)
        VALUES
        ('$namaAnggota', '$jenisKelamin', '$usia', '$kelompok', '$alamatAnggota')")
        or die(mysqli_error($con)); 

        if($query)
        {
            echo
            '<script>
            alert("Anggota berhasil ditambahkan"); window.location = "listAnggotaPage.php"
            </script>';
        }
        else
        {
            echo
            '<script>
            alert("Create data Program Studi failed");
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