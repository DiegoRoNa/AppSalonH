<?php 

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email{

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    //CORREO DE CONFIRMACION DE CUENTA CREADA
    public function enviarConfirmacion($email){
        //INSTANCIAR OBJETO DE phpmailer
        $mail = new PHPMailer();

        //CONFIGURAR SMTP (protocolo de envio de emails)
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'STARTTLS';
        $mail->Host = 'smtp.office365.com';
        $mail->Port = 587;
        $mail->Username = 'diegorn.10@hotmail.com';
        $mail->Password = 'bnbzthwwvbhzxcls';

        //CONFIGURAR EL CONTENIDO DEL EMAIL
        $mail->setFrom('diegorn.10@hotmail.com');//Quien envía el email
        $mail->addAddress($email);//A quien se envía el email
        $mail->Subject = 'Confirma tu cuenta';//Mensaje que aparece en el email

        //HABILITAR HTML
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';

        //DEFINIR EL CONTENIDO DEL EMAIL
        $contenido = '<html>';
        $contenido .= '<p>Hola ' . $this->nombre . ', has creado tu cuenta en AppSalon, sólo debes confirmarla en el siguiente enlace:</p>';
        $contenido .= "<p>Presiona aquí: <a href='".HOSTING."/confirmar-cuenta?token=" . $this->token . "'>Confirmar cuenta</a></p>";
        $contenido .= "<p>Si tú no solicitaste esta cuenta, ignora el mensaje";
        $contenido .= '</html>';

        $mail->Body = $contenido;
        
        //ENVIAR EL EMAIL
        $mail->send();

    }


    // INSTRUCCIONES PARA CAMBIAR EL PASSWORD
    public function enviarInstrucciones($email){
        //INSTANCIAR OBJETO DE phpmailer
        $mail = new PHPMailer();

        //CONFIGURAR SMTP (protocolo de envio de emails)
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'STARTTLS';
        $mail->Host = 'smtp.office365.com';
        $mail->Port = 587;
        $mail->Username = 'diegorn.10@hotmail.com';
        $mail->Password = 'bnbzthwwvbhzxcls';

        //CONFIGURAR EL CONTENIDO DEL EMAIL
        $mail->setFrom('diegorn.10@hotmail.com');//Quien envía el email
        $mail->addAddress($email);//A quien se envía el email
        $mail->Subject = 'Reestablece tu contraseña';//Mensaje que aparece en el email

        //HABILITAR HTML
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        
        //DEFINIR EL CONTENIDO DEL EMAIL
        $contenido = '<html>';
        $contenido .= '<p>Hola ' . $this->nombre . ', has solicitado cambiar tu contraseña, haz click en el siguiente enlace:</p>';
        $contenido .= "<p>Presiona aquí: <a href='".HOSTING."/recuperar?token=" . $this->token . "'>Reestablecer contraseña</a></p>";
        $contenido .= "<p>Si tú no hiciste la solicitud, ignora el mensaje";
        $contenido .= '</html>';

        $mail->Body = $contenido;
        
        //ENVIAR EL EMAIL
        $mail->send();
    }
}