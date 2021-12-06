<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $zmienna1 = $_POST['irena'];
        if($zmienna1 >= -5 && $zmienna1 < 10) echo "Wartość $zmienna1 należy do przedziału <-5, 10>";
        else echo "Wartość $zmienna1 nie należy do przedziału <-5, 10>";
        //komentarz
        /*komentarz*/
        #komentarz
        // <!-- nie komentarz -->
    ?>
</body>
</html>