<?php
    if(isset($_POST['editProduct']))
    {
        include ('db.php');
        $id = $_POST['id'];
        $namaProduct = $_POST['namaProduct'];
        $deskripsiProduct = $_POST['deskripsiProduct'];
        $harga = $_POST['harga'];
        $status = $_POST['status'];

        $query = mysqli_query($con, "UPDATE product SET namaProduct='$namaProduct', deskripsiProduct='$deskripsiProduct', harga='$harga' , status='$status' WHERE id='$id'") or die(mysqli_error($con));                     
        if($query)
        {           
            echo                 
            '<script>                    
                alert("Edit Success"); 
                window.location = "listProductAdminPage.php"
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