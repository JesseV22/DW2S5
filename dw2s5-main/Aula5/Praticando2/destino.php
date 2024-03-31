<!doctype html>
<html lang="en">

<head>
    <title>Contador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <h1>Contador</h1>
    </header>
    <main>
        <?php
        $inicio = filter_input(INPUT_POST, "inicio", FILTER_SANITIZE_NUMBER_INT);
        $final = filter_input(INPUT_POST, "fim", FILTER_SANITIZE_NUMBER_INT);
        $inc = filter_input(INPUT_POST, "inc", FILTER_SANITIZE_NUMBER_INT);
        ?>
        <div class="container">
            <hr>
            <h2>Parametros Informados: </h2>
            <h3>Início: <?= $inicio ?></h3>
            <h3>Final: <?= $final ?></h3>
            <h3>Incremento: <?= $inc ?></h3>
            <hr>
            <?php

            echo "<p>";
            if ($inicio < $final) {
                if ($inc <= 0) {
                    $inc += ($inc * 2);
                }
            } else {
                if ($inc >= 0) {
                    $inc -= ($inc * 2);
                }
            }
            //echo $inc;
            for ($i = $inicio; ($inicio > $final && $i >= $final) || ($inicio < $final && $i <= $final); $i += $inc) {
                echo "  " . $i . "  ";
            }
            echo "</p>";

            ?>

        </div>
    </main>
</body>

</html>