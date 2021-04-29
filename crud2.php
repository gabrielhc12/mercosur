<?php
include_once 'db.php';

if(isset($_POST['save']))
{
	$nombre=$MySQLiconn->real_escape_string($_POST['nombre']);
	$descripcion=$MySQLiconn->real_escape_string($_POST['descripcion']);
	
	$SQL=$MySQLiconn->query("INSERT INTO productos(nombre,descripcion) VALUES('$nombre','$descripcion')");

	if(!$SQL)
	{
		echo $MySQLiconn->error;
	}
}

if(isset($_GET['del']))
{
	$SQL=$MySQLiconn->query("DELETE FROM productos WHERE id_productos=".$_GET['del']);
	header("Location:productos.php");
}

if(isset($_GET['edit']))
{
	$SQL=$MySQLiconn->query("SELECT * FROM productos WHERE id_productos=".$_GET['edit']);
	$getROW=$SQL->fetch_array();
}

if(isset($_POST['update']))
{
	$SQL=$MySQLiconn->query("UPDATE productos SET  nombre='".$_POST['nombre']."' , descripcion='".$_POST['descripcion']."'WHERE id_productos=".$_GET['edit']);
    header("Location: productos.php");
}

?>
