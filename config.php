<?php
define ('HOST','localhost');
define ('USER','usu_anzules');
define('PASS','alieniguena12');
define('BD','bdoctavo');



$con=mysqli_connect(HOST,USER,PASS,BD) or die ('Erroren la conexiò');

if($con==true)
{
echo "CONEXION EXITOSA";
}
else
{echo "PROBLEMA EN LA CONEXION";}



?>