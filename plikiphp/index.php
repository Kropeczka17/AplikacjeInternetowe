<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tu testujemy funkcje plikow i katalogów w PHP</h1>
    <?php
        include('include.php');
        require('require.php');
        if(file_exists('include.php'))
            echo "Plik include.php został znaleziony\n";
        echo "Rozmiar tego pliku wynosi ".filesize('include.php');
        touch("touch.php");
        unlink('require.php');
        mkdir('toUtworzonyFolder');
        
    ?>
</body>
</html>