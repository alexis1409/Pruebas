<?php 
include 'onexion.php';
$idped = $_POST['idpe'];

$tota = "50";
$status = "ENVIADO";

$consu = "UPDATE pedido SET total = '$tota', 
                                status = '$status' WHERE id_pedido = '$idped' "; 
$ej = $mbd -> prepare($consu); 
$ej -> execute(); 

?>