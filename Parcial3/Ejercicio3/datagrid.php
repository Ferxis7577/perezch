<?php
try{

    include ('db.php');

   
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

echo json_encode($resultado);
?> 