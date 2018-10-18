<?php 


$busca="SELECT * FROM `datacitologia`";
$execute=$connect-> query($busca);

              
 foreach($execute as $valores){
      
        echo'
<tr>
    <td>'.$valores[id_datacitologia].'</td>
    <td>'.$valores[titulo].'</td>
    <td>'.$valores[hallazgo].'</td>
    <td>'.$valores[conclusion].'</td>
    <td>
    <div class="pull-right hidden-phone">
        <a href="#edit'.$valores[id_datacitologia].'" title="Editar" data-toggle="modal" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></a>
        
        <a href="#delete'.$valores[id_datacitologia].'" title="Eliminar" data-toggle="modal" class="btn btn-default btn-xs"><i class="fa fa-times"></i></a>
    </div>
    </td>
    
</tr>';
  }
?>