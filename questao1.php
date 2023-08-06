<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
    <style>
        body {
            background-color: #1a1a1a;
            color: #ccc;
            /* Cinza muito claro */
            font-family: Georgia, serif;
        }

        header h2,
        main h2 {
            color: #d491d4;
            /* Cor roxa para títulos */
        }

        input[type="text"],
        input[type="password"],
        input[type="button"],
        input[type="radio"],
        input[type="checkbox"],
        input[type="range"],
        label {
            color: #ccc;
            /* Cinza muito claro para os inputs e labels */
        }

        a {
            color: #ccc;
            /* Cinza muito claro para links */
        }

        a:hover {
            color: #d491d4;
            /* Cor roxa para links em hover */
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
    <header>
        <h2>Desenvolvimento Web</h2>
    </header>
    <main>
        <h2>Trabalho: Questão 1</h2>
        <form action="#" method="get">
            <fieldset>
                <legend>Critérios para geração</legend>
                <label for="quantelementos">Quantidade de elementos (1 até 15):</label>
                <input type="text" id="quantelementos" name="quantelementos">
                <br>
                <input type="radio" name="elemento" value="texto" onclick="this.form.submit()">
                <label for="texto" onclick="this.form.submit()"> Texto</label> <br>
                <input type="radio" name="elemento" value="senha" onclick="this.form.submit()">
                <label for="senha" onclick="this.form.submit()">Senha</label> <br>
                <input type="radio" name="elemento" value="botao" onclick="this.form.submit()">
                <label for="botao" onclick="this.form.submit()">Botão</label> <br>
                <input type="radio" name="elemento" value="radio" onclick="this.form.submit()">
                <label for="radio" onclick="this.form.submit()"> Rádio</label> <br>
                <input type="radio" name="elemento" value="selecao" onclick="this.form.submit()">
                <label for="selecao" onclick="this.form.submit()">Caixa de Seleção</label> <br>
                <input type="radio" name="elemento" value="faixa" onclick="this.form.submit()">
                <label for="faixa" onclick="this.form.submit()">Faixa</label> <br>
            </fieldset>
        </form>
        <br><br>
        <?php
        $quantelementos = isset($_GET['quantelementos']) ? $_GET['quantelementos'] : 1;
        $elementoSelect = isset($_GET['elemento']) ? $_GET['elemento'] : 'elemento';

        if ($quantelementos >= 1 && $quantelementos <= 15) {
            if ($elementoSelect != null) {
                if ($elementoSelect == "texto") {
                    for ($i = 0; $i < $quantelementos; $i++) {
                        echo "<input type =\"text\" name =\"text$i\" id =\"text$i\" placeholder=\"Texto $i\"> <br>";
                    }
                    echo "<br>";
                    for ($i = 0; $i < $quantelementos; $i++) {
                        echo "&lt;input type =\"text\" name =\"text$i\" id =\"text$i\" placeholder=\"Texto $i\"&gt; <br>";
                    }
                } else if ($elementoSelect == "senha") {
                    for ($i = 0; $i < $quantelementos; $i++) {
                        echo "<input type =\"password\" name =\"password$i\" id =\"password$i\" placeholder=\"Senha $i \"> <br>";
                    }
                    echo "<br>";
                    for ($i = 0; $i < $quantelementos; $i++) {
                        echo "&lt;input type =\"password\" name =\"password$i\" id =\"password$i\" placeholder=\"Senha $i\"&gt; <br>";
                    }
                } else if ($elementoSelect == "botao") {
                    for ($i = 0; $i < $quantelementos; $i++) {
                        echo "<input type =\"button\" value=\"Botão $i\"> <br>";
                    }
                    echo "<br>";
                    for ($i = 0; $i < $quantelementos; $i++) {
                        echo "&lt;input type =\"button\" valeu=\"Botão $i \"&gt; <br>";
                    }
                } else if ($elementoSelect == "radio") {
                    for ($i = 0; $i < $quantelementos; $i++) {
                        echo "<input type =\"radio\" name =\"radio$i\" id=\"Radio $i\">";
                        echo "<label for=\"radio\"> Radio $i </label><br>";
                    }
                    echo "<br>";
                    for ($i = 0; $i < $quantelementos; $i++) {
                        echo "&lt;input type =\"radio\" name =\"radio$i\" id=\"Radio $i\"&gt;";
                        echo "&lt;label for=\"radio\"&gt; Radio $i &lt;/label&gt;<br>";
                    }
                } else if ($elementoSelect == "selecao") {
                    for ($i = 0; $i < $quantelementos; $i++) {
                        echo "<input type =\"checkbox\" name =\"checkbox\" id=\"checkbox\">";
                        echo "<label for=\"checkbox$i\"> Caixa de Seleção </label><br>";
                    }
                    echo "<br>";
                    for ($i = 0; $i < $quantelementos; $i++) {
                        echo "&lt;input type=\"checkbox\" name =\"checbox\" id=\"checkbox \"&gt;";
                        echo "&lt;label for=\"checkbox$i\"&gt; Caixa de Seleção &lt;/label&gt; <br>";
                    }
                } else if ($elementoSelect == "faixa") {
                    $value = 1;
                    for ($i = 0; $i < $quantelementos; $i++) {
                        echo "<input type=\"range\" name=\"range$i\" id=\"range$i\" min=\"0\" max =\"100\" value =\"$value\">";
                        echo "<label for=\"range$i\">Faixa $i</label><br>";
                        $value = $value + 7;
                    }
                    echo "<br>";

                    $value = 1;
                    for ($i = 0; $i < $quantelementos; $i++) {
                        echo "&lt;input type=\"range\" name=\"range$i\" id=\"range$i\" min=\"0\" max=\"100\" value =\"$value\"&gt;";
                        echo "&lt;label for=\"range$i\"&gt;Faixa $i&lt;/label&gt;<br>";
                        $value = $value + 7;
                    }
                }
            } else {
                echo "Escolha uma opção válida!";
            }
        }
        ?>

    <div>
        <a href="index.html" class="purple-link">Página inicial</a>
    </div>
    </main>
    <br>
    <div class="footer-container">
        <footer class="footer"> Luana Lima & Maria Theresa &copy; IFNMG 2023 </footer>
</body>

</html>