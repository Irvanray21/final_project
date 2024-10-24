<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Profil</title>
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
            <a class="navbar-brand" href="./index-in.html">
                <img src="./media/logo.png" width="50" height="50" class="d-inline-block align-top" alt="logo">
                Kepolisian Indonesia
            </a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-2">
                    <li class="nav-item">
                        <a class="nav-link" href="./list_edit.php">Ubah Daftar Orang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./dashboard.php">Log-out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <h3 class="mt-4 mb-3">Mutasi Data Orang</h3>
                <a href="./list_edit.php" class="d-block mb-4">Kembali</a>

                <div class="card">
                    <div class="card-body">
                        <form method="post">
                            <div class="mb-3">
                                <label>Nama</label>
                                <input class="form-control" type="text" name="dpo_nama"
                                    placeholder="Masukan Nama Disini"
                                    autocomplete="off"/>
                            </div>

                            <div class="mb-3">
                                <label>Kejahatan</label>
                                <input class="form-control" type="text" name="dpo_dosa"
                                    placeholder="Jenis Kejahatan"
                                    autocomplete="off"/>
                            </div>

                            <div class="mb-3">
                                <label>Polsek</label>
                                <input class="form-control" type="text" name="dpo_polsek"
                                    placeholder="Polsek Asal"
                                    autocomplete="off"/>
                            </div>

                            <div class="mb-3">
                                <label>Status</label>
                                <input class="form-control" type="text" name="dpo_status"
                                    placeholder="Status DPO"
                                    autocomplete="off"/>
                            </div>

                            <div class="mb-3">
                                <label>Waktu Hilang/Ditemukan</label>
                                <input class="form-control" type="date" name="dpo_date"
                                    autocomplete="off"/>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary"
                                    name="dpo_update">
                                    Mutasi Data
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- edit form -->

    <!-- end of edit form -->

    <!-- start of footer -->
    <!-- <footer class="custom-footer fixed-bottom">
        <span>&copy;2024 Kepolisian Indonesia</span>
    </footer> -->
    <!-- end of footer -->

    <!-- start of script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- end of script -->
</body>

</html>