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
    <title>Document</title>
</head>
<style>
    .titulo {
        color: white;
        text-decoration: underline;
        text-align: center;
        margin: 50px 10px 0px 10px;
        font-family: 'Times New Roman', Times, serif, Courier, monospace;
    }

    form {
        width: 50%;
        margin: 0 auto;
    }

    .row {
        display: flex;
        justify-content: space-between;
        gap: 10px;
        padding: 10px;
    }

    .btnPrimary {
        border: 1px solid ivory;
        border-radius: 5px;
        padding: 5px 10px;
        color: ivory;
        background-color: green;
        width: 100%;
    }

    .btnExit {
        border: 1px solid ivory;
        border-radius: 5px;
        padding: 5px 10px;
        color: ivory;
        background-color: red;
        width: 100%;
        padding: 5px;
        font-size: 16px;
        text-align: center;
    }

    input {
        border: 1px solid gray;
        padding: 5px;
        border-radius: 10px;
    }

    a {
        text-decoration: none;
        color: white;
    }
</style>

<header>
    <h1 class="titulo">REGISTRO DE USUARIOS</h1>
</header>

<body>
    <form method="POST" action="save.php">
        <section class="formulario">
            <div class="row">
                <label class="nombre">Nombre:</label>
                <input type="text" name="name" placeholder="Ingrese su nombre" />
            </div>
            <div class="row">
                <label class="usuario">Usuario:</label>
                <input type="text" name="user" placeholder="Ingrese nombre de usuario" />
            </div>
            <div class="row">
                <label class="contraseña" for="fecha">Contraseña:</label>
                <input type="password" name="password" placeholder="Ingrese una contraseña" />
            </div>
            <div class="row">
                <button class="btnPrimary" type="submit">Registrar</button>
            </div>
            <div class="row">
                <a class="btnExit" href="index.php">Regresar</a>
            </div>
        </section>
    </form>

</body>

</html>