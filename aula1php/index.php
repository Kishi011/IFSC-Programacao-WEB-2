<html>
    <head>
        <meta charset="UTF-8">
        <title>Aprendendo PHP</title>
    </head>

    <body>
        <h1>Isso é um texto em html!</h1>
        
        <?php
            echo "Isso é um texto em php! <br>";
            
            //$ declara variável
            $cor = "amarelo";

            //exibe um texto na tela
            echo "Cor = $cor";

            //Concatenado
            echo "<p>Cor ".$cor." </p>";

            //Variáveis
            //número
            $numero = 5;
            echo "<p>Número ".$numero." </p>";

            //string
            $nome = "Vinicius";
            $sobrenome = "Mulinari Stuani";

            
            Oi($nome, $sobrenome);

            function Oi($nome, $sobrenome)
            {
                echo "<p>Nome: ".$nome." ".$sobrenome." </p>";
            }

            $a = 9;
            $b = 2;

            function Multiplica($a, $b)
            {
                return $a * $b;
            }

            //Definir variável constante
            define("ENTER", "<br>");
            echo ENTER;
            echo ENTER;
            echo ENTER;
            echo ENTER;
            echo ENTER;

            echo "<p>$a * $b = ".Multiplica($a, $b)."</p>";

            //tamanho de strings
            $tamanho = strlen($nome) + strlen($sobrenome);
            echo "<p>Tamaho do nome: ".$tamanho." letras</p>";

            //reverter strings
            $string = "ifsc";
            echo "<p>String normal: ".$string."<br>
                String reverso: ".strrev($string)."</p>";


            $num = rand(1, 10);
            echo "<p>Número aleatório: ".$num."</p>";

            //troca de strings
            echo str_replace("café", "trocar as palavras", "Eu Quero café");

            //saber se um número é inteiro
            $x = 876;
            echo "<br><br>";
            var_dump(is_int($x));

            //saber se um número é float
            $x = 5.65;
            echo "<br><br>";
            var_dump(is_float($x));

            //Vetores - Arrays
            $frutas = array("morango", "abacaxi", "laranja");
            echo ENTER;
            echo ENTER;
            echo ENTER;
            echo "Fruta ".$frutas[0];
            echo ENTER;
            echo "Fruta ".$frutas[1];

            //Quantidade de itens no Array
            echo ENTER;
            echo ENTER;
            echo ENTER;
            echo "Quantidade de itens no array: ".count($frutas);

            //Switch - case
            echo ENTER;
            echo ENTER;
            echo ENTER;

            $opcao = 2;
            switch($opcao)
            {
                case 1:     echo "Página principal";        break;
                case 2:     echo "Menu de opções";          break;
                case 3:     echo "Sobre";                   break;
                default:    echo "Página não encontrada";   break;
            }

            echo ENTER;
            echo ENTER;

            //Imprimindo Arrays
            for ($i=0; $i < count($frutas); $i++) { 
                echo "Fruta na posição $i: ".$frutas[$i];
                echo ENTER;
            }

            echo ENTER;
            echo ENTER;

            //Imprimindo Arrays indexados
            $aluno = array  ("Paulo" => "18",
                             "Pedro" => "17",
                             "Julia" => "19",
                             "Franci" => "18");

            foreach($aluno as $nome => $idade)
            {
                echo $nome." ".$idade." anos<br>";
            }

            echo ENTER;
            echo ENTER;

            //Matriz multidimencional
            $dados = array(
                array("Paulo", 18, "9997-1654"),
                array("Joana", 24, "7569-8752"),
                array("Igor", 46, "7754-6659"),
                array("Janette", 73, "3354-5764")
            );
            
            //Imprimindo a Matriz
            echo "<table border = 1>";
                echo "<tr>";
                    echo "<td>Nome</td>";
                    echo "<td>Idade</td>";
                    echo "<td>Telefone</td>";
                echo "</tr>";
             for($linha = 0; $linha < 4; $linha++)
             {  
                echo "<tr>";

                for($col = 0; $col < 3; $col++)
                {
                    echo "<td>".$dados[$linha][$col]."</td>";
                }

                echo "</tr>";
             }
            echo "</table>";

        ?>
        
    </body>
</html>