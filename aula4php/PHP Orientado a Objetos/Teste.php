<?php 
class Pessoa { 
    private $nome; private $sobrenome; 

    public function __set($atrib, $value){ $this->$atrib = $value; } 

    public function __get($atrib){ return $this->$atrib; } 
    } 
?>

<?php 
    $Pessoa = new Pessoa(); 
    $Pessoa->nome = 'Fulano'; 
    $Pessoa->sobrenome = ' de Tal'; 
    echo 'Nome: ' . $Pessoa->nome . '<br />'; 
    echo 'Sobrenome: ' . $Pessoa->sobrenome; 
?>