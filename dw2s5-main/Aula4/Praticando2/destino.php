<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>Title</title>
</head>

<body>
    <?php
    $n1 = filter_input(INPUT_POST, "n1", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $n2 = filter_input(INPUT_POST, "n2",  FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $n3 = filter_input(INPUT_POST, "n3",  FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

    $media = ($n1 + $n2 + $n3) / 3;
    ?>
    <div class="container">
        <h1>Praticando - Calculando Média</h1>
        <hr>
        <?= "Um aluno com as notas <b>" . $n1 . "</b>, <b>" . $n2 . "</b> e <b>" . $n3 . "</b> E tem uma média igual a: <b>" . $media . "</b>" ?>
        <br><br><br><br>
        <h2> O Aluno está
            <?php

            if ($media < 4)
                echo "<span id='rep'>Reprovado</span>";
            if ($media >= 4 && $media < 6)
                echo "<span id='rec'>De Recuperação</span>";
            if ($media >= 6)
                echo "<span id='apr'>Aprovado</span>";

            ?>
        </h2>
    </div>
    <style>
        #rep{
            color: red;
            text-decoration: underline;
        }
        #apr{
            color: green;
            text-decoration: underline;
        }
        #rec{
            color: yellow;
            text-decoration: underline;
        }
    </style>
</body>

</html>
