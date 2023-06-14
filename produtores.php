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
    <a href="index.php">Voltar para cadastros</a>
    <p>ESTES SÃO OS CLIENTES CADASTRADOS NO SISTEMA:</p>
    <table border="1" cellpadding="10">
        <thead>
            <th>Nome</th>
            <th>CPF</th>
            <th>SIAPEC</th>
            <th>Endereço</th>
            <th>Propriedade Rural</th>
            <th>Telefone Principal</th>
            <!--<th>Telefone Secundário</th>-->
            <th>Email</th>
            <th>Data da Atualização</th>
            <th>Ações</th>
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
            <?php if ($num_produtores == 0) { ?>
                <tr>
                    <td colspan="8">Nenhum Cliente Foi Cada strado!</td>
                </tr> 
            <?php } else { 
                while ($produrores = $query_produtores->fetch_assoc()) {
                    ?>

                <tr>
                    <!--<td><?php echo $produrores['id']; ?></td>-->
                    <td><?php echo $produrores['nome']; ?></td>
                    <td><?php echo $produrores['cpf']; ?></td>
                    <td><?php echo $produrores['siapec']; ?></td>
                    <!--<td><td><?php echo $produrores['sexo']; ?></td></td>-->
                    <td><?php echo $produrores['endereco']; ?></td>
                    <td><?php echo $produrores['propriedaderural']; ?></td>
                    <td><?php echo $produrores['telum']; ?></td>
                    <!--<td><td><?php echo $produrores['teldois']; ?></td></td>-->
                    <td><?php echo $produrores['email']; ?></td>
                    <td><?php echo $produrores['dataatualizada']; ?></td>
                    <td>
                    <a href="editar_produtor.php?id=<?php echo $produrores['id']; ?>"> Editar </a>
                    <a href="deletar_produtor.php?id=<?php echo $produrores['id']; ?>"> Deletar </a>
                    </td>
                </tr>
            <?php
                }
            } ?>
        </tbody>


    </table>
</body>
</html>