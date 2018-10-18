<div class="modal inmodal fade" id="new" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="paciente" method="post" id="formpaciente">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Nuevo paciente</h4>
            </div>
            
            <div class="modal-body">
                              
                <div class="col-md-12 form-group">
                    <label>Cedula (*)</label>
                    <input type="text" class="form-control" name="cedula" value="" maxlength="12" minlength="7" digits="true" required autocomplete="off">      
                </div>
                    
                <div class="col-md-12 form-group">
                    <label>Nombre Y Apellido (*)</label>
                    <input type="text" class="form-control" name="nombres" value="" required autocomplete="off">
                </div>
                
                <div class="col-md-12 form-group">
                    <label for="direccion">Dirección </label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value="">
                </div>
                
                <div class="col-md-12 form-group">
                    <label>Fecha Nacimiento</label>
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        
                        <input type="date" class="form-control" name="fecha_nacimiento" autocomplete="off" >
                    </div>
                </div>
                
                <div class="col-md-12 form-group">
                    <label>Telefono </label>
                    <input type="text" class="form-control" name="telefono" value="" maxlength="20" minlength="11" digits="true" >
                </div>
                                      
                <div class="col-md-12 form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" autocomplete="off" >
                </div>
                    
                <p>(*) Campos requeridos</p>
            </div>
            
            <div class="modal-footer">
                
                <input type="hidden" name="insert" value="valor">
                <input type="hidden" name="consultarCedula" value="valor">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="newPaciente" class="btn btn-success" value="Guardar Cambios">
            </div>
            
        </div>
    </div>
</form>
</div>

<div class="modal inmodal fade" id="Consultfechas" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="paciente" method="post" id="formfecha">
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

<div class="modal inmodal fade" id="Consultcedula" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="paciente" method="post" id="formcedula">
     <div class="modal-dialog modal-sm">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Consultar Cedula</h4>
            </div>
            
            <div class="modal-body">
                              
                <div class="form-group col-md-12">
                        
                    <label>Ingrese el numero de cedula (*)</label>
                    <input type="text" class="form-control" id="cedula" name="cedula" value="" maxlength="12" minlength="7" digits="true" required autocomplete="off">  
                    
                </div>
                    

                <p>(*) Campos requeridos</p>
            </div>
            
            <div class="modal-footer">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="consultarCedula" class="btn btn-primary" value="Consultar">
            </div>
            
        </div>
    </div>
</form>
</div>

<div class="modal inmodal fade" id="Consultnombres" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="paciente" method="post" id="formnombres">
     <div class="modal-dialog modal-sm">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Consultar Nombres</h4>
            </div>
            
            <div class="modal-body">
                              
                <div class="form-group col-md-12">
                        
                    <label>Ingrese el nombre del paciente (*)</label>
                    <input type="text" name="nombres" class="form-control" required>
                    
                </div>
                    

                <p>(*) Campos requeridos</p>
            </div>
            
            <div class="modal-footer">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="consultarNombres" class="btn btn-primary" value="Consultar">
            </div>
            
        </div>
    </div>
</form>
</div>

<?php 

