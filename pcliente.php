<?php
require_once 'clase_sql.php';
require_once 'config.php';

$clase_cli=new clase_sql();
$res=$clase_cli->ConsultaClientes();


?>

<table border=1>
  <thead>
  <tr>
  
  <th> CEDULA </th>
  <th> RAZON SOCIAL </th>
  <th> TELEFONO</trh>
  <th> DIRECCION</th>  

  </tr>
  
  <tbody>
    

    <?php while($fila=$res->fetch_assoc()){ ?>

    
<tr>

<td> <?php echo $fila['cedula'];?>   </td>
<td> <?php echo $fila['apellidos']." ".$fila['nombres'];?>   </td>
<td>  <?php echo $fila['telefono'];?>  </td>
<td>  <?php echo $fila['direccion'];?>  </td>

</tr>

<?php }?>
  </tbody>
  
  
 
  </thead>
</table>