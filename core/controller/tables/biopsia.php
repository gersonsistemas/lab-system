<?php 
$fecha_inicio=$_POST['fecha_inicio'];
$fecha_fin=$_POST['fecha_fin'];

if($fecha_fin < $fecha_inicio){
       
    $warning[] = "La fecha Desde es mayor, la consulta no se realizo";
}


if($_POST['consultarFechas']){
$buscaBitologia="SELECT biopsia.id_biopsia, biopsia.correlativo_biopsia, biopsia.fecha_biopsia, biopsia.firma_digital, databiopsia.titulo, paciente.nombres, paciente.cedula, paciente.email, doctor.nombre_doctor, clinica.nombre_clinica FROM biopsia INNER JOIN databiopsia ON biopsia.id_databiopsia = databiopsia.id_databiopsia INNER JOIN paciente ON biopsia.id_paciente = paciente.id_paciente INNER JOIN doctor ON biopsia.id_doctor = doctor.id_doctor INNER JOIN clinica ON biopsia.id_clinica = clinica.id_clinica WHERE fecha_biopsia >= '$fecha_inicio' AND fecha_biopsia <= '$fecha_fin'";
$ResultBiopsia=$connect-> query($buscaBitologia);

}

if($_POST['consultarCorrelativo']){
$buscaBitologia="SELECT biopsia.id_biopsia, biopsia.correlativo_biopsia, biopsia.fecha_biopsia, biopsia.firma_digital, databiopsia.titulo, paciente.nombres, paciente.cedula, paciente.email, doctor.nombre_doctor, clinica.nombre_clinica FROM biopsia INNER JOIN databiopsia ON biopsia.id_databiopsia = databiopsia.id_databiopsia INNER JOIN paciente ON biopsia.id_paciente = paciente.id_paciente INNER JOIN doctor ON biopsia.id_doctor = doctor.id_doctor INNER JOIN clinica ON biopsia.id_clinica = clinica.id_clinica WHERE correlativo_biopsia = '$_POST[correlativo_biopsia]'";
$ResultBiopsia=$connect-> query($buscaBitologia);

}
              
 foreach($ResultBiopsia as $biopsia){
      
        echo'
<tr>
    <td>'.$biopsia[correlativo_biopsia].'</td>
    <td>'.$biopsia[titulo].'</td>
    <td>'.$biopsia[nombres].'</td>
    <td>'.$biopsia[nombre_doctor].'</td>
    <td>'.$biopsia[nombre_clinica].'</td>
    <td>'.$biopsia[fecha_biopsia].'</td>
    <td>
    <div class="pull-right hidden-phone">
        
    <form style="display:inline-block;" action="detalle-biopsia" method="POST" target="_blank" title="Ver detalle">
                
        <button name="id_biopsia" value="'.$biopsia[id_biopsia].'" type="submit" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></button>
            
    </form>     
        <a href="#emailBiopsia'.$biopsia[id_biopsia].'" title="Enviar Email" data-toggle="modal" class="btn btn-default btn-xs"><i class="fa fa-envelope-o"></i></a>
        
        <a href="#pdfB'.$biopsia[id_biopsia].'" title="Reporte" data-toggle="modal" class="btn btn-default btn-xs"><i class="fa fa-print"></i></a>
    </div>
    </td>
    
</tr>';
  }
?>