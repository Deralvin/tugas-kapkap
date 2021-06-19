<?php
    include 'koneksi.php';

    $minuman = $_POST['namaminuman'];
    $ukuran = $_POST['ukuran'];
    $harga =$_POST['harga'];
    $kadaluarsa = $_POST['kadaluarsa'];
    
    $query = "INSERT INTO menu(`namaminuman`, `ukuran`, `harga`, `kadaluarsa`) VALUES ('$minuman','$ukuran','$harga','$kadaluarsa')";
    $sql = mysqli_query($conn,$query);
    if($query){
        echo "Data berhasil disimpan";
    }else{
        echo "Data Menu gagal disimpan";
    }
?>