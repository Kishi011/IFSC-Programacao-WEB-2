<?php

// atribuindo as variáveis
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$fone = $_POST['telefone'];
$escolaridade = $_POST['escolaridade'];
$cursos = $_POST['cursos'];
$experiencia = $_POST['experiencia'];
$conhecimentos = $_POST['conhecimentos'];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container pt-3 pb-3">
            <h1>Currículo enviado</h1>
            <p>
                <h3>Ficha Técnica - Candidato: <?php echo $nome." ".$sobrenome;?></h3>
            </p>
            <form action="index.html">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>Nome:</td>
                            <td>Sobrenome:</td>
                            <td>Email:</td>
                            <td>Sexo:</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $nome;?></td>
                            <td><?php echo $sobrenome;?></td>
                            <td><?php echo $email;?></td>
                            <td><?php echo $sexo;?></td>
                        </tr>
                    </tbody>
                    <thead><td></td></thead>
                    <thead>
                        <tr>
                            <td>CPF:</td>
                            <td>Cidade:</td>
                            <td>Estado:</td>
                            <td>Endereço:</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $cpf;?></td>
                            <td><?php echo $cidade;?></td>
                            <td><?php echo $estado;?></td>
                            <td><?php echo $endereco;?></td>
                        </tr>
                    </tbody>
                    <thead><td></td></thead>
                    <thead>
                        <tr>
                            <td>CEP:</td>
                            <td>Tel:</td>
                            <td>Escolaridade:</td>
                            <td>Outros cursos:</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $cep?></td>
                            <td><?php echo $fone;?></td>
                            <td><?php echo $escolaridade;?></td>
                            <td><?php if(empty($cursos)){
                                echo "Não";
                            }
                            else{
                                echo $cursos;
                            }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                    <thead><td></td></thead>
                    <thead>
                        <tr>
                            <td>Experiência de Trabalho:</td>
                            <td>Conhecimentos:</td>
                        </tr>   
                    </thead>
                    <tbody>
                        <td><?php if(empty($experiencia)){
                            echo "Sem experência prévia de trabalho";
                        }
                        else{
                            echo $experiencia;
                        }
                            ?>
                        </td>
                        <td><?php echo $conhecimentos?></td>
                        <td></td>
                        <td></td>
                    </tbody>
                </table>
                <div class="row g-2">
                    <button type="submit" class="col-sm-1 btn bg-primary text-white m-1">Voltar</button>
                </div>
            </form>
        </div>
    </body>
</html>