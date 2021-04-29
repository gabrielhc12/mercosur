<?php
include_once 'db.php';
if(isset($_POST['save']))
{
	$titulo=$MySQLiconn->real_escape_string($_POST['titulo']);
	$fecha_tratado=$MySQLiconn->real_escape_string($_POST['fecha_tratado']);
	$id_pais=$MySQLiconn->real_escape_string($_POST['id_pais']);
	$SQL=$MySQLiconn->query("INSERT INTO tratados(titulo,fecha_tratado,id_pais) VALUES('$titulo','$fecha_tratado','$id_pais')");

	if(!$SQL)
	{
		echo $MySQLiconn->error;
	}
}
if(isset($_GET['del']))
{
	$SQL=$MySQLiconn->query("DELETE FROM tratados WHERE id_tratados=".$_GET['del']);
	header("Location:registro.php");
}
if(isset($_GET['edit']))
{
	$SQL=$MySQLiconn->query("SELECT * FROM tratados WHERE id_tratados=".$_GET['edit']);
	$getROW=$SQL->fetch_array();
}
if(isset($_POST['update']))
{
	$SQL=$MySQLiconn->query("UPDATE tratados SET titulo='".$_POST['titulo']."', fecha_tratado='".$_POST['fecha_tratado']."' ,
	 id_pais='".$_POST['id_pais']."'WHERE id_tratados=".$_GET['edit']);
    header("Location: registro.php");
}
?>