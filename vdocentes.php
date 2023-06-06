<?php
$inc=include("conexion.php");
if($inc){
  $consulta="SELECT * FROM docente";
}
?>
<!DOCTYPE>
<html>

<head>
 <link rel='shortcut icon' href='images/favi.ico'>
  <title>VISUALIZAR DOCENTES</title>
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
      <div class="table__title">Docentes Registrados</div> 
      <div class="table__header">Docente_ID</div><br>
      <div class="table__header">Nombre del Docente</div>
      
     
      <?php $resultado=mysqli_query($enlace, $consulta);

      while($row=mysqli_fetch_assoc($resultado)) {
        //  $row2=mysqli_fetch_assoc($res2)
        ?>
        <br>
      <div class="table__item"><?php echo $row['Docente_ID']; ?></div>
      <br>
      <div class="table__item"><?php echo $row['NombreDocente']; ?></div>

      
      
    <?php } 
    mysqli_free_result($resultado); ?>
  </div>
  <center>
  <FONT COLOR="WHITE" size="6" ><b><u><center>SALIR AL MENÚ ACADÉMICA</center></u></b></font>
 <a href="/prosigein/menuaca/menuaca.php"   align="center" type="image" src="images/oreol.png"><input type="image" src="cada.png"  height="90" width="90"/></a></center>
</body>
</html>