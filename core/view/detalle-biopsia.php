<?php
$id_biopsia = $_POST['id_biopsia'];
    
$buscaBiopsia="SELECT biopsia.id_biopsia, biopsia.correlativo_biopsia, biopsia.edad, biopsia.fecha_biopsia, biopsia.hallazgomacro, biopsia.hallazgomicro, biopsia.material, biopsia.conclusion, biopsia.observaciones, paciente.nombres, paciente.cedula, doctor.nombre_doctor, doctor.id_doctor, clinica.nombre_clinica, clinica.id_clinica, databiopsia.id_databiopsia, databiopsia.titulo FROM biopsia INNER JOIN paciente ON biopsia.id_paciente = paciente.id_paciente INNER JOIN doctor ON biopsia.id_doctor = doctor.id_doctor INNER JOIN clinica ON biopsia.id_clinica = clinica.id_clinica INNER JOIN databiopsia ON biopsia.id_databiopsia = databiopsia.id_databiopsia WHERE id_biopsia = $id_biopsia";
$Result=$connect-> query($buscaBiopsia);
$info_Biopsia = $Result->fetch_assoc();
?>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Biopsia <?php echo' '.$info_Biopsia[correlativo_biopsia].' '.$info_Biopsia[nombres].'';?> </h2>
        <ol class="breadcrumb">
            <li>
                <a href=".">Inicio</a>
            </li>
            <li>
                <a href="biopsia">Biopsia</a>
            </li>
            <li class="active">
                <strong>Detalle de Biopsia</strong>
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
                        Datos de la Biopsia
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
                <form role="form" action="detalle-biopsia" method="post" id="form">
                    
                    
                                    <div class="col-sm-6 b-r">
                    
                    <div class="form-group">
                        <label>Clinica (*)</label>
                        <select class="form-control select" id="clinica" name="id_clinica" required>
                            <option value="<?php echo''.$info_Biopsia[id_clinica].'';?>"><?php echo''.$info_Biopsia[nombre_clinica].'';?></option>
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
                            <option value="<?php echo''.$info_Biopsia[id_doctor].'';?>"><?php echo''.$info_Biopsia[nombre_doctor].'';?></option>
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
                            <option value="<?php echo''.$info_Biopsia[id_databiopsia].'';?>"><?php echo''.$info_Biopsia[titulo].'';?></option>
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
                    <input type="text" class="form-control" name="correlativo_biopsia" value="<?php echo''.$info_Biopsia[correlativo_biopsia].'';?>" maxlength="7" required>
                </div>
                    
                    <div class="col-md-6 form-group">
                        <label>Edad Paciente</label>
                        <input type="text" class="form-control" id="edad" name="edad" value="<?php echo''.$info_Biopsia[edad].'';?>" required>
                    </div>
                
                    <div class="col-md-12 form-group">
                            <label>Fecha</label>
                            <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <input type="date" name="fecha_biopsia" class="form-control" value="<?php echo''.$info_Biopsia[fecha_biopsia].'';?>" required>
                            </div>
                    </div>
                    
                    <div class="col-md-12 form-group">
                        <label>Material Remitido (*)</label>
                        <input type="text" class="form-control" value="<?php echo''.$info_Biopsia[material].'';?>" name="material" required>
                    </div>
                    

                    
                </div>
                
                <div class="col-md-12 form-group">
                        <label>Observaciones</label>
                        <input type="text" class="form-control" value="<?php echo''.$info_Biopsia[observaciones].'';?>" name="observaciones">
                </div>

                                <div class="col-md-12">
              <div class="form-group">
                <label>Hallazgo Macro (*)</label>
<textarea class="form-control" name="hallazgomacro" required><?php echo''.$info_Biopsia[hallazgomacro].'';?></textarea>
              </div>
            </div>
            
            <div class="col-md-12">
              <div class="form-group">
                <label>Hallazgo Micro (*)</label>
<textarea class="form-control"  name="hallazgomicro" required><?php echo''.$info_Biopsia[hallazgomicro].'';?></textarea>
              </div>
            </div>
            
            
            <div class="col-md-12">
              <div class="form-group">
                <label>Conclusion (*)</label>
<textarea class="form-control" id="conclusion" name="conclusion" required><?php echo''.$info_Biopsia[conclusion].'';?></textarea>
              </div>
            </div>
                
                <p>(*) Campos requeridos</p>


                                   
                                      
                            <div class="col-md-12 form-group">
                                
                                <input type="hidden" name="update" value="valor">
                                
                                <input type="hidden" name="id_biopsia" value="<?php echo''.$info_Biopsia[id_biopsia].'';?>">
                                <input type="hidden" name="nombres" value="<?php echo''.$info_Biopsia[nombres].'';?>">
                                <input type="hidden" name="cedula" value="<?php echo''.$info_Biopsia[cedula].'';?>">
                                
                                <br><input type="submit" name="changeBiopsia" class="btn btn-success" value="Guardar Cambios">
                        
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
