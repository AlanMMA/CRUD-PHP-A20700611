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
    <title>Index</title>
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

<section class="btnPrincipal">
    <div class="btn1">
        <a href="registrar.php" class="tope">REGISTRAR</a>
    </div>
    <div class="btn2">
        <a href="logout.php" class="tope">CERRAR SESION</a>
    </div>
    <div>
        <a href="Alumnos.php">VER ALUMNOS REGISTRADOS</a>
    </div>
</section>
<header>
    <h1 class="titulo">USUARIOS REGISTRADOS</h1>
</header>

<body>
    <div id="tablap">
        <table class="tablacont">
            <thead>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Password</th>
                <th>Operaciones</th>
            </thead>
            <tbody>
                <?php
                if ($conn = mysqli_connect("localhost", "root", "", "crud")) {
                    $query = mysqli_query($conn, "SELECT * FROM usuarios");
                    while ($row = mysqli_fetch_object($query)) {
                        echo "<tr><td> {$row->Nombre}</td><td> {$row->Usuario}</td><td> {$row->Password}</td><td>
                            <form method='POST' action='delete_user.php'><button type='submit'>Borrar</button>
                            <input type='hidden' name='user_id' value='" . $row->ID . "'/></form>
                            <form method='POST' action='show_user.php'>
                            <input type='hidden' name='user_id' value='" . $row->ID . "'>
                            <button type='submit'>Editar</button>
                            </form>
                            </td>
                
                            </tr>";
                    }
                } else {
                    echo "no se pudo conectar";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>