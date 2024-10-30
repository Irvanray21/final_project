<?php
require 'connection.php';

// insert to table section
$data = myquery("SELECT a.id_orang, a.nama, a.kejahatan, a.tgl_cari, b.polsek, c.stat
From tb_orang as a
JOIN tb_polsek as b
ON a.domisili = b.id_polsek

JOIN tb_status as c
on a.stat_org = c.id_status");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Pencarian Orang</title>
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
            <a href="./index.html" class="navbar-brand">
                <img src="./media/logo.png" height="50" alt="Logo" class="d-inline-block align-top"> Kepolisian Indonesia
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="./list.php" class="nav-item nav-link">Daftar Orang</a>
                    <a href="./login.php" class="nav-item nav-link">Login</a>
                </div>
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

                                <th scope="col">Nama Orang</th>
                                <th scope="col">Kejahatan</th>
                                <th scope="col">Polsek</th>
                                <th scope="col">Status</th>
                                <th scope="col">Waktu Hilang/Ditemukan</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($data as $row): ?>
                                <tr>

                                    <td><?= $row['nama'] ?></td>
                                    <td><?= $row['kejahatan'] ?></td>
                                    <td><?= $row['polsek'] ?></td>
                                    <td><?= $row['stat'] ?></td>
                                    <td><?= $row['tgl_cari'] ?></td>

                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
                <!-- end of table -->

            </div>
        </div>
    </div>
    <!-- end of content -->


    <!-- start of footer -->
    <footer class="bg-dark text-center text-white">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color:  #142c5c;">
            &copy; 2024 Kepolisian Indonesia
        </div>
        <!-- Copyright -->
    </footer>
    <!-- end of footer -->

    <!-- start of script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- end of script -->
</body>

</html>