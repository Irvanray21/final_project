<?php
// connection section
$hostname = 'localhost';
$user  = 'root';
$password = '';
$db_name = 'db_dpo';

$connection = mysqli_connect($hostname, $user, $password, $db_name);

// function section
function myquery($query){
    global $connection;
    $res = mysqli_query($connection, $query);
    $returns = [];

while ($data = mysqli_fetch_assoc($res)) {
        $returns[] = $data;
    }

    return $returns;
}



?>