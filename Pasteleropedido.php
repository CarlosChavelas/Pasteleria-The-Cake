<?php
$Nombre= $_POST['nombre'];
$Teléfono= $_POST['teléfono'];
$Email= $_POST['email'];
$Sabor1= $_POST['sabor1'];
$Sabor2= $_POST['sabor2'];
$Adorno1= $_POST['adorno1'];
$Cantidad1= $_POST['howMany1'];
$Adorno2= $_POST['adorno2'];
$Cantidad2= $_POST['howMany2'];
$Rosetones= $_POST['rosetones'];
$Detalles= $_POST['details'];
?>

<!DOCTYPE html>
<html lang=" en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de pedidos realizados</title>
</head>

<img src="thecake.png" alt="Logo The Cake" width=" 150px">

<h1>Pedidos realizados</h1>


<body>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>E-mail</th>
                <th>Sabor 1</th>
                <th>Sabor 2</th>
                <th>Adorno 1</th>
                <th>Cantidad Adorno 1</th>
                <th>Adorno 2</th>
                <th>Cantidad Adorno 2</th> 
                <th>Rosetones</th>
                <th>Detalles</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $Nombre;?></td>
                <td><?php echo $Teléfono;?></td>
                <td><?php echo $Email;?></td>
                <td><?php echo $Sabor1;?></td>
                <td><?php echo $Sabor2;?></td>
                <td><?php echo $Adorno1;?></td>
                <td><?php echo $Cantidad1;?></td>
                <td><?php echo $Adorno2;?></td>
                <td><?php echo $Cantidad2;?></td>
                <td><?php echo $Rosetones;?></td>
                <td><?php echo $Detalles;?></td>
            </tr>
        </tbody>

    </table>
</body>