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
        $q2 = $_GET["q2"];
        $q3 = isset($_GET["q3"]) ? $_GET["q3"]:null;
        ?>
        <p>Pergunta 4: Qual é a propriedade utilizada em CSS para definir a cor do texto de um elemento HTML?</p>
        <ol type="A">
            <li><a href="form5.php?q1=<?php echo "$q1"; ?>&q2 = <?php echo "$q2"; ?>q3=<?php echo "$q3"; ?>q4=letraA" style="color:green">color</a></li>
            <li><a href="form5.php?q1=<?php echo "$q1"; ?>&q2 = <?php echo "$q2"; ?>q3=<?php echo "$q3"; ?>q4=letraB">text-color</a></li>
            <li><a href="form5.php?q1=<?php echo "$q1"; ?>&q2 = <?php echo "$q2"; ?>q3=<?php echo "$q3"; ?>q4=letraC">font-color</a></li>
            <li><a href="form5.php?q1=<?php echo "$q1"; ?>&q2 = <?php echo "$q2"; ?>q3=<?php echo "$q3"; ?>q4=letraD">background-color</a></li>
            <li><a href="form5.php?q1=<?php echo "$q1"; ?>&q2 = <?php echo "$q2"; ?>q3=<?php echo "$q3"; ?>q4=letraE">text-style</a></li>
        </ol>
        <br>
        <p><a href="questao3.php">Cancelar</a></p>
    </main>
</body>

</html>