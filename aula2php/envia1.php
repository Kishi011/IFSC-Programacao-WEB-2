<?php 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $sexo = $_POST['sexo'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contato</title>
    </head>
    <body>
        <h1>Confira seus dados</h1>
        <form action="envia.php" method="post"> <!-- o action determina pra onde é enviado as informações do form -->

            Nome: <input type="text" name="nome" value="<?php echo $nome;?>"><br>
            Email: <input type="text" name="email" value="<?php echo $email;?>"><br>
            
            Mensagem: <br>
            <textarea name="msg" cols="40" rows="5"><?php echo $msg; ?></textarea><br>
            
            Sexo: <br>
            <input type="radio" name="sexo" value="feminino"> Feminino <br>
            <input type="radio" name="sexo" value="masculino"> Masculino <br>
            <input type="submit">
        </form>
    </body>
</html>