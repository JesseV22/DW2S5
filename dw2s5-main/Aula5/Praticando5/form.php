<!doctype html>
<html lang="en">

<head>
    <title>Formulário Checkbox Array</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <main class="container mt-2">
        <h1>Formulário Array</h1>
        <hr>
        <h2 class="mt-2">Selecione seus Interesses</h2>
        <form class="mt-3 d-flex justify-content-around flex-wrap" action="resp.php" method="POST">
            <?php
            $escolhas = array(
                'Intel',
                'AMD',
                'SnapDragon',
                'Acer',
                'Samsung',
                'Motorola',
                'Xiaomi',
                'Redmi',
                'Huwaeii',
                'HP',
                'DELL',
                'Apple',
                'LG',
                'Philco',
                'Phoco',
                'Blue',
                'Nokia',
                'Asus',
                'Pichau',
                'HyperX',
                'Redragon',
                'Logitech',
                'Mancer',
                'Razer'
            );

            foreach ($escolhas as $escolha) {
                echo "<div class='form-check w-25 mb-1'>";
                echo "<input class='form-check-input' type='checkbox' name='escolha[]' value='$escolha' id='$escolha'>";
                echo "<label class='form-check-label' for='$escolha'>$escolha</label>";
                echo "</div>";
            }
            ?>
            <div class="mt-3">
                <button class="btn btn-primary" type="submit">Enviar</button>
                <button class="btn btn-warning" type="reset">Limpar</button>
            </div>
        </form>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>