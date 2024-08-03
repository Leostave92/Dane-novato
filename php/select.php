<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Datos de Encuesta Dane</title>
</head>
<body class="t_mostrar">
   
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dane";


$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn-> connect_error) {
    die ("conecction faild: " . $conn->connect_error);

}

$sql = "select tipo_documento, n_documento, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, fecha_nacimiento, departamento, ciudad, genero, email, observaciones from datos_personales";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
   echo "
    <table>
         <caption>Datos de Encuesta Dane</caption>
   
        <thead>
            <th>Tipo Docuemnto</th>
            <th>Docuemnto</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Fecha Nacimiento</th>
            <th>Departamento</th>
            <th>Ciudad</th>
            <th>Genero</th>
            <th>Correo Electronico</th>
        </thead>
        <tbody>";
       
    while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row["tipo_documento"]. "</td><td>".$row["n_documento"]."</td><td>".$row["primer_nombre"]." ".$row["segundo_nombre"]."</td><td>".$row["primer_apellido"]." ".$row["segundo_apellido"]."</td><td>".$row["fecha_nacimiento"]."</td><td>".$row["departamento"]."</td><td>".$row["ciudad"]."</td><td>".$row["genero"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo "</tbody></table>";
} else{
    echo "0 Results";

}

$conn->close();

?> 
</body>
</html>

