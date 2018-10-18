<?php
$id_citologia = $_POST['id_citologia'];
    
$buscaCitologia="SELECT citologia.id_citologia, citologia.id_clinica, citologia.id_doctor, citologia.id_datacitologia, citologia.correlativo_citologia, citologia.edad, citologia.fecha_citologia, citologia.hallazgo, citologia.conclusion, citologia.observaciones, paciente.nombres, doctor.nombre_doctor, doctor.id_doctor, clinica.nombre_clinica, clinica.id_clinica, datacitologia.titulo, datacitologia.id_datacitologia FROM citologia INNER JOIN paciente ON citologia.id_paciente = paciente.id_paciente INNER JOIN doctor ON citologia.id_doctor = doctor.id_doctor INNER JOIN clinica ON citologia.id_clinica = clinica.id_clinica INNER JOIN datacitologia ON citologia.id_datacitologia = datacitologia.id_datacitologia WHERE id_citologia = $id_citologia";
$Result=$connect-> query($buscaCitologia);
    
    
$info_Citologia = $Result->fetch_assoc();
?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Citologia <?php echo' '.$info_Citologia[correlativo_citologia].' '.$info_Citologia[nombres].'';?> </h2>
        <ol class="breadcrumb">
            <li>
                <a href=".">Inicio</a>
            </li>
            <li>
                <a href="citologia">Citologia</a>
            </li>
            <li class="active">
                <strong>Detalle de Citologia</strong>
            </li>
            
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<br>
    
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    
                    <h5>
                        Datos de la citologia
                    </h5>
                    
                    <div class="ibox-tools">
                        
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        
                        <ul class="dropdown-menu dropdown-user">
                            
                            <li>
                                <a href="#">Config option 1</a>
                            </li>
                            
                            <li>
                                <a href="#">Config option 2</a>
                            </li>
                        </ul>
                        
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                        
                    </div>
                </div>
                <div class="ibox-content">
                    
                    <div class="row">
                <form role="form" action="detalle-citologia" method="post" id="form">
                    
                    
                <div class="col-md-4 form-group">
                    <label>Correlativo (*)</label>
                    <input type="text" class="form-control" name="correlativo_citologia" value="<?php echo''.$info_Citologia[correlativo_citologia].'';?>" maxlength="7" required>
                </div>
                    
                <div class="col-md-4 form-group">
                    <label>Edad Paciente (*)</label>
                    <input type="text" class="form-control" id="edad" name="edad" value="<?php echo''.$info_Citologia[edad].'';?>" required>
                </div>
					
				<div class="col-md-4 form-group">
                    <label>Fecha</label>
                    <input type="date" name="fecha_citologia" class="form-control" value="<?php echo''.$info_Citologia[fecha_citologia].'';?>"required>
                </div>
                
                <div class="col-md-4 form-group">
                    <label>Clinica (*)</label>
                    <select class="form-control select" id="clinica" name="id_clinica" required>
        <option value="<?php echo''.$info_Citologia[id_clinica].'';?>"><?php echo''.$info_Citologia[nombre_clinica].'';?></option>
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
                        <option value="<?php echo''.$info_Citologia[id_doctor].'';?>"><?php echo''.$info_Citologia[nombre_doctor].'';?></option>
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
                        <option value="<?php echo''.$info_Citologia[id_datacitologia].'';?>"><?php echo''.$info_Citologia[titulo].'';?></option>
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
                    <input type="text" class="form-control" name="observaciones" value="<?php echo''.$info_Citologia[observaciones].'';?>">
                </div>
                
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Hallazgo (*)</label>
                        <textarea class="form-control" id="hallazgo" name="hallazgo" required><?php echo''.$info_Citologia[hallazgo].'';?></textarea>
                    </div>
                </div>
            
            
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Conclusion (*)</label>
                        <textarea class="form-control" id="conclusion" name="conclusion" required><?php echo''.$info_Citologia[conclusion].'';?></textarea>
                    </div>
                 </div>
                
                
                <p>(*) Campos requeridos</p>


                    
                                      
                                      
                            <div class="col-md-12 form-group">
                                
                <input type="hidden" name="update" value="valor">
                                
        <input type="hidden" name="id_citologia" value="<?php echo''.$info_Citologia[id_citologia].'';?>" >
        <input type="hidden" name="nombres" value="<?php echo''.$info_Citologia[nombres].'';?>" >
                                
                                <br><input type="submit" name="changeCitologia" class="btn btn-success" value="Guardar Cambios">
                        
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
