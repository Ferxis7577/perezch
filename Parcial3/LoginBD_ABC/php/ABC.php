<!DOCTYPE html> 
<meta charset="UTF-8">

<?php 

$con = mysqli_connect("127.0.0.1", "root","","perezcha") or die ("Error!"); 

?>

<html>
<head>
	<title>Aplicacion</title>
	</HEAD><H1><P ALIGN="CENTER"><FONT SIZE="7" COLOR="WHITE" FACE="Courier New"> Altas, Bajas y Consultas</H1><B><B></FONT> <B><B>
	<meta charset="utf-8">

</head>
<body BACKGROUND="../img/fondo.jpg">
 <form method="POST" action="ABC.php">
	 <label>Nombre:<br></label>
	 <input type="text" name="Nombre" placeholder = "Escriba su nombre"><br />
	 <label>Email:<br> </label>
	 <input type="text" name="Correo" placeholder = "Escriba su correo"><br />
	 <label>Contraseña:<br></label>
	 <input type="password" name="Contraseña" placeholder = "Escriba su contraseña"><br /><br>
	 <input type="submit" name="insert" value = "INSERTAR DATOS"><br/>
	 <a href="close_session.php"class="close-session">Cerrar Sesion</a>


 </form>

<?php
	if(isset($_POST["insert"])){
		$usuario = $_POST["Nombre"];
		$email = $_POST["Correo"];
		$pass = $_POST["Contraseña"];

		$pass=password_hash($pass,PASSWORD_DEFAULT);

		$insertar = "INSERT INTO usuarios (nombreusuario,correo,pswrd) VALUES ('$usuario', '$email', '$pass')";
		$ejecutar = mysqli_query($con, $insertar);

		if ($ejecutar){
			echo "<h3>Insertado Correctamente</h3>";
		}
	}
?>
<br/>
<center><table width="500" border="2" style="background-color: #F9F9F9; ">
	<tr>
		<th>Id</th>
		<th>Usuario</th>
		<th>Correo</th>
		<th>Contraseña</th>
		<th>Editar</th>
		<th>Borrar</th>
	</tr></center>
<?php
$consulta = "SELECT * FROM usuarios";
$ejecutar = mysqli_query($con, $consulta);
$i = 0;
while ( $fila = mysqli_fetch_array($ejecutar)) {
	$id = $fila['idusuario'];
	$usuario = $fila['nombreusuario'];
	$email = $fila['correo'];
	$password = $fila['pswrd'];

	$i++;

?>
<tr align="center">
<td><?php echo $id; ?></td>
<td><?php echo $usuario; ?></td>
<td><?php echo $email; ?></td>
<td><?php echo $password; ?></td>
<td><a href="ABC.php?editar=<?php echo $id; ?>">Editar</a></td>
<td><a href="ABC.php?borrar=<?php echo $id; ?>">Borrar</a></td>
</tr>
<?php } ?>
</table>

<?php
if(isset($_GET['editar'])){
	include("editar.php");
}
?>

<?php
if(isset($_GET['borrar'])){
	$borrar_id = $_GET['borrar'];
	$borrar = "DELETE FROM usuarios WHERE idusuario = '$borrar_id'";
	$ejecutar = mysqli_query($con, $borrar);

	if ($ejecutar){
		echo "<script>alert('El usuario ha sido borrado!')</script>";
		echo "<script>windoows.open('ABC.php','_self')</script>";
	}

}
?>
<br><br><br><br><br>
<MARQUEE DIRECTION="RIGHT" FACE="Arial Unicode MS" BEHAVIOR="ALTERNATE" BGCOLOR ="BLUE">
<FONT COLOR="BLACK">
<center> Kaizen Price S.A. de C.V <br>
Pagina ABC (Altas, Bajas, Consultas)<br>
Maestro: Ing Gerardo Pineda Zapata.<br>
Alumno: Fernando Alexis Perez Chavez <br>
Ingenieria en Sistemas Computacionales</FONT></MARQUEE>
</body>
</html>
