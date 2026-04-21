<?php //class Usuario
class Usuario {

    private $nome;
    private $email;
    private $senha;
    private $status; //ativo ou não
    //private $tipo; //se adm ou não

    

    public function __construct($nome, $email, $senha){

        $this->nome = $nome;

        $this->email = $email;
        

        $this->senha = $senha;
        

        $this->status = true;


    }




//login==============================================

    //verificar se tem o email no banco
    public static function buscarPorEmail($emailFornecido){

        //verificar no sql
        //$emailFonernecido = email está no banco

    }

    //autenticar senha
    public static function verificarSenha($senhaFornecida){

        return  $this->senha == $senhaFornecida;

    }

=====================================================

    //autenticar email, metodo
    public static function validarEmail(){

        //teste: email = contem "@"

    }




    //desativar user
    public function desativarUser(){

        //userlogado->Status = false;
        //this->Status = false;


    }

    //editar usuario

    //validar senha

    //redefinir senha

    //




    /*

    Controller
    - deslogar
    - login
    - cadastrar

    */





}
?>