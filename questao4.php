<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulação de Investimento Financeiro</title>
    <style>
        body {
            font-family: Georgia, serif;
            text-align: center;
            background-color: #292929;
            color: #eee;
            margin: 0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
        }

        th,
        td {
            border: 1px solid #bf80ff;
            padding: 10px;
            text-align: center;
        }

        h1 {
            margin-top: 50px;
            font-size: 36px;
            color: #bf80ff;
        }

        fieldset {
            border: 2px solid #bf80ff;
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #bf80ff;
        }

        input[type="number"] {
            padding: 6px;
            border: 1px solid #bf80ff;
            border-radius: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #bf80ff;
            border: none;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #d9b3ff;
        }

        .footer {
            padding: 20px;
            text-align: center;
            width: 100%;
        }

        .purple-link {
            color: #9370DB;
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <h1>Simulação de Investimento Financeiro</h1>
    <form method="get">
        <fieldset>
            <label for="valor_inicial">Aporte Inicial (R$):</label>
            <input type="number" step="0.01" min="0" max="999999.99" name="valor_inicial" required>
            <span>(Valor limite: 999.999,99)</span>
            <br>
            <label for="periodo">Período (meses):</label>
            <input type="number" min="1" max="480" name="periodo" required>
            <span>(Limite: 1 a 480)</span>
            <br>
            <label for="rendimento_mensal">Rendimento Mensal (%):</label>
            <input type="number" step="0.01" min="0" max="20" name="rendimento_mensal" required>
            <span>(Limite: 0 a 20)</span>
            <br>
            <label for="aporte_mensal">Aporte Mensal:</label>
            <input type="number" step="0.01" min="0" max="999999.99" name="aporte_mensal" required>
            <span>(Valor limite: 999.999,99)</span>
            <br>
            <input type="submit" value="Processar">
    </form>
    </fieldset>
    <br>

    <?php
    if (isset($_GET["valor_inicial"], $_GET["periodo"], $_GET["rendimento_mensal"], $_GET["aporte_mensal"])) {
        $valor_inicial = $_GET["valor_inicial"];
        $periodo = $_GET["periodo"];
        $rendimento_mensal = $_GET["rendimento_mensal"];
        $aporte_mensal = $_GET["aporte_mensal"];

        function calcularRendimento($valor_inicial, $aporte_mensal, $rendimento_mensal)
        {
            $rendimento = ($valor_inicial + $aporte_mensal) * ($rendimento_mensal / 100);
            $total = $valor_inicial + $aporte_mensal + $rendimento;
            return array($rendimento, $total);
        }

        echo '<table>
                <tr>
                    <th>Mês</th>
                    <th>Valor Inicial (R$)</th>
                    <th>Aporte Mensal (R$)</th>
                    <th>Rendimento (R$)</th>
                    <th>Total (R$)</th>
                </tr>';

        $valor_atual = $valor_inicial;
        for ($mes = 1; $mes <= $periodo; $mes++) {
            $aporte = ($mes == 1) ? 0 : $aporte_mensal;
            list($rendimento, $total) = calcularRendimento($valor_atual, $aporte, $rendimento_mensal);
            echo '<tr>
                    <td>' . $mes . '</td>
                    <td>' . number_format($valor_atual, 2, ",", ".") . '</td>
                    <td>' . number_format($aporte, 2, ",", ".") . '</td>
                    <td>' . number_format($rendimento, 2, ",", ".") . '</td>
                    <td>' . number_format($total, 2, ",", ".") . '</td>
                </tr>';
            $valor_atual = $total;
        }
        echo '</table>';
    }
    ?>

    <br> <br>
    <div>
        <a href="index.html" class="purple-link">Página inicial</a>
    </div>
    <br>
    <div class="footer-container">
        <footer class="footer"> Luana Lima & Maria Theresa &copy; IFNMG 2023 </footer>
</body>

</html>