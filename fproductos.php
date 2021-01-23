<?php
require_once 'config.php';
require_once 'clase_sql.php';

$clase_cat = new Clase_sql();
$res = $clase_cat->ConsultaCategorias();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ingreso de Productos</title>
</head>

<body>

    <form action="insertar_cli.php" method="POST" name="form1">
        

    <h3> Ingreso de productos </h3>
    <div>
        <!-- <label for=""> Codigo:</label>
        <input type="text" name="txtcod" id="txtcod">
        </div> -->
        <div>
        <label for="txtprod"> Producto: </label>
        <input type="text" name="txtprod" id="txtprod">
        </div>
        <div>
        <label for=""> Precio compra: </label>
        <input type="text" name="txtprec" id="txtprec">
        </div>
        <div>
        <label for=""> Precio venta: </label>
        <input type="text" name="txtprev" id="txtprev">
        </div>
        <div>
        <label for=""> Cantidad: </label>
        <input type="text" name="txtcan" id="txtcan">
        </div>
        <div>
        <label for=""> Categoria: </label>
        <select name="slcate" id="slcate">
            <?php
              while($fila = $res->fetch_assoc()){ 
                  echo "<option value=". $fila['codigo'] .">". $fila['descripcion'] ."</option>";
              }
            ?>
          </select> 
        </div>
        <div>
        <label for=""> Observación: </label>
        <input type="text" name="txtobse" id="txtobse">
        </div>
        <div>
        <input type="submit" value="Enviar" name="btnguard">
        </div>
        
        </div>
       
        

    </form>

</body>

</html>