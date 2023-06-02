<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Número Real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $num = $_POST["n"] ?? 0;

            echo "<p>Analisando o número <strong>". number_format($num, 3, ",", ".") ."</strong> informado pelo usuário:</p>";

            $int = (int) $num;
            $fra = $num - $int;

            echo "<ul><li>A parte inteiro do número é <strong>". number_format($int, 0, ",", ".") ."</strong></li> ";
            echo "<li>A parte fracionárioa do número é <strong>". number_format($fra, 3, ",", ".") ."</strong></li></ul>";
        ?>
        <input type="button" value="&#x2B05; Voltar" onclick="javascript:history.go(-1)">
    </main>
</body>
</html>