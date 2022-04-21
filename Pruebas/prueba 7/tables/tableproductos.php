<?php 
    if(isset($_GET['maiug'])){?>

<div class="table-responsive mt-4" id="tablefo">
    <table class="table table-condensed " id="iddatatable" >
        <thead style="background-color: #002A59;color: white; ">
            <tr class="text-center">
                <td>Producto</td>
                <td>cantidad</td>
                <td>costo por pz</td>
                <td>Total</td>
                <td>Quitar</td>
            </tr>
        </thead>

        <tbody >
            <?php 
            require_once "php/Conexion.php";
            $ped =  $_GET['maiug'];
            $sql = "SELECT * FROM productos WHERE fk_pedido = '$ped' "; 
                $query = $mbd -> prepare($sql); 
                $query -> execute(); 
                $results = $query -> fetchAll(PDO::FETCH_OBJ); 
                
                    if($query -> rowCount() > 0){ 
                        foreach($results as $result) { 
            ?>
                <tr class="text-center">
                    <td><?php echo $result -> nombre; ?></td>
                    <td><?php echo $result -> cantida; ?></td>
                    <td><?php echo $result -> precio; ?></td>
                    <td><?php echo $result -> totalforproduct; ?></td>

                    <td style="text-align: center;">
                        <span class="">
                            <a class="btn text-danger" href=""><i class="fa-solid fa-trash"></i></a>
                        </span>
                    </td>

                </tr>
                <?php 
                        }
                    }
            ?>
        </tbody>
    </table>
</div>

        <?php
    }else{
        ?>
            <h2 class="text-danger text-center mt-3">Aun no agregas un cliente</h2>
        <?php
    }
?>
