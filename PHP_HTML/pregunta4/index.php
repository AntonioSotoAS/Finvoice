<?php

$personas = array("Juan" => 8, "Pérez" => 15, "Sebastian" => 5, "Hans" => 9, "Gabriel" => 7, "Rocío" => 5);

$max_valor = 0;
$max_key = "";
$keys = array_keys($personas);


for($i = 0;$i<count($keys);$i++){
    $key = $keys[$i];
    $valor = $personas[$key];

    if($valor > $max_valor){
        $max_valor = $valor;
        $max_key = $key;
    }
}

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
    <h1><?= $max_key . " = " . $max_valor; ?></h1>
</body>
</html>