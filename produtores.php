<?php include('conexao.php');

$sql_produtores = "SELECT * FROM produtores";
$query_produtores = $mysqli->query($sql_produtores) or die($mysqli->error);
$num_produtores = $query_produtores->num_rows;

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtores</title>
</head>
<body>

    <h1>LISTA DE PRODUTORES</h1>
    <p>ESTES SÃO OS CLIENTES CADASTRADOS NO SISTEMA:</p>
    <table border="1" cellpadding="10">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Sexo</th>
            <th>SIAPEC</th>
            <th>Endereço</th>
            <th>Propriedade Rural</th>
            <th>Telefone Principal</th>
            <th>Telefone Secundário</th>
            <th>Email</th>
            <th></th>
        </thead>
        <!--<thead>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>-->
        <tbody>
            <?php if ($num_produtores == 2) { ?>
                <tr>
                    <td colspan="11">Nenhum Cliente Foi Cadastrado!</td>
                </tr> 
            <?php } else { ?>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php } ?>
        </tbody>


    </table>
</body>
</html>