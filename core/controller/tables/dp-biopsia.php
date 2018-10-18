<?php 
$buscaBiopsia="SELECT biopsia.id_biopsia, biopsia.correlativo_biopsia, biopsia.conclusion, biopsia.fecha_biopsia, biopsia.firma_digital, paciente.nombres, paciente.cedula, paciente.email, databiopsia.titulo FROM biopsia INNER JOIN paciente ON biopsia.id_paciente = paciente.id_paciente  INNER JOIN databiopsia ON biopsia.id_databiopsia = databiopsia.id_databiopsia WHERE biopsia.id_paciente = $id_paciente";
$ResultBiopsia=$connect-> query($buscaBiopsia);

              
 foreach($ResultBiopsia as $biopsia){
echo'
<tr>
    <td>'.$biopsia[correlativo_biopsia].'</td>
    <td>'.$biopsia[titulo].'</td>
    <td>'.$biopsia[conclusion].'</td>
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