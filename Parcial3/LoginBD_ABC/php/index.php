<?php
    require "code-login.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0,
    initial scale 1.0,maximum scale 1.0,minimum scale 1.0">
    <title>Login</title>
    <link rel="stylesheet" href ="../css/estilos.css">
</head>
<body>
    <div class="container-all">
        <div class="ctn-form">
            <img src="..//img/login.gif" alt="" class="logo">
            <h1 class="title"> Iniciar Sesion</h1>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <label for="">Email</label>
                <input type="text" name="email">
                <span class= "msg-error"><?php echo $email_err ?> </span>
                <label for="">Contraseña</label>
                <input type="password" name="password">
                <span class= "msg-error"><?php echo $password_err ?></span>

                <input type="submit" value="Iniciar">
                </label>
            </form>
            <span class="text-footer"> No te has registrado?
                <a href ="register.php">Registrate!</a>
            </span>
        </div>
        <div class ="ctn-text">
            <div class="capa"></div>
            <h1 class="title-description"> Bienvenido al Sistema de Usuarios</h1>
            <p class="text-description"> Este sistema esta hecho con los fines de ayudar a los encargados en el area administrativa
                para tener un mejor control de los empleados que trabajan en esta area
            </p>
        </div>

    </div>
    
</body>
</html>