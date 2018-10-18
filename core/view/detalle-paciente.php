<?php 

$id_paciente = $_POST['id_paciente'];
    
$buscaPaciente="SELECT * FROM `paciente` WHERE `id_paciente` = $id_paciente";
$Result=$connect-> query($buscaPaciente);
$info_Paciente = $Result->fetch_assoc();

$fechaedad=$info_Paciente[fecha_nacimiento];
$calculaedad= strtotime ($fecha_hoy) - strtotime ($fechaedad);
$edad= intval($calculaedad/60/60/24/365.25);


?>


<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2><?php echo' '.$info_Paciente[nombres].' '.$info_Paciente[cedula].' ';?></h2>
        
        <ol class="breadcrumb">
            <li>
                <a href=".">Inicio</a>
            </li>
            <li>
                <a href="paciente">Paciente</a>
            </li>
            <li class="active">
                <strong>Detalle de Paciente</strong>
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
                        Citologias
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
                        
                    <a class="btn btn-success" data-toggle="modal" href="#newCitologia">Nuevo Informe</a>  
                        <br><br><br>
                        
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            
                            <thead>
                                <tr>
                                    <th >Num Citologia</th>
                                    <th>Titulo</th>
                                    <th>Conclusión</th>
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                                        
<?php include('core/controller/tables/dp-citologia.php');?>
                                       
                        </table>  

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    
                    <h5>
                        Biopsias
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
                        
                    <a class="btn btn-success" data-toggle="modal" href="#newBiopsia">Nuevo Informe</a>  
                        <br><br><br>
                        
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            
                            <thead>
                                <tr>
                                    <th >Num Biopsia</th>
                                    <th>Titulo</th>
                                    <th>Conclusión</th>
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                                        
<?php include('core/controller/tables/dp-biopsia.php');?>
                                       
                        </table>  

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
