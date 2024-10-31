<?php


require 'connection.php';


// $_get section
if (isset($_GET['action']) && isset($_GET['id_orang'])) {
    $action = $_GET['action'];
    $id = $_GET['id_orang'];

    switch ($action) {
        case 'delete':
            delete_data($id);
            break;
        case 'edit':
            echo "";
            break;
        default:
            echo "Berhasil";
    }
} else {
    echo "";
}



// update section
function update($data, $data_files)
{
    // var_dump($data_files);
    // die();


    global $connection;

    $filename = $data_files["uploadfile"]["name"];
    $tempname = $data_files["uploadfile"]["tmp_name"];
    $folder = "./photo/" . $filename;


    $id = $data['id_orang'];
    $nama = $data['dpo_nama'];
    $dosa = $data['dpo_dosa'];
    $polsek = $data['dpo_polsek'];
    $status = $data['dpo_status'];
    $date = $data['dpo_date'];
    $foto = $data['dpo_foto'];


    $query = "UPDATE tb_orang SET      
        nama = '$nama',
        kejahatan = '$dosa',
        domisili = '$polsek',
        stat_org = '$status',
        tgl_cari = '$date',
        foto = '$filename'
        WHERE id_orang = '$id'
        ";

    if (move_uploaded_file($tempname, $folder)) {
        $cek_result = mysqli_query($connection, $query);
        return mysqli_affected_rows($connection);
    } else {
        return false;
    }
}

// delete section
function delete_data($id)
{
    global $connection;
    $res = mysqli_query($connection, "DELETE FROM tb_orang WHERE id_orang = " . $id);

    //if true
    if ($res) {
        header("location: list_edit.php?messages=Berhasil Diubah");
    } else {
        //if false
        header("location: list_edit.php?messages=Gagal Diubah");
        exit();
    }
}
