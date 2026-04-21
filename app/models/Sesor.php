<?php
class Sensor{

    private $nome; //mq135, mq 7
    private $tipo; //temperatura, umidade
    private $localizacao;
    private $status; //sensor com defeito ou desativado
    
    public function __construct($nome, $tipo, $localizacao){

        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->localizacao = $localizacao
        $this->status = true;


    }







}
?>