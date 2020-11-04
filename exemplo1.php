<?php
/* tudo que for public na nossa classe pode ser acessado de fora dela
temos o private que pode ser acessado apenas dentro da classe.
temos o protected dentro da própria ou que herdaram.
No private elas não podendo ser acessadas de fora da classe, ela fica segura
assim, ela terá que receber um valor através de uma função e mostra-lo através de outra

os valores serão atribuidos atraves de um atributo passado na função;
*/

class Produto{
    private $descricao;
    private $preco;

    public function getDetalhe(){
        return ;
    }
    // SETS
    public function setDescricao($value){
        if(is_string($value)){
            $this->descricao = $value;
        }else{
            echo "<br>Erro ao inserir<<(O tipo da variável não é um STRING)<br>";
        }
    }

    public function setPreco($value){
        if(is_float($value)){
            $this->preco = $value;
        }else{
            echo "<br>Erro ao inserir<<(O tipo da variável não é um FLOAT)<br>";
        }
    }

    // GETS
    public function getDescricao(){
        return $this->descricao;
    }

    public function getPreco(){
        return $this->preco;
    }
}


// instanciando a classe PRODUTO a uma variável
$p1 = new Produto;

// passando os valores 
$p1->setDescricao('Tesoura');
$p1->setPreco(50.00);

// exibindo os valores
echo "Produto: ".$p1->getDescricao().". <br>";
echo "Preco ".$p1->getPReco().". ";


?>