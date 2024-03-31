<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title>Formulário</title>
</head>

<body>
    <div class="container">

        <h1>Formulário</h1>
        <hr>
        <form class="row mt-4" action="destino.php" method="POST">
            <div class="col-4 text-end m-1">
                <label for="n1" class="form-label mt-1">Número 1:</label>
            </div>
            <div class="col-7 text-start m-1">
                <input type="text" name="n1" class="form-control" required>
            </div>
            <div class="col-4 text-end m-1">
                <label for="n2" class="form-label mt-1">Número 2:</label>
            </div>
            <div class="col-7 text-start m-1">
                <input type="text" name="n2" class="form-control" required>
            </div>
            <div class="col-4 text-end m-1">
                <label for="n3" class="form-label mt-1">Número 3:</label>
            </div>
            <div class="col-7 text-start m-1">
                <input type="text" name="n3" class="form-control" required>
            </div>
            <div class="col-6 text-end">
                <button type="submit" class="btn btn-primary m-1">Enviar</button>
            </div>
            <div class="col-6 text-start">
                <button type="reset" class="btn btn-warning m-1">Limpar</button>
            </div>
        </form>
    </div>
</body>

</html>