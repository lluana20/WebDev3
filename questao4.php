<!DOCTYPE html>
<html>
<head>
    <title>Simulação de Investimento Financeiro</title>
    <style>
        /* Estilos gerais */
        body {
            font-family: Georgia, serif; /* Trocar a fonte para Georgia */
            text-align: center;
            background-color: #292929; /* Cor de fundo escura */
            color: #eee; /* Cor do texto */
            margin: 0;
            padding: 0;
        }
      
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
        }

        th, td {
            border: 1px solid #bf80ff; /* Cor da borda roxa */
            padding: 10px;
            text-align: center;
        }

        h1 {
            margin-top: 50px;
            font-size: 36px;
            color: #bf80ff; /* Cor do cabeçalho em roxo */
        }

        fieldset {
            border: 2px solid #bf80ff; /* Cor da borda roxa */
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px; /* Cantos arredondados */
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #bf80ff; /* Cor dos rótulos em roxo */
        }

        input[type="number"] {
            padding: 6px;
            border: 1px solid #bf80ff; /* Cor da borda roxa */
            border-radius: 5px; /* Cantos arredondados */
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #bf80ff; /* Cor de fundo roxa do botão */
            border: none;
            color: #fff; /* Cor do texto do botão */
            border-radius: 5px; /* Cantos arredondados */
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #d9b3ff; /* Cor de fundo roxa mais clara do botão no hover */
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
</body>
</html>
