<!DOCTYPE>
<html>
<head>
<link rel='shortcut icon' href='images/favic.ico'>
  <title>DISCENTE</title>
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
<audio  src="c6.mp3" autoplay loop ></audio>

<?php
$inc=include("conexion.php");
if($inc){
  $consulta="SELECT * FROM discente";
}
 $resultado=mysqli_query($enlace, $consulta);
 $row=mysqli_fetch_assoc($resultado); 
        ?>
		<br>
		<FONT COLOR="white" size="10" ><b><center>Usted A Iniciado Sesión Como: <?php echo $row['NombreDiscente']; ?></center></u></b></font> 
      
<?php 
    mysqli_free_result($resultado); ?>


<?php
include('conexion.php');
$Discente_ID=$_POST['Discente_ID'];
$Discente_Contra=$_POST['Discente_Contra'];
session_start();
$_SESSION['Discente_ID']=$Discente_ID;
$conexion=new mysqli("localhost:3304","root","","sigein");

$consulta="SELECT * FROM discente where Discente_ID='$Discente_ID' AND Discente_Contra='$Discente_Contra'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
$row2=mysqli_fetch_assoc($resultado);
if($filas){  
    ?>
    <?php
    $consulta="SELECT * FROM calificacion WHERE Discente_ID='$Discente_ID'";
    ?>
    <div class="container-table">
      <div class="table__title">SUS CALIFICACIONES SON LAS SIGUIENTES</div> 
      <div class="table__header">Discente_ID</div>
      <div class="table__header">Nombre del Discente</div>
      <div class="table__header">Materia</div>
      <div class="table__header">Calificación</div>
      <?php $resultado=mysqli_query($enlace, $consulta);
      while($row=mysqli_fetch_assoc($resultado)) {
        ?>
      <div class="table__item"><?php echo $row['Discente_ID']; ?></div>
      <div class="table__item"><?php echo $row['NombreDiscente']; ?></div>
      <div class="table__item"><?php echo $row['Materia']; ?></div>
      <div class="table__item"><?php echo $row['Nota']; ?></div>
    <?php } 
    mysqli_free_result($resultado); ?>
  </div>
  <FONT COLOR="WHITE" size="30" >
   <center>
   
 <FONT COLOR="WHITE" size="6" ><b><u><center>SALIR AL MENÚ PRINCIPAL</center></u></b></font>
 <a href="/prosigein/index.php"   align="center" type="image" src="images/oreol.png"><input type="image" src="cada.png"  height="90" width="90" href="/prosigein/index.php"/></a></center>
</body>
    <?php
}else{
    ?>
    <h1  align="center">.......................................ERROR DE AUTENTIFICACION.............................</h1><br>
    <br><br><br><br><br><br><br>
    <?php
    include("discente.php");
  ?>
  <?php
}
?>






