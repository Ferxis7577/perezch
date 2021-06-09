<link rel="stylesheet" href ="../css/style.css">

<?php

if(isset($_GET['editar'])){
	$editar_id = $_GET['editar'];

	$consulta = "SELECT * FROM Jedis WHERE id =" .$editar_id;
	$ejecutar = mysqli_query($con, $consulta);
	$fila = mysqli_fetch_array($ejecutar);
	$id=$fila['id'];
	$Jedi = $fila['Jedi'];
	$Rango = $fila['Rango'];
	$ColorSable = $fila['ColorSable'];
}
?>
<br />

<div class="ctn-form">
<h1 class="title"> Editar Campo</h1>
<form method="POST" action="">
<input style="display:none" type="text" name="idusuario" value="<?php echo $id; ?>" ><br />
<label>Jedi:<br></label>
<input type="text" name="Jedi" value="<?php echo $Jedi; ?>"><br />
<label>Rango:<br></label>
<input type="text" name="Rango" value="<?php echo $Rango; ?>"><br />
<label>ColorSable:<br></label>
<input type="text" name="ColorSable" value="<?php echo $ColorSable; ?>"><br />
<input type="submit" name="actualizar" value="ACTUALIZAR DATOS">
<span class="text-footer"> No desea hacer alguna modificacion?
	 	<a href="ABC.php"class="close-session">Cancelar Edicion</a></a>
	</span>
</div>
</form>

<?php
if (isset($_POST['actualizar'])){

$actualizar_Jedi = $_POST['Jedi'];
$actualizar_Rango = $_POST['Rango'];
$actualizar_Color = $_POST['ColorSable'];



$actualizar = "UPDATE Jedis SET Jedi='$actualizar_Jedi', Rango='$actualizar_Rango',ColorSable='$actualizar_Color' WHERE id= '$editar_id'";
$ejecutar = mysqli_query($con, $actualizar);

if ($ejecutar){
	echo "<script>alert('Datos Actualizados!')</script>";
	header("location: ABC.php");
	location.reload();
	//echo "<script>windoows.open('ABC.php','_self')</script>";
}
else{
	echo "asdasdas";
}
}
?>
