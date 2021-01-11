<?php
require 'Conexion.php';



$Nombre = $_POST ['nombre'];
$Apellido = $_POST ['apellido'];
$Email = $_POST ['email'];
$Pais = $_POST ['pais'];
$Telefono = $_POST ['telefono'];
$Puesto = $_POST ['puesto'];




$insertar = "INSERT INTO inscrito VALUES ('$Nombre','$Apellido','$Email','$Pais','$Telefono','$Puesto')";

$query = mysqli_query($conectar, $insertar);


if($query){

    echo '<script>alert ("Gracias por tu interés.En breve nos comunicaremos contigo en el correo electrónico que llenaste en el formulario.");
    location.href = "../index.html";
    </script>';

}






?>