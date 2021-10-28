<?php
 include 'sidebar.php'
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
    <h4 >TAMBAH ANGGOTA</h4>
        <hr>
        <form action="addAnggotaProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama </label>
                <input class="form-control" id="namaAnggota" name="namaAnggota" aria-describedby="emailHelp" required>
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                <select class="form-select" aria-label="Default select example" name="jenisKelamin" id="jenisKelamin" required>
                    <option value=""></option>
                    <option value="Laki laki">Laki laki</option>
                    <option value="Wanita">Wanita</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Usia</label>
                <input class="form-control" id="usia" name="usia" aria-describedby="emailHelp" pattern="[0-9]{2}"required>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kelompok</label>
                <select class="form-select" aria-label="Default select example" name="kelompok" id="kelompok" required>
                    <option value=""></option>
                    <option value="Wiratani Lansia">Wiratani Lansia</option>
                    <option value="Wiratani Ibu-ibu">Wiratani Ibu-ibu</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <input class="form-control" id="alamatAnggota" name="alamatAnggota" aria-describedby="emailHelp" required>
            </div>


            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="tambahAnggota">Tambahkan Anggota</button>
            </div>
        </form>
    </div>
    
 </aside>
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>