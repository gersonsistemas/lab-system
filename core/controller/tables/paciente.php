<?php 
$fecha_inicio=$_POST['fecha_inicio'];
$fecha_fin=$_POST['fecha_fin'];

if($fecha_fin < $fecha_inicio){
       
    $warning[] = "La fecha Desde es mayor, la consulta no se realizo";
}


if($_POST['consultarFechas']){
$busca="SELECT * FROM `paciente` WHERE `fecha_registro` >= '$fecha_inicio' AND `fecha_registro` <= '$fecha_fin'";
$execute=$connect-> query($busca);

}

if($_POST['consultarCedula']){
    
$cedula=$_POST['cedula'];
    
$busca="SELECT * FROM `paciente` WHERE `cedula` = $cedula";
$execute=$connect-> query($busca);

}

if($_POST['consultarNombres']){

$nombres=$_POST['nombres'];
    
$busca="SELECT * FROM `paciente` WHERE `nombres` LIKE '%$nombres%'";
$execute=$connect-> query($busca);

}
              
 foreach($execute as $valores){
      
        echo'
<tr>
    <td>'.$valores[id_paciente].'</td>
    <td>'.$valores[cedula].'</td>
    <td>'.$valores[nombres].'</td>
    <td>'.$valores[email].'</td>
    <td>'.$valores[telefono].'</td>
    <td>'.$valores[codigo].'</td>
    <td>'.$valores[fecha_registro].'</td>
    <td>
    <div class="pull-right hidden-phone">
        
    <form style="display:inline-block;" action="detalle-paciente" method="POST" target="_top" title="Ver detalle">
                
        <button name="id_paciente" value="'.$valores[id_paciente].'" type="submit" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></button>
            
    </form>  
    
        <a href="#email'.$valores[id_paciente].'" title="Enviar Email" data-toggle="modal" class="btn btn-default btn-xs"><i class="fa fa-envelope-o"></i></a>
        
        <a href="#codigo'.$valores[id_paciente].'" title="Reestablecer Codigo" data-toggle="modal" class="btn btn-default btn-xs"><i class="fa fa-key"></i></a>
        
        <a href="#edit'.$valores[id_paciente].'" title="Editar" data-toggle="modal" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></a>

    </div>
    </td>
    
</tr>';
  }
?>