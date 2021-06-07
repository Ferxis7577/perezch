
<?php

if(isset($_GET['editar'])){
	$editar_id = $_GET['editar'];

	$consulta = "SELECT * FROM usuarios WHERE idusuario =" .$editar_id;
	$ejecutar = mysqli_query($con, $consulta);
	$fila = mysqli_fetch_array($ejecutar);
	$idusuario=$fila['idusuario'];
	$usuario = $fila['nombreusuario'];
	$email = $fila['correo'];
	$password = $fila['pswrd'];
}
?>
<br />
<form method="GET" action="#">
<input type="text" name="idusuario" value="<?php echo $idusuario; ?>" ><br />
<input type="text" name="nombre" value="<?php echo $usuario; ?>"><br />
<input type="text" name="email" value="<?php echo $email; ?>"><br />
<input type="password" name="passw" value="<?php echo $password; ?>"><br />
<input type="submit" name="actualizar" value="ACTUALIZAR DATOS">
</form>

<?php
if (isset($_GET['actualizar'])){

$actualizar_id = $_GET['idusuario'];	
$actualizar_nombre = $_GET['nombre'];
$actualizar_email = $_GET['email'];
$actualizar_password = $_GET['passw'];

$actualizar_password=password_hash($actualizar_password,PASSWORD_DEFAULT);


$actualizar = "UPDATE usuarios SET nombreusuario='$actualizar_nombre', pswrd='$actualizar_password', email='$actualizar_email' WHERE idusuario= '$actualizar_id'";
$ejecutar = mysqli_query($con, $actualizar);
echo $ejecutar;

if ($ejecutar){
	
	echo "<script>alert('Datos Actualizados!')</script>";
	echo "<script>windows.open('ABC.php','_self')</script>";
}
else{
	echo "asdasdas";
}
}
?>
