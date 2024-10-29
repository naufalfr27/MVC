<?php

session_start();

// cek apakah user sudah login, jika belum akan diarahkan ke halaman login 
if(!isset($_SESSION['username'])){
    header("location: lat3_4d.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Order Form</title>

    <style>
        .custom-form{
            border: 2px solid #007bff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }
    </style>

</head>
<body>
    <div class="container mt-5">
        <div class="custom-form">
        <form action="Lat3_4b.php" method="post">
            <p> Order CD, amount:
                <input type="text" name="cd_order" value="<?php echo isset($_COOKIE['cd_order']) ? $_COOKIE['cd_order'] : 0; ?>" size="2" maxlength="2">
            </p>
            <p> Order DVD, amount:
                <input type="text" name="dvd_order" value="<?php echo isset($_COOKIE['dvd_order']) ? $_COOKIE['dvd_order'] : 0; ?>" size="2" maxlength="2">
            </p>
            <input type="submit" value="Add To Cart" name="submit">
        </form>
        </div>
    </div>
</body>
</html>