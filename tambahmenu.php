<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="prosestambahmenu.php" method="post">
    <fieldset>
<Legend>Menu</legend>
        <p>Nama Minuman: <input type="text" name="namaminuman" /></p>
        <p>Ukuran: 
            <input type="radio" name="ukuran" value="S"/>S
            <input type="radio" name="ukuran" value="M"/>M
            <input type="radio" name="ukuran" value="L"/>L
        </p>
        <p>Harga: <input type="text" name="harga" /></p>
        <p>Kadaluarsa: <input type="date" name="kadaluarsa" /></p>
<p><input type="submit" value="tambah">
</fieldset>
</form>


</body>
</html>
