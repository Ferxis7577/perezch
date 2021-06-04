

<?php

if(isset($_GET['editar'])){
	$editar_id = $_GET['editar'];

	$consulta = "SELECT * FROM usuarios WHERE idusuario = 'editar_id'";
	$ejecutar = mysqli_query($con, $consulta);
	$fila = mysqli_fetch_array($ejecutar);
	$usuario = $fila['nombreusuario'];
	$email = $fila['correo'];
	$password = $fila['pswrd'];
}
?>
<br />
<form method="POST" action="">
<input type="text" name="nombre" value="<?php echo $usuario; ?>"><br />
<input type="text" name="email" value="<?php echo $email; ?>"><br />
<input type="password" name="passw" value="<?php echo $password; ?>"><br />
<input type="submiT" name="actualizar" value="ACTUALIZAR DATOS">
</form>

<?php
if (isset($_POST['actualizar'])){
$actualizar_nombre = $_POST['nombre'];
$actualizar_email = $_POST['email'];
$actualizar_password = $_POST['passw'];

$actualizar_password=password_hash($actualizar_password,PASSWORD_DEFAULT);


$actualizar = "UPDATE usuarios SET nombreusuario='$actualizar_nombre', password='$actualizar_password', email='$actualizar_email' WHERE id='$editar_id'";
$ejecutar = mysqli_query($con, $actualizar);

if ($ejecutar){
	echo "<script>alert('Datos Actualizados!')</script>";
	echo "<script>windoows.open('ABC.php','_self')</script>";
}
}
?>
