<?php
$consulta = "select * from comentarios";
$conexion = new mysqli('localhost', 'root','','test' );

$insertar = $conexion->prepare($consulta);
$resultado = $conexion->query($consulta);

echo("<table border='1'>");
    echo("<tr>");
        echo("<th>Autor</th>");
        echo("<th>Título</th>");
        echo("<th>Contenido</th>");
        echo("<th>Fecha</th>");
    echo("</tr>");
    while($row=$resultado->fetch_assoc()){
        echo("<tr>");
            echo("<td>".$row["Autor"]."</td>");
            echo("<td>".$row["Titulo"]."</td>");
            echo("<td>".$row["Contenido"]."</td>");
            echo("<td>".$row["Fecha"]."</td>");
        echo("</tr>");
    }
echo("</table>");