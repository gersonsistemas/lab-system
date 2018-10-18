<div class="modal inmodal fade" id="Consultfechas" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="citologia" method="post" id="formfecha">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Consultar por fechas</h4>
            </div>
            
            <div class="modal-body">
                              
                <div class="form-group col-md-6">
                        
                    <label>Desde (*)</label>
                    
                    
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            
                        <input type="date" name="fecha_inicio" class="form-control" value="<?php echo $fecha_inicio ?>" required>
                    </div>
                    
                </div>
                    
                <div class="form-group col-md-6">
                        
                    <label>Hasta (*)</label>
                    
                    
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        
                        <input type="date" name="fecha_fin" class="form-control" value="<?php echo $fecha_fin ?>" required>
                    </div>
                    
                </div>
                <p>(*) Campos requeridos</p>
            </div>
            
            <div class="modal-footer">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="consultarFechas" class="btn btn-primary" value="Consultar">
            </div>
            
        </div>
    </div>
</form>
</div>

<div class="modal inmodal fade" id="ConsultCorrelativo" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="citologia" method="post" id="formcorre">
     <div class="modal-dialog modal-sm">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Consultar Correlativo</h4>
            </div>
            
            <div class="modal-body">
                              

                <div class="col-md-12 form-group">
                    <label>Correlativo (*)</label>
                    <input type="text" class="form-control" name="correlativo_citologia" value="" maxlength="7" required>
                </div>
                <p>(*) Campos requeridos</p>
            </div>
            
            <div class="modal-footer">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="consultarCorrelativo" class="btn btn-primary" value="Consultar">
            </div>
            
        </div>
    </div>
</form>
</div>

<div class="modal inmodal fade" id="newCitologia" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="detalle-paciente" method="post" id="formcitologia">
     <div class="modal-dialog modal-lg">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Nueva Citologia</h4>
            </div>
            
            <div class="modal-body">
                
                <div class="col-md-4 form-group">
                    <label>Correlativo (*)</label>
                    <input type="text" class="form-control" name="correlativo_citologia" value="" maxlength="7" required>
                </div>
                    
                <div class="col-md-4 form-group">
                    <label>Edad Paciente (*)</label>
                    <input type="text" class="form-control" id="edad" name="edad" value="<?php echo $edad ?>" required>
                </div>
					
				<div class="col-md-4 form-group">
                    <label>Fecha</label>
                    <input type="date" name="fecha_citologia" class="form-control" value="<?php echo $fecha_hoy ?>" required>
                </div>
                
                <div class="col-md-4 form-group">
                    <label>Clinica (*)</label>
                    <select class="form-control select" id="clinica" name="id_clinica" required>
                        <option value="">Seleccione</option>
                        <?php
                            $sql="SELECT * FROM clinica ORDER BY nombre_clinica ASC";
                            $execute=$connect-> query($sql);
                
                            foreach($execute as $filas){
                                echo'
                                <option value = "'.$filas[id_clinica].'">
                                '.utf8_encode($filas[nombre_clinica]).'
                                </option>
                                ';
                            }
                        ?>
                    </select>
                </div>
                    
                <div class="col-md-4 form-group">
                    <label>Doctor (*)</label>
                    <select class="form-control select" id="doctor" name="id_doctor" required>
                        <option value="">Seleccione</option>
                        <?php
                             $sql="SELECT * FROM doctor ORDER BY nombre_doctor ASC";
                            $execute=$connect-> query($sql);
                
                            foreach($execute as $filas){
                                echo'
                                <option value = "'.$filas[id_doctor].'">
                                '.utf8_encode($filas[nombre_doctor]).'
                                </option>
                                ';
                            }
                        ?>
                    </select>
                </div> 
                    
                <div class="col-md-4 form-group">
                    <label>Titulo (*)</label>
                    <select class="form-control select" id="formato" name="id_datacitologia" required>
                        <option value="">Selecciona un Titulo</option>
                        <?php
                            $sql="SELECT * FROM datacitologia ORDER BY titulo ASC";
                            $execute=$connect-> query($sql);
                
                            foreach($execute as $filas){
                                echo'
                                <option value = "'.$filas[id_datacitologia].'">
                                '.utf8_encode($filas[titulo]).'
                                </option>
                                ';
                            }
                        ?>
                    </select>
                </div>
                
                <div class="col-md-12 form-group">
                    <label>Observación</label>
                    <input type="text" class="form-control" name="observaciones" value="">
                </div>
                
                <div id="datacitologia"></div>
                
                <p>(*) Campos requeridos</p>
                
            </div>

            <div class="modal-footer">
                
                <input type="hidden" name="id_paciente" value="<?php echo $info_Paciente[id_paciente] ?>">
                <input type="hidden" name="cedula" value="<?php echo $info_Paciente[cedula] ?>">
                <input type="hidden" name="nombres" value="<?php echo $info_Paciente[nombres] ?>">
                <input type="hidden" name="insert" value="valor">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="newCitologia" class="btn btn-success" value="Guardar">
            </div>
            
        </div>
    </div>
