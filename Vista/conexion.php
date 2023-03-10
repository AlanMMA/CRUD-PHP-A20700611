<?php
    $conn = mysqli_connect("localhost", "root", "", "crud");
    if (mysqli_connect_errno()){
        echo "NO SE PUDO CONECTAR: ". mysqli_error($conn);
        exit();
    }
?>