<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (
        isset($_POST["nome"]) &&
        isset($_POST["dataNasc"]) &&
        isset($_POST["peso"]) &&
        isset($_POST["altura"]) &&
        isset($_POST["sexo"]) &&
        !empty($_POST["nome"]) &&
        !empty($_POST["dataNasc"]) &&
        !empty($_POST["peso"]) &&
        !empty($_POST["altura"]) &&
        !empty($_POST["sexo"]))
        {
            $nome = ucfirst($_POST["nome"]);
            $data = date($_POST["data"]);
            $peso = $_POST["peso"];
            $ano = date("Y", strtotime($data));
            $altura = $_POST["altura"];
            $sexo = $_POST["sexo"];
            $imc = $peso / pow($altura, 2);
            $idade = 2024 - $ano;
            $mensagem = null;
        
            if ($imc >= 0 && $imc <= 18.5) {
                $mensagem = "Abaixo do peso";
            } else if ($imc > 18.5 && $imc < 24.9) {
                $mensagem = "Peso Normal";
            } else if ($imc >= 24.9 && $imc <= 29.9) {
                $mensagem = "Obesidade 1";
            } else {
                $mensagem = "Obesidade 2";
            }
        
            if ($sexo == "masculino") {
                echo "<form>  
               <label for='nome'>Senhor:</label> <br>
               <input type='text' value = '$nome' readonly> <br>
               <label for='idade'>Idade:</label> <br>
               <input type='text' value = '$idade' readonly> <br>
               <label for='peso'> Peso: </label><br>
               <input type='text' value='$peso' readonly> <br>
               <label for='altura'> Altura:</label><br>
               <input type='number' value='$altura' readonly> <br>
               <label for='sexo'> Sexo:</label> <br>
               <input type='text' value='$sexo' readonly> <br>
               <label for='imc'> Seu Peso esta </label> <br>
               <input type='text' value='$mensagem' readonly> <br>
               <label for='type'> Seu IMC é </label> <br>
               <input type='text' value='$imc' readonly> <br>
               
               </form>";
            } else {
                echo "<form>  
               <label for='nome'>Senhora:</label>  <br>
               <input type='text' value = '$nome' readonly> <br>
               <label for='idade'>Idade:</label> <br>
               <input type='text' value = '$idade' readonly> <br>
               <label for='peso'> Peso: </label><br>
               <input type='text' value='$peso' readonly> <br>
               <label for='altura'> Altura:</label><br>
               <input type='number' value='$altura' readonly> <br>
               <label for='sexo'> Sexo:</label> <br>
               <input type='text' value='$sexo' readonly> <br>
               <label for='imc'> Seu Peso esta </label> <br>
               <input type='text' value='$mensagem' readonly> <br>
               <label for='type'> Seu IMC é </label> <br>
               <input type='text' value='$imc' readonly> <br>
               </form>";
    }
   
}
    ?>

</body>
</html>