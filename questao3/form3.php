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
        $q1 = isset($_GET["q1"]) ? $_GET["q1"] : null;
        $q2 = isset($_GET["q2"]) ? $_GET["q2"] : null;
        ?>
        <p>Pergunta 3: Qual é a tag utilizada em HTML para criar um link ou hiperlink?</p>

        <ol type="A">
            <li><a href="form4.php?q1=<?php echo "$q1"; ?>&q2=<?php echo "$q2"; ?>q3=letraA">&lt;link&gt;</a></li>
            <li><a href="form4.php?q1=<?php echo "$q1"; ?>&q2=<?php echo "$q2"; ?>q3=letraB">&lt;hyperlink&gt;</a></li>
            <li><a href="form4.php?q1=<?php echo "$q1"; ?>&q2=<?php echo "$q2"; ?>q3=letraC" style="color:green">&lt;a&gt;</a></li>
            <li><a href="form4.php?q1=<?php echo "$q1"; ?>&q2=<?php echo "$q2"; ?>q3=letraD">&lt;url&gt;</a></li>
            <li><a href="form4.php?q1=<?php echo "$q1"; ?>&q2=<?php echo "$q2"; ?>q3=letraE">&lt;href&gt;</a></li>
        </ol>
        <br>
        <p><a href="questao3.php">Cancelar</a></p>
    </main>
</body>

</html>