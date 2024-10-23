<?php



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ubah Data Orang</title>
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
                        <a class="nav-link" href="./logout.php">Log-out</a>
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
                <div class="table-responsive">
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
                                    <a href="./data_edit.php" class="btn btn-info m-2">Ubah</a>
                                    <a href="#" class="btn btn-danger">Hapus</a>
                                </th>
                            </tr>
                            <tr>


                            </tr>
                            <tr>


                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end of table -->

            </div>
        </div>
    </div>
    <!-- end of content -->

    


    <!-- start of script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- end of script -->
</body>

</html>