</form>
</div>

<script src = "assets/js/plugins/search/jquery-3.1.1.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#formato').on('change', function(){
				if($('#formato').val() == ""){
					$('#datacitologia').empty();
					$('placeholder="Selecciona un formato"').appendTo('#datacitologia');
					$('#datacitologia').attr('disabled', 'disabled');
				}else{
					$('#datacitologia').removeAttr('disabled', 'disabled');
					$('#datacitologia').load('core/controller/search/citologia.php?id_datacitologia=' + $('#formato').val());
				}
		});
	});
</script> 

<?php
include('assets/dompdf/select.php'); 
                                                 
foreach($ResultCitologia as $valorescitologia){
   
echo'
<div class="modal inmodal fade" id="pdf'.$valorescitologia[id_citologia].'" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="reporte" method="post" target="_blank">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <i class="fa fa-print modal-icon"></i>
                <h4 class="modal-title">Reporte Citologia</h4>
                <small class="font-bold">Imprimir citologia '.$valorescitologia[correlativo_citologia].'.
                </small>
            </div>
            
             <div class="modal-body">
             
             <div class="form-group">
                <label>Tamaño (*)</label>
                
                '.$selectPaper.'

            </div>
            
                <div class="col-md-6 form-group">
                    <div class="i-checks"><label><input type="checkbox" checked name="logo1" value="activo"><i></i>Logo Dra. Grace</label></div>
                </div>

                <div class="col-md-6 form-group"> 
                    <div class="i-checks"><label><input type="checkbox"  name="logo2" value="activo"><i></i>Logo Unidad Mastologia</label></div> 
                </div>
                 
                <p>(*) Campos requeridos</p>
                
            </div>
            
            <div class="modal-footer">
            
                <input type="hidden" name="firma_digital" value="'.$valorescitologia[firma_digital].'">
                
                <input type="hidden" name="id_citologia" value="'.$valorescitologia[id_citologia].'">
                <input type="hidden" name="title" value="Citologia '.$valorescitologia[correlativo_citologia].' '.$valorescitologia[nombres].'">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="pdf_citologia" class="btn btn-primary" value="Vista Previa">
                
            </div>
            
        </div>
    </div>
</form>
</div>

<div class="modal inmodal fade" id="emailCitologia'.$valorescitologia[id_citologia].'" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="'.$url_citologia.'" method="post">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <i class="fa fa-envelope-o modal-icon"></i>
                <h4 class="modal-title">Enviar Correo</h4>
                <small class="font-bold">Se enviara correo al paciente.
                </small>
            </div>
            
            <div class="modal-body">   
            
            <h3>¿Desea enviar correo a paciente '.$valorescitologia[nombres].' para que acceda a la citologia  '.$valorescitologia[correlativo_citologia].'? Email  '.$valorescitologia[email].'</h3>
                
            <div class="form-group">
                <label>Tamaño (*)</label>
                
                '.$selectPaper.'

            </div>
            
                <div class="col-md-6 form-group">
                    <div class="i-checks"><label><input type="checkbox" checked name="logo1" value="activo"><i></i>Logo Dra. Grace</label></div>
                </div>

                <div class="col-md-6 form-group"> 
                    <div class="i-checks"><label><input type="checkbox"  name="logo2" value="activo"><i></i>Logo Unidad Mastologia</label></div> 
                </div>
                 
                <p>(*) Campos requeridos</p>
            </div>
            
            <div class="modal-footer">
            
                <input type="hidden" name="title" value="Citologia '.$valorescitologia[correlativo_citologia].' '.$valorescitologia[nombres].'">
            
                <input type="hidden" name="email_citologia" value="valor">
                <input type="hidden" name="id_citologia" value="'.$valorescitologia[id_citologia].'">
                <input type="hidden" name="firma_digital" value="'.$valorescitologia[firma_digital].'">
                <input type="hidden" name="email" value="'.$valorescitologia[email].'">
                <input type="hidden" name="nombres" value="'.$valorescitologia[nombres].'">
                <input type="hidden" name="consultarCorrelativo" value="valor">
                <input type="hidden" name="correlativo_citologia" value="'.$valorescitologia[correlativo_citologia].'">
                
                <input type="hidden" name="id_paciente" value="'.$info_Paciente[id_paciente].'">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="email_send" class="btn btn-primary" value="Enviar">
            </div>
            
        </div>
    </div>
</form>
</div>
';  
}
?>
