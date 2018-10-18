<?php
ini_set('display_errors', 'Off');
include('core/model/db.php');
include('core/model/core.php');

$rutastyles="";

if($_GET['ruta'] == 'login') {
    include('core/controller/login/login.php');
    include('core/view/login.php');
}

if($_GET['ruta'] == 'logout') {
    include('core/model/session.php');
    include('core/controller/login/logout.php');
}

if($_GET['ruta'] == 'inicio') {
    
    $act_inicio="active";
    include('core/model/session.php');
    include('core/view/header.php');
    include('core/model/messajes.php');
    include('core/view/inicio.php');
    include('core/view/footer.php');
}

if($_GET['ruta'] == 'perfil') {
    $act_perfil="active"; $act_system="active";
    include('core/controller/users/users.php');
    include('core/model/session.php');
    include('core/view/header.php');
    include('core/model/messajes.php');
    include('core/view/profile.php');
    include('core/view/footer.php');
}

if($_GET['ruta'] == 'configuracion') {
    $act_configuracion="active"; $act_system="active";
    include('core/model/session.php');
    if($permission!="Administrador"){header('Location:forbidden');}
    include('core/controller/app/scriptdb.php');
    include('core/view/header.php');
    include('core/model/messajes.php');
    include('core/view/setting.php');
    include('core/controller/modal/users.php');
    include('core/view/footer.php');
    
}

if($_GET['ruta'] == 'organizacion') {
    $act_organizacion="active"; $act_system="active";
	include('core/controller/company/company.php');
    include('core/model/session.php');
    if($permission!="Administrador"){header('Location:forbidden');}
    include('core/view/header.php');
    include('core/model/messajes.php');
    include('core/view/company.php');
    include('core/view/footer.php'); 
}

if($_GET['ruta'] == 'respaldo') {
    $act_respaldo="active"; $act_system="active";
    include('core/model/session.php');
    if($permission!="Administrador"){header('Location:forbidden');}
    include('core/view/header.php');
    #include('core/controller/backup/automatic.php');
    include('core/controller/restore/restore.php');
    include('core/model/messajes.php');
    include('core/view/respaldo.php');
    include('core/view/footer.php'); 
}

if($_GET['ruta'] == 'backup') {
    include('core/model/session.php');
    if($permission!="Administrador"){header('Location:forbidden');}
    include('core/controller/backup/manual.php');
}

if($_GET['ruta'] == 'galeria'){
    $act_galeria="active"; $act_system="active";
    include('core/model/session.php');
    if($permission!="Administrador"){header('Location:forbidden');}
    include('core/view/header.php');
    include('core/controller/gallery/file.php');
    include('core/model/messajes.php');
    include('core/view/gallery.php');
    include('core/view/footer.php');
}

if($_GET['ruta'] == 'phpmailer') {
    $act_phpmailer="active"; $act_system="active";
	include('core/controller/phpmailer/phpmailer.php');
    include('core/model/session.php');
    if($permission!="Administrador"){header('Location:forbidden');}
    include('core/view/header.php');
    include('core/model/messajes.php');
    include('core/view/phpmailer.php');
    include('core/view/footer.php'); 
}

if($_GET['ruta'] == 'bitacora') {
    $act_bitacora="active"; $act_system="active";
    include('core/model/session.php');
    if($permission!="Administrador"){header('Location:forbidden');}
    include('core/view/header.php');
    include('core/view/bitacora.php');
    include('core/controller/modal/bitacora.php');
    include('core/model/messajes.php');
    include('core/view/footer.php'); 
}

if($_GET['ruta'] == 'paciente') {
    $act_paciente="active";
    include('core/model/session.php');
    include('core/view/header.php');
    include('core/controller/app/scriptdb.php');
    include('core/controller/phpmailer/mail.php');
    include('core/view/paciente.php');
    include('core/controller/modal/paciente.php');
    include('core/model/messajes.php');
    include('core/view/footer.php'); 
}

