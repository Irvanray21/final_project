<?php

//starting the session
session_start();

if (isset($_SESSION['username'])) {
    header("location: dashboard.php");
    exit();
}

$user = [
    'polisi1' => 'jedarjedur',
    'admin1' => 'notadmin'
];


if (isset($_POST['submit_login'])) {

    //get data global from $_post variable
    $username = $_POST['txt_username'];
    $password = $_POST['txt_password'];

    if (isset($user[$username]) && ($user[$username]) === $password) {
        //true
        $_SESSION['username'] = $username;
        header("location: dashboard.php");
        exit();
    } else {
        //false
        $err = "Password atau Username salah.";
    }
}

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
    <?php if (isset($err)): ?>
        <p style="color: red; margin-bottom: 16px"><?= $err; ?></p>
    <?php endif; ?>
    <!-- Login form -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-bold">Silahkan Log-in Terlebih Dahulu</h5>
                        <form method="POST">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="txt_username" placeholder="Username Disini">
                                <label for="txt_username">Username Disini</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="txt_password" placeholder="Password Disini">
                                <label for="txt_password">Password Disini</label>
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold"
                                    type="submit" name="submit_login">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- end of login form -->

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <!-- end of script -->
</body>

</html>