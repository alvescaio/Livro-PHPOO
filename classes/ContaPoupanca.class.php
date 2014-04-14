<?php 
class ContaPoupanca extends Conta
{
	var $Aniversario;

	 /* Método construtor (sobreescrito)
	 * agora, trambém inicializa a variável $aniversário
	 */

	 function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Aniversario)
	 {
	 	// Chama o método construtor da classe Pai.
	 	parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
	 	$this->Aniversario = $Aniversario;
	 }

	 // Método retirar sobreescrito
	 // Verifica o saldo e retira tal quantia

	 function Retirar($quantia)
	 {
	 	if($this->Saldo >= $quantia)
	 	{
	 		// Executa método da classe Pai.
	 		parent::Retirar($quantia);
	 	}
	 	else
	 	{
	 		echo 'Retirada não permitida.. <br>';
	 		return false;
	 	}

	 	//Retirada permitida
	 	return true;
	 }
}