<?php 


$busca="SELECT * FROM clinica WHERE id_clinica != 1";
$execute=$connect-> query($busca);

              
 foreach($execute as $valores){
      
        echo'
<tr>
    <td>'.$valores[id_clinica].'</td>
    <td>'.$valores[nombre_clinica].'</td>
    <td>'.$valores[direccion_clinica].'</td>
    <td>'.$valores[observacion].'</td>
    <td>
    <div class="pull-right hidden-phone">
        <a href="#edit'.$valores[id_clinica].'" title="Editar" data-toggle="modal" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></a>
        
        <a href="#delete'.$valores[id_clinica].'" title="Eliminar" data-toggle="modal" class="btn btn-default btn-xs"><i class="fa fa-times"></i></a>
    </div>
    </td>
    
</tr>';
  }
?>