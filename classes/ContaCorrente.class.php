<?php 
class ContaCorrente extends Conta
{
	var $Limite;

	//Método construtor (Sobreescrito)
	// agora também inicializa a variavel $Limite
	function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Limite)
	{
		//Chamada de método construtor da classe Pai
		parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
		$this->Limite = $Limite;
	}

	function Retirar($quantia)
	{
		//imposto sobre movimentação financeira
		$cpmf = 0.05;

		if(($this->Saldo + $this->Limite) >= $quantia)
		{
			//Executa método da classe pai
			parent::Retirar($quantia);

			//Debita o imposto
			parent::Retirar($quantia * $cmpf);
		}
		else
		{
			echo 'Retirada não permitida. <br>';
			return false;
		}

		// Retirada permitida
		return true;
	}
}