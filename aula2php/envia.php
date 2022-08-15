<?php 
// recebe as variáveis pelo método post
// o post é usado para esconder valores que pelo get são exibidos na URL da página
// o método post é usado para senhas e logins
// o método get é usado para dados "menos importantes"
    $nome = $_POST['nome']; // $_POST[name da tag HTML];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contato</title>
    </head>
    <body>
        <h1>Contato</h1>
        <p>Nome = <?php echo $nome; ?></p>
        <p>Email = <?php echo $email; ?></p>
        <p>Mensagem = <?php echo $msg; ?></p>

        <p>
            Nome: <input type="text" name="nome" value="<?php echo $nome; ?>"><br>
            Email: <input type="text" name="email" value="<?php echo $email; ?>"><br>
            Mensagem: <input type="text" name="nome" value="<?php echo $msg; ?>"><br>
        </p>
    </body>
</html>