<?php
$myfile = fopen("loginrecords.txt","r") or die("No se pudo abrir el archivo");
$validatekey = "prueba";
$actualkey ="";
if($myfile){
  while(!feof($myfile)){
    echo fgets($myfile);
    $actualkey . fgets($myfile);
  }
  $actualkey = rtrim($actualkey, "\r\n");
  $validatekey = rtrim($validatekey, "\r\n");
  echo $validatekey;
  echo $actualkey;
  /*
    if(strcmp($actualkey,$validatekey) == 0)){
    header('Location: index.php');
    fclose($myfile);
    }
    else {
      echo "Tarjeta no registrada";
      fclose($myfile);
    }
    */
}
else {
  echo "No se encuentra el archivo en la base de datos";
  fclose($myfile);
}
 ?>
