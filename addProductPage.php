<?php
 include 'sidebar.php'
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
    <h4 >TAMBAH DATA PRODUCT</h4>
        <hr>
        <form action="addProductProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Product </label>
                <input class="form-control" type="text" id="namaProduct" name="namaProduct" aria-describedby="emailHelp" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Deskripsi Product</label>
                <input class="form-control" id="deskripsiProduct" name="deskripsiProduct" aria-describedby="emailHelp" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Harga</label>
                <input class="form-control" id="harga" name="harga" aria-describedby="emailHelp" pattern="[0-9]{1,10}" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Status</label>
                <select class="form-select" aria-label="Default select example" name="status" id="status" required>
                    <option value=""></option>
                    <option value="Tersedia">Tersedia</option>
                    <option value="Segera muncul">Segera muncul</option>
                    <option value="Tidak Tersedia">Tidak Tersedia</option>
                </select>
            </div>


            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="tambahProduct">Tambahkan Product</button>
            </div>
        </form>
    </div>
    
 </aside>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>