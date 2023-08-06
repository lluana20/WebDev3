<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
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
        <p><a href="questao3.php">Cancelar</a></p>
        <p><a href="index.html">Pagina Inicial</a></p>

    </main>
</body>

</html>