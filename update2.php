<?php
	include("conexion.php");
	$Discente_ID = $_POST['Discente_ID'];
	$Materia=$_POST['Materia'];
	$Nota=$_POST['Nota'];
	$sqlq = "UPDATE calificacion SET Materia='$Materia',Nota='$Nota' WHERE Discente_ID = '$Discente_ID' AND Materia='$Materia' ";
	$re=mysqli_query($enlace,$sqlq);
?>
<html lang="es">
	<head>
<link rel='shortcut icon' href='images/favic.ico'>
  <title>REGISTRO MODIFICADO</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		</head>
	
	<body  background="e3.gif" font color="WHITE">
	<FONT COLOR="WHITE" size="30" >
		<div class="container">

			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($re) { ?>
				<br><br><br>
				<FONT COLOR="WHITE" size="10" ><b><u><center>REGISTRO MODIFICADO</center></u></b></font>
				<?php } else { ?>
				<br><br><br>
				<FONT COLOR="WHITE" size="10" ><b><u><center>ERROR AL MODIFICAR</center></u></b></font>
				<?php } ?>
				<br>
				<a href="/prosigein/js/menudocente.php" ><img src="a.png"  height="80" width="80" /></a> 
				
				</div>
			</div>
		</div>

			</body>
</html>
