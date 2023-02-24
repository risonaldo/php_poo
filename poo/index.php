<?php

require_once "src/Classes/Produto.php";
require_once "src/Classes/Fornecedor.php";
require_once "src/Classes/Cliente.php";

$prod1 = new Produto;

$prod1->titulo = "Skol";
$prod1->descricao = "cerveja Brasileira";
$prod1->preco = 2.50;

$prod2 = new Produto;

$prod2->titulo = "Itaipava";
$prod2->descricao = "cerveja Brasileira";
$prod2->preco = 2.00;

var_dump($prod1);
var_dump($prod2);

$fornecedor1 = new Fornecedor;

$fornecedor1->nomeFantasia = "Salmonela";
$fornecedor1->razaoSocial = "Cervejaria";
$fornecedor1->cnpj = "658.652.452-25";

$cli = new Cliente;
$cli->nome = "Risonaldo";
$cli->idade = 30;
$cli->endereco = "Rua Assasuna";
$cli->telefone = "(92) xxxx - xxxx";

$cli->comprar();


$nomeClasse = "Cliente";

$instancia = new $nomeClasse;
var_dump($instancia);

echo '<hr></hr>';

$cli2 = new $cli;

var_dump($cli);
var_dump($cli2);