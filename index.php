<?php
date_default_timezone_set('America/Sao_Paulo'); // Data e Horário Padrão

function limpar_texto($str){ 
    return preg_replace("/[^0-9]/", "", $str); 
  }





if(count ($_POST) > 0) {
    
    include("conexao.php"); 
    
    $erro = false;


    $siapec = $_POST['siapec'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['sexo'];
    $endereco = $_POST['endereco'];
    $propriedaderural = $_POST['propriedaderural'];
    $telum = $_POST['telum'];
    $teldois = $_POST['teldois'];
    $email = $_POST['email'];
    $dataatualizada = date('Y-m-d H:i');


    if ($sexo == "B") {
         $erro = "Defina o Sexo";
    }
    if(empty($nome)) {
        $erro = "Preencha o Nome!";
    }
    if(empty($cpf)) {
        $erro = "Preencha o CPF!";
    }
    //if(empty($sexo)) {
    //    $erro = "Preencha o Sexo!";
   // }
    if(empty($siapec)) {
        $erro = "Preencha o SIAPEC";
    }
    if(empty($endereco)) {
        $erro = "Preencha o Endereço!";
    }
    if(empty($propriedaderural)) {
        $erro = "Preencha a Propriedade";
    }
    if(empty($telum)) {
        $telum = limpar_texto($telum);
        if (strlen($telum) != 11)
        $erro = "O Telefone deve ser preenchido no padrão (00) 0 0000-0000";
    }
    if(empty($email)) {
        $erro = "Preencha o Email!";
    }

    if($erro) {
        echo "<p><b>$erro<b/></p>";
    } else {
        $sql_code = "INSERT INTO produtores (nome, cpf, sexo, siapec, endereco, propriedaderural, telum, teldois, email, dataatualizada)
        VALUES('$nome', '$cpf', '$sexo', '$siapec', '$endereco', '$propriedaderural', '$telum', '$teldois', '$email', NOW())";
        $deu_certo = $mysqli->query($sql_code) or die($mysqli->error);
        if($deu_certo){
            echo "<p><b> Produtor Cadastrado </p></b>";
            unset($_POST);
        }
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
    <a href="produtores.php">Voltar para a lista</a>
    <form action="" method="POST" class="produtoresgeral">
        <fieldset>
            <label>Nome:</label> <input value="<?php if(isset($_POST['nome'])) echo $_POST['nome']; ?>" type="text" name="nome"><br> 
            <label>CPF:</label> <input value="<?php if(isset($_POST['cpf'])) echo $_POST['cpf']; ?>" type="number" name="cpf"><br>
            
           <fieldset name="sexo">
                <p>Sexo:</p>
                <label> <input type="radio" name="sexo" value="B" CHECKED> Não Definido </label>
                <label> <input type="radio" name="sexo" value="M"> Masculino </label>
                <label> <input type="radio" name="sexo" value="F"> Feminino </label>
            </fieldset>
            
            <label>SIAPEC:</label> <input value="<?php if(isset($_POST['siapec'])) echo $_POST['siapec']; ?>" type="number" name="siapec"><br>
            <label>Endereço:</label> <input value="<?php if(isset($_POST['endereco'])) echo $_POST['endereco']; ?>" type="text" name="endereco"><br>
            <label>Propriedade Rual:</label><input value="<?php if(isset($_POST['propriedaderural'])) echo $_POST['propriedaderural']; ?>" type="text" name="propriedaderural"><br>
            <label>Telefone 1:</label> <input placeholder=" " value="<?php if(isset($_POST['telum'])) echo $_POST['telum']; ?>" type="number" name="telum"> <br>
            <label>Telefone 2:</label> <input value="<?php if(isset($_POST['teldois'])) echo $_POST['teldois']; ?>" type="number" name="teldois"> <br>
            <label>Email:</label> <input value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" type="email" name="email"><br>
            
            <button type="submit" name="enviar">Enviar</button><br><br><br>
            
            <!-- <h1>Dados Enviados:</h1> -->
        

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