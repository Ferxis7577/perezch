<?php 
     //INICIALIZAR LA SESION
     session_start();
        if(isset($_SESSION["loggedin"])&& $_SESSION["loggedin"]===true)
        {
            header("location: bienvenido.php");
            exit;
        }


require_once "connection.php";

$email=$password="";
$email_err = $password_err="";

if($_SERVER["REQUEST_METHOD"]=== "POST"){
    if(empty(trim($_POST["email"]))){
        $email_err="Por favor, ingresa el correo electronico";
    }else{
        $email=trim($_POST["email"]);
    }


    if(empty(trim($_POST["password"]))){
        $password_err="Por favor, ingresa la contraseña";
    }else{
        $password=trim($_POST["password"]);
    }

    echo password_verify($password,$hashed_password);


    //validar credenciales
    if(empty($email_err)&& empty($password_err)){
        $sql="SELECT idusuario,nombreusuario,correo,pswrd from usuarios where correo=?";

        if($stmt=mysqli_prepare($link,$sql)){
            mysqli_stmt_bind_param($stmt,"s",$param_email);

            $param_email=$email;

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
            }

            if(mysqli_stmt_num_rows($stmt)==1){
                mysqli_stmt_bind_result($stmt, $id, $usuario, $email, $hashed_password);
                if(mysqli_stmt_fetch($stmt)){
                    if(password_verify($password,$hashed_password)){
                        session_start();


                        //almacenar datos en varibales

                        $_SESSION["loggedin"]=true;
                        $_SESSION["idusuario"]=$id;
                        $_SESSION["correo"]=$email;
                        header("location: bienvenido.php");
                    }else{
                        $password_err="La contraseña es invalida, intenta de nuevo";
                    }
                }else{
                    $email_err="No se ha encontrado ninguna cuenta con ese correo electronico";
                }
            }else{
                echo"UPS! Algo salio mal, intentelo mas tarde";

            }
        }
    }

    mysqli_close($link);


}


?>