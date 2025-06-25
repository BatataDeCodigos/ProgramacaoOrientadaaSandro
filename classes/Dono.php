<?php

class Dono{

public $nome;
public $idade;
public $contato;
public $email;
public $endereço;
public $temoutrosanimais;
public $experiencia;
public $animalAdotado;
public $cancelAdot;


    public function apresentar(){

        return "Nome: {$this->nome}<br>Idade do adotante: {$this->idade}<br>Telefone: {$this->contato} <br> Email: {$this->email}<br>Endereço: {$this->endereço}<br>";

    }
    
    public function verifyAnimalAdotado(){

        return "O animal adotado é {$this->animalAdotado}<br>";

    }

    
    public function verifyIdade(){

        if($this->idade >= 18){
            return "Possui idade para a adoção.<br>";
        }
        if($this->idade <=18){
            return "Não possui idade para adotar.<br>";
        }

    }
    
    public function exper(){

        if($this->experiencia = TRUE){
            return "Verificação se tem experiência: Sim.<br>";
        }
        if($this->experiencia = FALSE){
            return "Verificação se tem experiência: Não.<br>";
        }

    }
    
    public function contatos(){

        return "Formas de contato:<br>Telefone: {$this->contato}<br>Email:{$this->email}<br>";

    }
    
    public function verifyOutroAnimal(){

        if($this->temoutrosanimais = TRUE){
            return "Verificação de outros animais: Sim, tem outros animais.<br>";
        }
        if($this->temoutrosanimais = FALSE){
            return "Verificação de outros animais: Não, não tem outros animais.<br>";
        }

    }

    public function cancelAdot(){

        if($this->cancelAdot = TRUE){
            return "Verificação da adoção feita: Adoção cancelada.";
        }
        if($this->cancelAdot = FALSE){
            return "Verificação da adoção feita: Adoção feita.";
        }

    }

    public function exibResumo(){

        

    }

}
?>