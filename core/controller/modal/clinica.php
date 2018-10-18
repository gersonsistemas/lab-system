<div class="modal inmodal fade" id="new" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="clinica" method="post" id="formclinica">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Nueva clinica</h4>
            </div>
            
            <div class="modal-body">
                              
                <div class="col-md-12 form-group">
                    <label for="nombre_clinica">Nombre de la Clinica (*) </label>
                    <input type="text" class="form-control" id="nombre_clinica" name="nombre_clinica" value="" required autocomplete="off">
                </div>
                
                <div class="col-md-12 form-group">
                    <label for="direccion_clinica">Dirección</label>
                    <input type="text" class="form-control" id="direccion_clinica" name="direccion_clinica" value="">
                </div>
                
                <div class="col-md-12 form-group">
                    <label for="observacion">Observación</label>
                    <textarea name="observacion" class="form-control"></textarea>
                </div>
                
                <p>(*) Campos requeridos</p>
                
            </div>
            
            <div class="modal-footer">
                
                <input type="hidden" name="insert" value="valor">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="newClinica" class="btn btn-success" value="Guardar Cambios">
            </div>
            
        </div>
    </div>
</form>
</div>

<?php 

foreach($execute as $valoresmodal){
      
      echo'
<div class="modal inmodal fade" id="edit'.$valoresmodal[id_clinica].'" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="clinica" method="post" id="formclinica'.$valoresmodal[id_clinica].'">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <i class="fa fa-edit modal-icon"></i>
                <h4 class="modal-title">Editar clinica</h4>
                <small class="font-bold">Esta editando los datos de la clinica '.$valoresmodal[nombre_clinica].'.
                </small>
            </div>
            
             <div class="modal-body">
                              
                <div class="col-md-6 form-group">
                    <label for="nombre_clinica">Nombre de la Clinica (*)</label>
                    <input type="text" class="form-control" id="nombre_clinica" name="nombre_clinica" value="'.$valoresmodal[nombre_clinica].'" required autocomplete="off">
                </div>
                
                <div class="col-md-6 form-group">
                    <label for="direccion_clinica">Dirección</label>
                    <input type="text" class="form-control" id="direccion_clinica" name="direccion_clinica" value="'.$valoresmodal[direccion_clinica].'">
                </div>
                
                <div class="col-md-12 form-group">
                    <label for="observacion">Observación</label>
                    <textarea name="observacion" class="form-control" value="'.$valoresmodal[observacion].'"></textarea>
                </div>
                
                <p>(*) Campos requeridos</p>
            </div>
            
            <div class="modal-footer">
            
                <input type="hidden" name="id_clinica" value="'.$valoresmodal[id_clinica].'">
                <input type="hidden" name="update" value="valor">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="changeClinica" class="btn btn-primary" value="Guardar Cambios">
                
            </div>
            
        </div>
    </div>
</form>
</div>


<div class="modal inmodal fade" id="delete'.$valoresmodal[id_clinica].'" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="clinica" method="post">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <i class="fa fa-warning modal-icon"></i>
                <h4 class="modal-title">Eliminar clinica</h4>
                <small class="font-bold">Eliminación de la clinica '.$valoresmodal[nombre_clinica].'.
                </small>
            </div>
            
            <div class="modal-body">
            
               <h3>Esta seguro que desea eliminar a la clinica '.$valoresmodal[nombre_clinica].'. </h3>
                              
                
            </div>
            
            <div class="modal-footer">
                
            <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                
                <input type="hidden" name="id_clinica" value="'.$valoresmodal[id_clinica].'">
                <input type="hidden" name="nombre_clinica" value="'.$valoresmodal[nombre_clinica].'">
                <input type="hidden" name="delete" value="valor">
            
            <input type="submit" name="deleteClinica" class="btn btn-danger" value="Eliminar">
            </div>
            
        </div>
    </div>
</form>
</div>
      
      ';
      
      
  }


?>