<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Variable dan kondisi -->
    <?php

    $nama = "Naufal";
    $prodi = "Teknologi Informasi";
    $semester = 3;
    $angkatan = 23;
    $usia = 20;

    echo "Halo, nama saya $nama dari prodi $prodi semester $semester angkatan $angkatan";
    echo "<br>";

    if($usia %2 != 0){
        echo "umur saya tahun ini ganjil";
    } else{
        echo "umur saya tahun ini genap";
    }

    echo "<br>";
    // cara lain
    // echo "<br>";
    // echo ($usia %2 != 0) ? "umur saya tahun ini ganjil" : "umur saya tahun ini genap";

    // looping
    // <?php
    //     for($i = 1; $i <= 100; $i++){
    //         echo "<tr>";
    //         echo "<td>" .$i. "</td>";
    //         echo "<td>Naufal</td>";
    //         echo "<td>Jakarta</td>";
    //         echo "</tr>";
    //     }
    //        
    ?>

    <br>
    <!-- looping -->
    <table border="1">
        <tr>
            <td>No. </td>
            <td>Nama</td>
            <td>Alamat</td>
        </tr>
        <?php for($i = 1; $i <= 100; $i++) : ?>
        <tr>
            <td><?php echo $i ?></td>
            <td>Naufal</td>
            <td>jakarta</td>
        </tr>
        <?php endfor; ?>
    </table>

    <br>
    <!-- Arrays -->
     <!-- foreach adalah struktur perulangan di PHP yang digunakan untuk mengiterasi elemen-elemen dari array atau objek.  -->
    <?php 
    $teman = array("Habibi", "Yahya", "Cleva", "Damar", "Ian");    
    ?>
    <table border="1">
        <tr>
            <td>No.</td>
            <td>Nama</td>
        </tr>
        <?php 
        $no = 1;
        foreach($teman as $name):
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $name ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>