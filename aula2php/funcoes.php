
<?php
// declarando funções
    function cel_to_far($temp){
        $far = ($temp*1.8) + 32;
        return $far;
    }

    // função data
    function mostraData(){
        $meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", 
        "Setembro", "Outubro", "Novembro", "Dezembro");
    
        $ano = date("Y", time());
        $mes = date("m", time());
        $dia = date("d", time());
    
        echo $dia." de ".$meses[$mes-1]." de ".$ano;
    }

    function mostraAgora(){
        $agora = date('d/m/Y');
        echo $agora;
    }

    function mostraAgoraComHora(){
        $agora = date('d/m/Y H:i');
        echo $agora;
    }

?>