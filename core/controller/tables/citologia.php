<?php 

if($_POST[fecha_fin] < $_POST[fecha_inicio]){
       
    $warning[] = "La fecha Desde es mayor, la consulta no se realizo";
}


if($_POST['consultarFechas']){
$buscaCitologia="SELECT citologia.id_citologia, citologia.correlativo_citologia, citologia.fecha_citologia, citologia.firma_digital, datacitologia.titulo, paciente.nombres, paciente.cedula, paciente.email, doctor.nombre_doctor, clinica.nombre_clinica FROM citologia INNER JOIN datacitologia ON citologia.id_datacitologia = datacitologia.id_datacitologia INNER JOIN paciente ON citologia.id_paciente = paciente.id_paciente INNER JOIN doctor ON citologia.id_doctor = doctor.id_doctor INNER JOIN clinica ON citologia.id_clinica = clinica.id_clinica WHERE fecha_citologia >= '$_POST[fecha_inicio]' AND fecha_citologia <= '$_POST[fecha_fin]'";
$ResultCitologia=$connect-> query($buscaCitologia);

}

if($_POST['consultarCorrelativo']){
$buscaCitologia="SELECT citologia.id_citologia, citologia.correlativo_citologia, citologia.fecha_citologia, citologia.firma_digital, datacitologia.titulo, paciente.nombres, paciente.cedula, paciente.email, doctor.nombre_doctor, clinica.nombre_clinica FROM citologia INNER JOIN datacitologia ON citologia.id_datacitologia = datacitologia.id_datacitologia INNER JOIN paciente ON citologia.id_paciente = paciente.id_paciente INNER JOIN doctor ON citologia.id_doctor = doctor.id_doctor INNER JOIN clinica ON citologia.id_clinica = clinica.id_clinica WHERE correlativo_citologia = '$_POST[correlativo_citologia]'";
$ResultCitologia=$connect-> query($buscaCitologia);

}
              
  foreach($ResultCitologia as $citologia){
      
        echo'
<tr>
    <td>'.$citologia[correlativo_citologia].'</td>
    <td>'.$citologia[titulo].'</td>
    <td>'.$citologia[nombres].' '.$citologia[cedula].'</td>
    <td>'.$citologia[nombre_doctor].'</td>
    <td>'.$citologia[nombre_clinica].'</td>
    <td>'.$citologia[fecha_citologia].'</td>
    <td>
    <div class="pull-right hidden-phone">
        
    <form style="display:inline-block;" action="detalle-citologia" method="POST" target="_blank" title="Ver detalle">
                
        <button name="id_citologia" value="'.$citologia[id_citologia].'" type="submit" class="btn btn-default btn-xs"><i class="fa fa-eye"></i></button>
            
    </form>  
    
    <a href="#emailCitologia'.$citologia[id_citologia].'" title="Enviar Email" data-toggle="modal" class="btn btn-default btn-xs"><i class="fa fa-envelope-o"></i></a>
    
    <a href="#pdf'.$citologia[id_citologia].'" title="Reporte" data-toggle="modal" class="btn btn-default btn-xs"><i class="fa fa-print"></i></a>
    </div>
    </td>
    
</tr>';
  }
?>