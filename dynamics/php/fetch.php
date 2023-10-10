<?php

$include = include("config.php");

$con = connect();

if($con && $include){

    $peticion = "SELECT id_taco,nombre,precio,info FROM tacos";

    $query = mysqli_query($con,$peticion);

    $tacos_array = array();

    while($fila = mysqli_fetch_assoc($query)){
        $datos[] = $fila;
    }

    echo json_encode($datos);
    mysqli_close($con);
}

?>