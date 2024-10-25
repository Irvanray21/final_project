<?php
//edit section
require 'config.php';


$_GET['action'] = 'edit';

$id = $_GET['id'];

$data_orang = myquery("SELECT * FROM tb_orang WHERE id_orang = $id");
$data_polsek = myquery("SELECT * FROM tb_polsek");
$data_status = myquery("SELECT * FROM tb_status");

if (isset($_POST['dpo_update'])) {
    if (update($_POST) > 0) {
        echo "<script> 
            alert('Data berhasil diubah');
            document.location.href = 'list_edit.php';
            </script>";
    } else {
        echo "<script> 
            alert('Data gagal diubah');
            </script>";
    }
}
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

    <!-- edit form -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <h3 class="mt-4 mb-3">Mutasi Data Orang</h3>
                <a href="./list_edit.php" class="d-block mb-4">Kembali</a>

                <?php if (isset($err)): ?>
                    <p><?= $err; ?></p>
                <?php endif; ?>

                <div class="card">
                    <div class="card-body">

                        <form method="post">
                            <input type="hidden" value="<?= $id ?>" name="id_orang" />
                            <div class="mb-3">
                                <label>Nama</label>
                                <input class="form-control" type="text" name="dpo_nama"
                                    placeholder="Masukan Nama Disini"
                                    autocomplete="off" value="<?= $data_orang[0]['nama']; ?>" />
                            </div>

                            <div class="mb-3">
                                <label>Kejahatan</label>
                                <input class="form-control" type="text" name="dpo_dosa"
                                    placeholder="Jenis Kejahatan"
                                    autocomplete="off" value="<?= $data_orang[0]['kejahatan']; ?>" />
                            </div>

                            <div class="mb-3">
                                <label>Polsek</label>
                                <select class="form-select" name="dpo_polsek">
                                    <?php foreach ($data_polsek as $option): ?>
                                        <option value="<?= $option['id_polsek'] ?>" <?php echo ($data_orang[0]['domisili'] === $option['id_polsek'] ? 'selected' : ''); ?>>
                                            <?= $option['polsek'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label>Status</label>
                                <select class="form-select" name="dpo_status">
                                    <?php foreach ($data_status as $option): ?>
                                        <option value="<?= $option['id_status'] ?>" <?php echo ($data_orang[0]['stat_org'] === $option['id_status'] ? 'selected' : ''); ?>>
                                            <?= $option['stat'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label>Waktu Hilang/Ditemukan</label>
                                <input class="form-control" type="date" name="dpo_date"
                                    autocomplete="off" value="<?php echo $data_orang[0]['tgl_cari'] ?>" />
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