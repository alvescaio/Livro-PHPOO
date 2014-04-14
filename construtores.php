<?php 
include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';

# Criação objeto Carlos
$carlos = new Pessoa(10, "Carlos da Silva", 1.85, 25, "10/04/1976", "Ensino Médio", 650.00);

echo 'Manipulando o objeto ', $carlos->Nome, '.<br/>';
echo $carlos->Nome, ' é formado em ', $carlos->Escolaridade, '<br>';
$carlos->Formar('Técnico em Eletricidade');
echo $carlos->Nome, ' é formado agora em ', $carlos->Escolaridade, '<br>';

echo $carlos->Nome, ' possui ', $carlos->Idade, ' anos. <br>';
$carlos->Envelhecer(5);
echo $carlos->Nome, ' possui agora ', $carlos->Idade, ' anos. <br>';


# Criação objeto Conta Carlos
$contaCarlos = new Conta(6677, "CC.12465.22", "10/01/2013", $carlos, 9876, 565.50);

echo "<br/><br/><br/>";

echo 'Manipulando a conta de ', $contaCarlos->Titular->Nome, '.<br>';
echo 'Saldo atual é de R$ ', $contaCarlos->ObterSaldo(), '.<br>';
$contaCarlos->Depositar(10.50);
echo 'Saldo atual é de R$ ', $contaCarlos->ObterSaldo(), '.<br>';
$contaCarlos->Retirar(10);
echo 'Saldo atual é de R$ ', $contaCarlos->ObterSaldo(), '.<br>';
