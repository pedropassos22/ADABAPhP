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
            <label>Nome:</label> <input type="text"><br> 
            <label>CPF:</label> <input type="number"><br>
            
            <fieldset name="sexo">
                <p>Sexo:</p>
                <label> <input type="radio" name="sexo" value="M"> Masculino </label>
                <label> <input type="radio" name="sexo" value="F"> Feminino </label>
            </fieldset>
            
            <label>SIAPEC:</label> <input type="number"><br>
            <label>Endereço:</label> <input type="text"><br>
            <label>Propriedade Rual:</label><input type="text"><br>
            <label>Telefone 1:</label> <input type="number"> <br>
            <label>Telefone 2:</label> <input type="number"> <br>
            <label>Email:</label><input type="email"><br>
            <label>Data de Atualização </label> <input type="date"><br><br><br>
            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
</body>


</html>