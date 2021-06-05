<?php
try{

    include ('db.php');

    // query para traer todos los datos de la tabla agenda viajes
    $query = "select * from usuarios";
    // consulta
    $consulta = $conexion -> prepare($query);

    
    if($consulta -> execute())
    {
        $resultado = $consulta -> fetchall(PDO::FETCH_ASSOC);
    }
    else{
        $resultado = "Surgio un error.";
    }
}
catch(PDOException $ex){
    echo ("Surgio un problema ".$ex -> getMessage());
}
// manda la consulta
echo json_encode($resultado);
?> 