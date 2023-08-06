<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
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
        <h2>Desenvolvimento web</h2>
    </header>
    <main>
        <?php
        $q1 = $_GET["q1"];
        ?>
        <p>Pergunta 2: Qual é a palavra-chave utilizada em C# para declarar um método que não retorna nenhum valor?</p>

        <ol type="A">
            <li><a href="form3.php?q1=<?php echo "$q1"; ?>&q2=letraA">int</a></li>
            <li><a href="form3.php?q1=<?php echo "$q1"; ?>&q2=letraB">double</a></li>
            <li><a href="form3.php?q1=<?php echo "$q1"; ?>&q2=letraC" style="color:green">void</a></li>
            <li><a href="form3.php?q1=<?php echo "$q1"; ?>&q2=letraD">string</a></li>
            <li><a href="form3.php?q1=<?php echo "$q1"; ?>&q2=letraE">bool</a></li>
        </ol>
        <br>
        <p><a href="questao3.php" class="purple-link">Cancelar</a></p>

    </main>
    <div>
        <a href="/index.html" class="purple-link">Página inicial</a>
    </div>
    </main>
    <br>
    <div class="footer-container">
        <footer class="footer"> Luana Lima & Maria Theresa &copy; IFNMG 2023 </footer>
</body>

</html>