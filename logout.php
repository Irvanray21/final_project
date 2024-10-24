<?php
// start session
session_start();

// hapus session
session_destroy();

header("location: login.php");
exit();
?>