if($_GET['ruta'] == 'detalle-paciente') {
    $act_paciente="active";
    $url_citologia="detalle-paciente";
    $url_biopsia="detalle-paciente";
    if(!$_POST['id_paciente']){header('location:paciente');}
    include('core/model/session.php');
    include('core/view/header.php');
    include('core/controller/app/scriptdb.php');
    include('core/controller/phpmailer/mail.php');
    include('core/view/detalle-paciente.php');
    include('core/controller/modal/citologia.php');
    include('core/controller/modal/biopsia.php');
    include('core/model/messajes.php');
    include('core/view/footer.php'); 
}

if($_GET['ruta'] == 'citologia') {
    $act_citologia="active";
    $url_citologia="citologia";
    include('core/model/session.php');
    include('core/view/header.php');
    include('core/controller/app/scriptdb.php');
    include('core/controller/phpmailer/mail.php');
    include('core/view/citologia.php');
    include('core/controller/modal/citologia.php');
    include('core/model/messajes.php');
    include('core/view/footer.php'); 
}

if($_GET['ruta'] == 'detalle-citologia') {
    $act_citologia="active";
    if(!$_POST['id_citologia']){header('location:citologia');}
    include('core/model/session.php');
    include('core/view/header.php');
    include('core/controller/app/scriptdb.php');
    include('core/view/detalle-citologia.php');
    include('core/model/messajes.php');
    include('core/view/footer.php'); 
}

if($_GET['ruta'] == 'biopsia') {
    $act_biopsia="active";
    $url_biopsia="biopsia";
    include('core/model/session.php');
    include('core/view/header.php');
    include('core/controller/app/scriptdb.php');
    include('core/controller/phpmailer/mail.php');
    include('core/view/biopsia.php');
    include('core/controller/modal/biopsia.php');
    include('core/model/messajes.php');
    include('core/view/footer.php'); 
}

if($_GET['ruta'] == 'detalle-biopsia') {
    $act_biopsia="active";
    if(!$_POST['id_biopsia']){header('location:biopsia');}
    include('core/model/session.php');
    include('core/view/header.php');
    include('core/controller/app/scriptdb.php');
    include('core/view/detalle-biopsia.php');
    include('core/model/messajes.php');
    include('core/view/footer.php'); 
}

if($_GET['ruta'] == 'clinica') {
    $act_clinica="active"; $act_registros="active";
    include('core/model/session.php');
    include('core/view/header.php');
    include('core/controller/app/scriptdb.php');
    include('core/view/clinica.php');
    include('core/controller/modal/clinica.php');
    include('core/model/messajes.php');
    include('core/view/footer.php'); 
}

if($_GET['ruta'] == 'doctor') {
    $act_doctor="active"; $act_registros="active";
    include('core/model/session.php');
    include('core/view/header.php');
    include('core/controller/app/scriptdb.php');
    include('core/view/doctor.php');
    include('core/controller/modal/doctor.php');
    include('core/model/messajes.php');
    include('core/view/footer.php'); 
}

if($_GET['ruta'] == 'pre-citologia') {
    $act_precitologia="active"; $act_registros="active";
    include('core/model/session.php');
    include('core/view/header.php');
    include('core/controller/app/scriptdb.php');
    include('core/view/pre-citologia.php');
    include('core/controller/modal/pre-citologia.php');
    include('core/model/messajes.php');
    include('core/view/footer.php'); 
}

if($_GET['ruta'] == 'pre-biopsia') {
    $act_prebiopsia="active"; $act_registros="active";
    include('core/model/session.php');
    include('core/view/header.php');
    include('core/controller/app/scriptdb.php');
    include('core/view/pre-biopsia.php');
    include('core/controller/modal/pre-biopsia.php');
    include('core/model/messajes.php');
    include('core/view/footer.php'); 
}

include('core/model/bitacora.php');
?>