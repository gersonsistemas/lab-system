<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2><?php echo $info_company['title_html']?></h2>
        <ol class="breadcrumb">
            <li>
                <a href=".">Inicio</a>
            </li>
            
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>

<div class="row">
            <a href="configuracion"><div class="col-lg-3">
                <div class="widget style1 red-bg">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <i class="fa fa-cogs fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> Usuarios del Sistema</span>
                                <h2 class="font-bold">
<?php
                                    
    $buscaUsers="SELECT * FROM `users`";
    $ejecuta=$connect-> query($buscaUsers);
    $numUsers=mysqli_num_rows($ejecuta);
       
    echo"N° $numUsers";
                
?>
                                
                                
                                
                                </h2>
                            </div>
                        </div>
                </div>
            </div></a>
            <a href="paciente"><div class="col-lg-3">
                <div class="widget style1 navy-bg">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-male fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> Pacientes</span>
                            <h2 class="font-bold">
<?php
                                    
    $busca="SELECT * FROM `paciente`";
    $ejecuta=$connect-> query($busca);
    $num=mysqli_num_rows($ejecuta);
       
    echo"N° $num";
                
?>                          
                            </h2>
                        </div>
                    </div>
                </div>
                </div></a>
            <a href="doctor"><div class="col-lg-3">
                <div class="widget style1 lazur-bg">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-user-md fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> Doctores</span>
                            <h2 class="font-bold">
  <?php
                                    
    $busca="SELECT * FROM `doctor`";
    $ejecuta=$connect-> query($busca);
    $num=mysqli_num_rows($ejecuta);
       
    echo"N° $num";
                
?>                                  
                            </h2>
                        </div>
                    </div>
                </div>
                </div></a>
            <a href="clinica"><div class="col-lg-3">
                <div class="widget style1 yellow-bg">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-hospital-o fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> Clinicas</span>
                            <h2 class="font-bold">
     <?php
                                    
    $busca="SELECT * FROM `clinica`";
    $ejecuta=$connect-> query($busca);
    $num=mysqli_num_rows($ejecuta);
       
    echo"N° $num";
                
?>                            
                            </h2>
                        </div>
                    </div>
                </div>
            </div></a>
        </div>

<div class="row">
            <a href="bitacora"><div class="col-lg-3">
                <div class="widget style1 lazur-bg">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <i class="fa fa-eye fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span>Aciones de Usuarios</span>
                                <h2 class="font-bold">
<?php
                                    
    $busca="SELECT * FROM `bitacora`";
    $ejecuta=$connect-> query($busca);
    $num=mysqli_num_rows($ejecuta);
       
    echo"N° $num";
                
?>
                                
                                
                                
                                </h2>
                            </div>
                        </div>
                </div>
            </div></a>
            <a href="citologia"><div class="col-lg-3">
                <div class="widget style1 navy-bg">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-search-plus fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> Citologias </span>
                            <h2 class="font-bold">
<?php
                                    
    $busca="SELECT * FROM `citologia`";
    $ejecuta=$connect-> query($busca);
    $num=mysqli_num_rows($ejecuta);
       
    echo"N° $num";
                
?>                          
                            </h2>
                        </div>
                    </div>
                </div>
            </div></a>
            <a href="biopsia"><div class="col-lg-3">
                <div class="widget style1 lazur-bg">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-flask fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> Biopsias </span>
                            <h2 class="font-bold">
  <?php
                                    
    $busca="SELECT * FROM `biopsia`";
    $ejecuta=$connect-> query($busca);
    $num=mysqli_num_rows($ejecuta);
       
    echo"N° $num";
                
?>                                  
                            </h2>
                        </div>
                    </div>
                </div>
            </div></a>
        </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="widget-head-color-box navy-bg p-lg text-center">
                            <div class="m-b-md">
                            <h2 class="font-bold no-margins">
                                <?php echo $info_company['title_html']?>
                            </h2>
                                <small><?php echo $info_company['name_company']?></small>
                            </div>
                            <img src="<?php echo $info_company['img_profile']?>" class="img-circle circle-border m-b-md" alt="profile">
                        </div>
                        <div class="widget-text-box">
                            <h4 class="media-heading">Desarrollo</h4>
                            <p>La aplicacion esta desarrollada bajo el lenguaje de programación PHP junto al manejador de base de datos Mysql.</p>
                            
                            <p>HTML5, CSS y JavaScript son los encargados del entorno visual, asi como el manejo de mensajes tanto de advertencias como de errores.</p>
                            <div class="text-right">
                            </div>
                        </div>
                    </div>
                </div>

