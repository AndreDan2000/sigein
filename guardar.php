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
	$Discente_ID = $_POST['Discente_ID'];
	$Materia = $_POST['Materia'];
	$Nota = $_POST['Nota'];
	$consulta2 ="SELECT * FROM discente WHERE Discente_ID='$Discente_ID'";
	$resu2=mysqli_query($enlace, $consulta2);
	$row2=mysqli_fetch_assoc($resu2);
	if(!$row2){
		?>    
		<center><h3>NO EXISTE ESE DISCENTE</h3></center>
		<?php	
	}
	else if($row2){
	$consulta ="SELECT NombreDiscente FROM discente WHERE Discente_ID='$Discente_ID'";
	$resu=mysqli_query($enlace, $consulta);
	$row=mysqli_fetch_assoc($resu);
	$sql ="INSERT INTO calificacion (Discente_ID,NombreDiscente,Materia,Nota) VALUES ('$Discente_ID','$row[NombreDiscente]','$Materia','$Nota')"; 
	$resultado=mysqli_query($enlace,$sql);
?>
	<body  background="e3.gif" font color="WHITE">
	<FONT COLOR="WHITE" size="30" >
	<u><b>
	<strong>
		<div class="container" >
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<br><br><br>
						<u><b>REGISTRO GUARDADO
						<br><br>
						
						<a href="visualizara.php" ><img src="v.png"  height="80" width="80" /></a>
						<br><br>
						<?php } else { ?>
						<br><br><br>
						ERROR AL GUARDAR
						<br><br>
					<?php }} ?>
					<center>
					
					<a href="/prosigein/js/menudocente.php"><img src="a.png"  height="80" width="80" /><br></a>
					</center>
				</div>
			</div>
		</div>
	</body>
</html>
