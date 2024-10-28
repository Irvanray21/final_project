<?php
//edit section
require 'config.php';


$data_polsek = myquery("SELECT * FROM tb_polsek");
$data_status = myquery("SELECT * FROM tb_status");

if (isset($_POST['dpo_submit'])) {
    $nama = $_POST['dpo_nama'];
    $dosa = $_POST['dpo_dosa'];
    $polsek = $_POST['dpo_polsek'];
    $status = $_POST['dpo_status'];
    $date = $_POST['dpo_date'];

    /// Insert
    $query_insert = "INSERT INTO tb_orang(nama, kejahatan, domisili, stat_org, tgl_cari)
    VALUE ('$nama', '$dosa', '$polsek', '$status', '$date')";

    $res = mysqli_query($connection, $query_insert);

    if ($res) {
        header("Location: list_edit.php");
        exit();
    } else {
        $err = "Data gagal di input";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Orang</title>
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

    <!-- edit form -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <h3 class="mt-4 mb-3">Tambah Data Orang</h3>

                <?php if (isset($err)): ?>
                    <p><?= $err; ?></p>
                <?php endif; ?>

                <div class="card">
                    <div class="card-body">

                        <form method="post">
                            <div class="mb-3">
                                <label>Nama</label>
                                <input class="form-control" type="text" name="dpo_nama"
                                    placeholder="Masukan Nama Disini"
                                    autocomplete="off" />
                            </div>

                            <div class="mb-3">
                                <label>Kejahatan</label>
                                <input class="form-control" type="text" name="dpo_dosa"
                                    placeholder="Jenis Kejahatan"
                                    autocomplete="off" />
                            </div>

                            <div class="mb-3">
                                <label>Polsek</label>
                                <select class="form-control" type="text" name="dpo_polsek">
                                <?php foreach ($data_polsek as $option): ?>
                                    <option value="<?= $option['id_polsek'] ?>">
                                        <?= $option['polsek'] ?>
                                    </option>
                                <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label>Status</label>
                                <select class="form-select" name="dpo_status">
                                    <?php foreach ($data_status as $option): ?>
                                        <option value="<?= $option['id_status'] ?>">
                                            <?= $option['stat'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label>Waktu Hilang/Ditemukan</label>
                                <input class="form-control" type="date" name="dpo_date"
                                    autocomplete="off" />
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary"
                                    name="dpo_submit">
                                    Tambahkan Orang
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
        <a href="./list_edit.php" class="btn btn-warning mt-3">Kembali</a>
    </div>
    
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