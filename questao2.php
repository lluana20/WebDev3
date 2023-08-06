<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <style>
        body {
            background-color: #1a1a1a;
            color: #EDEDED;
            font-family: Georgia, serif;
        }

        h1 {
            color: #D291BC;
        }

        .indice {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .indice-item {
            display: flex;
            align-items: center;
            margin: 5px;
        }

        .indice-item span {
            margin-left: 5px;
        }

        .indice-item {
            display: flex;
            align-items: center;
            margin: 5px;
        }

        .indice-item::before {
            content: "";
            display: inline-block;
            width: 15px;
            height: 15px;
            margin-right: 5px;
            border: 1px solid #000;
            background-color: inherit;
        }

        .indice-item.magr::before {
            background-color: #ADD8E6;
        }

        .indice-item.norm::before {
            background-color: #00FF00;
        }

        .indice-item.sobr::before {
            background-color: #FFFF00;
        }

        .indice-item.obes1::before {
            background-color: #FFA500;
        }

        .indice-item.obes2::before {
            background-color: #FF3333;
        }

        .indice-item.obes3::before {
            background-color: #990000;
        }

        .classificacao h2 {
            color: #000000;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Calculadora de IMC</h1>
        <form action="" method="get">
            <label for="altura">Altura (cm):</label>
            <input type="number" name="altura" id="altura" required min="120">

            <label for="peso">Peso (kg):</label>
            <input type="number" name="peso" id="peso" required min="46">

            <input type="submit" value="Calcular">
        </form>

        <?php
        if (isset($_GET['altura']) && isset($_GET['peso'])) {
            $altura = $_GET['altura'];
            $peso = $_GET['peso'];

            if ($altura >= 120 && $peso >= 46) {
                function calcularIMC($peso, $altura)
                {
                    $altura_metros = $altura / 100;
                    return $peso / ($altura_metros * $altura_metros);
                }

                function obterGrauIMC($imc)
                {
                    if ($imc < 18.5) {
                        return array('Magreza', '#ADD8E6'); // Azul claro
                    } elseif ($imc < 25) {
                        return array('Normal', '#00FF00'); // Verde
                    } elseif ($imc < 30) {
                        return array('Sobrepeso', '#FFFF00'); // Amarelo
                    } elseif ($imc < 35) {
                        return array('Obesidade I', '#FFA500'); // Laranja
                    } elseif ($imc < 40) {
                        return array('Obesidade II', '#FF3333'); // Vermelho escuro 
                        return array('Obesidade III', '#990000'); // Vermelho ainda mais escuro 
                    }
                }

                $imc = calcularIMC($peso, $altura);
                $classificacao = obterGrauIMC($imc);
                $classificacao_nome = $classificacao[0];
                $classificacao_cor = $classificacao[1];
                ?>
                <div class="classificacao" style="background-color: <?php echo $classificacao_cor; ?>">
                    <h2>Sua classificação de IMC:
                        <?php echo $classificacao_nome; ?>
                    </h2>
                </div>
                <h1>Tabela de IMC</h1>
                <table>
                    <tr>
                        <th>Altura (cm) \ Peso (kg)</th>
                        <?php
                        // Cabeçalho da tabela (46 a 120 kg)
                        for ($peso = 46; $peso <= 120; $peso++) {
                            echo "<th>$peso</th>";
                        }
                        ?>
                    </tr>
                    <?php
                    // Linhas da tabela (120 a 210 cm)
                    for ($altura = 120; $altura <= 210; $altura++) {
                        echo "<tr>";
                        echo "<th>$altura</th>";
                        for ($peso = 46; $peso <= 120; $peso++) {

                            $imc = calcularIMC($peso, $altura);

                            $cor = obterGrauIMC($imc)[1];


                            echo "<td title='IMC: " . round($imc, 2) . "' style='background-color: $cor;'></td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </table>

                <!-- Índice -->
                <div class="indice">
                    <ul>
                        <li class="indice-item magr">
                            <span>Magreza</span>
                            <span>(Altura: 120 - 140 cm | Peso: 46 - 56 kg)</span>
                        </li>
                        <li class="indice-item norm">
                            <span>Normal</span>
                            <span>(Altura: 140 - 160 cm | Peso: 56 - 68 kg)</span>
                        </li>
                        <li class="indice-item sobr">
                            <span>Sobrepeso</span>
                            <span>(Altura: 160 - 180 cm | Peso: 68 - 80 kg)</span>
                        </li>
                        <li class="indice-item obes1">
                            <span>Obesidade I</span>
                            <span>(Altura: 180 - 200 cm | Peso: 80 - 92 kg)</span>
                        </li>
                        <li class="indice-item obes2">
                            <span>Obesidade II</span>
                            <span>(Altura: 200 - 220 cm | Peso: 92 - 104 kg)</span>
                        </li>
                        <li class="indice-item obes3">
                            <span>Obesidade III</span>
                            <span>(Altura: 220 - 250 cm | Peso: 104 - 120 kg)</span>
                        </li>
                    </ul>
                </div>
            </div>
        <?php } else {
                echo "<p>Por favor, insira um valor válido para a altura (mínimo: 120 cm) e o peso (mínimo: 46 kg).</p>";
            }
        }
        ?>
    </div>
    <br> <br>
        <a href="index.html">Página inicial</a>
    </main>
<br><br><br><br>
    <footer> Luana Lima & Maria Theresa &copy; IFNMG 2023 </footer>
</body>

</html>