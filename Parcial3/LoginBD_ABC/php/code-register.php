<?php
    require_once "connection.php";

    $username=$email=$password="";
    $username_err=$email_err=$password_err="";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        //validando nombre de usuario
        if(empty(trim($_POST["username"]))){
            $username_err="Por favor ingrese un nombre de usuario";
        }
        else{
            $sql="select idusuario from usuarios where correo =?";
        
            if($stmt=mysqli_prepare($link,$sql)){
            mysqli_stmt_bind_param($stmt,"s",$param_username);

            $param_username=trim($_POST["username"]);
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt)==1){
                    $username_err="ESTE NOMBRE DE USUARIO YA ESTA EN USO";
                }
                else{
                    $username=trim($_POST["username"]);
                }
            }else{
                echo"Ups!,Algo salio mal,intenta mas tarde";
            }
        }
    }

    //validando correo
    if(empty(trim($_POST["email"]))){
        $email_err="Por favor ingrese un correo";
    }
    else{
        $sql="select idusuario from usuarios where correo =?";
    
        if($stmt=mysqli_prepare($link,$sql)){
        mysqli_stmt_bind_param($stmt,"s",$param_email);

        $param_username=trim($_POST["email"]);
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt)==1){
                $email_err="ESTE CORREO YA ESTA EN USO";
            }
            else{
                $email=trim($_POST["email"]);
            }
        }else{
            echo"Ups!,Algo salio mal,intenta mas tarde";
        }
    }
}

    //validando password
    if(empty(trim($_POST["password"]))){
        $password_err="Por favor ingrese una contraseña";
    }elseif(strlen(trim($_POST["password"])) <4 ){
        $password_err="La contraseña debe de tener al menos 4 carcteres";
    }else{
        $password=trim($_POST["password"]);
    }

    //comprobando los errores de entrada antes de insertar los datos en la BD
    if(empty($username_err)&& empty($email_err)&& empty($password_err)){

        $sql="INSERT INTO usuarios (nombreusuario,correo,pswrd) VALUES(?, ?, ?)";

        if($stmt=mysqli_prepare($link,$sql)){
            mysqli_stmt_bind_param($stmt,"sss",$param_username,$param_email,$param_password);

            //estableciendo parametro
            $param_username=$username;
            $param_email=$email;
            $param_password=password_hash($password,PASSWORD_DEFAULT);//ENCRIPTANDO PSWRD

            if(mysqli_stmt_execute($stmt)){
                header("location: index.php");
            }else{
                echo"Algo salio mal, intente mas tarde";
            }
        }
    
    }    
    mysqli_close($link);
}

?>