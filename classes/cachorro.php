<?php
include_once '../classes/animal.php';

class Cachorro extends Animal{

public $nome;
public $raça;
public $porte;
public $vermifugado;
public $nivelenergia;
public $vacinado;
public $sociavel;
public $adestrado;

        public function apresentarCachorro(){

                return "Nome: {$this->nome}, Raça: {$this->raça}, Porte: {$this->porte} <br>";

        }

        public function vacinar(){

            if ($this->vacinado = TRUE){
                return "Verificando se está vacinado: o animal está vacinado! <br>";
            } 

            if ($this->vacinado = FALSE){
                return "Verificando se está vacinado: o animal não está vacinado! <br>";
            }

        }

        public function verifyAdest(){

            if ($this->adestrado = TRUE){
                return "Verificando se é adestrado(a): Sim! <br>";
            }
            
            if ($this->adestrado = FALSE){
                return "Verificando se é adestrado(a): Não! <br>";
            }

        }

        public function atualizarEnergia(){

            return "Atualizando a energia: {$this->nivelenergia} <br>";

        }

        public function indicarPorte(){

            return "Porte do animal: {$this->porte} <br>";            

        }

        public function verifySocial(){

            if ($this->sociavel = TRUE){
                return "Verificando se o animal é sociável: Sim! <br>";
            }

            if ($this->sociavel = FALSE){
                return "Verificando se o animal é soviável: Não! <br>";
            }

        }

        public function exibAdestramento(){

            if ($this->adestrado = TRUE){
                return "Sim, ele recebeu adestramento.<br>";
            }
            if ($this->adestrado = FALSE){
                return "Não, ele não recebeu adestramento.<br>";
            }
            
        }

        public function exibResumo(){

            return "Porte: {$this->porte}, Nome: {$this->nome}, Raça: {$this->raça}";

        }


}
?>