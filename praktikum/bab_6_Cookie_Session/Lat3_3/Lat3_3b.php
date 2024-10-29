<?php

session_start();

function faktorial($number){
    if($number == 1 || $number == 0){
        return 1;
    } else{
        return $number * faktorial($number - 1);
    }    
}

$name = $_POST["name"];
$nim = $_POST["nim"];
$number = $_POST["number"];
$faktorial = faktorial($number);

$data = [
    "nama" => $name, 
    "nim" => $nim,
    "angka" => $number,
    "faktorial" => $faktorial
];

$_SESSION["data"] = $data;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Lat3_3b</title>
</head>
    <style>
        .custom-form{
            border: 2px solid #007bff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }
    </style>
<body>
    <div class="container mt-5">
        <div class="custom-form">            
            <h3 class="text-center">Hasil Faktorial</h3>
            <form method="post" action="Lat3_3b.php">
                <p>Angka: <?php echo $number ?></p>
                <p>Faktorial: <?php echo $faktorial ?></p>
                <div class="row">
                    <div class="col-sm-10 offset-sm-2">
                        <a href="Lat3_3c.php" class="btn btn-primary">Ke halaman Lat3_3c</a>
                    </div>
                </div>
            </form>
        </div>
    </div>    
</body>
</html>