<?php
    if(isset($_POST['tambahProduct']))
    {
        include('db.php');

        $namaProduct = $_POST['namaProduct'];
        $deskripsiProduct = $_POST['deskripsiProduct'];
        $harga = $_POST['harga'];
        $status = $_POST['status'];
        
        $query = mysqli_query($con,
        "INSERT INTO product(namaProduct, deskripsiProduct, harga, status)
        VALUES
        ('$namaProduct', '$deskripsiProduct', '$harga', '$status')")
        or die(mysqli_error($con)); 

        if($query)
        {
            echo
            '<script>
            alert("Tambah data Product berhasil"); window.location = "listProductAdminPage.php"
            </script>';
        }
        else
        {
            echo
            '<script>
            alert("Tambah data Product gagal"); window.location = "addProductPage.php"
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