<?php
include_once 'crud.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MERCOSUR</title>
	<style>
		#aea{ background: rgba(0, 85, 183, 0.7); width: 90%; max-width: 650px; margin: auto; padding: 5px 35px; margin-top: 30px; padding-bottom: 30px; border-radius: 3px;}
        #eae{ background: rgba(57, 169, 53, 0.7); width: 90%; max-width: 650px; margin: auto; padding: 5px 35px; margin-top: 30px; padding-bottom: 30px; border-radius: 3px;}
    </style>
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body background="./img/ga2.png" class="text-white">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand text-white">
            <img src="./img/logo.png" height="70px">
        </a>
        <button class="navbar-toggler" data-target="#menu" data-toggle="collapse" type="button"> 
            <span class="navbar-toggler-icon"></span> 
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="navbar-brand" href="paises.php">Agregar País</a>
                </li>
                <li class="nav-item active">
                    <a class="navbar-brand" href="registro.php">Tratados</a>
                </li>
                <li class="nav-item active">
                    <a class="navbar-brand" href="exportaciones.php">Exportaciones</a>
                </li>
                <li class="nav-item active">
                    <a class="navbar-brand" href="productos.php">Flujo de Productos</a>                       
                </li>
            </ul>
        </div>
    </nav>
    <center id="aea">	
        <br>
        <h1>Mercosur </h1>
            <p>Tratados Internacionales, Protocolos y Acuerdos firmados entre 
            los Estados Partes del MERCOSUR y/o entre los Estados Partes del MERCSUR y Estados Asociados.</p>  
        </div>
    </center>
    <div id="eae">
        <br>
        <br>
        <p>El Consejo del Mercado Común tiene entre sus atribuciones la potestad 
        de negociar y firmar acuerdos, en nombre del MERCOSUR, con terceros países, 
        grupos de países y organismos internacionales. Dichas funciones podrán ser delegadas 
        por mandato expreso al Grupo Mercado Común, de acuerdo a los procedimientos establecidos en 
        la normativa vigente. El Tratado de Asunción, sus protocolos y los instrumentos adicionales o 
        complementarios, así como los acuerdos celebrados en el marco del Tratado de Asunción y sus protocolos,
         son fuentes jurídicas del MERCOSUR y se encuentran depositados ante el Gobierno de la República de Paraguay,
          a excepción de los que son protocolizados en la Asociación Latinoamericana de Integración (ALADI).</p>
    </div>
    <footer>
        <br>
        <img src="./img/bajo.jpg" width="1824px" height="231px" align="center">
    </footer>
</body>
</html>