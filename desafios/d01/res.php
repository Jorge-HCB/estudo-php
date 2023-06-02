<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado do processamento</h1>
        <?php 
            $num = $_POST["numero"] ?? 0;
            $ant = $_POST["numero"]-1;
            $suc = $_POST["numero"]+1;
            echo "<p>O número escolhido foi <strong>$num</strong></p><p>O seu antecessor é $ant</p><p>O seu sucessor é $suc</p>";
        ?>
        <input type="button" value="&#x2B05; Voltar" onclick="javascript:history.go(-1)">
    </main>
</body>
</html>