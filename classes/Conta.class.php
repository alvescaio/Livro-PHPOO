<?php 

class Conta
{
	var $Agencia;
	var $Codigo;
	var $DataDeCriacao;
	var $Titular;
	var $Senha;
	var $Saldo;
	var $Cancelada;

	// Método de retirar

	function Retirar($quantia)
	{
		if ($quantia > 0)
		{
			$this->Saldo -= $quantia;
		}
	}

	// Método Depositar
	function Depositar($quantia)
	{
		if($quantia > 0)
		{
			$this->Saldo += $quantia;
		}
	}

	// Método Obter Saldo
	function ObterSaldo()
	{
		return $this->Saldo;
	}


	// Método construtor
	// Inicializa as propriedades
	function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo)
	{
		$this->Agencia = $Agencia;
		$this->Codigo = $Codigo;
		$this->DataDeCriacao = $DataDeCriacao;
		$this->Titular = $Titular;
		$this->Senha = $Senha;

		// Chama a outro método da classe
		$this->Saldo = $Saldo;
		$this->Cancelada = false;
	}

	// Método destruidor
	function __destruct()
	{
		echo '<br/><br/>Objeto conta ', $this->Codigo, '	do titular ', $this->Titular->Nome, ' finalizada.<br/><br/>';
	}
}