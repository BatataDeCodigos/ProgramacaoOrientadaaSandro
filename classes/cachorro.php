<?php
include_once '../classes/animal';

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

                return "Nome: {$this->nome} Raça: {$this->raça} Porte: {$this->porte} Nível de energia: {$this->nivelenergia} Vacinado: {$this->vacinado} Sociável: {$this->sociavel} Adestrado:{$this->adestrado} ";

        }

        public function vacinar(){

            if ($this->vacinado = TRUE){
                return "Verificando se está vacinado: o animal está vacinado! <br><Br>";
            } 

            if ($this->vacinado = FALSE){
                return "Verificando se está vacinado: o animal não está vacinado! <br><Br>";
            }

        }

        public function verifyAdest(){

            if ($this->adestrado = TRUE){
                return "Verificando se é adestrado(a): Sim! <br><Br>";
            }
            
            if ($this->adestrado = FALSE){
                return "Verificando se é adestrado(a): Não! <br><Br>";
            }

        }

        public function atualizarEnergia($nivelenergia){

            $this->nivelenergia = $nivelenergia;
            return "Atualizando a energia: {$this->nivelenergia} <br><Br>";

        }

        public function indicarPorte(){

            $this->porte = $porte;
            return "Porte do animal: {$this->porte} <br><Br>";            

        }

        public function verifySocial(){

            if ($this->sociavel = TRUE){
                return "Verificando se o animal é sociável: Sim! <br><br>";
            }

            if ($this->sociavel = FALSE){
                return "Verificando se o animal é soviável: Não! <br><br>";
            }

        }

        public function (){

            
            
        }


}
?>