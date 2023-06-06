<?php
	include("conexion.php");
	$Clave_Sup = $_POST['Clave_Sup'];
	$Nombre=$_POST['Nombre'];
	$consulta="SELECT * FROM seccionacademica WHERE Clave_Sup='$Clave_Sup' AND NombreSuperior like '$Nombre%'";
	$resultado=mysqli_query($enlace,$consulta);
	$row=mysqli_fetch_assoc($resultado);
?>
<html lang="es">
	<head>
		<link rel='shortcut icon' href='images/favi.ico'>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="estilos.css" >
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</head>
	<body style="background-image:url('e3.gif');"font color="WHITE">
		<div class="container-table">
      <div class="table__title">Datos Actuales</div> 
      <div class="table__header">Clave_Sup</div><br>
      <div class="table__header">Nombre del Superior</div>
      
      <?php $resultado2=mysqli_query($enlace, $consulta);
      //$resi="SELECT NombreDiscente FROM discente WHERE Discente_ID=Discente_ID";
        //$res2=mysqli_query($enlace, $resi);

      while($row2=mysqli_fetch_assoc($resultado2)) {
        //  $row2=mysqli_fetch_assoc($res2)
        ?>
        <br>
      <div class="table__item"><?php echo $row2['Clave_Sup']; ?></div><br>
      <div class="table__item"><?php echo $row2['NombreSuperior']; ?></div>
      
    <?php } 
    mysqli_free_result($resultado); ?>
    <?php
	$sqlj = "DELETE FROM seccionacademica WHERE Clave_Sup='$Clave_Sup' AND NombreSuperior like '$Nombre%'";
	$resultado5=mysqli_query($enlace,$sqlj);
	
?>
  </div>
		 	<FONT COLOR="WHITE" size="10" >
  <div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<FONT COLOR="WHITE" size="10" ><b><u><center>REGISTRO ELIMINADO</center></u></b></font>
				<?php } else { ?>
				<FONT COLOR="WHITE" size="10" ><b><u><center>ERROR AL ELIMINAR</center></u></b></font>
				<?php } ?>
				
				<br>
						<a href="/prosigein/menuaca/menuaca.php" ><img src="a.png"  height="80" width="80" /></a>
				
				</div>
			</div>
		</div>
		 	
	</body>
</html>
