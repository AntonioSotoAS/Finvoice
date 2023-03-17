<?php






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="index.php">
        <label>Escribe el texto para contar los caracteres:</label>
        <input type="text" name="texto">
        <button type="submit" name="contar">Contar</button>
    </form>
    <h1><?php
        if(isset($_POST["texto"])){
        $texto = $_POST["texto"];
        echo "La cantidad de Caracteres del texto es de = ".$cantidad_caracteres=strlen(str_replace(" ","",$texto));
        }
    ?></h1>
</body>

</html>