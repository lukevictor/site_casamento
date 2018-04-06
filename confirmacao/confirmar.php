<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require_once '../lib/PHPMailer/src/Exception.php';
    require_once '../lib/PHPMailer/src/PHPMailer.php';
    require_once '../lib/PHPMailer/src/SMTP.php';

    include_once("../config/constants.php");

    // Processa a requisicao feita via POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        //TODO remover sleep
        sleep(1);

        // Realiza o decode dos dados recebidos via JSON.
        $data = json_decode(file_get_contents('php://input'), true);

        $recaptcha_url = "https://www.google.com/recaptcha/api/siteverify";
        $recaptcha_token = $data['recaptcha'];
        $recaptcha_remoteip = $_SERVER["REMOTE_ADDR"];
        $recaptcha_secret = "6LcAlVEUAAAAAJU2UJT0hgIpgMVuTD-YfFo3R8hT";

        function getCurlData($url) {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_TIMEOUT, 10);
            curl_setopt($curl, CURLOPT_PROXY, "http://127.0.0.1:3128");
            curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
            $curlData = curl_exec($curl);
    
            if (!$curlData) {
                throw new \Exception('Curl error: ' . curl_error($curl));
            }
            curl_close($curl);
    
    
            return $curlData;
        }

        $response = json_decode(getCurlData($recaptcha_url."?secret=" . $recaptcha_secret . "&response=" . $recaptcha_token . "&remoteip=" . $recaptcha_remoteip), true);

        if($response.success == true){
            try{
                $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        
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
                $mail->setFrom('no-reply@camillaefelipenoaltar.com.br', 'Camilla & Felipe no altar');
                $mail->addAddress('felipebcleao@gmail.com', 'Felipe Leao');     // Add a recipient
                // $mail->addAddress('ellen@example.com');               // Name is optional
                // $mail->addReplyTo('info@example.com', 'Information');
                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');

                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = '[Casamento] Nova confirmação de presença';
                $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                // $mail->send();
                
                // Retorna um objeto JSON confirmando o sucesso da operacao
                echo json_encode(
                    array(
                        'message'=>"Confirma&ccedil;&atilde;o recebida com sucesso!", 
                        'formulario'=>$data,
                        'response-captcha'=>$response
                    )
                );
            } catch (Exception $e) {
                throw new Exception("Erro ao enviar email de confirmacao.". $mail->ErrorInfo);
            }
            
        } else {
            throw new Exception("Falha ao verificar recaptcha.");
        }
        
    }
?>