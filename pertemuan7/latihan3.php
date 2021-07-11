<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <!-- Kalo actionnya kosong, defaultnya dia ngirim ke halaman sendiri  -->
    <!-- kalo method kosong, defaultnya dia make GET  -->
    <!-- <form action="latihan4.php" method="POST">
        Masukkan nama
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form> -->

    <?php if(isset($_POST["submit"])) : ?>
        <h1>Selamat datang <?= $_POST["nama"] ?></h1>
    <?php endif ;?>
    
    <form action="" method="POST">
        Masukkan nama
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>
</html>