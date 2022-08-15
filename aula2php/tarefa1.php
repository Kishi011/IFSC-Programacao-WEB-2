<?php 
    /**IF-ELSE
     1. Fazer um programa que leia três valores inteiros, determine e imprima o menor
    deles.

    2. Elabore um programa que, dada a idade de um nadador, classifique-o em uma das
    seguintes categorias:
    Infantil A = 5 - 7 anos
    Infantil B = 8 - 10 anos
    Juvenil A = 11 - 13 anos
    Juvenil B = 14 - 17 anos
    Sênior = maiores de 17 anos 5.
    
    3. Tendo como dados de entrada a altura (em metros) e o sexo de uma pessoa,
    construa um algoritmo que calcule seu peso ideal, utilizando as seguintes fórmulas:
    para homens: (72.7 * h) - 58; para mulheres: (62.1 * h) – 44.7
 */

    define("enter", "<br><br>");

    /* 1. */
    function menorNumero(){
        $nums = [8, 10, 2];
        $menor = $nums[0];

        for($i = 0; $i < 3; $i++){

            if($menor > $nums[$i]){
                $menor = $nums[$i];
            }
        }

        echo "Menor número: ".$menor;
    }

    menorNumero();
    echo enter;

    /* 2. */
    function classificaIdade($idade){

        if($idade >= 5 && $idade <= 7) echo "Infantil A";
        if($idade >= 8 && $idade <= 10) echo "Infantil B";
        if($idade >= 11 && $idade <= 13) echo "Juvenil A";
        if($idade >= 14 && $idade <= 17) echo "Juvenil B";
        if($idade > 17) echo "Senior";
    }

    classificaIdade(8);
    echo enter;

    /* 3. */
    function pesoIdeal($altura, $sexo){
        if($sexo == 'Homem'){
            $pesoIdeal = (72.7*$altura) - 58;
        }
        if($sexo == 'Mulher'){
            $pesoIdeal = (62.1*$altura) - 44.7;
        }

        return $pesoIdeal;
    }

    echo "O seu peso ideal é: ".pesoIdeal(1.80, 'Homem');
    echo enter;

    /**WHILE
    4. Faça um programa em PHP que exiba 10 linhas de um texto qualquer.

    5. Faça um programa em PHP que exiba a soma de todos os números de 0 a 10.
    
    6. Faça um programa em PHP que exiba todos os números de 0 a 100.
    
    7. Faça um programa em PHP que exiba todos os números pares de 0 a 100.
    
    8. Sorteie números aleatórios de 0 a 50, imprima todos na tela e só pare quando o
    número sorteado for 37. */

    /* 4. */
    function imprimeLinhas($texto){
        $i = 0;
        while($i < 10){
            echo $texto."<br>";
            $i++;
        }
    }

    imprimeLinhas("Imprimindo texto 10 vezes com WHILE");
    echo enter;

    /* 5. */
    function somandoNumerosWhile(){
        $somaNumeros = 0;
        $i = 0;
        while($i <= 10){
            $somaNumeros += $i;
            $i++;
        }

        echo "Soma dos números de 0 à 10: ".$somaNumeros;
    }

    somandoNumerosWhile();
    echo enter;

    /* 6. */
    function imprimeNumerosWhile(){
        $i = 0;
        while($i <= 100){
            echo $i." - ";
            $i++;
        }
    }

    imprimeNumerosWhile();
    echo enter;

    /* 7. */
    function exibeNumerosPares(){
        $i = 0;
        while($i <= 100){
            if($i %2 == 0){
                echo $i." - ";
            }
            $i++;
        }
    }

    exibeNumerosPares();
    echo enter;

    /* 8. */
    echo "Imprimindo números aleatórios com WHILE: <br>";
    function imprimeNumeroAleatorioWhile(){
        $numAleatorio = rand(0, 50);
        while($numAleatorio != 37){
            echo $numAleatorio. " - ";
            $numAleatorio = rand(0, 50);
        }
    }

    imprimeNumeroAleatorioWhile();
    echo enter;

    /**FOR
    9. Faça um programa em PHP que exiba 10 linhas de um texto qualquer.

    10. Faça um programa em PHP que exiba a soma de todos os números de 0 a 10.

    11.Faça um programa em PHP que exiba todos os números de 0 a 100;

    12. Faça um programa em PHP que exiba todos os números pares de 0 a 100;
    
    13. Faça um programa em PHP que sorteie números aleatórios de 0 a 50,
    imprima todos na tela e só pare quando o número sorteado for 37; */

    /* 9. */
    function imprimeTexto($texto){
        for($i = 0; $i < 10; $i++){
            echo $texto."<br>";
        }
    }

    imprimeTexto("Imprimindo texto 10 vezes com FOR");
    echo enter;

    /* 10. */
    function somandoNumerosFor(){
        $somaNumeros = 0;
        for($i = 0; $i <= 10; $i++){
            $somaNumeros += $i;
        }

        echo "Soma dos Números de 0 à 10: ".$somaNumeros;
    }

    somandoNumerosFor();
    echo enter;

    /* 11. */
    function imprimeNumerosFor(){
        for($i = 0; $i <= 100; $i++){
            echo $i." - ";
        }
    }

    imprimeNumerosFor();
    echo enter;

    /* 12. */
    function imprimeNumerosPares(){
        for($i = 0; $i <= 100; $i++){
            if($i %2 == 0){
                echo $i." - ";
            }   
        }
    }

    imprimeNumerosPares();
    echo enter;

    /* 13. */
    echo "Imprimindo números aleatórios com FOR: <br>";
    function imprimeNumeroAleatorioFor(){
        $numAleatorio = rand(0, 50);
        for($i = 0; $i <= 1; $i++){
            if($numAleatorio != 37){
              $numAleatorio = rand(0, 50);
              $i--;
            }
            else{
                break;
            }
            echo $numAleatorio. " - ";
        }
    }

    imprimeNumeroAleatorioFor();
?>