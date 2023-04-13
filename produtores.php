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
                    <td colspan="12">Nenhum Cliente Foi Cadastrado!</td>
                </tr> 
            <?php } else { 
                while ($produrores = $query_produtores->fetch_assoc()) {
                    ?>

                <tr>
                    <td><?php echo $produrores['id']; ?></td>
                    <td><?php echo $produrores['nome']; ?></td>
                    <td><?php echo $produrores['cpf']; ?></td>
                    <td><?php echo $produrores['sexo']; ?></td>
                    <td><?php echo $produrores['siapec']; ?></td>
                    <td><?php echo $produrores['endereco']; ?></td>
                    <td><?php echo $produrores['propriedade_rural']; ?></td>
                    <td><?php echo $produrores['telefoneum']; ?></td>
                    <td><?php echo $produrores['telefonedois']; ?></td>
                    <td><?php echo $produrores['email']; ?></td>
                    <td><?php echo $produrores['dataatualizada']; ?></td>
                    <td>
                    <a href=""> Editar </a>
                    <a href=""> Deletar </a>
                    </td>
                </tr>
            <?php
                }
            } ?>
        </tbody>


    </table>
</body>
</html>