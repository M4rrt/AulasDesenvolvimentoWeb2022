<?php

class Usuario {
	public $nome;
	public $cpf;
	public $endereco;
	function Usuario(){
		$this->preparaUsuario();
	}
	
	function preparaUsuario(){
		$this->nome = "me Mama";
		$this->cpf = "não pergunta krl";
		$this->endereco = "70707070";
	}
}?>	