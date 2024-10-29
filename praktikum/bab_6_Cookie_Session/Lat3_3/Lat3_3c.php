<?php
session_start();


// Mengecek apakah session 'data' ada
if(isset($_SESSION['data'])){
    $data = $_SESSION['data'];

    // Menampilkan data yang tersimpan di dalam session
    $name = $data['nama'];
    $nim = $data['nim'];
    $number = $data['angka'];
    $faktorial = $data['faktorial'];
} else {
    echo "Tidak ada data yang tersimpan dalam session.";
    exit;
}

// Menghapus seluruh variabel yang tersimpan dalam session
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Lat3_3c</title>
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
            <h3 class="text-center">Data dari Session</h3>
            <p>Nama: <?php echo $name; ?></p>
            <p>NIM: <?php echo $nim; ?></p>
            <p>Angka yang dimasukkan: <?php echo $number; ?></p>
            <p>Faktorial: <?php echo $faktorial; ?></p>
        </div>
    </div>
</body>
</html>

