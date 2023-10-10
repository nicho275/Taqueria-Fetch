<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taqueria</title>
    <link rel="icon" href="../../statics/media/icono.jpg">
    <link rel="stylesheet" href="../../statics/css/style.css">
</head>
<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id_taco"];
}

$include = include("config.php");
$con = connect();

if($con && $include){
    $peticion = "INSERT INTO pedidos VALUES (0,".$id.")";
    $query = mysqli_query($con,$peticion);
    mysqli_close($con);
    echo "<div class = 'centro'><h1>El pedido se realizo correctamente</h1></div>
<div class = 'centrar'><a href = '../../templates/index.html' ><button>Regresar</button></a></div>";
}else{
    echo "<div class = 'centro'><h1>El PEDIDO NO SE PUDO REALIZAR</h1></div>
    <div class = 'centrar'><a href = '../../templates/index.html' ><button>Regresar</button></a></div>";

}

?>

</body>
</html>

