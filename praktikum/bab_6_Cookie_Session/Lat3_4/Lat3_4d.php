<?php

session_start();

// jika sudah login
if(isset($_SESSION['usernme'])){
    header("location: Lat3_4a.php");
    exit();
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // validasi username dan password
    if($username == "admin" && $password == "admin"){
        $_SESSION['usernme'] = $username;
        $_SESSION['password'] = $password;
        header("location: Lat3_4a.php");
        exit();
    } else{
        $error = "Username atau password salah!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>

    <style>
        .custom-login{
            border: 2px solid #007bff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }
        .custom-login h2{
            font-size: 1.75rem;
        }
    </style>

</head>
<body>
<div class="container mt-5">
        <div class="custom-login">
            <h2 class="mb-4 text-center">Login</h2>
            <?php if(isset($error)){ echo "<div class='alert alert-danger'>$error</div>"; } ?>
            <form action="Lat3_4a.php" method="post">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" name="username" placeholder="name@example.com" required>
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>