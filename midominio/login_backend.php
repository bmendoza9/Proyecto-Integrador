<?php
//variables de la BDD
$db_host = "localhost";
$db_user = "root";
$db_password = "ULTRAZEALOT111";
$db_name = "pi";

$conexion =mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conexion) {
  echo "No se pudo conectar a la base de datos";
}
else {
echo "Conectado a la base de datos";
}
//variables del form
$correo=$_POST['log_email'];
$password=$_POST['log_password'];

$consulta = "SELECT * FROM usuarioparticipante WHERE correo='$correo' and password='$password'";
$resultado = mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado);

if($filas>0){
  echo '<script>
          alert("Verificación exitosa")
          </script>';
  //header("location:index.php");
}
else {
  echo '<script>
          alert("Combinación de correo/contraseña incorecta, por favor intente de nuevo");
          window.history.go(-1);
          </script>';
}
mysqli_free_result($resultado);
mysqli_close($conexion);
 ?>
