
<?php
include('conexion.php');
$usuario=$_POST['dousuario'];
$contraseña=$_POST['doucontra'];
session_start();
$_SESSION['dousuario']=$usuario;


$conexion=new mysqli("localhost:3304","root","","sigein");

$consulta="SELECT * FROM docente where Docente_ID='$usuario' and Docente_Contra='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:/prosigein/js/menudocente.php");

}else{
    ?>
    
    <h1  align="center">.......................................ERROR DE AUTENTIFICACIÓN.............................</h1><br>
    <br><br><br><br><br><br><br>
    <?php

    include("docente.php");

  ?>
 
    
 
  
  <?php
}
?>






