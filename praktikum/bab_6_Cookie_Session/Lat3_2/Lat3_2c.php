<?php

session_start();

if(empty($_SESSION["nama"])){
    echo "Maaf, anda belum memasukan nama";
} else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <title>Hello, <?php echo $_SESSION["nama"]; ?></title>
</head>
<body>
    Selamat datang <?php echo $_SESSION["nama"]; ?>
    <br>
    Anda bisa masuk halaman ini karena anda telah menulis nama.
    <form id="forml" name="forml" method="post" action="Lat3_2d.php">
        <input type="submit" name="button" id="button" value="Keluar">
    </form>
</body>
</html>

<?php } ?>