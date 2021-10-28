<?php
include 'sidebar.php';

$id = $_GET['id'];

$query = mysqli_query($con, "SELECT * from product where id='$id'");
$data = mysqli_fetch_assoc($query);

?>

   <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
   <h4 >EDIT DATA PRODUCT</h4>
       <hr>
       <form action="editProductProcess.php?id=$id" method="post">
       <input type="hidden" name="id" value="<?= $data['id'];?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Product</label>
                <input class="form-control" id="namaProduct" name="namaProduct" aria-describedby="emailHelp" value="<?php echo $data['namaProduct']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Deskripsi Product</label>
                <input class="form-control" id="deskripsiProduct" name="deskripsiProduct" aria-describedby="emailHelp" value="<?php echo $data['deskripsiProduct']; ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga</label>
                <input class="form-control" id="harga" name="harga" aria-describedby="emailHelp" value="<?php echo $data['harga']; ?>"pattern="[0-9]{1,10}" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status</label>
                <select class="form-select" aria-label="Default select example" name="status" id="status" value="<?php echo $data['status']; ?>" required>
                    <option value=""></option>
                    <option value="Tersedia">Tersedia</option>
                    <option value="Segera muncul">Segera muncul</option>
                    <option value="Tidak Tersedia">Tidak Tersedia</option>
                </select>
            </div>
            
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="editProduct">Edit Product</button>
            </div>
        </form>
   </div>
   
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>