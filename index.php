<?php

include("conexao.php");

if(isset($_POST) > 0){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['sexo'];
    $siapc = $_POST['siapc'];
    $endereco = $_POST['endereco'];
    $pr = $_POST['pr'];
    $telum = $_POST['telum'];
    $teldois = $_POST['teldois'];
    $email = $_POST['email'];
    $dataatualizacao = $_POST['dataatualizacao'];
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
            <label>Nome:</label> <input type="text" name="nome"><br> 
            <label>CPF:</label> <input type="number" name="cpf"><br>
            
           <fieldset name="sexo">
                <p>Sexo:</p>
                <label> <input type="radio" name="sexo" value="M"> Masculino </label>
                <label> <input type="radio" name="sexo" value="F"> Feminino </label>
            </fieldset>
            
            <label>SIAPEC:</label> <input type="number" name="siapec"><br>
            <label>Endereço:</label> <input type="text" name="endereco"><br>
            <label>Propriedade Rual:</label><input type="text" name="pr"><br>
            <label>Telefone 1:</label> <input type="number" name="telum"> <br>
            <label>Telefone 2:</label> <input type="number" name="teldois"> <br>
            <label>Email:</label><input type="email" name="email"><br>
            <label>Data de Atualização </label> <input type="date" name="dataatualizacao"><br><br><br>
            <button type="submit" name="enviar">Enviar</button><br><br><br>
            
            <h1>Dados Enviados:</h1>

            <?php 
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

            ?>

        </fieldset>
    </form>    
</body>


</html>