<?php
namespace Casamento;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include_once(__DIR__ . '/../config/constants.php');
require_once __DIR__ . '/../lib/PHPMailer/src/Exception.php';
require_once __DIR__ . '/../lib/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/../lib/PHPMailer/src/SMTP.php';

/**
 * Classe utilitaria para facilitar o envio de emails. Os parametros para envio sao 
 * carregados a partir de constantes globais.
 * 
 * @author Felipe Leao
 */
class MailSenderUtil {

    /**
     * Construtor default
     */
    public function __construct() {}

    /**
     * O metodo recebe as informacoes a serem enviadas e realiza o envio.
     * 
     * @param String $assunto - O assunto do email
     * @param String $corpoHTML - O conteudo HTML do email
     * @param String $corpoPLAIN - O conteudo em texto puro. Utilizado como "fallback"
     */
    public function enviarEmail($assunto, $corpoHTML, $corpoPLAIN) {
        try{
            $mail = new PHPMailer(true);                // Passing `true` enables exceptions
    
            //Server settings
            $mail->CharSet = 'UTF-8';
            $mail->SMTPDebug = MAIL_DEBUG_MODE;         // Enable verbose debug output
            $mail->isSMTP();                            // Set mailer to use SMTP
            $mail->Host = MAIL_SMTP_HOST;               // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                     // Enable SMTP authentication
            $mail->Username = MAIL_SMTP_USERNAME;       // SMTP username
            $mail->Password = MAIL_SMTP_PASSWORD;       // SMTP password
            $mail->SMTPSecure = MAIL_SMTP_SECURITY;     // Enable TLS encryption, `ssl` also accepted
            $mail->Port = MAIL_SMTP_PORT;               // TCP port to connect to

            //Recipients
            $mail->setFrom(MAIL_FROM['EMAIL'], MAIL_FROM['NOME']);
            foreach(MAIL_DESTINATARIOS as $destinatario){
                $mail->addAddress($destinatario['EMAIL'], $destinatario['NOME']);
            }

            //Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = $assunto;
            $mail->Body    = $corpoHTML;
            $mail->AltBody = $corpoPLAIN;

            //Enviar email
            $mail->send();

        } catch (Exception $e) {
            throw new Exception("Erro ao enviar email de confirmacao.". $mail->ErrorInfo);
        }
    }

}
?>