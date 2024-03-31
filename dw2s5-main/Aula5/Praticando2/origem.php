<!doctype html>
<html lang="en">

<head>
    <title>Tabuada</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <h1>Praticando 1 - Tabuada</h1>
    </header>
    <main>
        <div class="container">
            <form class="row mt-4" action="destino.php" method="post">
                <div class="col-4 text-start m-1">
                    <label for="inicio" class="form-label mt-1">Inicio:</label>
                </div>
                <div class="col-12 text-start m-1">
                    <input type="number" name="inicio" class="form-control" required>
                </div>
                <div class="col-4 text-start m-1">
                    <label for="fim" class="form-label mt-1">Final:</label>
                </div>
                <div class="col-12 text-start m-1">
                    <input type="number" name="fim" class="form-control" required>
                </div>
                <div class="col-4 text-start m-1">
                    <label for="inc" class="form-label mt-1">Incremento:</label>
                </div>
                <div class="col-12 text-start m-1">
                    <input type="number" name="inc" class="form-control" required>
                </div>
                <div class="col-6 text-end">
                    <button type="submit" class="btn btn-primary m-1">Enviar</button>
                </div>
                <div class="col-6 text-start">
                    <button type="reset" class="btn btn-warning m-1">Limpar</button>
                </div>
            </form>

        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>