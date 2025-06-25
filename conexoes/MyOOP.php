<link rel="stylesheet" href="../assets/oop.css">
<body> 
    <br>
    <br>
       
<?php
// conexões
include_once '../classes/animal.php';
include_once '../classes/gato.php';
include_once '../classes/cachorro.php';
include_once '../classes/Dono.php';
?>
<h1>ADOÇÃO DE PETS</h1>
<br>
<br>
<br>
<?php
//criação da classe cachorro
$cachorro =  new Cachorro("Titãn");
?>
<h3>Cachorro:</h3>
<br>

<?php
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

//echo dos métodos do cachorro 
echo $cachorro->apresentarCachorro();
echo $cachorro->vacinar();
echo $cachorro->verifyAdest();
echo $cachorro->atualizarEnergia();
echo $cachorro->indicarPorte();
echo $cachorro->verifySocial();
echo $cachorro->exibAdestramento();
echo $cachorro->exibResumo();

//classe do gato
$gato = new Gato("Meméia");
?>
<br>
<br>
<h3>Gato:</h3>
<br>

<?php
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
$gato->pelagem = 'Laranja e branco';
$gato->castrado = FALSE;
$gato->independente = 8;
$gato->curioso = TRUE;
$gato->adoraColo = TRUE;
$gato->caixaAreia = FALSE;
$gato->vacinado = TRUE;

echo $gato->apresentarGato();
echo $gato->verifyCastrado();
echo $gato->verifyPelagem();
echo $gato->atualizarIndep();
echo $gato->verifyVacina();
echo $gato->resumoGato();
echo $gato->caixaDeAreia();
echo $gato->contato();

?>
<br>
<h3>Adotante:</h3>
<br>

<?php
//classe do adotante
$adot = new Dono();
//atributos
$adot->nome = 'Gerson Mena';
$adot->idade = 50;
$adot->contato = '5199999999';
$adot->email = 'menagerson@gmail.com';
$adot->endereço = 'Cachoeirinha, ### #####, ###';
$adot->temoutrosanimais = TRUE;
$adot->experiencia = TRUE;
$adot->animalAdotado = 'Meméia';
$adot->cancelAdot = FALSE;

echo $adot->apresentar();
echo $adot->verifyAnimalAdotado();
echo $adot->verifyIdade();
echo $adot->exper();
echo $adot->contatos();
echo $adot->verifyOutroAnimal();
echo $adot->cancelAdot();
echo $adot->exibResumo();


?>
<br>
<br>

</body>