<?php 
# Carrega as classes
require_once 'classes/Pessoa.class.php';
require_once 'classes/Conta.class.php';
require_once 'classes/ContaPoupanca.class.php';
require_once 'classes/ContaCorrente.class.php';

# Criação do objeto $Carlos
$carlos = new Pessoa(10, "Carlos da Silva", 1.85, 25, "10/08/1987", "Ensino Médio", 650.00);
echo "Manipulando o objeto {$carlos->Nome}: ";

# Criação do objeto $ContaCarlos
$contas[1] = new ContaCorrente(6677, "CC.1564-44", "10/07/2012", $carlos, 9876, 500.00, 200.00);
$contas[2] = new ContaPoupanca(6677, "PP.1533-57", "10/07/2012", $carlos, 9876, 500.00, "10/07");

# Pecorremos as contas
foreach ($contas as $key => $conta)
{
	echo "Manipulando a conta $key de: {$conta->Titular->Nome}.<br>";
	echo "O saldo atual da conta $key é de R${$conta->ObterSaldo()}<br>";
	
	$conta->Depositar(200);

	echo "O saldo atual da conta $key é de R${$conta->ObterSaldo()}<br>";

	$conta->Retirar(100);

	echo "O saldo atual da conta $key é de R${$conta->ObterSaldo()}<br>";
}