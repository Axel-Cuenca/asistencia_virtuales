<?php
require 'Conexion.php';



$consultar = "SELECT * FROM inscrito";
$query     = mysqli_query($conectar,$consultar);
$array     = mysqli_fetch_array ($query);




?>