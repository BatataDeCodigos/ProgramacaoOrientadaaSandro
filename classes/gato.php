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

                return "Nome: {$this->nome} <br> Pelagem: {$this->pelagem} <br> Castrado: {$this->castrado} <br> Demonstra curiosidade: {$this->curioso} <br> Independente: {$this->independente} <br> Contato com humanos: {$this->adoraColo} <br> Usa caixa de areia: {$this->caixaAreia}";

        }

        public function verifyCastrado(){

                if ($this->castrado = $castrado == TRUE){
                        return "Foi castrado.";
                }
                
                if ($this->castrado = $castrado == FALSE){
                        return "Não foi castrado.";
                }
        }

        public function verifyPelagem(){

                $this->pelagem = $pelagem;
                return "Sua pelagem é {$this->pelagem}";

        }

        public function atualizarIndep($independente){

                if ($this->pelagem >=5){
                        return "É independente.";
                }

                if ($this->pelagem <=5){
                        return "É dependente.";
                }

        }
        
        public function verifyVacina(){

                if ($this->vacinado = TRUE){
                        return "Foi vacinado.";
                }

                if ($this->vacinado = FALSE){
                        return "Não foi vacinado.";
                }
        }
        
        public function resumoGato(){

                return "Nome: {$this->nome}, Pelagem: {$this->pelagem}, Status atual: {$this->status}";

        }
        
        public function caixaDeAreia(){

                 if ($this->caixaAreia = TRUE){
                        return "Usa caixa de areia.";
                }
                 if ($this->caixaAreia = FALSE){
                        return "Não usa caixa de areia.";
                }

        }

        public function contato(){

                 if ($this->adoraColo = TRUE){
                        return "Adora colo/carinho.";
                }
                
                 if ($this->adoraColo = FALSE){
                        return "Não gosta de colo/carinho.";
                }

        }

}


?>