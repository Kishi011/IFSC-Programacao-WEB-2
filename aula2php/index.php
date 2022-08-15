<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão</title>
</head>
<body>
    <h1>Funções em PHP</h1>
</body>
</html>

<?php 
// dá o include de um arquivo .php, assim consegue acessar as funções do outro arquivo
    // include "funcoes.php";

    // funciona que nem o include, mas chama apenas uma vez
    // serve mais como questão de segurança
    require_once "funcoes.php";

    define("enter", "<br><br>");
    $temp = 22;
    echo "Convertendo graus Celcius para Farenheit<br><br>";
    echo "Graus Celcius: ".$temp."°C<br>";
    echo "Graus Farenheit: ".cel_to_far($temp)."°F<br>";

    echo enter;
    echo "Mostrando data: ";
    echo mostraData();
    
    echo enter;
    echo "Ou também, bem mais simplificado: ";
    echo mostraAgora();

    echo enter;
    echo "Desse jeito mostra as horas também, mas não com o fuso horário certo: ";
    echo mostraAgoraComHora();

?>