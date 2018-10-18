<div class="modal inmodal fade" id="newUser" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="configuracion" method="post" id="formuser">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Nuevo Usuario</h4>
            </div>
            
            <div class="modal-body">
                              
                <div class="col-md-6 form-group">
                    <label for="username">Nombre de Usuario</label>
                    <input type="text" class="form-control" id="username" name="username" value="" required autocomplete="off">      
                </div>
                    
                <div class="col-md-6 form-group">
                    <label for="realname">Nombre Real</label>
                    <input type="text" class="form-control" id="realname" name="realname" value="" required autocomplete="off">
                </div>
                                      
                <div class="col-md-6 form-group">
                    <label for="newpassword">Contraseña</label>
                    <input type="password" class="form-control" id="newpassword" name="password" required autocomplete="off" equalTo>
                </div>
                    
                <div class="col-md-6 form-group">
                    <label for="confirmpassword">Confirme la Contraseña</label>
                    <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" required autocomplete="off" equalTo="#newpassword">
                </div>
                                                        
                <div class="form-group">
                    <div class="i-checks"><label><input type="checkbox" checked name="permission" value="Administrador"><i></i> Asignar Rol de Administrador</label></div>
                </div>
            </div>
            
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="submit" name="newUser" class="btn btn-success" value="Guardar Cambios">
            </div>
            
        </div>
    </div>
</form>
</div>


<div class="modal inmodal fade" id="'.$usersmodal[username].'" tabindex="-1" role="dialog" aria-hidden="true">
<form role="form" action="configuracion" method="post" id="formuser" id="formuser'.$usersmodal[id_user].'">
     <div class="modal-dialog">
        <div class="modal-content animated rotateInUpRight">
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Nuevo Usuario</h4>
            </div>
            
            <div class="modal-body">
                              
                <div class="col-md-6 form-group">
                    <label for="username">Nombre de Usuario</label>
                    <input type="text" class="form-control" id="username" name="username" value="'.$usersmodal[username].'" required autocomplete="off">
                </div>
                    
                <div class="col-md-6 form-group">
                    <label for="realname">Nombre Real</label>
                    <input type="text" class="form-control" id="realname" name="realname" value="'.$usersmodal[realname].'" required autocomplete="off">
                </div>
                
                <div class="col-md-6 ">
                    <div class="i-checks"><label><input type="checkbox" name="permission" value="Administrador" checked=""><i></i> Es Administrador</label></div>
                </div>
                
            </div>
            
            <div class="modal-footer">
                
                <button data-dismiss="modal" class="btn btn-default" type="button">Cerrar</button>
                <input type="hidden" name="id_user" value="'.$usersmodal[id_user].'">
                <input type="submit" name="changeUsername" class="btn btn-success" value="Guardar Cambios">
                
            </div>
            
        </div>
    </div>
</form>
</div>


