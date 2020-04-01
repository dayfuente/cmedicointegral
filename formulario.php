<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

Header( "HTTP/1.1 301 Moved Permanently" );
Header( "Location: index.html?r=1" );

// Valores enviados desde el formulario

$nombre = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$mensaje =$_POST['message'];

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.ionos.es';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'info@cmedicointegral.com';                 // SMTP username
    $mail->Password = 'Cmedico1983';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('info@cmedicointegral.com', 'CMedicoIntegral');
    $mail->addAddress('info@cmedicointegral.com', 'Beatriz Ayllon');     // Add a recipient
  

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'CMEDICOINTEGRAL CONTACTO FORMULARIO';
    $mail->Body    = '<body>
                        <div align="center"><p7><strong>FORMULARIO DE CONTACTO</strong></p7></div>
                            <h9><u>Datos de usuario</u></h9> 
                                <br/>
                                <h9><strong>'.$nombre.'</strong><h/9>
                                
                                <br/>
                                <h9><strong>'.$email.'</strong><h/9>
                                <br/>
                                <h9><strong>'.$phone.'</strong><h/9>
                                <br/>
                                <h9><strong>'.$mensaje.'</strong><h/9>
                        </body>';
   

    $mail->send();
    echo 'Gracias! nos pondremos en contacto contigo';
    alert("Mensaje enviado correctamente, nos pondremos en contacto contigo lo antes posible.");

} catch (Exception $e) {
    echo 'Hubo un error el mensaje no pudo ser enviado ', $mail->ErrorInfo;
}
?>