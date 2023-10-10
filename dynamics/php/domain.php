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
    $bandera = 0;
    if(empty($_POST["nombre_taco"]) && empty($_POST["precio_taco"]) && empty($_POST["descripcion_taco"])){

    }else{
        $taco_precio = $_POST["precio_taco"];
        if(is_numeric($taco_precio)){
            session_start();
            $_SESSION["nombre"] = $_POST["nombre_taco"];
            $_SESSION["precio"] = $_POST["precio_taco"];
            $_SESSION["descripcion"]  = $_POST["descripcion_taco"];
            header("Location: taquero.php");
            exit;
        }else{

            echo "<div class = 'centrar'><h1>TAQUERO</h1></div><br>
            <h4 class = 'centrar'>Agregar nuevo taquito:</h4>
            <br> 
            <div class = 'centrar'>
            <form action = '".$_SERVER['PHP_SELF']."' method = 'POST'>
                  <label>Tipo de Taco:</label>
                  <input type = 'text' name = 'nombre_taco' required></input>
                  <br><br>
                  <label>Precio:        </label>
                  <input type = 'text' name = 'precio_taco' required></input><p> Lo que puso no es un dato numerico, ponga un numero</p
                  <br><br>
                  <label>Descripcion:       </label>
                  <input type = 'text' name = 'descripcion_taco' required></input>
                  <br>
                  <br>
                  <button type = 'submit'>Enviar</button>
            </form>
            <br>
                  <br><br>
                  <br>
            <a href='../../templates/index.html'>
      <button>Atras</button>
  </a></div>";

  $bandera = 1;
            
        }
        
    }
    if($bandera != 1){
    $user = $_POST["user"];
    
    if($user == "taquero"){
        $user_num = 1;
    }else if($user == "comensal"){
        $user_num = 2;
    }

    if($user_num == 1){
       
        echo "<div class = 'centrar'><h1>TAQUERO</h1></div><br>
              <h4 class = 'centrar'>Agregar nuevo taquito:</h4>
              <br> 
              <div class = 'centrar'>
              <form action = 'domain.php' method = 'POST'>
                    <label>Tipo de Taco:</label>
                    <input type = 'text' name = 'nombre_taco' required></input>
                    <br><br>
                    <label>Precio:        </label>
                    <input type = 'text' name = 'precio_taco' required></input>
                    <br><br>
                    <label>Descripcion:       </label>
                    <input type = 'text' name = 'descripcion_taco' required></input>
                    <br>
                    <br>
                    <input type='hidden' name='user' value='".$user."'>
                    <button type = 'submit'>Enviar</button>
              </form>
              <br>
                    <br><br>
                    <br>
              <a href='../../templates/index.html'>
        <button>Atras</button>
    </a></div>";

    }else if($user_num == 2){

        header("Location: comensal.php");
        exit();
    }

    
}
}
?>

</body>
</html>

