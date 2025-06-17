<?php
//criar a classe do jogo
class FNaF{

    public $nome;
    public $data;
    public $freddyf;
    public $foto;

    public function apresentar(){

        return "Título: {$this->nome} <br><br> Personagem principal: {$this->freddyf} <br><br> Data de lançamento: {$this->data} <br> Como sou: {$this->foto}";

    }   

}



?>