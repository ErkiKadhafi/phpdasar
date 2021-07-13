<?php 
    require "functions.php";

    // cek apakah sudah tekan tombol submit 
    if( isset($_POST["login"]) ){
        $username = $_POST["username"];

        if(login($_POST)){
            header("Location: index.php");
            exit;
        }
        
        $error = true;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman login</title>
    <style>
        li{
            margin: 0 0 15px 0;
        }
        h4{
            color: red;
            font-style: italic;
        }
    </style>
</head>
<body>
    <h1>Halaman login</h1>

    <?php if(isset($error)) : ?>
        <h4>Wrong username or password !</h4>
    <?php endif; ?>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>
</body>
</html>