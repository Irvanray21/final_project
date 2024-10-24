<?php

// connection section

$hostname = 'localhost';
$user  = 'root';
$password = '';
$db_name = 'db_dpo';


$connection = mysqli_connect($hostname, $user, $password, $db_name);



// insert to table section
$data = myquery("SELECT a.id_orang, a.nama, a.kejahatan, a.tgl_cari, b.polsek, c.stat
From tb_orang as a
JOIN tb_polsek as b
ON a.domisili = b.id_polsek

JOIN tb_status as c
on a.stat_org = c.id_status");


// function section

function myquery($query)
{
    global $connection;
    $res = mysqli_query($connection, $query);
    $returns = [];

    while ($data = mysqli_fetch_assoc($res)) {
        $returns[] = $data;
    }
    return $returns;
}



?>