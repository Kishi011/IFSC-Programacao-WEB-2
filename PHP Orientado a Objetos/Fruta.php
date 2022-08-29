<?php 
class Fruta{
    private $nome;
    private $cor;

    public function set_nome($nome){
        $this->nome = $nome;
    }
    public function get_nome(){
        return $this->nome;
    }

    public function set_cor($cor){
        $this->cor = $cor;
    }
    public function get_cor(){
        return $this->cor;
    }

    public function imprime(){
        echo "Nome: ".$this->get_nome()."<br>Cor: ".$this->get_cor();
    }
}

$f = new Fruta();
$f->set_nome("Melão");
$f->set_cor("Amarelo");
$f->imprime();

?>