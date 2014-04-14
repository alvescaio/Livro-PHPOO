<?php 
class Pessoa
{
	var $Codigo;
	var $Nome;
	var $Altura;
	var $Idade;
	var $Nascimento;
	var $Escolaridade;
	var $Salario;

	// Método Crescer

	function Crescer($centrimetros)
	{
		if($centrimetros > 0)
		{
			$this->Altura += $centrimetros;
		}
	}

	// Método Formar altera escolaridade
	function Formar($titulacao)
	{
		$this->Escolaridade = $titulacao;
	}

	// Método Envelhecer
	function Envelhecer($anos)
	{
		if($anos > 0)
		{
			$this->Idade += $anos;
		}
	}

	// Método construtor 
	// Inicializa as propriedades

	function __construct($Codigo, $Nome, $Altura, $Idade, $Nascimento, $Escolaridade, $Salario)
	{
		$this->Codigo = $Codigo;
		$this->Nome = $Nome;
		$this->Altura = $Altura;
		$this->Idade = $Idade;
		$this->Nascimento = $Nascimento;
		$this->Escolaridade = $Escolaridade;
		$this->Salario = $Salario;
	}

	// Método Destruidor 
	// Finalizada o objeto

	function __destruct()
	{
		echo '<br/><br/>Objeto ', $this->Nome, ' finalizado.<br/><br/> ';
	}
}