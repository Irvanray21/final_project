<?php
require 'connection.php';

// insert to table section
$data = myquery("SELECT a.id_orang, a.nama, a.kejahatan, a.tgl_cari, a.foto, b.polsek, c.stat
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="./style/style.css" />
    <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css" />
    <!-- end of stylesheet -->
</head>

<body>

    <!-- start of navbar -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container-fluid">
            <a href="./index.html" class="navbar-brand">
                <img src="./media/logo.png" height="50" alt="Logo" class="d-inline-block align-top"> Kepolisian Kota Bandung
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
    <div class="content-section">
        <div class="row">
            <div class="col-sm-12">

                <h1>Daftar Pencarian Orang</h1>

                <div class="table-responsive">
                    <table id="db_dpo" class="table table-striped display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama Orang</th>
                                <th>Kejahatan</th>
                                <th>Polsek</th>
                                <th>Status</th>
                                <th>Waktu Hilang/Ditemukan</th>
                                <th>Foto Orang</th>
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
                                    <td><img src="photo/<?= $row['foto'] ?>" alt="Photo" style="width: 100px; height: auto;" /></td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- end of content -->


    <!-- start of footer -->
    <footer class="bg-dark text-center text-white">
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color:  #142c5c;">
            &copy; 2024 Kepolisian Kota Bandung
        </div>
        <!-- Copyright -->
    </footer>
    <!-- end of footer -->

    <!-- start of script -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/v/bs5/dt-2.1.8/datatables.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
    <script>
        $('#db_dpo').DataTable({
            responsive: {
                details: {
                    type: 'column'
                }
            }
        });
    </script>
    <!-- end of script -->
</body>

</html>