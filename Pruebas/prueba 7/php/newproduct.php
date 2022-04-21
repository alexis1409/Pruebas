<?php 
include "conexion.php"; 

    $idpro = $_POST['selectpro'];
    $cantidad = $_POST['cant'];
    $idpedi = $_POST['idpe'];
    $precio = '50';
    $to = '50';

    $stmt_archivo = $mbd->prepare("INSERT INTO productos (nombre, precio, cantida, totalforproduct, fk_pedido) 
    VALUES (?,?,?,?,?)");
    $stmt_archivo->bindParam(1,$idpro);
    $stmt_archivo->bindParam(2,$precio);
    $stmt_archivo->bindParam(3,$cantidad);
    $stmt_archivo->bindParam(4,$to);
    $stmt_archivo->bindParam(5,$idpedi);
    $stmt_archivo->execute();

    echo $idpedi;
    
    
?>