<?php
    require_once __DIR__ . '/src/config/constants.php';
    require_once __DIR__ . '/src/classes/ReCaptchaUtil.php';
    require_once __DIR__ . '/src/classes/MailSenderUtil.php';

    use Casamento\ReCaptchaUtil;
    use Casamento\MailSenderUtil;

    // Processa a requisicao feita via POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        // Realiza o decode dos dados recebidos via JSON.
        $data = json_decode(file_get_contents('php://input'), true);

        $recaptchaUtil = new ReCaptchaUtil();
        $recaptcha_token = $data['recaptcha'];
        $recaptcha_remoteip = $_SERVER["REMOTE_ADDR"];

        $recaptcha_response = json_decode($recaptchaUtil->verificarToken($recaptcha_token, $recaptcha_remoteip), true);

        if($recaptcha_response.success == true){
            try{
                $assunto    = '[Casamento] Nova confirmação de presença';
                $corpoPLAIN = 'Não foi possível exibir a versão HTML da mensagem.';
                $corpoHTML  = montarBodyHtml($data['formulario']);

                $mailSender = new MailSenderUtil();
                $mailSender->enviarEmail($assunto, $corpoHTML, $corpoPLAIN);
                
                // Retorna um objeto JSON confirmando o sucesso da operacao
                echo json_encode(
                    array(
                        'message'=>"Confirma&ccedil;&atilde;o recebida com sucesso!", 
                        'request'=>$data
                    )
                );
            } catch (Exception $e) {
                throw new Exception("Erro ao enviar email de confirmacao.". $mail->ErrorInfo);
            }
            
        } else {
            throw new Exception("Falha ao verificar recaptcha.");
        }
        
    }





    function montarBodyHTML($formulario){

        $comparecimento = 
            ($formulario['comparecimento'] == "sim") 
                ? '<span style="color: #fff; font-weight: bold; background-color: #008000; padding: 5px 10px; border-radius: 4px;">Confirmado!</span>' 
                : '<span style="color: #fff; font-weight: bold; background-color: #ca1010; padding: 5px 10px; border-radius: 4px;">Não comparecerá</span>';

        $body = "";
        $body .= "<h1>Nova Confirmação de Presença</h1>";
        $body .= "<p><strong>Convidado</strong>: ".$formulario['convidado']."</p>";
        $body .= "<p><strong>Email de contato</strong>: ".$formulario['email']."</p>";
        $body .= "<p><strong>Comparecimento</strong>: ".$comparecimento."</p>";
        
        if($formulario['comparecimento'] == "sim"){
            $body .= "<hr style='border:1px solid #ddd;' />";
            $body .= "<p style='margin-left:20px;'><strong>Acompanhantes Confirmados</strong>: ";
            if(count($formulario['acompanhantes']) == 0){
                $body .= "<i>Nenhum acompanhante inserido</i>";
            }else{
                $body .= "<ul>";
                foreach($formulario['acompanhantes'] as $ac){
                    $body .= "<li>".$ac['nome']."</li>";
                }
                $body .= "</ul>";
            }
            $body .= "</p>";
            $body .= "<hr style='border:1px solid #ddd;' /><p>Email enviado automaticamente.</p>";
        }

        return $body;
    }
?>