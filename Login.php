<?php
include "koneksi.php";
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
<form action="formprocessor.html" method="get">
    <fieldset>
        <Legend>Login</legend>
        <p>Username: <input type="text" name="Username" /></p>
        <p>Password: <input type="text" name="Password" /></p>
        <p><input type="button" value="Login">
</fieldset>
</form>
</body>
</html>