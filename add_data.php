<?php
//edit section
require 'connection.php';


$data_polsek = myquery("SELECT * FROM tb_polsek");
$data_status = myquery("SELECT * FROM tb_status");

if (isset($_POST['dpo_submit'])) {
    $nama = $_POST['dpo_nama'];
    $dosa = $_POST['dpo_dosa'];
    $polsek = $_POST['dpo_polsek'];
    $status = $_POST['dpo_status'];
    $foto = $_POST['dpo_foto'];
    $date = $_POST['dpo_date'];

    /// Insert
    $query_insert = "INSERT INTO tb_orang(nama, kejahatan, domisili, stat_org, foto, tgl_cari)
    VALUE ('$nama', '$dosa', '$polsek', '$status', '$foto', '$date')";

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
            <a href="./index-in.html" class="navbar-brand">
                <img src="./media/logo.png" height="50" alt="Logo" class="d-inline-block align-top"> Kepolisian Indonesia
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="./list_edit.php" class="nav-item nav-link">Edit Data</a>
                    <a href="./dashboard.php" class="nav-item nav-link">Dashboard</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    <!-- edit form -->
    <div class="container-fluid">
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
                                <label>Foto Orang</label><br/>
                                <div class="form-group">
                                    <input type="file" name="dpo_foto"/>
                                </div>
                            </div>

                            <br/>
                            <br/>

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
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- end of script -->
</body>

</html>