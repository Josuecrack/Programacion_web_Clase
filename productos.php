<?php
require_once 'config.php';
require_once 'clase_sql.php';

$clase_pro = new Clase_sql();
$res = $clase_pro->ConsultaProductos();
$res_cat = $clase_pro->ConsultaCategorias();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Consulta de Producto</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">

</head>

<body>

    <div class="container">



        <div class="card">
            <div class="card-header">
                CONSULTA DE PRODUCTOS
            </div>

            <div class="card-body">
                <table class="table table-striped table-hover table-bordered" id="dtproducto">
                    <thead>
                        <tr>
                            <th>CÓDIGO</th>
                            <th>PRODUCTO </th>
                            <th>PRECIO COMPRA</th>
                            <th>PRECIO VENTA</th>
                            <th>CANTIDAD</th>
                            <th>CATEGORÍA</th>
                            <th>OBSERVACIÓN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($fila = $res->fetch_assoc()){ ?>

                        <tr>
                            <td> <?php echo $fila['Codigo']; ?> </td>
                            <td> <?php echo $fila['Productos']; ?> </td>
                            <td> <?php echo $fila['precioc']; ?> </td>
                            <td> <?php echo $fila['preciov']; ?> </td>
                            <td> <?php echo $fila['cantidad']; ?> </td>
                            <td> <?php echo $fila['Categoria']; ?> </td>
                            <td> <?php echo $fila['observacion']; ?> </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- formulario de ingreso -->

        <button type="button" data-toggle="modal" data-target="#ventana1"
            class="btn btn-primary btn-lg">Click....</button>
        <!-- ventana modal -->

        <div class="modal fade" id="ventana1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Poductos</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times; </span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="insertar_cli.php" method="POST" name="form1">


                            <h3> Ingreso de productos </h3>
                            <div>

                                <div class="form-group row">
                                    <label for="txtprod" class="col-md-2 col-form-label"> Producto: </label>
                                    <div class="col-md-5">
                                        <input type="text" name="txtprod" id="txtprod" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-2 col-form-label"> Precio compra: </label>
                                    <div class="col-md-4">
                                        <input type="text" name="txtprec" id="txtprec" class="form-control">
                                    </div>

                                    <label for="" class="col-md-2 col-form-label"> Precio venta: </label>
                                    <div class="col-md-4">
                                        <input type="text" name="txtprev" id="txtprev" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-2 col-form-label"> Cantidad: </label>
                                    <div class="col-md-4">
                                        <input type="text" name="txtcan" id="txtcan" class="form-control">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="" class="col-md-2 col-form-label"> Categoria: </label>
                                    <div class="col-md-4">
                                        <select name="slcate" id="slcate" class="form-control">
                                            <?php
                                                while($fila = $res_cat->fetch_assoc()){ 
                                                     echo "<option value=". $fila['codigo'] .">". $fila['descripcion'] ."</option>";
                                                          }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-2 col-form-label"> Observación: </label>
                                    <div class="col-md-4">
                                        <input type="text" name="txtobse" id="txtobse" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row col-md-4">
                                    <input type="submit" value="Enviar" name="btnguard" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        botones
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
<script src="js/jquery-3.5.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function() {
    $('#dtproducto').DataTable({
        "language": {
            "url": "js/Spanish.json"
        }
    });
});
</script>