foreach($execute as $valoresmodal){
      
      echo'
<div class="modal inmodal fade" id="edit'.$valoresmodal[id_paciente].'" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="paciente" method="post" id="formpaciente'.$valoresmodal[id_paciente].'">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <i class="fa fa-edit modal-icon"></i>
                <h4 class="modal-title">Editar paciente</h4>
                <small class="font-bold">Esta editando los datos del paciente '.$valoresmodal[nombres].' con cedula '.$valoresmodal[cedula].'.
                </small>
            </div>
            
             <div class="modal-body">
                              
                <div class="col-md-12 form-group">
                    <label>Cedula (*)</label>
                    <input type="text" class="form-control" name="cedula" value="'.$valoresmodal[cedula].'" maxlength="12" minlength="7" digits="true" required autocomplete="off">      
                </div>
                    
                <div class="col-md-12 form-group">
                    <label>Nombre Y Apellido (*)</label>
                    <input type="text" class="form-control" name="nombres" value="'.$valoresmodal[nombres].'" required autocomplete="off">
                </div>
                
                <div class="col-md-12 form-group">
                    <label>Dirección</label>
                    <input type="text" class="form-control" name="direccion" value="'.$valoresmodal[direccion].'">
                </div>
                
                <div class="col-md-12 form-group">
                    <label>Fecha Nacimiento (*)</label>
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        
                        <input type="date" class="form-control" name="fecha_nacimiento"  value="'.$valoresmodal[fecha_nacimiento].'" autocomplete="off" >
                    </div>
                </div>
                
                <div class="col-md-12 form-group">
                    <label>Telefono </label>
                    <input type="text" class="form-control" name="telefono" value="'.$valoresmodal[telefono].'" maxlength="20" minlength="11" digits="true" >
                </div>
                                      
                <div class="col-md-12 form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="'.$valoresmodal[email].'" autocomplete="off" >
                </div>
                    
                
                <p>(*) Campos requeridos</p>
            </div>
            
            <div class="modal-footer">
                <input type="hidden" name="id_paciente" value="'.$valoresmodal[id_paciente].'">
                <input type="hidden" name="update" value="valor">
                <input type="hidden" name="consultarCedula" value="valor">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="changePaciente" class="btn btn-primary" value="Guardar Cambios">
                
            </div>
            
        </div>
    </div>
</form>
</div>

<div class="modal inmodal fade" id="email'.$valoresmodal[id_paciente].'" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="paciente"  method="post">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <i class="fa fa-envelope-o modal-icon"></i>
                <h4 class="modal-title">Enviar Correo</h4>
                <small class="font-bold">Se enviara correo de bienvenida a paciente '.$valoresmodal[nombres].' con cedula '.$valoresmodal[cedula].'.
                </small>
            </div>
            
            <div class="modal-body">
            
            
                <h2>¿Desea enviar correo de bienvenida? '.$valoresmodal[email].'<h2>
                              
            </div>
            
            <div class="modal-footer">
            
                <input type="hidden" name="email_welcome" value="valor">
                <input type="hidden" name="email" value="'.$valoresmodal[email].'">
                <input type="hidden" name="nombres" value="'.$valoresmodal[nombres].'">
                <input type="hidden" name="cedula" value="'.$valoresmodal[cedula].'">
                <input type="hidden" name="consultarCedula" value="valor">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="email_send" class="btn btn-primary" value="Enviar">
            </div>
            
        </div>
    </div>
</form>
</div>


<div class="modal inmodal fade" id="codigo'.$valoresmodal[id_paciente].'" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="paciente" method="post">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <i class="fa fa-key modal-icon"></i>
                <h4 class="modal-title">Editar contraseña de paciente</h4>
                <small class="font-bold">Esta editando el codigo de seguridad del paciente '.$valoresmodal[nombres].' con cedula '.$valoresmodal[cedula].'.
                </small>
            </div>
            
            <div class="modal-body">
            
                <h2>¿Desea generar un codigo de seguridad?<h2>
                              
            </div>
            
            <div class="modal-footer">
            
                <input type="hidden" name="update" value="valor">
                <input type="hidden" name="id_paciente" value="'.$valoresmodal[id_paciente].'">
                <input type="hidden" name="nombres" value="'.$valoresmodal[nombres].'">
                <input type="hidden" name="cedula" value="'.$valoresmodal[cedula].'">
                <input type="hidden" name="consultarCedula" value="valor">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="changeCodigoPaciente" class="btn btn-warning" value="Generar">
            </div>
            
        </div>
    </div>
</form>
</div>

<div class="modal inmodal fade" id="delete'.$valoresmodal[id_paciente].'" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="paciente" method="post">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <i class="fa fa-warning modal-icon"></i>
                <h4 class="modal-title">Eliminar paciente</h4>
                <small class="font-bold">Eliminación del paciente '.$valoresmodal[nombres].' con cedula '.$valoresmodal[cedula].'.
                </small>
            </div>
            
            <div class="modal-body">
            
               <h3>Esta seguro que desea eliminar al paciente '.$valoresmodal[nombres].' con cedula '.$valoresmodal[cedula].'. </h3>
                              
                
            </div>
            
            <div class="modal-footer">
                
            <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                
                <input type="hidden" name="id_paciente" value="'.$valoresmodal[id_paciente].'">
                <input type="hidden" name="nombres" value="'.$valoresmodal[nombres].'">
                <input type="hidden" name="cedula" value="'.$valoresmodal[cedula].'">
                <input type="hidden" name="delete" value="valor">
            
            <input type="submit" name="deletePaciente" class="btn btn-danger" value="Eliminar">
            </div>
            
        </div>
    </div>
</form>
</div>
      
      ';
      
      
  }


?>