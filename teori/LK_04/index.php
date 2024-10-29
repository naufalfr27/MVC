<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LK-04</title>

    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: black;
            color: white;
        }
        td {
            background-color: #f2f2f2;
        }
        .form-container {
            text-align: center;
            margin-top: 20px;
        }
    </style>
    
</head>
<body>  
    <table>
        <tr>
            <th>Angka Mutu</th>
            <th>Huruf Mutu</th>
            <th>Kisaran Mutu</th>
        </tr>

        <?php
        $data = [
            ["angka" => "≥ 3.75", "huruf" => "A", "kisaran" => ">80 - 100"],
            ["angka" => "3,25 - 3.74", "huruf" => "B+", "kisaran" => ">75 - 80"],
            ["angka" => "2.75 - 3.24", "huruf" => "B", "kisaran" => ">69 - 75"],
            ["angka" => "2.25 - 2.74", "huruf" => "C+", "kisaran" => ">60 - 69"],
            ["angka" => "1.75 - 2.24", "huruf" => "C", "kisaran" => ">55 - 60"],
            ["angka" => "1.25 - 1.74", "huruf" => "D+", "kisaran" => ">50 - 55"],
            ["angka" => "0.75 - 1.24", "huruf" => "D", "kisaran" => ">44 - 50"],
            ["angka" => "< 0.75", "huruf" => "E", "kisaran" => "0 - 44"],
        ];
        ?>

        <?php foreach ($data as $row): ?>
        <tr>
            <td><?php echo $row["angka"] ?></td>
            <td><?php echo $row["huruf"] ?></td>
            <td><?php echo $row["kisaran"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <!-- Inputan user -->
    <div class="form-container">
        <form action="" method="post">
            <label for="nilai">Masukan Nilai</label>
            <input type="number" name="nilai" id="nilai" min="0" max="100" required>
            <button type="submit">Submit</button>
        </form>
    </div>
    
    <?php
    function getHurufMutu($nilai) {
        switch (true){
            case ($nilai >  80):
                return "A";
                break;
            case ($nilai >  75):
                return "B+";
                break;
            case ($nilai > 69):
                return "B";
                break;
            case ($nilai > 60):
                return "C+";
                break;
            case ($nilai > 55):
                return "C";
                break;
            case ($nilai > 50):
                return 'D+';
                break;
            case ($nilai > 44):
                return 'D';
                break;
            default:
                return 'E';
        }
    }

    // mengecek apakah form sudah di submit'
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // mendapatkan nilai dari input
        $nilai = $_POST["nilai"];
        // mendapatkan huruf mutu berdasarkan nilai
        $hurufMutu = getHurufMutu($nilai);

        echo " <div class='form-container'><h3> Nilai Anda: $nilai memiliki Huruf Mutu: $hurufMutu </h3></div>";
    }
    ?>    

</body>
</html>