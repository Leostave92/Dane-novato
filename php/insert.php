<?php

$serverName ="localhost";
$userName ="root";
$password ="";
$dbname ="dane";


//crear coneccion
$conn =new mysqli($serverName,$userName,$password,$dbname);

// chekear coneccion
if($conn->connect_error) {
    die("Conection failed: " . $conn->connect_error);
}

$tipoDoc = $_POST["TD"];
$nIdentificacion = $_POST["nIdentificacion"];
$primerNombre =$_POST["primerNombre"];
$segundoNombre =$_POST["segundoNombre"];
$primerApellido =$_POST["primerApellido"];
$segundoApellido =$_POST["segundoApellido"];
$fecNacimiento =$_POST["fecNacimiento"];
$departamento =$_POST["departamento"];
$ciudad =$_POST["ciudad"];
$genero =$_POST["genero"];
$email =$_POST["email"];
$observacion =$_POST["observacion"];



$sql ="INSERT INTO datos_personales (tipo_documento, n_documento, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, fecha_nacimiento, departamento, ciudad, genero, email, observaciones) VALUES ('$tipoDoc','$nIdentificacion','$primerNombre','$segundoNombre','$primerApellido','$segundoApellido','$fecNacimiento','$departamento','$ciudad','$genero','$email','$observacion')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>