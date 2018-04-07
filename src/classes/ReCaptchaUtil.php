<?php
namespace Casamento;

include_once(__DIR__ . '/../config/constants.php');

class ReCaptchaUtil {

    private $url_servico;
    private $secret;

    /**
     * Construtor default. Ao ser inicializada a classe carrega variaveis de ambiente 
     * definidas entre as constantes do sistema.
     */
    public function __construct() {
        $this->url_servico = RECAPTCHA_SITE_URL;
        $this->secret = RECAPTCHA_SECRET;
    }


    /**
     * Acessa o servico de reCaptcha passando o token e ip do usuario que foi verificado.
     * 
     * @param String $token - Token retornado pelo servico de reCaptcha utilizado na validacao do usuario.
     * @param String $remoteip - IP do computador utilizado na validacao do captcha
     * @return String Retrno do servico de captcha, informando sobre a autenticidade do token e sucesso da verificacao
     */
    public function verificarToken($token, $remoteip) {
        $url_verificacao = $this->url_servico."?secret=" . $this->secret . "&response=" . $token . "&remoteip=" . $remoteip;
        return $this->getCurlData($url_verificacao);
    }


    /**
     * O metodo realiza acesso a um servico via metodo GET e retorna o conteudo respondido.
     * 
     * @param String $url - URL do servico a ser consumido
     * @return String conteudo do servico acessado
     */
    private function getCurlData($url) {
        ob_start();
        var_dump($url);
        error_log(ob_get_clean());

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_VERBOSE, true);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
        // curl_setopt($curl, CURLOPT_PROXY, "http://127.0.0.1:3128");

        $curlData = curl_exec($curl);

        if (!$curlData) {
            throw new \Exception('Curl error: ' . curl_error($curl));
        }

        curl_close($curl);
        return $curlData;
    } 

}
?>