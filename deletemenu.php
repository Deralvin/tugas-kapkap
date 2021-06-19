<?php
    include 'koneksi.php';
    $idminuman = $_GET['id'];

    $sql = "DELETE FROM menu WHERE idminuman = '$idminuman'";
    $query = mysqli_query($conn,$sql);
    if($query){
        echo "Data berhasil di delete";
    }else{
        echo "data gagal didelete".  mysqli_error($conn);
    }
?>