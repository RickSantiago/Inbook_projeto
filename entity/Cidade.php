<?php
    
class Cidade
{
    private $idcidade;
    private $nomecidade;
    
    public function __construct($nomecidade)
    {
        $this->nomecidade = $nomecidade;     
    }
  public function getIdcidade()
    {
        return $this->idcidade;
    }
    public function setIdcidade($idcidade)
    {
        return $this->idcidade = $idcidade;
    }
   
    public function getNomecidade()
    {
        return $this->nomecidade;
    }
    public function setNomecidade()
    {
        return $this->nomecidade = $nomecidade;
    }
    


    
}
