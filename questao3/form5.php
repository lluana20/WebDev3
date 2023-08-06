<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 3</title>
    <script src="https://kit.fontawesome.com/20b511493a.js" crossorigin="anonymous"></script>
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
        <h1>Resultado:</h1>
    </header>
    <main>

        <?php
        $q1 = isset($_GET["q1"]) ? ($_GET["q1"]) : null;
        $q2 = isset($_GET["q2"]) ? ($_GET["q2"]) : null;
        $q3 = isset($_GET["q3"]) ? ($_GET["q3"]) : null;
        $q4 = isset($_GET["q4"]) ? ($_GET["q4"]) : null;
        ?>

        <ol>
            <li><?php echo "$q1";
                if ($q1 == "letraA") {
                    echo "<i class=\"fa-solid fa-circle-check\" style=\"color: #11ff00;\"></i>";
                } else {
                    echo "<i class=\"fa-solid fa-circle-xmark\" style=\"color: #ff0000;\"></i>";
                }
                ?></li>
            <li><?php echo "$q2";
                if ($q2 == "letraC") {
                    echo "<i class=\"fa-solid fa-circle-check\" style=\"color: #11ff00;\"></i>";
                } else {
                    echo "<i class=\"fa-solid fa-circle-xmark\" style=\"color: #ff0000;\"></i>";
                }
                ?></li>
            <li><?php echo "$q3";
                if ($q3 == "letraC") {
                    echo "<i class=\"fa-solid fa-circle-check\" style=\"color: #11ff00;\"></i>";
                } else {
                    echo "<i class=\"fa-solid fa-circle-xmark\" style=\"color: #ff0000;\"></i>";
                }
                ?></li>
            <li><?php echo "$q4";
                if ($q4 == "letraA") {
                    echo "<i class=\"fa-solid fa-circle-check\" style=\"color: #11ff00;\"></i>";
                } else {
                    echo "<i class=\"fa-solid fa-circle-xmark\" style=\"color: #ff0000;\"></i>";
                }
                ?></li>
        </ol>
    <div>
        <a href="/index.html" class="purple-link">Página inicial</a>
    </div>
    </main>
    <br>
    <div class="footer-container">
        <footer class="footer"> Luana Lima & Maria Theresa &copy; IFNMG 2023 </footer>
</body>

</html>