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

    // file check
    $foto = isset($data['dpo_foto']) ? $data['dpo_foto'] : null;

    if ($filename) {
        // update with photo
        if (move_uploaded_file($tempname, $folder)) {
            $query = "UPDATE tb_orang SET      
                nama = '$nama',
                kejahatan = '$dosa',
                domisili = '$polsek',
                stat_org = '$status',
                tgl_cari = '$date',
                foto = '$filename'
                WHERE id_orang = '$id'";
        } else {
            return "Gagal meng-upload file";
        }
    } else {
        // update without photo
        $query = "UPDATE tb_orang SET      
            nama = '$nama',
            kejahatan = '$dosa',
            domisili = '$polsek',
            stat_org = '$status',
            tgl_cari = '$date'
            WHERE id_orang = '$id'";
    }

    // return query
    $cek_result = mysqli_query($connection, $query);
    if (!$cek_result) {
        return "Query error: " . mysqli_error($connection);
    }

    return mysqli_affected_rows($connection);
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



?>