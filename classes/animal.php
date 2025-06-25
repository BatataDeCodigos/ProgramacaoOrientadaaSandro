<?php

class Animal{

public $nome;
public $especie;
public $idade;
public $sexo;
public $cor;
public $status;
public $chipado;

//metodos
        public function apresentficha(){

                return "<br>Nome: {$this->nome} <br> Espécie: {$this->especie} <br> Idade: {$this->idade} <br> Gênero: {$this->sexo} <br> Cores de pelo: {$this->cor} <br> Status: {$this->status} <br> Chipado? {$this->chipado}";

        }

        public function atualizarpeso($peso){

                $this->peso = $peso;
                        return "Atualizando peso do animal: {$this->peso}kg <br><br>";
                
        }

        public function atualizarstatus($status){

                $this->status = $status;
                        return "Atualizando status: {$this->status}kg <br><br>";

        }

        public function verifyidade(){

                if ($this->idade = $idade >=10){
                        return "Verificação da idade: Mais velho <br><br>";
                }

                if ($this->idade = $idade <=10 && $this->idade = $idade <=5){
                        return "Verificação da idade: Mais novo ou adulto <br><br>";
                }

        }

        public function marcar_chipado(){

                if ($this->chipado = $chipado == TRUE){
                        return "Verificando se está chipado: o animal está com chip <br><br>";
                }
                if ($this->chipado = $chipado == FALSE){
                        return "Verificando se está chipado: o animal está sem chip <br><br>";
                }

        }


        public function resumoAnimal(){



        }

        public function verifySexo(){



        }

}


?>