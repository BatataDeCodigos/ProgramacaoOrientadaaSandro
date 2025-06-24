<?php
//criar a classe do jogo
class Gato{

    public $nome;
    public $datanasc;
    public $idade;
    public $peso;
    public $raça;
    public $sexo;
    public $imggato;

    public function apresentar(){

        return "Deixe um nome para ela! {$this->nome} <br><br> Gênero: {$this->sexo} <br><br> Data de nascimento: {$this->datanasc} <br><br> Peso: {$this->peso} <br><br> Raça: {$this->raça} <br><br><br><br>";

    }   

}

class Cachorro{

    public $nome;
    public $datanasc;
    public $idade;
    public $peso;
    public $raça;
    public $sexo;

    public function apresentar(){

        return "<br>Dê um nome à ele! {$this->nome} <br><br> Gênero: {$this->sexo} <br><br> Data de nascimento: {$this->datanasc} <br><br> Peso: {$this->peso} <br><br> Raça: {$this->raça} <br><br>";

    }

}

?>