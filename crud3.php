<?php
include_once 'db.php';

if(isset($_POST['save']))
{
	$id_productos=$MySQLiconn->real_escape_string($_POST['id_productos']);
	$id_pais=$MySQLiconn->real_escape_string($_POST['id_pais']);
    $pais_destino=$MySQLiconn->real_escape_string($_POST['pais_destino']);
	$fecha_export=$MySQLiconn->real_escape_string($_POST['fecha_export']);
	
	$SQL=$MySQLiconn->query("INSERT INTO exportaciones(id_productos,id_pais,pais_destino,fecha_export) VALUES('$id_productos','$id_pais','$pais_destino','$fecha_export')");

	if(!$SQL)
	{
		echo $MySQLiconn->error;
	}
}

if(isset($_GET['del']))
{
	$SQL=$MySQLiconn->query("DELETE FROM exportaciones WHERE id_exportaciones=".$_GET['del']);
	header("Location:exportaciones.php");
}

if(isset($_GET['edit']))
{
	$SQL=$MySQLiconn->query("SELECT * FROM exportaciones WHERE id_exportaciones=".$_GET['edit']);
	$getROW=$SQL->fetch_array();
}

if(isset($_POST['update']))
{
	$SQL=$MySQLiconn->query("UPDATE exportaciones SET id_productos='".$_POST['id_productos']."', id_pais='".$_POST['id_pais']."',
	pais_destino='".$_POST['pais_destino']."',fecha_export='".$_POST['fecha_export']."'WHERE id_exportaciones=".$_GET['edit']);
    header("Location: exportaciones.php");
}
?>