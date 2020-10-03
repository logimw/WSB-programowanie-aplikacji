<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <p>Początek pliku</p>
    </div>
    <main>
        <?php 
            include 'test.txt';
            $name = "Jan";
            include '3a_plik.php';
        ?>
    </main>
    <div>
        <p>Koniec pliku</p>
    </div>
</body>
</html>