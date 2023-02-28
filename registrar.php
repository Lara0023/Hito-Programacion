<?php
$Autor = $_POST['Autor'];
$Titulo = $_POST['Titulo'];
$Contenido = $_POST['Contenido'];
$Fecha = $_POST['Fecha'];


$conexion = new mysqli('localhost', 'root','','test' );
$consulta = "INSERT INTO `comentarios` (`Autor`, `Titulo`, `Contenido`, `Fecha`) VALUES (?, ?, ?, ?);"; 
$insertar = $conexion->prepare($consulta);
$resultado = $insertar->execute([$Autor, $Titulo, $Contenido, $Fecha]);