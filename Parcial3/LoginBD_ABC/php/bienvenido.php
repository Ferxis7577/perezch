<?php
    session_start();
    if(isset($_SESSION["logged in"])|| $_SESSION["loggedin"]!==true){
        header("location: index.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div class="ctn-welcome">
        <img src="../img/succes.jpg" alt="" class="logo-welcome">
        <h1 class="title-welcome">Bienvenid@ Usuario  <?php echo $_SESSION['idusuario']?></br>
        <b> LO HA LOGRADOOOOO!</b>
        </h1>
        <a href="close_session.php"class="close-session">Cerrar Sesion</a>
        <a href="ABC.php"class="close-session">Ir al ABC</a>
    </div>
    
</body>
</html>
