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
        <div class="container">
            <h1>Currículo enviado</h1>
            <p>
                <h3>Dados</h3>
            </p>
            <form class="row g-3 needs-validation" method="POST" action="valida.php">
                <div class="row g-2">
                    <div class="col-md-4">
                        <label for="nome" class="form-label">Nome:</label>
                        <input class="form-control" value=<?php echo $nome?>>
                    </div>
                    <div class="col-md-4">
                        <label for="sobrenome" class="form-label">Sobrenome:</label>
                        <input class="form-control" value=<?php echo $sobrenome?>>
                    </div>
                    <div class="col-md-3">
                        <label for="cpf" class="form-label"><abbr>CPF:</abbr></label>
                        <input class="form-control" value=<?php echo $cpf?>>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md-5">
                        <label for="email" class="form-label">Email:</label>
                        <input class="form-control" value=<?php echo $email?>>
                    </div>
                    <div class="col-sm-3">
                        <label class="form-label">Sexo:</label>
                        <input class="form-control" value=<?php echo $sexo ?>>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md-4">
                        <label class="form-label">Cidade:</label>
                        <input type="text" class="form-control" id="cidade" name="cidade">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Estado:</label>
                        <select class="form-select">
                            <option value="SC">Santa Catarina</option>
                            <option value="PR">Paraná</option>
                            <option value="RS">Rio Grande do Sul</option>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <label class="form-label">Endereço:</label>
                        <input type="text" placeholder="Ex: Rua do meu Bairro n° XXX-X" class="form-control" id="endereco" name="endereco">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">CEP:</label>
                        <input type="text" class="form-control" id="cep" name="cep">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Telefone de Contato:</label>
                        <input type="text" class="form-control" id="telefone" name="telefone">
                    </div>
                </div>
                <div class="row g-2">
                    <h2>Escolaridade</h2>
                    <div class="col-md-3">
                        <label class="form-label">Grau de escolaridade:</label>
                        <select class="form-select">
                            <option value="EnsFundComp">Ensino Fundamental Completo</option>
                            <option value="EnsMedIncomp">Ensino Médio Incompleto</option>
                            <option value="EnsMedComp">Ensino Médio Completo</option>
                            <option value="EnsSupComp">Ensino Superior Completo</option>
                            <option value="PosGrad">Pós-Graduação</option>
                            <option value="Doutorado">Doutorado</option>
                        </select>
                    </div>
                    <div class="col-lg-">
                        <label class="form-label">Outros cursos (Opcional):</label>
                        <textarea class="form-control" rows="3" id="cursos"></textarea>
                    </div>
                </div>
                <div class="row g-2">
                    <h2>Experiência de trabalho</h2>
                    <textarea class="form-control" rows="5" id="experiencia"></textarea>
                </div>
                <div class="row g-2">
                    <h2>Conhecimentos</h2>
                    <textarea class="form-control" rows="5" id="conhecimentos"></textarea>
                </div>
              </form>
        </div>
    </body>
</html>