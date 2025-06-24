<?php

class Animal{


public $nome;
public $especie;
public $idade;
public $sexo;
public $peso;
public $cor;
public $status;
public $chipado;

public function _construct($nome,$especie,$idade,$sexo,$peso,$cor,$status,$chipado){

        $this->nome = $nome;
        $this->especie = $especie;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->peso = $peso;
        $this->cor = $cor;
        $this->status = $status;
        $this->chipado = $chipado;

}

public function apresenteFicha(){

        echo "Nome: $this->nome\n";
        echo "Espécie: $this->especie\n";
        echo "Idade: $this->idade anos\n";
        echo "Sexo: $this->sexo\n";
        echo "Peso: $this->peso kg\n";
        echo "Cor: $this->cor\n";
        echo "Status: $this->status\n";
        echo "Chipado: " . ($this->chipado ? 'Sim' : 'Não') . "\n";

}}

?>