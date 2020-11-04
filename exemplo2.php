<?php

class Fabricante{
    private $empresa;

    public function __construct($empresa){
        $this->empresa = $empresa;
    }
    // RETORNA O NOME DA EMPRESA
    public function getNome(){
        return "<br>".$this->empresa."<br>";
    }
}

class Produto{
    private $nome;
    private $categoria;
    private $preco;
    private $nome_empresa;

    public function __construct($nome, $categoria, $preco, Fabricante $nome_empresa){
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->preco = $preco;
        $this->nome_empresa = $nome_empresa;
    }
    public function getNome(){
        if(is_string($this->nome)){
            return "<br>".$this->nome."<br>";
        }else{
            return "<br>Tipo de texto incompatível(notString)<br>";
        }
    }
    public function getCategoria(){
        if(is_string($this->categoria)){
            return "<br>".$this->categoria."<br>";
        }else{
            return "<br>Tipo de texto incompatível(notString)<br>";
        }
    }
    public function getPreco(){
        if(is_float($this->preco)){
            return "<br>".$this->preco."<br>";
        }else{
            return "<br>Tipo de texto incompatível(notInt)<br>";
        }
    }
    public function getFabricante(){
        return $this->nome_empresa->getNome();
    }
}

$f1 = new Fabricante('Azus');
$p1 = new Produto("Celular","Tecnologia",100.00,$f1);

echo $p1->getNome();
echo $p1->getCategoria();
echo $p1->getPreco();
echo $p1->getFabricante();

?>