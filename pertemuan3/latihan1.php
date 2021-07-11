<?php
    // Pengulangan 
    // for 
    // while 
    // do while 
    // foreach : pengulangan khusus array 

    // for($i=0;$i<5;$i++){
    //     echo "$i </br>";
    // }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- Goals  -->
        <!-- <tr>
            <td>1, 1</td>
            <td>1, 2</td>
            <td>1, 3</td>
            <td>1, 4</td>
            <td>1, 5</td>
        </tr> -->

        <!-- Syntax 1  -->
        <!-- <?php 
            for($i=1;$i<=5;$i++){
                echo "<tr>";
                for($j=1;$j<=5;$j++){
                    echo "<td>$i, $j</td>";
                }
                echo "</tr>";
            }
        ?> -->

        <!-- Syntax 2  -->
        <!-- Ini lebih banyak digunakan nanti  -->
        <!-- <?php for($i=1;$i<=5;$i++) { ?>
            <tr>
                <?php for($j=1;$j<=5;$j++) {?>
                    <td> <?php echo "$i, $j"; ?></td>
                <?php }?>
            </tr>
        <?php }?> -->
        
        <!-- Syntax 2.2  -->
        <!-- Syntax 2 simplified  -->
        <!-- <?php for($i=1;$i<=5;$i++) : ?>
            <tr>
                <?php for($j=1;$j<=7;$j++) :?>
                    <!-- <td> <?php echo "$i, $j"; ?></td>  -->
                    <td> <?= "$i, $j"; ?></td>
                <?php endfor;?>
            </tr>
        <?php endfor ;?> -->

    </table>
</body>
</html>