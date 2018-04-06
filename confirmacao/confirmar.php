<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require_once '../lib/PHPMailer/src/Exception.php';
    require_once '../lib/PHPMailer/src/PHPMailer.php';
    require_once '../lib/PHPMailer/src/SMTP.php';

    include_once("../config/constants.php");

    // Processa a requisicao feita via POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Realiza o decode dos dados recebidos via JSON.
        $data = json_decode(file_get_contents('php://input'), true);


        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'no.reply.bbtecno@gmail.com';       // SMTP username
            $mail->Password = 'testeBBTECNO';                     // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('from@example.com', 'Mailer');
            $mail->addAddress('felipebcleao@gmail.com', 'Felipe Leao');     // Add a recipient
            $mail->addAddress('ellen@example.com');               // Name is optional
            $mail->addReplyTo('info@example.com', 'Information');
            $mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            
            // Retorna um objeto JSON confirmando o sucesso da operacao
            echo json_encode(
                array(
                    'message'=>"Confirma&ccedil;&atilde;o recebida com sucesso!", 
                    'formulario'=>$data
                )
            );
            
        } catch (Exception $e) {
            echo json_encode(
                array(
                    'message'=>'Message could not be sent. Mailer Error: '. $mail->ErrorInfo
                )
            );
        }


        
    }
?>