<?php

class Usuario {

    private $nome;
    private $email;
    private $senha;
    private $status;

    public function __construct($nome, $email, $senha){
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->status = true;
    }

    public static function buscarPorEmail($emailFornecido){
        return null;
    }

    public function verificarSenha($senhaFornecida){
        return $this->senha == $senhaFornecida;
    }

    public static function validarEmail($emailInformado){
        return filter_var($emailInformado, FILTER_VALIDATE_EMAIL);
    }

    public static function validarSenha($senhaInformada){
        return strlen($senhaInformada) >= 6;
    }

    public function desativarUser(){
        $this->status = false;
    }
}