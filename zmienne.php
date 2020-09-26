<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zmienne PHP</title>
</head>
<body>
    Pierwszy plik<br>
    <?php
        $name="Anna";
        echo "WSB<br>";
        echo "WSB: $name<br>";
        echo 'WSB'.'<hr>';

        $text = <<<LABEL
            Imię: $name<br>
        LABEL;

        echo $text;

        // Wersja PHP
        echo PHP_VERSION;
    ?>
</body>
</html>