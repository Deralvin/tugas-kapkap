<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border=”1px”>
    <tr>
        <th width=”20px”>No</th>
        <th width=”200px”>Minuman</th>
        <th width=”100px”>Harga</th>
        <th>Kadaluarsa</th>
        <th>Action</th>
    </tr>
<?php
    $query = "SELECT * FROM menu";
    $sql = mysqli_query($conn,$query);
    $count = 1;
    while($row = mysqli_fetch_array($sql)){
        
 
?>
    <tr>
        <td><?= $count?></td>
        <td><?= $row['namaminuman']?></td>
        <td>Rp <?= $row['harga']?></td>
        <td><?= $row['kadaluarsa']?></td>
        <td>
            <button>Edit</button>
            <a href="deletemenu.php?id=<?=$row['idminuman']?>">
                <button>Delete</button>
            </a>
        </td>
<?php
    $count++;
   }
?>
</table>
</body>
</html>
