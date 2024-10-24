<?php

// connection section

$hostname = 'localhost';
$user  = 'root';
$password = '';
$db_name = 'db_dpo';


$connection = mysqli_connect($hostname, $user, $password, $db_name);



// query section
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

//update data

function update ($data)
{
    global $connection;

    $nama = $connection -> real_escape_string($data['dpo_nama']);
    $dosa =  $data['dpo_dosa'];
    $polsek = $data['dpo_polsek'];
    $status = $data['dpo_status'];
    $tgl = $data['dpo_date'];

$query = "UPDATE tb_orang SET
nama = '$nama',
kejahatan = '$dosa',
domisili = '$polsek',
stat_org = '$status',
tgl_cari = '$tgl'
WHERE id = $id

";

    mysqli_query($connection, $query);
    return mysqli_affected_rows($connection);
}



?>