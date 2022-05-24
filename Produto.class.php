<?php 
class produto{

	private $codigo;
	private $nome;
	private $preco;

	function __construct(){
		$pdt = "mysql:dbname = contato; host = localhost";
		$descricao = "root";
		$preco = "";

		try {
			$this->pdo = newPDO ($pdt, $descricao, $preco);
		} catch (Exception $e) {
			echo "<h2> O banco não está disponível no momento. Por favor, tente mais tarde.";
		}
	}
	
	public function getCodigo(){
		return $this->codigo;
	}

	public function getNome(){
		return $this->nome;
	}

	public function getPreco(){
		return $this->preco;
	}

	public function SetCodigo(){
		return $this->codigo;
	}

	public function SetNome(){
		return $this->nome;
	}

	public function SetPreco(){
		return $this->preco;	
 	}



}


