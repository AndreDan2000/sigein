<!DOCTYPE>
<html>
<head>
  <title>ALFIN</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<?php
$inc=include("conexion.php");
if($inc){
  $consulta="SELECT * FROM discente";
  $resultado=mysqli_query($enlace,$consulta);
  if($resultado){
    while($row=$resultado->fetch_array()){
            $Discente_ID=$row['Discente_ID'];
            $Discente_Contra=$row['Discente_Contra'];
            ?>
            <div>
              <h2><?php echo $Discente_ID ?></h2>
                <div>
                      <p>
                          <b>Discente_Contra:</b> <?php echo $Discente_Contra ?> <br>
                          
                          <b></b>
                      </p>
                </div>
            </div>
            <?php
    }
  }
}

?>
</body>
</html>