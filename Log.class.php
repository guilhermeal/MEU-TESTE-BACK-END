<?php

class Log {

	// ATRIBUTOS DEFINIDOS
	public $id;
	public $produto;
	public $cliente;
	public $datahora;
	public $categoria;
	public $operacao;

	// METODO CONSTRUTOR
	function Log() {
		// $this->criaLog();
	}

	// GETTERs AND SETTERs
	public function getId() {
		return $this->id;
	}
	public function setId($newId) {
		$this->id = $newId;
	}
	public function getProduto() {
		return $this->produto;
	}
	public function setProduto($newProduto) {
		$this->produto = $newProduto;
	}
	public function getCliente() {
		return $this->cliente;
	}
	public function setCliente($newCliente) {
		$this->cliente = $newCliente;
	}
	public function getDataHora() {
		return $this->datahora;
	}
	public function setDataHora($newDataHora) {
		$this->datahora = $newDataHora;
	}
	public function getCategoria() {
		return $this->categoria;
	}
	public function setCategoria($newCategoria) {
		$this->categoria = $newCategoria;
	}
	public function getOperacao() {
		return $this->operacao;
	}
	public function setOperacao($newOperacao) {
		$this->operacao = $newOperacao;
	}

	// OUTROS METODOS
	public function criaLog($arr) {

		$id = rand(1,99);

		$this->setId($id);
		$this->setProduto($arr['produto']);
		$this->setCliente($arr['cliente']);
		$this->setDatahora($arr['dataHora']);
		$this->setCategoria($arr['categoria']);
		$this->setOperacao($arr['operacao']);

		$this->insertDbLog();

	}

	public function insertDbLog() {
		echo "
		<script>

			if(escreverLogDb(
				'".$this->getId()."',
				'".$this->getProduto()."',
				'".$this->getCliente()."',
				'".$this->getDataHora()."',
				'".$this->getCategoria()."',
				'".$this->getOperacao()."')) {

				console.log('conseguiu enviar os dados');

			} else {
				console.log('*********');
				console.log('conseguiu enviar os dados');
			}
		</script>";

	}


}


?>
