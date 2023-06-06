<?php
$inc=include("conexion.php");
if($inc){
  $Discente_ID=$_POST['Discente_ID'];
  $consulta="SELECT * FROM calificacion WHERE Discente_ID='$Discente_ID'";
  echo $Discente_ID;
}
?>

<!DOCTYPE>
<html>
<head>
  <title>DISCENTE</title>
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
<body>
  <div class="container-table">
      <div class="table__title">SUS CALIFICACIONES SON LAS SIGUIENTES</div> 
      <div class="table__header">Discente_ID</div>
      <div class="table__header">Nombre del Discente</div>
      <div class="table__header">Materia</div>
      <div class="table__header">Calificación</div>
      <?php $resultado=mysqli_query($enlace, $consulta);
      //$resi="SELECT NombreDiscente FROM discente WHERE Discente_ID=Discente_ID";
        //$res2=mysqli_query($enlace, $resi);

      while($row=mysqli_fetch_assoc($resultado)) {
        //  $row2=mysqli_fetch_assoc($res2)
        ?>

      <div class="table__item"><?php echo $row['Discente_ID']; ?></div>
      <div class="table__item"><?php echo $row['NombreDiscente']; ?></div>
      <div class="table__item"><?php echo $row['Materia']; ?></div>
      <div class="table__item"><?php echo $row['Nota']; ?></div>

    <?php } 

    mysqli_free_result($resultado); ?>
  </div>
  <center><a href="/prosigein/js/menudocente.php" class="btn btn-primary" align="center">Salir Al Menu</a></center>
</body>
</html>