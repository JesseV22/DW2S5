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
                <label for="titulo" class="form-label mt-1">Título da página</label>
            </div>
            <div class="col-7 text-start m-1">
                <input type="text" name="titulo" class="form-control" required>
            </div>
            <div class="col-4 text-end m-1">
                <label for="corpo" class="form-label mt-1">Corpo da página</label>
            </div>
            <div class="col-7 text-start m-1">
                <textarea name="corpo" id="corpo" rows="3" class="form-control" required></textarea>
            </div>
            <div class="col-4 text-end m-1">
                <label for="cortexto" class="form-label mt-1">Cor do texto da página</label>
            </div>
            <div class="col-7 text-start m-1">
                <input type="color" name="cortexto" class="form-control form-control-color w-100" required>
            </div>
            <div class="col-4 text-end m-1">
                <label for="imagempagina" class="form-label mt-1">Imagem da página</label>
            </div>
            <div class="col-7 text-start m-1">
                <input type="url" name="imagempagina" class="form-control" required>
            </div>
            <div class="col-4 text-end m-1">
                <label for="urlpagina" class="form-label mt-1">URL da página</label>
            </div>
            <div class="col-7 text-start m-1">
                <input type="url" name="urlpagina" class="form-control" required>
            </div>
            <div class="col-4 text-end m-1">
                <label for="corpagina" class="form-label mt-1">Cor da página</label>
            </div>
            <div class="col-7 text-start m-1">
                <input type="color" name="corpagina" class="form-control form-control-color w-100" required>
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