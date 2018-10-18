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
                                $sql="SELECT * FROM clinica";
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
                                $sql="SELECT * FROM doctor";
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
                                $sql="SELECT * FROM databiopsia";
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
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Edad Paciente</label>
                            <input type="text" class="form-control" id="edad" name="edad" value="<?php echo $edad ?>" required>
                        </div>
                    </div>
                
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Fecha</label>
                            <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="date" name="fecha_biopsia" class="form-control" value="<?php echo $fecha_hoy ?>" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Material Remitido (*)</label>
                        <input type="text" class="form-control" id="material" name="material" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Observaciones</label>
                        <input type="text" class="form-control" id="observaciones" name="observaciones">
                    </div>
                    
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
