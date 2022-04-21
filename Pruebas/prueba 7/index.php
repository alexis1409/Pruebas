<?php 
    $pr = json_decode(file_get_contents("./jsons/producto.json"), true);
    $cli = json_decode(file_get_contents("./jsons/clientes.json"), true);
    require_once "php/Conexion.php";
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="https://kit.fontawesome.com/e8f43c259b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Prueba 7</title>

</head>
<body>

    <div class="headerr">
        <img src="img/image001.png" alt="">
        <h4>Prueba web</h4>
    </div>

    <div class="container">
        <div class="row">
            <h3 class="mt-4">Nuevo pedido:</h3>
            <form class="col-md-12 mb-4" id="formcliente">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1"><b>Seleccione el cliente:</b></label>
                        <select class="form-control" id="selectcli" name="nombre">
                            <option value="0">Elige uno</option>
                            <?php 
                                foreach($cli as $dato){
                                    echo '<option value="'.$dato["id_cliente"].'">'.$dato["nombre"].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1"><b>Fecha:</b></label>
                        <input class="form-control" placeholder="Seleccione la fecha" type="text" name="fecha" id="datepickerr">
                    </div>
                    <div class="col-md-12 d-flex justify-content-end">
                        <button onclick="validaForm()" type="button" id="btnAgregarnuevo" class="btn btn-success mt-3">Elegir cliente</button>
                    </div>
                </div>
            </form>
            <hr>
            <form class="col-md-12 mt-3" id="productosnewform">
                <div class="row">
                    <h3>Agrega productos a tu pedimento:</h3>
                    <div class="form-group col-md-8">
                        <label for="exampleFormControlSelect1"><b>Seleccione el producto:</b></label>
                        <select class="form-control" id="selectpro" name="selectpro">
                            <option value="0">Elige uno</option>
                            <?php 
                                foreach($pr as $pro){
                                    echo '<option value="'.$pro["nombre"].'">'.$pro["nombre"].'  $'.$pro["Precio"].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlSelect1"><b>Cantidad:</b></label>
                        <input class="form-control" placeholder="Cantidad" id="cant" name="cant" type="number" >
                    </div>
                    <div class="col-md-12 d-flex justify-content-end">
                        <button onclick="validaFormProduc()" type="button" id="btnAgregarnuevo" class="btn btn-success mt-3">AGREGAR</button>
                    </div>
                    <?php 
                    if(isset($_GET['maiug'])){?>

                        <input type="hidden" name="idpe" value="<?php echo $_GET['maiug']; ?>">

                        <?php
                    }else{
                        
                    }
                    ?>
                    
                </div>
            </form>
            <?php include "tables/tableproductos.php"; ?>
            <?php 
             if(isset($_GET['maiug'])){?>

                 <form action="" id="terminaped">
                        <div class="col-md-12 d-flex justify-content-end">
                            <button onclick="terminapedi()" type="button" id="btnAgregarnuevo" class="btn btn-info text-light mt-3">TERMINAR ORDEN</button>
                        </div>
                        <input type="hidden" name="idpe" value="<?php echo $_GET['maiug']; ?>">
                 </form>

                <?php
             }else{

             }
            ?>
        </div>
    </div>
    
</body>
</html>
<script src="js/main.js"></script>