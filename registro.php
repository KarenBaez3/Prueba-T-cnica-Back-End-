<?php

include("conexion.php");

$id = $_POST["txtid"];
$nombre = $_POST["txtnombre"];
$apellidos = $_POST["txtapellidos"];
$matricula = $_POST["txtmatricula"];
$status = $_POST["txtstatus"];
$promedio = $_POST["txtpromedio"];

	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiardatos']))
	{
		header("Location: principal.php");
	}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['guardardatos']))
	
	{
	$sqlguardar = "INSERT INTO datos(id, nombre, apellidos, matricula,status,promedio) values ('$id','$nombre','$apellidos','$matricula','$status','$promedio')";

if(mysqli_query($conn,$sqlguardar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['modificardatos']))
	
	{
			$sqlmodificar = "UPDATE datos SET nombre='$nombre',apellidos='$apellidos',matricula='$matricula',status='$status',promedio='$promedio' WHERE id=$id";

if(mysqli_query($conn,$sqlmodificar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminardatos']))
	
	{
			$sqleliminar = "DELETE FROM datos WHERE id=$id";

if(mysqli_query($conn,$sqleliminar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}

?>