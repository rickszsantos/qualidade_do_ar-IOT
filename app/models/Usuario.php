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
        //$Email = VerificarEmail(); colocar depois

        $this->senha = $senha;
        //$Senha = VerificarEmail(); colocar depois

        $this->status = true;


    }




//login==============================================

    //verificar se tem o email no banco
    public static function buscarPorEmail(){



    }

    //autenticar senha
    public static function verificarSenha($senhaFornecida){

        if($senhaFornecida == $this->senha){

            //senha correta
            return true

        }

        return false

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