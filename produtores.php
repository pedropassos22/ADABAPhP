<?php include('conexao.php');

$sql_produtores = "SELECT * FROM produtores";
$query_produtores = $mysqli->query($sql_produtores) or die($mysqli->error);

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
    <table>
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
        <tbody>

        </tbody>
    </table>
</body>
</html>