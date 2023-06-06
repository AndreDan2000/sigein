<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
<?php
	include("conexion.php");
	
	$Nombre = $_POST['Nombre'];
	$Contra = $_POST['Contra'];
	
	$sql ="INSERT INTO discente (NombreDiscente,Discente_Contra) VALUES ('$Nombre','$Contra')"; 
	$resultado=mysqli_query($enlace,$sql);
?>
	<body  background="e3.gif" font color="WHITE">
	<FONT COLOR="WHITE" size="30" >
		<div class="container" >
			<div class="row">
				<div class="row" style="text-align:center">
						<br><br><br>
						<FONT COLOR="WHITE" size="10" ><b><u><center>REGISTRO GUARDADO</center></u></b></font>
						<br>
						<a href="vdiscentes.php" ><img src="v.png"  height="80" width="80" /></a>
						
					<center>
						<br>
					<a href="/prosigein/menuaca/menuaca.php" ><img src="a.png"  height="80" width="80" /></a>
					</center>
				</div>
			</div>
		</div>
	</body>
</html>
