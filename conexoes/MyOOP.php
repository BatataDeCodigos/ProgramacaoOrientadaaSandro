<link rel="stylesheet" href="../assets/oop.css">
<title>Informações do animal</title>
<body>
<?php
//conexão com a classe do jogo
include_once '../classes/adocaopet.php';
?>
<h3 style="margin-left: 50px;">
<?php
print('ADOÇÃO DE PETS <br><br>');
?>
</h3 style="margin-left: 50px;">

<p style="margin-left: 50px;">
<?php
//Instanciando a classe
$gato = new Gato();
print_r('Gatos: <br>');
//Atributos e suas definições
$imggato = "../imgs/scottish-fold.png";
?>
<img src="../imgs/scottish-fold.png" style="height: 200px; width: 300px;" alt="Foto:">
<br>
<?php 
$gato->nome = '';
$gato->datanasc = '09\04\2003';
$gato->peso = '13kg';
$gato->raça = 'Scottish Fold';
$gato->sexo = 'Feminino';
//echo (puxa ele para aparecer no navegador)
echo $gato->apresentar();
?>
</p>
<p style="margin-left: 50px;">
<?php
$cachorro = new Cachorro();
print_r('Cachorros:<br>');
$imgcachorro = "../imgs/dogAlemao1.jpg"
?>
<img src="../imgs/dogAlemao1.jpg" style="height: 200px; width: 290px;" alt="Foto:">
<?php
$cachorro->nome = '';
$cachorro->datanasc = '05\12\1996';
$cachorro->peso = '19kg';
$cachorro->raça = '?';
$cachorro->sexo = 'Masculino';

echo $cachorro->apresentar();
?>
</P>

</body>
