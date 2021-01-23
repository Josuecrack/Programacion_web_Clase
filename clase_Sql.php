<?php

class Clase_sql{
//Atributo
private $bd;

//constructor 
public function __construct(){
    $this->bd = new mysqli(HOST, USER, PASS, BD);  
}
//Metodos- funciones
public function ConsultaClientes(){
$resultado = $this->bd->query('SELECT * FROM clientes');
return $resultado;
}

public function ConsultaCategorias(){
$resultado = $this->bd->query('SELECT * FROM categoria');
return $resultado;
}

public function ConsultaProductos(){
    $resultado = $this->bd->query('SELECT * FROM vista_productos');
    return $resultado;
    }

public function InsertProducto($pro, $prc, $prv, $can, $cat, $obs){
        $resultado = $this->bd->query("INSERT INTO productos (codigo,descripcion, precioc, preciov, cantidad, observacion, codigo_cat)
        VALUES(0,'$pro','$prc','$prv','$can','$obs','$cat')");
        return true;
        }
}


?>