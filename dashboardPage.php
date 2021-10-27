<?php
    include 'sidebar.php'
?>
    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #17337A; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <h4 >HALAMAN DASHBOARD</h4>
        <p>Selamat Datang admin desa brayut </p>
        <hr>
            <div class="d-flex">
                <div class="card" style="width: 18rem;">
                    <img class="card-imgtop" src="https://cdn.pixabay.com/photo/2017/06/10/07/18/list-2389219_1280.png"  alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Keuangan Kas Desa</h5>
                        <p class="cardtext">Menu ini digunakan untuk menambahkan kas keuangan desa dan bisa digunakan sebagai laporan desa</p>
                        <a href="addKeuanganPage.php" class="btn btn-primary">Tambah List Keuangan</a>
                    </div>
                </div>
                <div class="card mx-4" style="width: 18rem;">
                    <img class="card-imgtop" src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-person-add-512.png"  alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Daftar anggota Wiratani</h5>
                    <p class="cardtext">Menu ini digunakan untuk mendaftarkan nama anggota kelompok wiratani dan bisa digunakan sebagai laporan desa</p>
                    <a href="addAnggotaPage.php" class="btn btn-primary">Tambah List Anggota</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-imgtop" src="https://cdn.pixabay.com/photo/2017/06/10/07/18/list-2389219_1280.png"  alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">List Anggota Wiratani</h5>
                    <p class="cardtext">Menu ini digunakan untuk melihat anggota kelompok wiratani dan bisa digunakan sebagai laporan desa</p>
                    <a href="listAnggotaPage.php" class="btn btn-primary">Lihat Anggota</a>
                </div>
            </div>
        </div>
    </div>
 </aside>

 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>