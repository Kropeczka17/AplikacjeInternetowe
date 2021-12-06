<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pliki cookies</title>
</head>
<body>
    <h1>Strona z plikami cookies</h1>
    <?php
        setcookie("pismo", "Na skróty", time()+20, "/", "localhost", false,);
        if(isSet($_COOKIE["pismo"]))
        echo "<p>Jesteś naszym stałym klientem.</p>";
        else echo "<p> Witamy po raz pierwszy na naszej stronie.</p>";
        ?>
</body>
</html>