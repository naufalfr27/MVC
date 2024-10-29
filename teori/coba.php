<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php 
    
    $data = "data" . "baru";
    $what = "apa";
    $what = 35;
    $what = array("apa", 35);

    $kata = "I LOVE U NADIRAAA <3";
    $subkata = explode(" ", $kata); //digunakan untuk memisahkan string $kata menjadi array kata-kata berdasarkan spasi.

    for($i = 1; $i <= count($subkata); $i++){ //menentukan berapa banyak kata yang akan dicetak dalam setiap baris.
        for($j = 0; $j < $i; $j++){ //mencetak kata-kata sesuai jumlah yang ditentukan oleh loop luar.
            echo $subkata[$j] . " ";
        }
        echo "<br>";
    }        
    
    
    ?>
</body>
</html>