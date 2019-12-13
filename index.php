<?php

require_once("config.php");

$root = new Usuario(); //instanciando a classe para poder acessar seus dados abaixo

$root->loadbyId(14); //acessando a funcao no usuario.php, e pegando o id 14 no sql

echo $root;

 ?>
