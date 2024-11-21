<?php

$conn = new mysqli('localhost', 'root', '', 'adsi');
if($conn->connect_error){
    echo "falla la conectarse a Mysql (".$conn->connect_error.")". $conn->connect_error;
    exit();
}
if($resultado = $conn->query("SELECT * FROM ciudades")){
    while($registro = $resultado->fetch_assoc()){
        echo $registro['codigo']." ".$registro['nombre']."<br>";
    }
}
$resultado->free();
$conn->close();
/*else{
    echo $conn->host_info."<br>";
}*/