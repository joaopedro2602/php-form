<?php

class Pessoa{
    private $nome;
    private $enderoco;
    private $bairro;
    private $cep;

    public function setNome($nome){
        $this->nome=$nome;
    }
    public function getNome(){
        $this -> nome;
    }

    public function setEndereco($enderoco){
        $this->enderoco=$enderoco;
    }
    public function getEndereco(){
        $this -> endereco;
    }

    public function setBairro($bairro){
        $this->bairro=$bairro;
    }
    public function getBairro(){
        $this -> bairro;
    }

    public function setCep($cep){
        $this->cep=$cep;
    }
    public function getCep(){
        $this -> cep;
    }


}

?>