<?php


class Produto{
    //propriedades

    public $id;
    private $nome;
    public $preco;
    public $quant;
    public $categoria;

    //construtor
    

    //metodos

    public function total(){
        return $this->formataMoeda( $this->preco * $this->quant );
    }
    public function situacao(){
        return ($this->quant < 50) ? '<p class="text-danger">BAIXO</p>' : '<p class="text-primary">NORMAL</p>' ;
    }

    private function formataMoeda($valor){
        setlocale(LC_MONETARY, 'pt_BR');
        $formatted = explode(' ',money_format('%.2n',$valor));
        return "${formatted[1]} ${formatted[0]}";
    }

    //getters & setters

    public function setNome ($nome){
        $this->nome = $nome;
    }

    public function getNome (){
        return $this->nome;
    }

    public function getPreco(){
        return $this->formataMoeda($this->preco);
    }
}

?>