<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body  background="e3.gif" font color="WHITE">
	<FONT COLOR="WHITE" size="5" >
		<div class="container">
			<div class="row">
			<br><br><br>
				<FONT COLOR="WHITE" size="10" ><b><u><center>ELIMINAR DISCENTE</center></u></b></font>
				<br><br>
	
			<form class="form-horizontal" method="POST" action="eliminardiscente.php" autocomplete="off">

				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">ID del discente *</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Discente_ID" name="Discente_ID" placeholder="Nombre" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre del discente *</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre" required>
					</div>
				</div>

				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<br>
						<a href="/prosigein/menuaca/menuaca.php" ><img src="a.png"  height="80" width="80" /></a> 
						<font color="black">---------------</font>
						<button type="submit" style="background-color:black;border-color:black" ><img src="s.png"  height="70" width="70" /></button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>