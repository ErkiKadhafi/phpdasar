<?php  
    // cek dia udah pernah neken submit pa blm 
    if(isset($_POST["submit"])){
        if($_POST["username"] == "admin" && 
            $_POST["password"] == "123"){
            // cek apakah id sama pass nya bener 
            header("Location: admin.php");
            exit;
        }else{
            // kalo salah tampil pesan 
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Please enter username and password!</h1>
    <?php if( isset($error) ) : ?>
        <p style="color:red; font-style: italic;">Please enter the correct Username and Password !</p>
    <?php endif; ?>
    <ul>
        <form action="" method="POST">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>    
            <br>
            <li>
                <label for="password">Password : </label>
                <input type="text" name="password" id="password">
            </li> 
            <br> 
            <li>
                <button type="submit" name="submit">Login</button>
            </li>  
        </form>
    </ul>
</body>
</html>