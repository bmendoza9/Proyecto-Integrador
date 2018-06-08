<?php
$db_host = "localhost"; css

$db_user = "root";
$db_password = "ULTRAZEALOT111";
$db_name = "pi";
//$db_table_name = "usuarioparticipante";

$conexion =mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conexion) {
  echo "No se pudo conectar a la base de datos";
}
else {
echo "Conectado a la base de datos";
}
//guardar los datos en variables
$nombres = $_POST["fname"];
$apellidos = $_POST["lname"];
$correo = $_POST["email"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$activar = 1;
//consulta para insertar
$insertar = "INSERT INTO usuarioparticipante(nombres, apellidos, correo, password, gender, activo) VALUES ('$nombres', '$apellidos','$correo','$password','$gender','$activar')";

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarioparticipante WHERE correo = '$correo'");
if(mysqli_num_rows($verificar_correo)>0){
  echo '<script>
          alert("El correo proporcionado ya se encuentra registrado, por favor intente con otro");
          window.history.go(-1);
          </script>';
  exit;
}


//ejecutar la consulta
$resultado = mysqli_query($conexion,$insertar);
if(!$resultado){
  echo 'No se han podido guardar los datos';
}
else {
echo '<script>
          alert("Usted ha sido registrado exitosamente");
          window.history.go(-1);
          </script>';
}
//cerrar conexión
mysqli_close($conexion);
 ?>
