<?php 
include "conexion.php"; 

    $cliente = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $statuds = "espera";

    $stmt_archivo = $mbd->prepare("INSERT INTO pedido (cliente, fecha, status) 
    VALUES (?,?,?)");
    $stmt_archivo->bindParam(1,$cliente);
    $stmt_archivo->bindParam(2,$fecha);
    $stmt_archivo->bindParam(3,$statuds);
    $stmt_archivo->execute();

    $idguia = $mbd->lastInsertId();

    echo $idguia;
    
    
?>