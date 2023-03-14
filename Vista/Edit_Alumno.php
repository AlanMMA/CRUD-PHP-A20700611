<?php
session_start();
if (!isset($_SESSION["logged"])) {
    header("Location: login.php");
}

include("conexion.php");
$user_id = $_POST["user_id"];
$sql = "SELECT * from alumnos where ID_Alumno=" . $user_id;
$query = mysqli_query($conn, $sql);
if (!$row = mysqli_fetch_object($query)) {
    echo "Usuario no existe<br>";
    echo "<a href='Alumnos.php'>Regresar</a>";
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar datos A</title>
</head>

<header>
    <h1 class="titulo">EDITAR DATOS DEL ALUMNO</h1>
</header>

<body>

    <form method="POST" action="ActualizarA.php">
        <section class="formulario">

            <input type="hidden" name="user_id" value="<?php echo $row->ID_Alumno ?>">
            <div class="row">
                <label class="Nombre">Nombre:</label>
                <input type="text" name="name" value="<?php echo $row->Nombre ?>" />
            </div>
            <div class="row">
                <label>Apellido:</label>
                <input type="text" name="apellido" value="<?php echo $row->Apellido ?>" />
            </div>
            <div class="row">
                <label>Edad:</label>
                <input type="text" name="age" value="<?php echo $row->Edad ?>" />
            </div>
            <div class="row">
                <label>Correo:</label>
                <input type="text" name="cor" value="<?php echo $row->CorreoE ?>" />
            </div>
            <div class="row">
                <button class="btnPrimary" type="submit">Actualizar</button>
            </div>
            <div class="row">
                <a class="btnExit" href="Alumnos.php">Regresar</a>
            </div>
        </section>
    </form>

</body>

</html>