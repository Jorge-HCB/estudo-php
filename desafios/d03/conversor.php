<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>

        <?php 
            $cotacao = 5;
            $reais = $_POST["reais"];
            $dolares = $_POST["reais"] / $cotacao;
            
            //echo "Seus R\$" . number_format($reais, 2, ",", ".")  . " equivalem a US$" . number_format($dolares, 2, ",", ".");

            // Formatação de moedas com internaciolanização!

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "<p>Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolares, "USD") . "</strong></p>";

            echo "<p><strong>*Cotação fixa de " . numfmt_format_currency($padrao, $cotacao, "BRL") . "</strong> informada diretamente no código.</p>";
        ?>
        <input type="button" value="&#x1F504; Voltar" onclick="javascript:history.go(-1)">
    </main>
</body>
</html>