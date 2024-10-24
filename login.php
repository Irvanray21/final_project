<?php
require 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silahkan Masuk</title>
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
                        <a class="nav-link" href="./list.php">Daftar Orang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./login.php">Log-in</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    <!-- Login form -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-bold">Silahkan Log-in Terlebih Dahulu</h5>
                        <form>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="txt_username" placeholder="Username Disini">
                                <label for="txt_username">Username Disini</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="txt_password" placeholder="Password Disini">
                                <label for="txt_password">Password Disini</label>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" 
                                type="submit">Login</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    

    <!-- end of login form -->

    <!-- start of footer -->
    <!-- <footer class="custom-footer fixed-bottom">
        <span>&copy;2024 Kepolisian Indonesia</span>
    </footer> -->
    <!-- end of footer -->
</body>

</html>