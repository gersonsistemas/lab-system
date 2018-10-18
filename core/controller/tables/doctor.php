<?php 


$busca="SELECT * FROM doctor WHERE id_doctor != 1";
$execute=$connect-> query($busca);

              
 foreach($execute as $valores){
      
        echo'
<tr>
    <td>'.$valores[id_doctor].'</td>
    <td>'.$valores[nombre_doctor].'</td>
    <td>'.$valores[direccion_doctor].'</td>
    <td>'.$valores[especialidad].'</td>
    <td>
    <div class="pull-right hidden-phone">
        <a href="#edit'.$valores[id_doctor].'" title="Editar" data-toggle="modal" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></a>
        
        <a href="#delete'.$valores[id_doctor].'" title="Eliminar" data-toggle="modal" class="btn btn-default btn-xs"><i class="fa fa-times"></i></a>
    </div>
    </td>
    
</tr>';
  }
?>