<?php
require_once '../entity/Estado.php';
include_once '../entity/Estado.php';

class Usuario
{
	private $idusuario;
	private $nomePessoa;
	private $cpf;
	private $email;
	private $nascimento;
	private $senha;
        private $idEstado;
	
	public function __construct($idusuario = "", $nomePessoa = "", $cpf = "", $email = "", $nascimento = "", $senha = "", $idEstado = "" )
	{
		$this->idusuario = $idusuario;
		$this->nomePessoa = $nomePessoa;
		$this->cpf = $cpf;
		$this->email = $email;
		$this->nascimento = $nascimento;
		$this->senha = $senha;

                $estado         = new Estado($idEstado,'','');
                $this->idEstado = $estado->getIdEstado();
//                $this->idEstado = $idEstado;
	}
        
public function getIdusuario() 
{
return $this->idusuario;
}

public function getNomePessoa() 
{
return $this->nomePessoa;
}

public function getCpf() 
{
return $this->cpf;
}

public function getEmail() 
{
return $this->email;
}

public function getNascimento() 
{
return $this->nascimento;
}

public function getSenha() 
{
return $this->senha;
}


public function getCidadeIdCidade() 
{
return $this->cidadeIdCidade;
}

public function setIdusuario($idusuario) 
{
$this->idusuario = $idusuario;
}

public function setNomePessoa($nomePessoa) 
{
$this->nomePessoa = $nomePessoa;
}

public function setCpf($cpf)
 {
$this->cpf = $cpf;
}

public function setEmail($email)
 {
$this->email = $email;
}

public function setNascimento($nascimento) 
{
$this->nascimento = $nascimento;
}

public function setSenha($senha)
    {
        $this->senha = $senha;
    }
public function getIdEstado() 
    {
        return $this->idEstado;
    }

public function setIdEstado($idEstado) 
    {
       return $this->idEstado = $idEstado;
    }

public function setCidadeIdCidade($cidadeIdCidade) 
{
$this->cidadeIdCidade = $cidadeIdCidade;
}
}
