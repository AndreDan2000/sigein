<html lang="es">
	<head>
	 <link rel='shortcut icon' href='images/favi.ico'>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body  background="e3.gif" font color="WHITE">
	<FONT COLOR="WHITE" size="4" >
		<div class="container">
			<div class="row">
			<br><br>
				<FONT COLOR="WHITE" size="10" ><b><u><center>AGREGAR DOCENTE</center></u></b></font>
			</div>
			<br><br>
			<form class="form-horizontal" method="POST" action="guardardocente.php" autocomplete="off">

				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Nombre del Docente *</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" required>
					</div>
				</div>
				<br>
				<div class="form-group">
					<label for="Nota" class="col-sm-2 control-label">Contraseña del Docente *</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Contra" name="Contra" placeholder="Contraseña" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<br>
						<a href="/prosigein/menuaca/menuaca.php" ><img src="a.png"  height="80" width="80" /></a> 
						<font color="black">---------------</font>
						<button type="submit" style="background-color:black;border-color:black" ><img src="g.png"  height="70" width="70" /></button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>