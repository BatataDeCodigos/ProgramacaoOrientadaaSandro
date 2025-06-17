<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/oop.css">
    <title>Informações do jogo</title>
</head>
<body>
<?php
//conexão com a classe do jogo
include_once '../classes/FNaF.php';

//Instanciando a classe
$fnaf = new FNaF();

//Atributos e suas definições
$fnaf->nome = 'Five Nights At Freddys 1';
$fnaf->data = 8 . 8 . 2014 ; 
$fnaf->freddyf = 'Freddy Fazbear';
$fnaf->foto = ;

?>
<div class="apresentar">
    <ul>
<?php
//da o echo (puxa ele para aparecer no navegador)
echo $fnaf->apresentar();
?>
    </ul>
</div>
</body>
</html>