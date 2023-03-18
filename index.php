<?php

include("conexao.php");

$erro = false;

if(isset($_POST) > 0) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['sexo'];
    $siapc = $_POST['siapec'];
    $endereco = $_POST['endereco'];
    $pr = $_POST['pr'];
    $telum = $_POST['telum'];
    $teldois = $_POST['teldois'];
    $email = $_POST['email'];
    $dataatualizacao = $_POST['dataatualizacao'];

    if(empty($nome)) {
        $erro = "Preencha o Nome!";
    }
    if(empty($cpf)) {
        $erro = "Preencha o CPF!";
    }
    if(empty($sexo)) {
        $erro = "Preencha o Sexo!";
    }
    if(empty($siapec)) {
        $erro = "Preencha o SIAPEC";
    }
    if(empty($endereco)) {
        $erro = "Preencha o Endereço!";
    }
    if(empty($pr)) {
        $erro = "Preencha a Propriedade";
    }
    if(empty($telum)) {
        $erro = "Preencha o Telefone!";
    }
    if(empty($email)) {
        $erro = "Preencha o Email!";
    }
    if(empty($dataatualizacao)) {
        $erro = "Preencha a data de hoje!";
    }
    if($erro) {
        echo "<p><b>$erro<b/></p>";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Cadastro Produtores</title>
</head>


<body>
    <a href="/clientes.php">Voltar para a lista</a>
    <form action="" method="POST" class="produtoresgeral">
        <fieldset>
            <label>Nome:</label> <input value="<?php if(isset($_POST['nome'])) echo $_POST['nome']; ?>" type="text" name="nome"><br> 
            <label>CPF:</label> <input value="<?php if(isset($_POST['cpf'])) echo $_POST['cpf']; ?>" type="number" name="cpf"><br>
            
           <fieldset name="sexo">
                <p>Sexo:</p>
                <label> <input type="radio" name="sexo" value="M"> Masculino </label>
                <label> <input type="radio" name="sexo" value="F"> Feminino </label>
            </fieldset>
            
            <label>SIAPEC:</label> <input value="<?php if(isset($_POST['siapec'])) echo $_POST['siapec']; ?>" type="number" name="siapec"><br>
            <label>Endereço:</label> <input value="<?php if(isset($_POST['endereco'])) echo $_POST['endereco']; ?>" type="text" name="endereco"><br>
            <label>Propriedade Rual:</label><input value="<?php if(isset($_POST['pr'])) echo $_POST['pr']; ?>" type="text" name="pr"><br>
            <label>Telefone 1:</label> <input value="<?php if(isset($_POST['telum'])) echo $_POST['telum']; ?>" type="number" name="telum"> <br>
            <label>Telefone 2:</label> <input value="<?php if(isset($_POST['teldois'])) echo $_POST['teldois']; ?>" type="number" name="teldois"> <br>
            <label>Email:</label><input value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" type="email" name="email"><br>
            <label>Data de Atualização </label> <input value="<?php if(isset($_POST['dataatualizacao'])) echo $_POST['dataatualizacao']; ?>" type="date" name="dataatualizacao"><br><br><br>
            <button type="submit" name="enviar">Enviar</button><br><br><br>
            
            <h1>Dados Enviados:</h1>

            <?php /*
                if(isset($_POST['enviar'])) {
                    echo "<p><b>Nome: </b>" . $_POST['nome'] . "</p>";
                    echo "<p><b> CPF: </b>" . $_POST['cpf'] . "</p>";
                    echo "<p><b> Sexo: </b>" . $_POST['sexo'] . "</p>";
                    echo "<p><b> SIAPEC: </b>" . $_POST['siapec'] . "</p>";
                    echo "<p><b> Endereço: </b>" . $_POST['endereco'] . "</p>";
                    echo "<p><b> Propriedade Rural: </b>" . $_POST['pr'] . "</p>";
                    echo "<p><b> Telefone 1: </b>" . $_POST['telum'] . "</p>";
                    echo "<p><b> Telefone 2: </b>" . $_POST['teldois'] . "</p>";
                    echo "<p><b> Email: </b>" . $_POST['email'] . "</p>";
                    echo "<p><b> Data de Atualização: </b>" . $_POST['dataatualizacao'] . "</p>";
                }   
                */
            ?>

        </fieldset>
    </form>    
</body>


</html>