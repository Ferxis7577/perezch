<!DOCTYPE html> 
<meta charset="UTF-8">

<?php 

$con = mysqli_connect("127.0.0.1", "root","","perezcha") or die ("Error!"); 

?>

<html>
<head>
	<title>ABC</title>
	<link rel="stylesheet" href ="../css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<meta charset="utf-8">

</head>
<body BACKGROUND="../img/fondo.jpg">
<div class="container-all">
	<div class="ctn-form">
		<h1 class="title"> Altas, Bajas y Consultas</h1>

 	<form method="POST" action="ABC.php">
	 <label>Jedi:<br></label>
	 <input type="text" name="Jedi" placeholder = "nombre del jedi"><br />
	 <label>Rango:<br> </label>
	 <input type="text" name="Rango" placeholder = "rango del jedi"><br />
	 <label>ColorSable:<br></label>
	 <input type="text" name="ColordeSable" placeholder = "sable del jedi"><br /><br>
	 <input type="submit" name="insert" value = "INSERTAR DATOS"><br/>
	 <span class="text-footer"> Desea volver al Inicio?
	 	<a href="close_session.php"class="close-session">Cerrar Sesion</a></a>
	</span>
	 
</div>

 </form>
 <div class ="ctn-text">
<table class="table table-bordered" width="500" border="2" style="background-color: #F9F9F9; ">
<thead>
	<tr>
		<th scope="col" >Id</th>
		<th scope="col">Jedi</th>
		<th scope="col">Rango</th>
		<th scope="col">ColorSable</th>
		<th scope="col">Editar</th>
		<th scope="col">Borrar</th>
	</tr>
	<thead>
<?php
$consulta = "SELECT * FROM Jedis";
$ejecutar = mysqli_query($con, $consulta);
$i = 0;
while ( $fila = mysqli_fetch_array($ejecutar)) {
	$id = $fila['id'];
	$Jedi = $fila['Jedi'];
	$Rango = $fila['Rango'];
	$ColordeSable = $fila['ColorSable'];

	$i++;

?>

<tr align="center">
<td><?php echo $id; ?></td>
<td><?php echo $Jedi; ?></td>
<td><?php echo $Rango; ?></td>
<td><?php echo $ColordeSable; ?></td>
<td><a href="ABC.php?editar=<?php echo $id; ?>">Editar</a></td>
<td><a href="ABC.php?borrar=<?php echo $id; ?>">Borrar</a></td>
</tr>
<?php } ?>
</table>
</div>

<?php
	if(isset($_POST["insert"])){
		$jedi = $_POST["Jedi"];
		$rango = $_POST["Rango"];
		$sable = $_POST["ColordeSable"];

		//$pass=password_hash($pass,PASSWORD_DEFAULT);

		$insertar = "INSERT INTO Jedis (Jedi,Rango,ColorSable) VALUES ('$jedi', '$rango', '$sable')";
		$ejecutar = mysqli_query($con, $insertar);

		if ($ejecutar){
			echo "<h3>Insertado Correctamente</h3>";
			echo "<script>windows.open('ABC.php','_self')</script>";
		}
	}
?>
<br/>




<?php
if(isset($_GET['editar'])){
	include("editar.php");
}
?>

<?php
if(isset($_GET['borrar'])){
	$borrar_id = $_GET['borrar'];
	$borrar = "DELETE FROM Jedis WHERE id = '$borrar_id'";
	$ejecutar = mysqli_query($con, $borrar);

	if ($ejecutar){
		echo "<script>alert('El jedi ha sido borrado!')</script>";
		echo "<script>windows.open('ABC.php','_self')</script>";
	}

}
?>
<br><br><br><br><br>

</body>
</html>
