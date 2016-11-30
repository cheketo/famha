<?php
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];

// Para enviar a dos mails
$para  = 'monica.patriciac@hotmail.com' . ', ';
$para .= 'beautyandrelaxestetica@outlook.com';

// Asunto
$titulo = 'Mensaje desde la Web';
// Cabecera que especifica que es un HMTL
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf8' . "\r\n";

// Cabeceras adicionales

$mensaje = '
<html>
<head>
  <title>Mensaje Desde La Web</title>
</head>
<body>
  <p>Mensaje Desde La Web<br />
  * Recuerde no responder directamente este E-Mail * <br />
  Utilice para ello el proporcionado por el cliente en un nuevo env&iacute;o.<br />
  ------------------------------------------------------------------------</p>
  <b>Datos de contacto</b> <br />
  <b>Nombre:</b> '.$name.' <br />
  <b>E-Mail:</b> '.$email.' <br />
  <b>Tel&eacute;fono:</b> '.$tel.' <br />
  <b>Mensaje:</b> '.$message.' <br />
</body>
</html>
';

if ($_POST['submit']) {
    if (mail($para, $titulo, $mensaje, $cabeceras)) {
        echo '<SCRIPT>window.location="./gracias.php";</SCRIPT>';
    } else {
        echo '<SCRIPT>window.location="./error.php";</SCRIPT>';
    }
}
?>
