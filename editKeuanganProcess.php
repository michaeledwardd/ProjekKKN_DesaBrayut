<?php
    if(isset($_POST['editKeuangan']))
    {
        include ('db.php');
        $id = $_POST['id'];
        $tanggal = $_POST['tanggal'];
        $uangmasuk = $_POST['uangmasuk'];
        $uangkeluar = $_POST['uangkeluar'];
        $saldo = $_POST['saldo'];
        $keterangan =$_POST['keterangan'];

        $query = mysqli_query($con, "UPDATE keuangan SET tanggal='$tanggal', uangmasuk='$uangmasuk', uangkeluar='$uangkeluar' , saldo='$saldo', keterangan='$keterangan' WHERE id='$id'") or die(mysqli_error($con));                     
        if($query)
        {           
            echo                 
            '<script>                    
                alert("Edit Success"); 
                window.location = "listKeuanganPage.php"
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