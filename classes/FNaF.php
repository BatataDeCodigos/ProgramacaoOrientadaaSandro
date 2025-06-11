<?php
//criar a classe do jogo
class FNaF{

    public $nome;
    public $data;
    public $freddyf;

    public function apresentar(){

        return "Título: {$this->nome} <br> Personagem principal: {$this->freddyf} <br> Data de lançamento: {$this->data}";

    }   

}



?>