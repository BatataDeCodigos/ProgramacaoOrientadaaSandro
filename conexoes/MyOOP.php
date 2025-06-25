<?php
// conexões
include_once '../classes/animal.php';
include_once '../classes/gato.php';
include_once '../classes/cachorro.php';

//criação da classe cachorro
$cachorro =  new Cachorro();
print_r('Cachorro<br>');
//atributos do animal
$cachorro->nome = 'Titãn';
$cachorro->especie = 'Cachorro';
$cachorro->idade = 9;
$cachorro->sexo = 'Masculino';
$cachorro->peso = 19;
$cachorro->cor = 'Preto e bégi';
$cachorro->status = 'Vacinado e sociável';
$cachorro->chipado = TRUE;

//atributos do cachorro
$cachorro->raça = 'Misto';
$cachorro->porte = 'Médio';
$cachorro->nivelenergia = 'Alto';
$cachorro->vermifugado = TRUE;
$cachorro->sociavel = TRUE;
$cachorro->adestrado = FALSE;
$cachorro->vacinado = TRUE;


//classe do gato
$gato = new Gato();
print_r('Gato<br>');
//atributos animal
$gato->nome = 'Meméia';
$gato->especie = 'Gato';
$gato->idade = 12;
$gato->sexo = 'Faminino';
$gato->peso = 11;
$gato->cor = 'Laranja e branco';
$gato->status = 'Vacinada e sociável';
$gato->chipado = FALSE;

//atributos do gato
$gato->raça = 'Scottish Fold';
$gato->porte = 'Baixo';
$gato->nivelenergia = 'Baixo';
$gato->vermifugado = TRUE;
$gato->sociavel = FALSE;
$gato->adestrado = FALSE;
$gato->vacinado = TRUE;


?>