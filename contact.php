<?php
header('Content-Type: application/json; charset=utf-8');

// CONFIG — cámbialo por tu email o integra un servicio SMTP en producción
$TO = 'contacto@franciscojaviergallardo.com';
$SUBJECT = 'Nuevo mensaje desde el portfolio';

function sanitize($v){ return trim(filter_var($v, FILTER_SANITIZE_FULL_SPECIAL_CHARS)); }

$name = sanitize($_POST['name'] ?? '');
$email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$message = sanitize($_POST['message'] ?? '');

if(strlen($name) < 2){ echo json_encode(['ok'=>false,'error'=>'Nombre inválido']); exit; }
if(!$email){ echo json_encode(['ok'=>false,'error'=>'Email inválido']); exit; }
if(strlen($message) < 10){ echo json_encode(['ok'=>false,'error'=>'Mensaje demasiado corto']); exit; }

// En entornos sin mail() configurado, guarda en /tmp como respaldo
$body = "Nombre: $name\nEmail: $email\n\nMensaje:\n$message\n---\n";
$sent = false;
if(function_exists('mail')){
  $headers = 'From: '.$TO."\r\n".'Reply-To: '.$email."\r\n".'X-Mailer: PHP/'.phpversion();
  $sent = @mail($TO, $SUBJECT, $body, $headers);
}
if(!$sent){
  $dir = __DIR__ . '/tmp'; if(!is_dir($dir)) @mkdir($dir,0775,true);
  @file_put_contents($dir.'/messages.log', "[".date('c')."]\n".$body."\n", FILE_APPEND);
}

echo json_encode(['ok'=>true]);