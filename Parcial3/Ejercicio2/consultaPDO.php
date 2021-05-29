<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConsultaPDO</title>
</head>
<body>
    <?php
        try{
            $base=new PDO ('mysql:host=localhost; dbname=perezch','root','');

            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $base->exec ("SET CHARACTER SET utf8");

            $sql="SELECT id,nombre,apellido,rango,colorsable FROM jedi WHERE nombre=?";

            $resultado=$base->prepare($sql);

            $resultado->execute(array("Luke"));

            while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                echo"ID: ".$registro['id']."<br>".
                "Nombre: ".$registro['nombre']. "<br>".
                "Apellido ".$registro['apellido']."<br>".
                "Rango: ".$registro['rango']."<br>".
                "Color de Sable: ".$registro['colorsable']."<br>";
            }


        }catch(Exception $e){

            die('Error'.$e->GetMessage());

        }finally{
            $base=null;
        }




    ?>
</body>
</html>