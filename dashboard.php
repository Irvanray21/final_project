<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location: dashboard.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laman Logout</title>
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
                    <a href="./dashboard.php" class="nav-item nav-link">Dashboard</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->



    <!-- start of dashboard -->
    <div class="container-fluid py-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 mt-4 mb-3" align="center">
                        <h3 class="text-bold mb-4">Selamat Datang di Dashboard Halaman</h3>
                        <hr class="mt-5 mb-3" />
                        <h4 class="text-bold mb-4" style="color: red;">PENGUMUMAN!</h4>
                        <p style="font-weight: bolder;">Jika POLSEK anda tidak terdapat didalam list POLSEK database, harap hubungi admin di POLRESTABES atau POLRES kota anda untuk menambahkan POLSEK anda kedalam database website.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6" align="center">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Update</h5>
                                    <p class="card-text">Klik di kolom ini untuk mengubah data orang yang dicari.</p>
                                    <a href="./list_edit.php" class="btn btn-primary">Ubah Data</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" align="center">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Keluar</h5>
                                    <p class="card-text">Klik di kolom ini untuk keluar dari mode administrator.</p>
                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Log-out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- end of dashboard -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin ingin log-out?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                        <a href="./logout.php" class="btn btn-primary" type="button">Ya</a>
                    </div>
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
        <script>
            const myModal = document.getElementById('myModal')
            const myInput = document.getElementById('myInput')

            myModal.addEventListener('shown.bs.modal', () => {
                myInput.focus()
            })
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <!-- end of script -->
</body>

</html>