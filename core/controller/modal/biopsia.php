<div class="modal inmodal fade" id="Consultfechas" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="biopsia" method="post" id="formfecha">
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
<form role="form" action="biopsia" method="post" id="formcorre">
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
                    <input type="text" class="form-control" name="correlativo_biopsia" value="" maxlength="7" required>
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

<div class="modal inmodal fade" id="newBiopsia" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="detalle-paciente" method="post" id="formbiopsia">
     <div class="modal-dialog modal-lg">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Nueva Biopsia</h4>
            </div>
            
            <div class="modal-body">
                
                <div class="col-sm-6 b-r">
                    
                    <div class="form-group">
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
                    
                    <div class="form-group">
                        <label>Referido por Dr (*)</label>
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
                    
                    <div class="form-group">
                        <label>Titulo (*)</label>
                        <select class="form-control select" id="formatobiopsia" name="id_databiopsia" required>
                            <option value="">Seleccione</option>
                            <?php
                                $sql="SELECT * FROM databiopsia ORDER BY titulo ASC";
                                $execute=$connect-> query($sql);
                
                                foreach($execute as $filas){
                                    echo'
                                    <option value = "'.$filas[id_databiopsia].'">
                                    '.utf8_encode($filas[titulo]).'
                                    </option>
                                    ';
                                }
                            ?>
                        </select>
                    </div>
                    
                </div>
                
                <div class="col-sm-6">
                    
                <div class="col-md-6 form-group">
                    <label>Correlativo (*)</label>
                    <input type="text" class="form-control" name="correlativo_biopsia" value="" maxlength="7" required>
                </div>
                    
                    <div class="col-md-6 form-group">
                        <label>Edad Paciente</label>
                        <input type="text" class="form-control" id="edad" name="edad" value="<?php echo $edad ?>" required>
                    </div>
                
                    <div class="col-md-12 form-group">
                            <label>Fecha</label>
                            <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="date" name="fecha_biopsia" class="form-control" value="<?php echo $fecha_hoy ?>" required>
                            </div>
                    </div>
                    
                    <div class="col-md-12 form-group">
                        <label>Material Remitido (*)</label>
                        <input type="text" class="form-control" id="material" name="material" required>
                    </div>
                    

                    
                </div>
                
                <div class="col-md-12 form-group">
                        <label>Observaciones</label>
                        <input type="text" class="form-control" id="observaciones" name="observaciones">
                </div>
                
                <div id="databiopsia">
                </div>
                
                <p>(*) Campos requeridos</p>
            </div>

            <div class="modal-footer">
                
            <input type="hidden" name="id_paciente" value="<?php echo $info_Paciente[id_paciente] ?>">
                <input type="hidden" name="cedula" value="<?php echo $info_Paciente[cedula] ?>">
                <input type="hidden" name="nombres" value="<?php echo $info_Paciente[nombres] ?>">
                <input type="hidden" name="insert" value="valor">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="newBiopsia" class="btn btn-success" value="Guardar">
                
            </div>
            
        </div>
    </div>
</form>
</div>


<script src = "assets/js/plugins/search/jquery-3.1.1.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#formatobiopsia').on('change', function(){
				if($('#formatobiopsia').val() == ""){
					$('#databiopsia').empty();
					$('placeholder="Selecciona un formatobiopsia"').appendTo('#databiopsia');
					$('#databiopsia').attr('disabled', 'disabled');
				}else{
					$('#databiopsia').removeAttr('disabled', 'disabled');
					$('#databiopsia').load('core/controller/search/biopsia.php?id_databiopsia=' + $('#formatobiopsia').val());
				}
		});
	});
</script> 

<?php
include('assets/dompdf/select.php'); 
                                                 
foreach($ResultBiopsia as $valoresBiopsia){
   
echo'
<div class="modal inmodal fade" id="pdfB'.$valoresBiopsia[id_biopsia].'" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="reporte" method="post" target="_blank">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <i class="fa fa-print modal-icon"></i>
                <h4 class="modal-title">Reporte Biopsia</h4>
                <small class="font-bold">Imprimir biopsia '.$valoresBiopsia[correlativo_biopsia].'.
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
            
                <div class="col-md-6 form-group">
                    <div class="i-checks"><label><input type="checkbox" checked name="hallazgomacro" value="activo"><i></i>Hallazgo Macro</label></div>
                </div>

                <div class="col-md-6 form-group"> 
                    <div class="i-checks"><label><input type="checkbox" checked name="hallazgomicro" value="activo"><i></i>Hallazgo Micro</label></div> 
                </div>
                
                <p>(*) Campos requeridos</p>
            </div>
            
            <div class="modal-footer">
            
                <input type="hidden" name="id_biopsia" value="'.$valoresBiopsia[id_biopsia].'">
                <input type="hidden" name="firma_digital" value="'.$valoresBiopsia[firma_digital].'">
                
                <input type="hidden" name="title" value="Biopsia '.$valoresBiopsia[correlativo_biopsia].' '.$valoresBiopsia[nombres].'">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="pdf_biopsia" class="btn btn-primary" value="Vista Previa">
                
            </div>
            
        </div>
    </div>
</form>
</div>

<div class="modal inmodal fade" id="emailBiopsia'.$valoresBiopsia[id_biopsia].'" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="'.$url_biopsia.'" method="post">
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
            
            <h3>¿Desea enviar correo a paciente '.$valoresBiopsia[nombres].' para que acceda a la biopsia  '.$valoresBiopsia[correlativo_biopsia].'? Email '.$valoresBiopsia[email].'</h3>
                              
                
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
            
                        
                <div class="col-md-6 form-group">
                    <div class="i-checks"><label><input type="checkbox" checked name="hallazgomacro" value="activo"><i></i>Hallazgo Macro</label></div>
                </div>

                <div class="col-md-6 form-group"> 
                    <div class="i-checks"><label><input type="checkbox" checked name="hallazgomicro" value="activo"><i></i>Hallazgo Micro</label></div> 
                </div>
                
                <p>(*) Campos requeridos</p>
            
            </div>
            
            <div class="modal-footer">
            
                <input type="hidden" name="title" value="Biopsia '.$valoresBiopsia[correlativo_biopsia].' '.$valoresBiopsia[nombres].'">
            
                <input type="hidden" name="email_biopsia" value="valor">
                <input type="hidden" name="id_biopsia" value="'.$valoresBiopsia[id_biopsia].'">
                <input type="hidden" name="firma_digital" value="'.$valoresBiopsia[firma_digital].'">
                <input type="hidden" name="email" value="'.$valoresBiopsia[email].'">
                <input type="hidden" name="nombres" value="'.$valoresBiopsia[nombres].'">
                <input type="hidden" name="consultarCorrelativo" value="valor">
                <input type="hidden" name="correlativo_biopsia" value="'.$valoresBiopsia[correlativo_biopsia].'">
                
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