<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Cadastro Produtores</title>
</head>


<body>
    <form action="#" method="POST" class="produtoresgeral">
        <fieldset>
            <label>Nome:</label> <input required type="text" name="nome"><br> 
            <label>CPF:</label> <input required type="number" name="cpf"><br>
            
           <fieldset name="sexo">
                <p>Sexo:</p>
                <label> <input required type="radio" name="sexo" value="M"> Masculino </label>
                <label> <input required type="radio" name="sexo" value="F"> Feminino </label>
            </fieldset>
            
            <label>SIAPEC:</label> <input type="number" name="siapec"><br>
            <label>Endereço:</label> <input type="text" name="endereco"><br>
            <label>Propriedade Rual:</label><input required type="text" name="pr"><br>
            <label>Telefone 1:</label> <input required type="number" name="telum"> <br>
            <label>Telefone 2:</label> <input type="number" name="teldois"> <br>
            <label>Email:</label><input type="email" name="email"><br>
            <label>Data de Atualização </label> <input required type="date" name="dataatualizacao"><br><br><br>
            <button type="submit" name="enviar">Enviar</button><br><br><br>
            
            <h1>Dados Enviados:</h1>

        </fieldset>
    </form>    
</body>


</html>