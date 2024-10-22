<?php



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selamat Datang Di Daftar Pencariang Orang</title>
    <!-- start of stylesheet -->
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./style/style.css" />
    <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css" />
    <!-- end of stylesheet -->
</head>

<body>

    <!-- start of navbar -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.html">
                <img src="./media/logo.png" width="50" height="50" class="d-inline-block align-top" alt="logo">
                Kepolisian Indonesia
            </a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-2">
                    <li class="nav-item">
                        <a class="nav-link" href="./list_edit.php">Ubah Daftar Orang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./login.php">Log-out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    <!-- start of content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">

                <h1>Daftar Pencarian Orang</h1>

                <!-- start of table  -->
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Pengaturan</th>
                            <th scope="col">Nomor</th>
                            <th scope="col">Nama Orang</th>
                            <th scope="col">Kejahatan</th>
                            <th scope="col">Polsek</th>
                            <th scope="col">Status</th>
                            <th scope="col">Waktu Hilang/Ditemukan</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <th scope="row">
                           <a href="#" class="btn btn-info">Ubah</a> 
                           <a href="#" class="btn btn-danger">Hapus</a> 
                            </th>
                        </tr>
                        <tr>
                            

                        </tr>
                        <tr>
                            

                        </tr>
                    </tbody>
                </table>
                <!-- end of table -->

            </div>
        </div>
    </div>
    <!-- end of content -->

    <!-- start of footer -->
    <footer class="text-center bg-body-dark custom-footer">
        <!-- Grid container -->
        <div class="container pt-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a
                    data-mdb-ripple-init
                    class="btn btn-link btn-floating btn-lg text-body m-1"
                    href="#!"
                    role="button"
                    data-mdb-ripple-color="light"><i class="fab fa-facebook-f" style="color: white;"></i></a>

                <!-- Twitter -->
                <a
                    data-mdb-ripple-init
                    class="btn btn-link btn-floating btn-lg text-body m-1"
                    href="#!"
                    role="button"
                    data-mdb-ripple-color="light"><i class="fa-brands fa-x-twitter" style="color: white;"></i></a>

                <!-- Instagram -->
                <a
                    data-mdb-ripple-init
                    class="btn btn-link btn-floating btn-lg text-body m-1"
                    href="#!"
                    role="button"
                    data-mdb-ripple-color="light"><i class="fab fa-instagram" style="color: white;"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            &copy; 2024 Copyright Kepolisian Indonesia
        </div>
        <!-- Copyright -->
    </footer>
    <!-- end of footer -->


    <!-- start of script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- end of script -->
</body>

</html>