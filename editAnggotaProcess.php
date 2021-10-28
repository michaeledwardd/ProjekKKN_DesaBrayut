<?php
    if(isset($_POST['editAnggota']))
    {
        include ('db.php');
        $id = $_POST['id'];
        $namaAnggota = $_POST['namaAnggota'];
        $jenisKelamin = $_POST['jenisKelamin'];
        $usia = $_POST['usia'];
        $kelompok = $_POST['kelompok'];
        $alamatAnggota = $_POST['alamatAnggota'];

        $query = mysqli_query($con, "UPDATE anggota SET namaAnggota='$namaAnggota', jenisKelamin='$jenisKelamin', usia='$usia' , kelompok='$kelompok', alamatAnggota='$alamatAnggota' WHERE id='$id'") or die(mysqli_error($con));                     
        if($query)
        {           
            echo                 
            '<script>                    
                alert("Edit Success"); 
                window.location = "listAnggotaPage.php"
            </script>';        
        }
        else
        {           
            echo                 
            '<script>                    
                alert("Edit Failed");                 
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