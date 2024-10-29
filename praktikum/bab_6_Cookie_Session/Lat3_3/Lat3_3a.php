<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Lat3_3a</title>

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
            <h2 class="mb-4 text-center">Menghitung Bilangan Faktorial</h2>
            <form method="post" action="Lat3_3b.php">
                <div class="row mb-3">
                    <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" name="name" placeholder="Masukkan nama" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNIM" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNIM" name="nim" placeholder="Masukkan NIM" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Angka</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputNumber" name="number" placeholder="Masukkan angka" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-primary">Hitung Faktorial</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>