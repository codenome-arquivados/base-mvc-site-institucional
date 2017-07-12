<?php
/**
 * Created by PhpStorm.
 * User: Thiago Cunha
 * Date: 11/07/2017
 * Time: 11:58
 */

class contatoController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $array = array();

        if (isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $msg = addslashes($_POST['mensagem']);

            $para = "grupocodenome@gmail.com";
            $assunto = "Teste do site";
            $mensagem = "Nome: ".$nome."<br>E-mail: ".$email."<br>Mensagem: ".$msg;
            $cabecalho = 'From: grupocodenome@gail.com'."\r\n".'Reply-To: '.$email."\r\n".'X-Mailer: PHP/'.phpversion();

            mail($para, $assunto, $mensagem, $cabecalho);

            $array['aviso'] = "E-mail enviado com sucesso!";

        }

        $this->loadTemplate("contato", $array);

    }

}