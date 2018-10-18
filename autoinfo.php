<?php
ini_set('display_errors', 'Off');

$rutastyles="";

if($_GET['ruta'] == 'forbidden') {
    include('core/view/forbidden.php');
}

if($_GET['ruta'] == 'reporte') {
    include('core/model/db.php');
    include('core/controller/report/PDF.php');
}

if($_GET['ruta'] == 'errordb') {
    include('core/view/errordb.php');
}

if($_GET['ruta'] == 'nosession') {
    include('core/view/nosession.php');
}

?>