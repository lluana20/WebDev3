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
        $q1 = isset($_GET["q1"]) ? $_GET["q1"] : null;
        $q2 = isset($_GET["q2"]) ? $_GET["q2"] : null;
        $q3 = isset($_GET["q3"]) ? $_GET["q3"] : null;
        ?>
        <p>Pergunta 4: Qual é a propriedade utilizada em CSS para definir a cor do texto de um elemento HTML?</p>
        <ol type="A">
            <li><a href="form5.php?q1=<?php echo "$q1"; ?>&q2=<?php echo "$q2"; ?>&q3=<?php echo "$q3"; ?>&q4=letraA" style="color:green">color</a></li>
            <li><a href="form5.php?q1=<?php echo "$q1"; ?>&q2=<?php echo "$q2"; ?>&q3=<?php echo "$q3"; ?>&q4=letraB">text-color</a></li>
            <li><a href="form5.php?q1=<?php echo "$q1"; ?>&q2=<?php echo "$q2"; ?>&q3=<?php echo "$q3"; ?>&q4=letraC">font-color</a></li>
            <li><a href="form5.php?q1=<?php echo "$q1"; ?>&q2=<?php echo "$q2"; ?>&q3=<?php echo "$q3"; ?>&q4=letraD">background-color</a></li>
            <li><a href="form5.php?q1=<?php echo "$q1"; ?>&q2=<?php echo "$q2"; ?>&q3=<?php echo "$q3"; ?>&q4=letraE">text-style</a></li>
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