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
		#aea{ background: rgba(0,0,0,.6); width: 1000px; margin: auto;  border-radius: 3px;}
		.div_t{
    		width: 1000px;
    		padding:30px;
	}
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
	<br>
<center id="aea">
	<br>	
	<br>
	<h1>Registrar Tratado </h1>
	<div id="form">
		<form method="post">
			<table width="100%" border="1" cellpadding="6">
				<tr>
					<td>
                       <input type="text" name="titulo" placeholder="Titulo" value="<?php if(isset($_GET['edit'])) echo $getROW['titulo'];?>">
					</td>
				</tr>
				<tr>
					<td>
						<input type="date" name="fecha_tratado"placeholder="Fecha_tratado"value="<?php if(isset($_GET['edit'])) 
						echo $getROW['fecha_tratado'];?>">
					</td>
				</tr>
				<tr>
					<td>
					<select name="id_pais" id="" class="form-select form-select-sm mb-2">
                       <?php

                            $sql="SELECT id_pais,nombre FROM paises";
                            $rows= $MySQLiconn->query($sql);

                            foreach($rows as $row){
                                ?>
                                <option value="<?php echo $row['id_pais']; ?>"><?php echo $row['nombre']; ?></option>
                                <?php
                            }
                       ?>
                       </select>
					</td>
				</tr>
				<tr>
					<td>
						<?php
						if(isset($_GET['edit'])){
                        ?>
                        <button type="submit" name="update">Editar</button>
                        <?php
					    }else{
					    ?>
                        <button type="submit" name="save">Registrar</button>
					    <?php
				    }
					?>
					</td>
				</tr>
			</table>
		</form>
		<br><br>
		
	</div>
	<div class="div_t">
		<table width="100%" border="1" cellpadding="9" align="center" class="table table-bordered" >
			<thead class="table-dark">
				<tr>
					<td >N° Orden</td>
					<td>Titulo</td>
					<td>Fecha_tratado</td>
					<td>Pais</td>
					<td></td>
					<td></td>	
				</tr>
			</thead>
				<?php
				$res=$MySQLiconn->query("SELECT * FROM tratados");
				$res1=$MySQLiconn->query("SELECT nombre FROM paises INNER JOIN tratados ON paises.id_pais=tratados.id_pais;");
				while($row=$res->fetch_array() and $row1=$res1->fetch_array()){
					?>

					<tr class="text-white">
						<td><?php echo $row['id_tratados'];?></td>
						<td><?php echo $row['titulo'];?></td>
						<td><?php echo $row['fecha_tratado'];?></td>
						<td><?php echo $row1['nombre'];?></td>
						<td><a href="?edit=<?php echo $row['id_tratados'];?>"onclick="return confirm('Confirmar edicion')">Editar</a></td>
						<td><a href="?del=<?php echo $row['id_tratados'];?>"onclick="return confirm('Confirmar eliminacion')">Eliminar</a></td>

					</tr>
					<?php
					}
					?>
		</table>
	</div>
</center>
</body>
</html>