<!DOCTYPE html>
<html>

<head>
    <link href="<?php echo $rutastyles?>assets/img/favicon.png" rel="shortcut icon" type="image/ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='Refresh' content='3600;url=logout'>

    <title><?php echo $info_company['title_html']?></title>
    

    <link href="<?php echo $rutastyles?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $rutastyles?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo $rutastyles?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    
    <!-- Gritter -->
    <link href="<?php echo $rutastyles?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo $rutastyles?>assets/css/style-msj.css" rel="stylesheet">
    <link href="<?php echo $rutastyles?>assets/css/plugins/iCheck/custom.css" rel="stylesheet">
    
    <link href="<?php echo $rutastyles?>assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    
    <script src="<?php echo $rutastyles?>assets/js/navigate.js"></script>
    
    
    <link href="<?php echo $rutastyles?>assets/css/plugins/blueimp/css/blueimp-gallery.min.css" rel="stylesheet">
    
    <!-- Data Tables -->
    <link href="<?php echo $rutastyles?>assets/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo $rutastyles?>assets/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="<?php echo $rutastyles?>assets/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
   
</head>

<body onload="nobackbutton();">
    <div id="wrapper">
          <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
        <img alt="image" class="img-circle" src="<?php echo $info_company['img_profile']?>" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $info_user['realname'] ?></strong>
                             </span> <span class="text-muted text-xs block"><?php echo $info_user['username'] ?><b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="perfil">Perfil</a></li>
                            <li><a href="configuracion">Usuarios</a></li>
                            <li class="divider"></li>
                            <li><a href="logout">Salir</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        <?php echo $info_company['prefix_company']?>
                    </div>
                </li>
                
                    <li class="<?php echo $act_inicio ?>">
                        <a href="inicio"><i class="fa fa-dashboard"></i> <span class="nav-label">Inicio</span></a>
                        
                    </li>
                    
                    <li class="<?php echo $act_paciente ?>">
                        <a href="paciente"><i class="fa fa-user"></i> <span class="nav-label">Paciente</span></a>
                        
                    </li>
                    
                    <li class="<?php echo $act_citologia ?>">
                        <a href="citologia"><i class="fa fa-search-plus"></i> <span class="nav-label">Citologia</span></a>
                        
                    </li>
                    
                    <li class="<?php echo $act_biopsia ?>">
                        <a href="biopsia"><i class="fa fa-flask"></i> <span class="nav-label">Biopsia</span></a>
                        
                    </li>
                    
                    
                    <li class="<?php echo $act_registros ?>">
                        <a href="#"><i class="fa fa-list-alt"></i><span class="nav-label">Registros</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
                            
                        <li class="<?php echo $act_clinica ?>">
                            <a href="clinica"><i class="fa fa-circle-o"></i> Clinicas</a>
                        </li>
                            
                        <li class="<?php echo $act_doctor ?>">
                            <a href="doctor"><i class="fa fa-circle-o"></i> Doctores</a>
                        </li> 
                            
                        <li class="<?php echo $act_precitologia ?>">
                            <a href="pre-citologia"><i class="fa fa-circle-o"></i> Pre-Citologia</a>
                        </li> 
                            
                        <li class="<?php echo $act_prebiopsia ?>">
                            <a href="pre-biopsia"><i class="fa fa-circle-o"></i> Pre-Biopsia</a>
                        </li> 
                    
                             
                        </ul>
                    </li>
<?php 
    
    if($permission=="Administrador"){
        
        echo'
                    
                    <li class="'.$act_system.'">
                        <a href="#"><i class="fa fa-cogs"></i><span class="nav-label">System</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
                        
                        <li class="'.$act_perfil.'">
                        <a href="perfil"><i class="fa fa-circle-o"></i> Perfil</a>
                        
                        </li>
                            
                        <li class="'.$act_configuracion.'">
                        <a href="configuracion"><i class="fa fa-circle-o"></i> Usuarios</a>
                        
                        </li>
                            
                                                
                    <li class="'.$act_organizacion.'">
                        <a href="organizacion"><i class="fa fa-circle-o"></i> Organización</a>
                    </li>
                    
                    <li class="'.$act_phpmailer.'">
                        <a href="phpmailer"><i class="fa fa-circle-o"></i> PHPmailer</a>
                    </li>
                            
                    <li class="'.$act_galeria.'">
                        <a href="galeria"><i class="fa fa-circle-o"></i> Galeria</a>
                    </li>
                            
                    <li class="'.$act_respaldo.'">
                        <a href="respaldo"><i class="fa fa-circle-o"></i> Backup Mysql</a>
                    </li>
                            
                    <li class="'.$act_bitacora.'">
                        <a href="bitacora"><i class="fa fa-circle-o"></i> Bitacora</a>
                    </li>
                            
                    
                             
                        </ul>
                    </li>
                    
                    <li class="">
                        <a data-toggle="modal" href="#error"><i class="fa fa-database"></i> <span class="nav-label">Data Base</span></a>
                    </li>
                    ';
    }
?>
                
            </ul>

        </div>
    </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
            
        
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" method="post" action="">
                <div class="form-group">
                    <input type="text" placeholder="Buscar menu..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    
                    
                    <span class="m-r-sm text-muted welcome-message"><?php echo"$fecha_sin_hora"; ?></span>
                </li>
            


                <li>
                    <a href="logout">
                        <i class="fa fa-sign-out"></i> Salir
                    </a>
                </li>
            </ul>

        </nav>
            
        </div>


            <div class="modal inmodal fade" id="error" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            
            <div class="modal-content animated rollIn">
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Errores de Mysql</h4>
                </div>
                
                <div class="modal-body">
                    
  <h4 class="modal-title"><?php echo $connect->error?></h4>
                </div>
                <div class="modal-footer">
                    
                    
                    <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
                
       
                