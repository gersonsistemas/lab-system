<?php 

function validaRequerido($valor){
    if(trim($valor) == ''){
       return false;
    }
    else{
       return true;
    }
}
function validarEntero($valor, $opciones=null){
    if(filter_var($valor, FILTER_VALIDATE_INT, $opciones) === FALSE){
       return false;
    }
    else{
       return true;
    }
}

function validaEmail($valor){
    if(filter_var($valor, FILTER_VALIDATE_EMAIL) === FALSE){
       return false;
    }
    else{
       return true;
    }
}

if($info_user['db_insert']=="Activo"){
    
    if($_POST['newPaciente']) {

        $cedula = $_POST['cedula'];
        $nombres = $_POST['nombres'];
        $direccion = $_POST['direccion'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
    
        $codigo = substr(md5(microtime()), 1, 8);
        
        if (validaRequerido($nombres) && validarEntero($cedula)) {
            
        if (!validaEmail($email)) {
            
            $warning [] = "Debe corregir el email $email, tome en cuenta las validaciones.";
            $email="";
        }
        
        
        $mainCedula = "SELECT * FROM paciente WHERE cedula = '$cedula'";
        $mainResultCedula = $connect->query($mainCedula);
    
        if($mainResultCedula->num_rows == 0) {
        
            
            $new="INSERT INTO `paciente`(`id_paciente`, `cedula`, `nombres`, `direccion`, `fecha_nacimiento`, `email`, `telefono`,`codigo`,`fecha_registro`) VALUES (NULL,'$cedula','$nombres','$direccion','$fecha_nacimiento','$email','$telefono','$codigo','$fecha_hoy');";
                   
    
            if($connect->query($new) === TRUE){
                
                
                $bitacora[] = "Registro el paciente $nombres con cedula $cedula";  
                
                $success[] = "Registro el paciente $nombres con cedula $cedula";
                
            }
            else{
                $errors[] = "Registro de paciente <br><br> $connect->error";  
            }
        }
        else{
            $errors[] = "Ya existe el paciente con cedula $cedula.";
        }
        }else{
            $warning [] = "Envio el formulario de manera errada, tome en cuenta las validaciones.";
        }
    }
    
    if($_POST['newCitologia']){
        
        
        $cedula = $_POST['cedula'];
        $nombres = $_POST['nombres'];
        
        $id_paciente = $_POST['id_paciente'];
        $correlativo_citologia = $_POST['correlativo_citologia'];
        $edad = $_POST['edad'];
        $id_clinica = $_POST['id_clinica'];
        $id_doctor = $_POST['id_doctor'];
        $id_datacitologia = $_POST['id_datacitologia'];
        $fecha_citologia = $_POST['fecha_citologia'];
        $hallazgo = $_POST['hallazgo'];
        $conclusion = $_POST['conclusion'];
        $observaciones = $_POST['observaciones'];
        
        $firma_digital = substr(md5(microtime()), 1, 9);
        
        $mainCitologia = "SELECT * FROM citologia WHERE correlativo_citologia = '$correlativo_citologia'";
        $mainResultCitologia = $connect->query($mainCitologia);
    
        if($mainResultCitologia->num_rows == 0) {
        
        $new="INSERT INTO `citologia`(`id_citologia`,`correlativo_citologia`, `id_paciente`, `edad`, `id_clinica`, `id_doctor`, `id_datacitologia`,`fecha_citologia`,`hallazgo`,`conclusion`,`observaciones`,`firma_digital`) VALUES (NULL,'$correlativo_citologia','$id_paciente','$edad','$id_clinica','$id_doctor','$id_datacitologia','$fecha_citologia','$hallazgo','$conclusion','$observaciones','$firma_digital');";
                   
    
            if($connect->query($new) === TRUE){
                
                
                
                $bitacora[] = "Registro de citologia $correlativo_citologia a paciente $nombres con cedula $cedula";  
                
                $success[] = "Registro de citologia  $correlativo_citologia a paciente $nombres con cedula $cedula";
                
                 unset($observaciones);
                
            }
            else{
                $errors[] = "Registro de citologia <br><br> $connect->error";  
            }
        }
        else{
            $errors[] = "Ya existe la citologia $correlativo_citologia";
        }
    }
    
    if($_POST['newBiopsia']){
            
        $cedula = $_POST['cedula'];
        $nombres = $_POST['nombres'];
        
        $id_paciente = $_POST['id_paciente'];
        $correlativo_biopsia = $_POST['correlativo_biopsia'];
        $edad = $_POST['edad'];
        $id_clinica = $_POST['id_clinica'];
        $id_doctor = $_POST['id_doctor'];
        $id_databiopsia = $_POST['id_databiopsia'];
        $fecha_biopsia = $_POST['fecha_biopsia'];
        $hallazgomacro = $_POST['hallazgomacro'];
        $hallazgomicro = $_POST['hallazgomicro'];
        $material = $_POST['material'];
        $conclusion = $_POST['conclusion'];
        $observaciones = $_POST['observaciones'];
        
        $firma_digital = substr(md5(microtime()), 1, 9);
        
        $mainBiopsia = "SELECT * FROM biopsia WHERE correlativo_biopsia = '$correlativo_biopsia'";
        $mainResultBiopsia = $connect->query($mainBiopsia);
    
        if($mainResultBiopsia->num_rows == 0) {
        
        $new="INSERT INTO `biopsia`(`id_biopsia`, `correlativo_biopsia`, `id_paciente`, `edad`, `id_clinica`, `id_doctor`, `id_databiopsia`,`fecha_biopsia`,`hallazgomacro`, `hallazgomicro`,`conclusion`,`observaciones`,`material`,`firma_digital`) VALUES (NULL,'$correlativo_biopsia','$id_paciente','$edad','$id_clinica','$id_doctor','$id_databiopsia','$fecha_biopsia','$hallazgomacro','$hallazgomicro','$conclusion','$observaciones','$material','$firma_digital');";
                   
    
            if($connect->query($new) === TRUE){       
                
                $bitacora[] = "Registro de biopsia $correlativo_biopsia a paciente $nombres con cedula $cedula";  
                
                $success[] = "Registro de biopsia $correlativo_biopsia a paciente $nombres con cedula $cedula";
                
                 unset($observaciones);
                
            }
            else{
                $errors[] = "Registro de biopsia <br><br> $connect->error";  
            }
        }else{
            $errors[] = "Ya existe la biopsia $correlativo_biopsia";
        }
    }
    
    if($_POST['newClinica']) {

        $nombre_clinica = $_POST['nombre_clinica'];
        $direccion_clinica = $_POST['direccion_clinica'];
        $observacion = $_POST['observacion'];

    
    
        $mainNombre = "SELECT * FROM clinica WHERE nombre_clinica = '$nombre_clinica'";
        $mainResultNombre = $connect->query($mainNombre);
    
        if($mainResultNombre->num_rows == 0) {
        
            
            $new="INSERT INTO `clinica`(`id_clinica`, `nombre_clinica`, `direccion_clinica`, `observacion`) VALUES (NULL,'$nombre_clinica','$direccion_clinica','$observacion');";
                   
    
            if($connect->query($new) === TRUE){
                
                $bitacora[] = "Registro la clinica $nombre_clinica";  
                
                $success[] = "Registro la clinica $nombre_clinica";
                
            }
            else{
                $errors[] = "Registro de clinica <br><br> $connect->error";  
            }
        }
        else{
            $errors[] = "Ya existe la clinica $nombre_clinica.";
        }
    }
    
    if($_POST['newDoctor']) {

        $nombre_doctor = $_POST['nombre_doctor'];
        $direccion_doctor = $_POST['direccion_doctor'];
        $especialidad = $_POST['especialidad'];

    
    
        $mainNombre = "SELECT * FROM doctor WHERE nombre_doctor = '$nombre_doctor'";
        $mainResultNombre = $connect->query($mainNombre);
    
        if($mainResultNombre->num_rows == 0) {
        
            
            $new="INSERT INTO `doctor`(`id_doctor`, `nombre_doctor`, `direccion_doctor`, `especialidad`) VALUES (NULL,'$nombre_doctor','$direccion_doctor','$especialidad');";
                   
    
            if($connect->query($new) === TRUE){
                
                $bitacora[] = "Registro el Doctor $nombre_doctor";  
                
                $success[] = "Registro el Doctor $nombre_doctor";
                
            }
            else{
                $errors[] = "Registro de doctor <br><br> $connect->error";  
            }
        }
        else{
            $errors[] = "Ya existe el Doctor $nombre_doctor.";
        }
    }
    
    if($_POST['newPreCitologia']) {

        $titulo = $_POST['titulo'];
        $hallazgo = $_POST['hallazgo'];
        $conclusion = $_POST['conclusion'];

        $mainNombre = "SELECT * FROM datacitologia WHERE titulo = '$titulo'";
        $mainResultNombre = $connect->query($mainNombre);
    
        if($mainResultNombre->num_rows == 0) {
        
            
            $new="INSERT INTO `datacitologia`(`id_datacitologia`, `titulo`, `hallazgo`, `conclusion`) VALUES (NULL,'$titulo','$hallazgo','$conclusion');";
                   
    
            if($connect->query($new) === TRUE){
                
                $bitacora[] = "Registro pre citologia $titulo";  
                
                $success[] = "Registro pre citologia $titulo";
                
            }
            else{
                $errors[] = "Registro de pre citologia <br><br> $connect->error";  
            }
        }
        else{
            $errors[] = "Ya existe $titulo.";
        }
    }
    
    if($_POST['newPreBiopsia']) {

        $titulo = $_POST['titulo'];
        $hallazgomacro = $_POST['hallazgomacro'];
        $hallazgomicro = $_POST['hallazgomicro'];
        $conclusion = $_POST['conclusion'];

        $mainNombre = "SELECT * FROM databiopsia WHERE titulo = '$titulo'";
        $mainResultNombre = $connect->query($mainNombre);
    
        if($mainResultNombre->num_rows == 0) {
        
            
            $new="INSERT INTO `databiopsia`(`id_databiopsia`, `titulo`, `hallazgomacro`, `hallazgomicro`, `conclusion`) VALUES (NULL,'$titulo','$hallazgomacro','$hallazgomicro','$conclusion');";
                   
    
            if($connect->query($new) === TRUE){
                
                $bitacora[] = "Registro pre biopsia $titulo";  
                
                $success[] = "Registro pre biopsia $titulo";
                
            }
            else{
                $errors[] = "Registro de pre biopsia <br><br> $connect->error";  
            }
        }
        else{
            $errors[] = "Ya existe $titulo.";
        }
    }
}
else{
    if($_POST['insert']){
    $errors[] = "No tiene permisos para insertar datos.";
    }
}



if($info_user['db_update']=="Activo"){
    
    
    if($_POST['changePaciente']) {

        $cedula = $_POST['cedula'];
        $nombres = $_POST['nombres'];
        $direccion = $_POST['direccion'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $id_paciente = $_POST['id_paciente'];
        
        if (validaRequerido($nombres) && validarEntero($cedula)) {
            
        if (!validaEmail($email)) {
            
            $warning [] = "Debe corregir el email $email, tome en cuenta las validaciones.";
            $email="";
        }
            
        $mainCedula = "SELECT * FROM paciente WHERE cedula = '$cedula' AND id_paciente != '$id_paciente'";
        $mainResultCedula = $connect->query($mainCedula);
    
        if($mainResultCedula->num_rows == 0) {
        
            
            $update="UPDATE `paciente` SET 
            `cedula` = '$cedula',
            `nombres` = '$nombres',
            `direccion` = '$direccion',
            `fecha_nacimiento` = '$fecha_nacimiento',
            `email` = '$email',
            `telefono` = '$telefono'
            WHERE `paciente`.`id_paciente` = '$id_paciente';";;
                   
    
            if($connect->query($update) === TRUE){
                
                $bitacora[] = "Edito datos del paciente $nombres con cedula $cedula con ID $id_paciente";  
                
                $success[] = "Edito datos del paciente $nombres con cedula $cedula";
                
            }
            else{
                $errors[] = "Edición de paciente de paciente <br><br> $connect->error";  
            }
        }
        else{
            $errors[] = "Ya existe el paciente con cedula $cedula.";
        }
        }else{
            $warning [] = "Envio el formulario de manera errada, tome en cuenta las validaciones.";
        }
    }
    
    if($_POST['changeCodigoPaciente']) {

        $cedula = $_POST['cedula'];
        $nombres = $_POST['nombres'];
        $id_paciente = $_POST['id_paciente'];
    
        $codigo = substr(md5(microtime()), 1, 8);
        
            
        $update="UPDATE `paciente` SET 
        `codigo` = '$codigo'
        WHERE `paciente`.`id_paciente` = '$id_paciente';";;
                   
    
            if($connect->query($update) === TRUE){
                
                $bitacora[] = "Edito codigo del paciente $nombres con cedula $cedula";  
                
                $success[] = "Edito codigo del paciente $nombres con cedula $cedula";
                
            }
            else{
                $errors[] = "Codigo de paciente <br><br> $connect->error";  
            }

    }
    
    if($_POST['changeCitologia']) {
        
        $id_clinica = $_POST['id_clinica'];
        $id_doctor = $_POST['id_doctor'];
        $id_datacitologia = $_POST['id_datacitologia'];
        $fecha_citologia = $_POST['fecha_citologia'];
        $edad = $_POST['edad'];
        $observaciones = $_POST['observaciones'];
        $hallazgo = $_POST['hallazgo'];
        $conclusion = $_POST['conclusion'];
        
        $id_citologia = $_POST['id_citologia'];
        $correlativo_citologia = $_POST['correlativo_citologia'];
        $nombres = $_POST['nombres'];
        $cedula = $_POST['cedula'];
        
        $mainCitologia = "SELECT * FROM citologia WHERE correlativo_citologia = '$correlativo_citologia' AND id_citologia != '$id_citologia'";
        $mainResultCitologia = $connect->query($mainCitologia);
    
        if($mainResultCitologia->num_rows == 0) {
            
            $update="UPDATE `citologia` SET
            `correlativo_citologia` = '$correlativo_citologia',
            `id_clinica` = '$id_clinica',
            `id_doctor` = '$id_doctor',
            `id_datacitologia` = '$id_datacitologia',
            `edad` = '$edad',
            `fecha_citologia` = '$fecha_citologia',
            `observaciones` = '$observaciones',
            `hallazgo` = '$hallazgo',
            `conclusion` = '$conclusion'
            WHERE `citologia`.`id_citologia` = '$id_citologia';";;
                   
    
            if($connect->query($update) === TRUE){
                
                $bitacora[] = "Edito citologia $correlativo_citologia paciente $nombres con cedula $cedula";  
                
                $success[] = "Edito citologia $correlativo_citologia paciente $nombres con cedula $cedula"; 
                
            }
            else{
                $errors[] = "Edición citologia <br><br> $connect->error";  
            }
        }
        else{
            $errors[] = "Ya existe la citologia $correlativo_citologia";
        }
    }

    if($_POST['changeBiopsia']) {
        
        $id_clinica = $_POST['id_clinica'];
        $id_doctor = $_POST['id_doctor'];
        $id_databiopsia = $_POST['id_databiopsia'];
        $fecha_biopsia = $_POST['fecha_biopsia'];
        $edad = $_POST['edad'];
        $observaciones = $_POST['observaciones'];
        $hallazgomacro = $_POST['hallazgomacro'];
        $hallazgomicro = $_POST['hallazgomicro'];
        $material = $_POST['material'];
        $conclusion = $_POST['conclusion'];
        
        $id_biopsia = $_POST['id_biopsia'];
        $correlativo_biopsia = $_POST['correlativo_biopsia'];
        $nombres = $_POST['nombres'];
        $cedula = $_POST['cedula'];
        
        $mainBiopsia = "SELECT * FROM biopsia WHERE correlativo_biopsia = '$correlativo_biopsia' AND id_biopsia != '$id_biopsia'";
        $mainResultBiopsia = $connect->query($mainBiopsia);
    
        if($mainResultBiopsia->num_rows == 0) {
            
            $update="UPDATE `biopsia` SET
            `correlativo_biopsia` = '$correlativo_biopsia',
            `id_clinica` = '$id_clinica',
            `id_doctor` = '$id_doctor',
            `id_databiopsia` = '$id_databiopsia',
            `edad` = '$edad',
            `fecha_biopsia` = '$fecha_biopsia',
            `observaciones` = '$observaciones',
            `hallazgomacro` = '$hallazgomacro',
            `hallazgomicro` = '$hallazgomicro',
            `material` = '$material',
            `conclusion` = '$conclusion'
            WHERE `biopsia`.`id_biopsia` = '$id_biopsia';";;
                   
    
            if($connect->query($update) === TRUE){
                
                $bitacora[] = "Edito biopsia $correlativo_biopsia a paciente $nombres con cedula $cedula";  
                
                $success[] = "Edito biopsia $correlativo_biopsia a paciente $nombres con cedula $cedula"; 
                
            }
            else{
                $errors[] = "Edición biopsia <br><br> $connect->error";  
            }
        }
        else{
            $errors[] = "Ya existe la biopsia $correlativo_biopsia";
        }
    }


    if($_POST['changeClinica']) {

        $nombre_clinica = $_POST['nombre_clinica'];
        $direccion_clinica = $_POST['direccion_clinica'];
        $observacion = $_POST['observacion'];
        $id_clinica = $_POST['id_clinica'];
            
        $mainNombre = "SELECT * FROM clinica WHERE nombre_clinica = '$nombre_clinica' AND id_clinica != '$id_clinica'";
        $mainResultNombre = $connect->query($mainNombre);
    
        if($mainResultNombre->num_rows == 0) {
        
            
            $update="UPDATE `clinica` SET 
            `nombre_clinica` = '$nombre_clinica',
            `direccion_clinica` = '$direccion_clinica',
            `observacion` = '$observacion'
            WHERE `clinica`.`id_clinica` = '$id_clinica';";;
                   
    
            if($connect->query($update) === TRUE){
                
                $bitacora[] = "Edito datos de la clinica $nombre_clinica con ID $id_clinica";  
                
                $success[] = "Edito datos de la clinica $nombre_clinica";
                
            }
            else{
                $errors[] = "Edición de clinica <br><br> $connect->error";  
            }
        }
        else{
            $errors[] = "Ya existe la clinica $nombre_clinica.";
        }
    }
    
    if($_POST['changeDoctor']) {

        $nombre_doctor = $_POST['nombre_doctor'];
        $direccion_doctor = $_POST['direccion_doctor'];
        $especialidad = $_POST['especialidad'];
        $id_doctor = $_POST['id_doctor'];
            
        $mainNombre = "SELECT * FROM doctor WHERE nombre_doctor = '$nombre_doctor' AND id_doctor != '$id_doctor'";
        $mainResultNombre = $connect->query($mainNombre);
    
        if($mainResultNombre->num_rows == 0) {
        
            
            $update="UPDATE `doctor` SET 
            `nombre_doctor` = '$nombre_doctor',
            `direccion_doctor` = '$direccion_doctor',
            `especialidad` = '$especialidad'
            WHERE `doctor`.`id_doctor` = '$id_doctor';";;
                   
    
            if($connect->query($update) === TRUE){
                
                $bitacora[] = "Edito datos del Doctor $nombre_doctor con ID $id_doctor";  
                
                $success[] = "Edito datos del Doctor $nombre_doctor";
                
            }
            else{
                $errors[] = "Edición de doctor <br><br> $connect->error";  
            }
        }
        else{
            $errors[] = "Ya existe el Doctor $nombre_doctor.";
        }
    }
    
    if($_POST['changePreCitologia']) {

        $titulo = $_POST['titulo'];
        $hallazgo = $_POST['hallazgo'];
        $conclusion = $_POST['conclusion'];
        $id_datacitologia = $_POST['id_datacitologia'];
            
        $mainNombre = "SELECT * FROM datacitologia WHERE titulo = '$titulo' AND id_datacitologia != '$id_datacitologia'";
        $mainResultNombre = $connect->query($mainNombre);
    
        if($mainResultNombre->num_rows == 0) {
        
            
            $update="UPDATE `datacitologia` SET 
            `titulo` = '$titulo',
            `hallazgo` = '$hallazgo',
            `conclusion` = '$conclusion'
            WHERE `datacitologia`.`id_datacitologia` = '$id_datacitologia';";;
                   
    
            if($connect->query($update) === TRUE){
                
                $bitacora[] = "Edito datos pre citologia $titulo con ID $id_datacitologia";  
                
                $success[] = "Edito datos pre citologia $titulo con ID $id_datacitologia";
                
            }
            else{
                $errors[] = "Edición de pre citologia <br><br> $connect->error";  
            }
        }
        else{
            $errors[] = "Ya existe $titulo.";
        }
    }
    
    if($_POST['changePreBiopsia']) {

        $titulo = $_POST['titulo'];
        $hallazgomacro = $_POST['hallazgomacro'];
        $hallazgomicro = $_POST['hallazgomicro'];
        $conclusion = $_POST['conclusion'];
        $id_databiopsia = $_POST['id_databiopsia'];
        
        if($incluyemacro==""){$incluyemacro="No activo";}
        if($incluyemicro==""){$incluyemicro="No activo";} 
        
            
        $mainNombre = "SELECT * FROM databiopsia WHERE titulo = '$titulo' AND id_databiopsia != '$id_databiopsia'";
        $mainResultNombre = $connect->query($mainNombre);
    
        if($mainResultNombre->num_rows == 0) {
        
            
            $update="UPDATE `databiopsia` SET 
            `titulo` = '$titulo',
            `hallazgomacro` = '$hallazgomacro',
            `hallazgomicro` = '$hallazgomicro',
            `hallazgomicro` = '$hallazgomicro',
            `conclusion` = '$conclusion'
            WHERE `databiopsia`.`id_databiopsia` = '$id_databiopsia';";;
                   
    
            if($connect->query($update) === TRUE){
                
                $bitacora[] = "Edito datos pre biopsia $titulo con ID $id_databiopsia";  
                
                $success[] = "Edito datos pre biopsia $titulo con ID $id_databiopsia";  
                
            }
            else{
                $errors[] = "Edición de pre biopsia <br><br> $connect->error";  
            }
        }
        else{
            $errors[] = "Ya existe $titulo.";
        }
    }
}
else{
    if($_POST['update']){
    $errors[] = "No tiene permisos para editar datos.";
    }
}



if($info_user['db_delete']=="Activo"){
    
    if($_POST['deletePaciente']) {

        $cedula = $_POST['cedula'];
        $nombres = $_POST['nombres'];
        $id_paciente = $_POST['id_paciente'];
        
            
        $delete = "DELETE FROM `paciente` WHERE `paciente`.`id_paciente` = '$id_paciente'";
        $deletePaciente = $connect->query($delete);
        
        if($deletePaciente) {
    
            $bitacora[] = "Elimino el paciente $nombres con cedula $cedula e ID $id_paciente";
        
            $warning[] = "Elimino el paciente $nombres con cedula $cedula e ID $id_paciente.";
        }
        else{
            $errors[] = "Eliminando Paciente. <br><br> $connect->error";
        }

    }
    
    if($_POST['deleteClinica']) {

        $nombre_clinica = $_POST['nombre_clinica'];
        $id_clinica = $_POST['id_clinica'];
        
            
        $delete = "DELETE FROM `clinica` WHERE `clinica`.`id_clinica` = '$id_clinica'";
        $deleteClinica = $connect->query($delete);
        
        if($deleteClinica) {
    
            $bitacora[] = "Elimino la clinica $nombre_clinica con ID $id_clinica";
        
            $warning[] = "Elimino la clinica $nombre_clinica con ID $id_clinica";
        }
        else{
            $errors[] = "Eliminando Clinica. <br><br> $connect->error";
        }

    }
    
    if($_POST['deleteDoctor']) {

        $nombre_doctor = $_POST['nombre_doctor'];
        $id_doctor = $_POST['id_doctor'];
        
            
        $delete = "DELETE FROM `doctor` WHERE `doctor`.`id_doctor` = '$id_doctor'";
        $deleteDoctor = $connect->query($delete);
        
        if($deleteDoctor) {
    
            $bitacora[] = "Elimino el Doctor $nombre_doctor con ID $id_doctor";
        
            $warning[] = "Elimino el Doctor $nombre_doctor con ID $id_doctor";
        }
        else{
            $errors[] = "Eliminando Doctor. <br><br> $connect->error";
        }

    }
    
    if($_POST['deletePreCitologia']) {

        $titulo = $_POST['titulo'];
        $id_datacitologia = $_POST['id_datacitologia'];
        
            
        $delete = "DELETE FROM `datacitologia` WHERE `datacitologia`.`id_datacitologia` = '$id_datacitologia'";
        $deleteDatacitologia = $connect->query($delete);
        
        if($deleteDatacitologia) {
    
            $bitacora[] = "Elimino pre citologia $titulo con ID $id_datacitologia";
        
            $warning[] = "Elimino pre citologia $titulo con ID $id_datacitologia";
        }
        else{
            $errors[] = "Eliminando pre citologia. <br><br> $connect->error";
        }

    }
    
    if($_POST['deletePreBiopsia']) {

        $titulo = $_POST['titulo'];
        $id_databiopsia = $_POST['id_databiopsia'];
        
            
        $delete = "DELETE FROM `databiopsia` WHERE `databiopsia`.`id_databiopsia` = '$id_databiopsia'";
        $deleteDatabiopsia = $connect->query($delete);
        
        if($deleteDatabiopsia) {
    
            $bitacora[] = "Elimino pre biopsia $titulo con ID $id_datacitologia";
        
            $warning[] = "Elimino pre biopsia $titulo con ID $id_datacitologia";
        }
        else{
            $errors[] = "Eliminando pre biopsia. <br><br> $connect->error";
        }

    }
}
else{
    if($_POST['delete']){
    $errors[] = "No tiene permisos para eliminar datos.";
    }
}


?>

