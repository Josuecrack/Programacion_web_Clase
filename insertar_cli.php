<?php
require_once 'config.php';
require_once 'clase_sql.php';

$clase_ins = new Clase_sql();


$prod = $_POST ['txtprod'];
$prec = $_POST ['txtprec'];
$prev = $_POST ['txtprev'];
$cant = $_POST ['txtcan'];
$cate = $_POST ['slcate'];
$obse = $_POST ['txtobse'];

$resul = $clase_ins->InsertProducto($prod,$prec,$prev,$cant,$cate,$obse);
header ('Location: pproductos.php');
?>

header ('Location: pproductos.php')
