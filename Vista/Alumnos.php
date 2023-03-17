<?php
session_start();
if (!isset($_SESSION["logged"])) {
    header("Location: login.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALUMNOS REGISTRADOS</title>
</head>

<style>
th,
td {
    border: solid 1px black;
    padding: 8px;
}

thead {
    background-color: #30AADC;
    border-bottom: solid 0px;
    color: white;
}
</style>

<section>
    <div>
        <a href="RegistroA.php" class="tope">REGISTRAR</a>
    </div>
    <div>
        <a href="Index.php" class="tope">Volver a USUARIOS REGISTRADOS</a>
    </div>
    <div> <a href="login.php" class="tope">CERRAR SESIÓN</a></div>
</section>

<header>
    <h1>ALUMNOS REGISTRADOS.</h1>
</header>

<body>

    <div id="tablap">
        <table class="tablacont">
            <thead>
                <th>ID Usuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Correo Electronico</th>
                <th>Operaciones</th>
            </thead>
            <tbody>
                <?php
                if ($conn = mysqli_connect("localhost", "root", "", "crud")) {
                    $query = mysqli_query($conn, "SELECT * FROM alumnos");
                    while ($row = mysqli_fetch_object($query)) {
                        echo "<tr><td> {$row->ID_Alumno}</td><td> {$row->Nombre}</td><td> {$row->Apellido}</td><td>
                             {$row->Edad}</td><td> {$row->CorreoE}</td><td>
                            <form method='POST' action='delete_alum.php'><button type='submit'>Borrar</button>
                            <input type='hidden' name='user_id2' value='" . $row->ID_Alumno . "'/></form>
                            <form method='POST' action='Edit_Alumno.php'>
                            <input type='hidden' name='user_id2' value='" . $row->ID_Alumno . "'>
                            <button type='submit'>Editar</button>
                            </form>
                            </td>
                
                            </tr>";
                    }
                } else {
                    echo "no se pudo conectar";
                }
                ?>

</body>

</html>