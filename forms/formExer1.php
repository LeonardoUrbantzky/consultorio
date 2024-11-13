<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colsultorio da doutora bolota</title>
</head>
<body>
    <header>
        <h1>Colsultorio da doutora bolota</h1>
    </header>
    
        <form method="post" action="./script.php">
            <input type="text" name="nome" id="nome"
        placeholder ="Digite o seu Nome" maxlength="100" required> <br>
            <!-- <input type="Password" id="Senha" name="senha" placeholder="senha"> <br> -->
            <!-- <input type="number" id="idade" name="idade" placeholder="idade"> <br> -->
            <!-- <input type="Email" name="Email" id="Email" placeholder="Email"> <br> -->
            <!-- <input type="url" name="site" id="Site" placeholder="Site"> <br> -->
            <input type="Date" name="dataNasc" id="dataNasc"> <br>
            <input type="number" id="peso" name="peso" placeholder="Peso" step="0.1"> <br>
            <input type="number" id="altura" name="altura" placeholder="altura" step="0.01"> <br>
            <input type="radio" name="sexo" value="masculino" checked /> Masculino <br>
            <input type="radio" name="sexo" value="feminino" /> Feminino <br>
            <input type="submit" name="Salvar" value="Salvar" id="Salvar">
            <input type="Reset" name="Limpar" value="Limpar" id="Limpar">
        </form>
    
</body>
</html>