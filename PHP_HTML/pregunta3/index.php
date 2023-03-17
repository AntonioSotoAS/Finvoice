<?php
$empleados = [

    ["Nombre" => "Marcelo", "Apellido" => "Velez", "Edad" => 25, "Area" => "Administración", "Correo" => "marceloVelez@hotmail.com",], ["Nombre" => "Alberto", "Apellido" => "Unbertini", "Edad" => 36, "Area" => "RRHH", "Correo" => "albert.unbert@hotmail.com",], ["Nombre" => "Isidora", "Apellido" => "Gutierrez", "Edad" => 33, "Area" => "Desarrollador", "Correo" => "isi_gutie@gmail.cl",], ["Nombre" => "Sebastian", "Apellido" => "Jimenez", "Edad" => 21, "Area" => "No Asignada", "Correo" => "s.jimenez@gmail.cl",], ["Nombre" => "Manuel", "Apellido" => "Osorio", "Edad" => 19, "Area" => "Desarrollador", "Correo" => "manu007@outlook.com",], ["Nombre" => "Alonso", "Apellido" => "Villa", "Edad" => 47, "Area" => "Product Manager", "Correo" => "alvilla@hotmail.com",]

];

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

    <table border="1">
        <tr>
            <th>Nombre y Apellido</th>
            <th>Edad</th>
            <th>Area</th>
            <th>Correo</th>
        </tr>
        <?php for( $i = 0;$i<count($empleados);$i++):?>
        <?php if ($i % 2 != 0): ?>
        <tr>
            <th><?= $empleados[$i]["Nombre"]." ".$empleados[$i]["Apellido"]?></th>
            <th><?= $empleados[$i]["Edad"]?></th>
            <th><?= $empleados[$i]["Area"]?></th>
            <th><?= $empleados[$i]["Correo"]?></th>
        </tr>
        <?php endif; ?>
        <?php endfor;?>
    </table>

</body>

</html>