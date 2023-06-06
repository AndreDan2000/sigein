<?php
$inc=include("conexion.php");
if($inc){
  $consulta="SELECT * FROM calificacion WHERE Discente_ID  in (SELECT Discente_ID FROM discente WHERE Discente_ID!=0  ) ORDER BY Nota DESC LIMIT 3;";
}
?>
<!DOCTYPE>
<html>
<head><link rel='shortcut icon' href='images/favic.ico'>
  <title>Cuadro De Honor</title>
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
  <style>
  body{
    background-image: url('/images/lo.png');
    background-size: cover;
  }
</style>
</head>
<body style="background-image:url('e3.gif');"font color="WHITE">
<audio  src="c5.mp3" autoplay loop ></audio>
  <div class="container-table">
      <div class="table__title">CUADRO DE HONOR</div> 
      <div class="table__header">Lugar</div>
      <div class="table__header">Nombre del Discente</div>
      <div class="table__header">Calificación</div>
      <?php $resultado=mysqli_query($enlace, $consulta);
       $contador=0;
      while($row=mysqli_fetch_assoc($resultado)) {
        $contador++;
        ?>
        <br>
      <div class="table__item"><?php echo $contador; ?></div>
      <div class="table__item"><?php echo $row['NombreDiscente']; ?></div>
      <div class="table__item"><?php echo $row['Nota']; ?></div>
    <?php } $contador=0;

    mysqli_free_result($resultado); ?>
  </div>
  <center>
  <FONT COLOR="WHITE" size="6" ><b><u><center>SALIR AL MENÚ PRINCIPAL</center></u></b></font>
 <a href="/prosigein/index.php"   align="center" type="image" src="images/oreol.png"><input type="image" src="cada.png"  height="90" width="90" href="/prosigein/index.php"/></a></center>
</body>
</html>