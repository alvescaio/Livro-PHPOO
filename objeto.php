<?php 
// Insere a Classe
include_once 'classes/Produto.class.php';

// Cria um objeto
$produto1 = new Produto;
$produto2 = new Produto;

// Atribuir valores
$produto1->Codigo = 4001;
$produto1->Descricao = 'CD - Scorpions The Best';

$produto2->Codigo = 4002;
$produto2->Descricao = 'CD - Guns n Roses 2010';

// Imprime informações da etiqueta
$produto1->ImprimeEtiqueta();
$produto2->ImprimeEtiqueta();
