<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrasy Associative</title>
</head>
<body>
    <?php 
    $data = ["1001" => "Naufal",
             "1002" => "Fadhil",
             "1003" => "Rizqi",
             "1004" => "Nadira"];
    ?>

    <table border="1" style="border-collapse: collapse;">
        <tr>
            <td>No</td>
            <td>NIM</td>
            <td>Nama</td>
        </tr>
        <?php 
        $no = 1;
        foreach ($data as $nim => $nama):
        ?>
        <!-- <tr style:"background:<php echo $nim %2 == 0 ? "white" : "grey" ?> -->
        <tr <?php if ($nim %2 != 0) echo 'style="background-color: grey"'; ?> >
            <td><?php  echo $no++; ?></td>
            <td><?php echo $nim ?></td>
            <td><?php echo $nama ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>