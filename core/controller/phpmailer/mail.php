<?php 
if($_POST['email_send']){

$id_mail = 1;  
$buscaMail="SELECT * FROM `mail` WHERE `id_mail` = $id_mail";
$Result=$connect-> query($buscaMail);
$info_Mail = $Result->fetch_assoc();

$host = $info_Mail[host];
$port= $info_Mail[port];
$SMTPDebug = $info_Mail[SMTPDebug];
$username_mail = $info_Mail[username_mail];
$password_mail= $info_Mail[password_mail];
$realname_mail = $info_Mail[realname_mail];
$SMTPAuth = $info_Mail[SMTPAuth];


require 'assets/phpmailer/PHPMailerAutoload.php';
require 'core/controller/phpmailer/templates.php';
    
$mail = new PHPMailer;
$mail->IsHTML(true); 
$mail->isSMTP();
$mail->SMTPDebug = "$SMTPDebug";

$mail->Host = "$host";
$mail->Port = "$port";
$mail->SMTPAuth = "$SMTPAuth";
$mail->Username = "$username_mail";
$mail->Password = "$password_mail";
$mail->setFrom($username_mail, $realname_mail);
    
    
if($_POST['email_welcome']){
    
$detalle='Correo de Bienvenida Paciente '.$nombres.'';
       
$mail->addAddress($email);
$mail->Subject = ''.$detalle.'';
$mail->Body = '
'.$template_header.'
'.$template_send.'
'.$template_footer.'
';     
}
    
if($_POST['email_citologia']){
    
$detalle='Citologia '.$correlativo_citologia.' Paciente '.$nombres.'';
       
$mail->addAddress($email);
$mail->Subject = ''.$detalle.'';
$mail->Body = '
'.$template_header.'
'.$template_send.'
'.$template_footer.'
';     
}

if($_POST['email_biopsia']){
    
$detalle='Biopsia '.$correlativo_biopsia.' Paciente '.$nombres.'';
       
$mail->addAddress($email);
$mail->Subject = ''.$detalle.'';
$mail->Body = '
'.$template_header.'
'.$template_send.'
'.$template_footer.'
';    

}

if (!$mail->send()) {
    $errors[] = "$detalle - Mailer Error:  . $mail->ErrorInfo";
    
} else {
    $success[] = "Correo enviado a $email, $detalle";
    $bitacora[] = "Correo enviado a $email , $detalle"; 
}
}
?>