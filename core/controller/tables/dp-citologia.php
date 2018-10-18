<?php 

$buscaCitologia="SELECT citologia.id_citologia, citologia.correlativo_citologia, citologia.conclusion, citologia.fecha_citologia, citologia.firma_digital, paciente.nombres, paciente.cedula, paciente.email, datacitologia.titulo FROM citologia INNER JOIN paciente ON citologia.id_paciente = paciente.id_paciente INNER JOIN datacitologia ON citologia.id_datacitologia = datacitologia.id_datacitologia WHERE citologia.id_paciente = $id_paciente";
$ResultCitologia=$connect-> query($buscaCitologia);

              
 foreach($ResultCitologia as $citologia){
      
        echo'
<tr>
    <td>'.$citologia[correlativo_citologia].'</td>
    <td>'.$citologia[titulo].'</td>
    <td>'.$citologia[conclusion].'</td>
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