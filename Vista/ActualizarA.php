<?php
    include ('conexion.php');
    $user_id2 = $_POST["user_id2"];
    $name = $_POST["name"];
    $apel = $_POST["apellido"];
    $age = $_POST["age"];
    $cor = $_POST["cor"];
    

    $sql = "UPDATE alumnos set 
    Nombre = '".$name."', Apellido='".$apel."', Edad='".$age."', CorreoE='".$cor."' where ID_Alumno=".$user_id2;
    if ($query = mysqli_query($conn, $sql))
        header("Location: Alumnos.php");
    else{
        echo "Usuario no pudo ser actualizado<br>";
        echo "<a href='Alumnos.php'>Regresar</a>";
    }
?>