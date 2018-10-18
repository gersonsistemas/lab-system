<div class="modal inmodal fade" id="new" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="doctor" method="post" id="formdoctor">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Nuevo Doctor</h4>
            </div>
            
            <div class="modal-body">
                              
                <div class="col-md-12 form-group">
                    <label for="nombre_clinica">Nombres del Doctor (*)</label>
                    <input type="text" class="form-control" id="nombre_doctor" name="nombre_doctor" value="" required autocomplete="off">
                </div>
                
                <div class="col-md-12 form-group"> 
                    <label>Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion_doctor" value="">
                </div>
                
                <div class="col-md-12 form-group">
                    <label>Especialidad</label>
                    <textarea name="especialidad" class="form-control"></textarea>
                </div>
                
                <p>(*) Campos requeridos</p>
                
            </div>
            
            <div class="modal-footer">
                
                <input type="hidden" name="insert" value="valor">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="newDoctor" class="btn btn-success" value="Guardar Cambios">
            </div>
            
        </div>
    </div>
</form>
</div>

<?php 

foreach($execute as $valoresmodal){
      
      echo'
<div class="modal inmodal fade" id="edit'.$valoresmodal[id_doctor].'" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="doctor" method="post" id="formdoctor'.$valoresmodal[id_doctor].'">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <i class="fa fa-edit modal-icon"></i>
                <h4 class="modal-title">Editar doctor</h4>
                <small class="font-bold">Esta editando los datos de Doctor '.$valoresmodal[nombre_doctor].'.
                </small>
            </div>
            
             <div class="modal-body">
                              
                <div class="col-md-12 form-group">
                    <label for="nombre_clinica">Nombres del Doctor (*)</label>
                    <input type="text" class="form-control" id="nombre_doctor" name="nombre_doctor" value="'.$valoresmodal[nombre_doctor].'" required autocomplete="off">
                </div>
                
                <div class="col-md-12 form-group">
                    <label>Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion_doctor" value="'.$valoresmodal[direccion_doctor].'">
                </div>
                
                <div class="col-md-12 form-group">
                    <label>Especialidad</label>
                    <textarea name="especialidad" class="form-control">'.$valoresmodal[especialidad].'</textarea>
                </div>
                
                <p>(*) Campos requeridos</p>
            </div>
            
            <div class="modal-footer">
            
                <input type="hidden" name="id_doctor" value="'.$valoresmodal[id_doctor].'">
                <input type="hidden" name="update" value="valor">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="changeDoctor" class="btn btn-primary" value="Guardar Cambios">
                
            </div>
            
        </div>
    </div>
</form>
</div>


<div class="modal inmodal fade" id="delete'.$valoresmodal[id_doctor].'" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="doctor" method="post">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <i class="fa fa-warning modal-icon"></i>
                <h4 class="modal-title">Eliminar doctor</h4>
                <small class="font-bold">Eliminación de Doctor '.$valoresmodal[nombre_doctor].'.
                </small>
            </div>
            
            <div class="modal-body">
            
               <h3>Esta seguro que desea eliminar el Doctor '.$valoresmodal[nombre_doctor].'. </h3>
                              
                
            </div>
            
            <div class="modal-footer">
                
            <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                
                <input type="hidden" name="id_doctor" value="'.$valoresmodal[id_doctor].'">
                <input type="hidden" name="nombre_doctor" value="'.$valoresmodal[nombre_doctor].'">
                <input type="hidden" name="delete" value="valor">
            
            <input type="submit" name="deleteDoctor" class="btn btn-danger" value="Eliminar">
            </div>
            
        </div>
    </div>
</form>
</div>
      
      ';
      
      
  }


?>