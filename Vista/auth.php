<?php
    session_start();
    include ('conexion.php');
    $user = $_POST["name2"];
    $password = $_POST["password2"];
    $sql = "SELECT * FROM usuarios where Usuario='".$user."' && Password='".$password."'";
    $query = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_object($query)){
        
        $_SESSION["logged"] = true;
        $_SESSION["user_id"]  = $row->ID;
        $_SESSION["displayName"] = $row->Nombre;
        $_SESSION["user"] = $row->Usuario;
        $_SESSION["pass"] = $row->Password;

        header("Location: index.php");
    }
    else{
        echo "El usuario no existe o la contraseña es erronea.<br>";
        echo "<a href='login.php'>Regresar</a>";
    }
?>