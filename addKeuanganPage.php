<?php
 include 'sidebar.php'
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
    <h4 >TAMBAH DATA KEUANGAN</h4>
        <hr>
        <form action="addKeuanganProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal </label>
                <input class="form-control" type="date" id="tanggal" name="tanggal" aria-describedby="emailHelp" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Uang masuk</label>
                <input class="form-control" id="uangmasuk" name="uangmasuk" aria-describedby="emailHelp" pattern="[0-9]{1,10}" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Uang Keluar</label>
                <input class="form-control" id="uangkeluar" name="uangkeluar" aria-describedby="emailHelp" pattern="[0-9]{1,10}" required>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Saldo</label>
                <input class="form-control" id="saldo" name="saldo" aria-describedby="emailHelp" required pattern="[0-9]{1,10}">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                <input class="form-control" id="keterangan" name="keterangan" aria-describedby="emailHelp" required>
            </div>


            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="tambahKeuangan">Tambahkan Keuangan</button>
            </div>
        </form>
    </div>
    
 </aside>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>