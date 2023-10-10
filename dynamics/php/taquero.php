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

session_start();


    $taco_nom = $_SESSION["nombre"];
    $taco_precio = $_SESSION["precio"];
    $taco_descrip = $_SESSION["descripcion"];

    
    


$include = include("./config.php");
$con = connect();

if($include && $con){
    $peticion = "INSERT INTO tacos VALUES (0,'".$taco_nom."',".$taco_precio.",'".$taco_descrip."')";
    $query = mysqli_query($con,$peticion);
    mysqli_close($con);
    echo "<div class = 'centro'><h1>El taco se registro correctamente</h1></div>
<div class = 'centrar'><a href = '../../templates/index.html' ><button>Regresar</button></a></div>";
}else{
    echo "<div class = 'centro'><h1>EL TACO NO SE PUDO REGISTRAR</h1></div>
<div class = 'centrar'><a href = '../../templates/index.html' ><button>Regresar</button></a></div>";
}


?>
</body>
</html>
