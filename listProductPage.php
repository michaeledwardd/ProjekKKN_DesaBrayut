<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Desa Wisata Brayut</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                                <h1>Desa<span>Brayut</span></h1>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Jam kerja</h3>
                                        <p>24/7 hours</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Whatsapp kami</h3>
                                        <p>+6281 1234 56789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email kami</h3>
                                        <p>emaildesabrayut@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="aboutPage.php" class="nav-item nav-link">About</a>
                            <a href="bookingPage.php" class="nav-item nav-link">Pesan Barang</a>
                            <a href="contactPage.php" class="nav-item nav-link">Contact</a>
                            <a href="loginPage.php" class="nav-item nav-link">Admin</a>
                            <a href="listProductPage.php" class="nav-item nav-link active">List Product</a>
                            <a href="https://drive.google.com/file/d/1qNd-30ghi8JfBhniFc446fxYJ2VHxFNq/view?usp=sharing" class="nav-item nav-link">Brosur</a>
                        </div>
                        
                    </div>
                </nav>
            </div>
        </div>
        

        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Tabel Penjualan Product</h2>
                    </div>
                    <div class="col-12">
                        <a href="">List Product</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <?php
                include 'db.php'
        ?>

        <h4 >DAFTAR PERSEDIAAN PRODUCT</h4>
         <hr>
            <table class="table ">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Product</th>
                <th scope="col">Deksripsi Product</th>
                <th scope="col">Harga Product</th>
                <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($con, "SELECT * FROM product") or die(mysqli_error($con));

                if (mysqli_num_rows($query) == 0) 
                {
                    echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                }
                else
                {
                    $no = 1;
                    while($data = mysqli_fetch_assoc($query))
                    {
                        echo'
                        <tr>
                        <th scope="row">'.$no.'</th>
                        <td>'.$data['namaProduct'].'</td>
                        <td>'.$data['deskripsiProduct'].'</td>
                        <td>'.$data['harga'].'</td>
                        <td>'.$data['status'].'</td>
                        </tr>';
                        $no++;
                    }
                }
    ?>
    </tbody>
    </table>
 </div>
 </aside>
        
       
        

        <!-- Footer Start -->
        <div class="footer">
            <div class="container copyright">
                <p>&copy; 2021 KKN Wiradesa UAJY</p>
                <p>Design by MES </p>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
