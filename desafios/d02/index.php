<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
            $valor = mt_rand(0, 100);
            // rand() = criado em 1951 por Linear Congrential Generator
            // mt_rand() = criado em 1997 por Marsenne Twister
            // A partir do PHP 7.1, rand() apenas aponta para mt_rand()
            // random_int() gera números criptograficamente seguros, porém é mais lenta que as outras funções

            echo "<p>Gerando um número aleatório entre 0 e 100...</p><p>O valor gerado foi <strong>$valor</strong></p>";
        ?>
                
        <input type="button" value="&#x1F504; Gerar outro" onclick="javascript:document.location.reload()">
    </main>
</body>
</html>