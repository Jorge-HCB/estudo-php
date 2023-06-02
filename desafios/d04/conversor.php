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
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);
        
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            
            $reais = $_POST["reais"] ?? 0;
            $dolares = $_POST["reais"] / $cotacao;
            
            //echo "Seus R\$" . number_format($reais, 2, ",", ".")  . " equivalem a US$" . number_format($dolares, 2, ",", ".");

            // Formatação de moedas com internaciolanização!

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            
            echo "<p>Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolares, "USD") . "</strong></p>";

            echo "<p><strong>*Cotação de " . numfmt_format_currency($padrao, $cotacao, "BRL") . "</strong> informada diretamente no <strong>Banco Central do Brasil</strong>.</p>";
        ?>
        <input type="button" value="&#x2B05; Voltar" onclick="javascript:history.go(-1)">
    </main>
</body>
</html>