<?php
include_once '../classes/animal.php';

class Gato extends Animal{

public $nome;
public $pelagem;
public $castrado;
public $vacinado;
public $independente;
public $curioso;
public $adoraColo;
public $caixaAreia;

        public function apresentarGato(){

                return "Nome: {$this->nome} <br> Pelagem: {$this->pelagem} <br>";

        }

        public function verifyCastrado(){

                if ($this->castrado = TRUE){
                        return "Foi castrado. <br>";
                }
                
                if ($this->castrado = FALSE){
                        return "Não foi castrado. <br>";
                }
        }

        public function verifyPelagem(){

                return "Sua pelagem é {$this->pelagem} <br>";

        }

        public function atualizarIndep(){

                if ($this->pelagem >=5){
                        return "É independente. <br>";
                }

                if ($this->pelagem <=5){
                        return "É dependente. <br>";
                }

        }
        
        public function verifyVacina(){

                if ($this->vacinado = TRUE){
                        return "Foi vacinado. <br>";
                }

                if ($this->vacinado = FALSE){
                        return "Não foi vacinado. <br>";
                }
        }
        
        public function resumoGato(){

                return "Nome: {$this->nome}, Pelagem: {$this->pelagem}, Status atual: {$this->status} <br>";

        }
        
        public function caixaDeAreia(){

                 if ($this->caixaAreia = TRUE){
                        return "Usa caixa de areia. <br>";
                }
                 if ($this->caixaAreia = FALSE){
                        return "Não usa caixa de areia. <br>";
                }

        }

        public function contato(){

                 if ($this->adoraColo = TRUE){
                        return "Adora colo/carinho. <br>";
                }
                
                 if ($this->adoraColo = FALSE){
                        return "Não gosta de colo/carinho. <br>";
                }

        }

}


?>