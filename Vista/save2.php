<?php
include('conexion.php');

$nombre = $_POST["nombre"];
$ape = $_POST["apellido"];
$edad = $_POST["edad"];
$Cor = $_POST["Correo"];


if ($nombre == "" || $ape == "" || $edad == "" || $Cor == ""){
    echo "<h4>Faltaron datos</h4>";
    echo "<a href='RegistroA.php'>Regresar</a>";
    exit();
}


if ($query = mysqli_query($conn, "INSERT into alumnos (Nombre, Apellido, Edad, CorreoE) 
values ('" . $nombre . "', '" . $ape . "', '" . $edad . "', '". $Cor ."')")) {
    echo "<h4>Usuario Registrado</h4>";
    echo "<a href='Alumnos.php'>Regresar</a>";
} else {
    echo "Usuario No Registrado";
    echo "<a href='RegistroA.php'>Regresar</a>";
}
mysqli_close($conn);

?>