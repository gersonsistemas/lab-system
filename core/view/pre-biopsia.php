
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Pre - Biopsia</h2>
        <ol class="breadcrumb">
            <li>
                <a href=".">Inicio</a>
            </li>
            <li class="active">
                <strong>Pre - Biopsia</strong>
            </li>
            
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div><br>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    
                    <h5>
                        Formatos de Biopsia
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
                        <a class="btn btn-success" data-toggle="modal" href="#new">Nuevo</a>  
                        <br><br><br>
                        
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Titulo</th>
                                    <th>Hallazgo Macro</th>
                                    <th>Hallazgo Micro</th>
                                    <th>Conclusion</th>
                                    <th></th>
                                </tr>
                            </thead>
                                        
                            <?php include('core/controller/tables/pre-biopsia.php');?>
                                       
                        </table>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
