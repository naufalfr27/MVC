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
            <p><u>Order Summary</u></p>

            <?php

            $num_cd_order = $_COOKIE['cd_order'];
            $num_dvd_order = $_COOKIE['dvd_order'];
            echo "Ordered CD: ".$num_cd_order." pieces <br>";
            echo "Ordered DVD: ".$num_dvd_order." pieces <br>";

            ?>

        </div>
    </div>
</body>
</html>