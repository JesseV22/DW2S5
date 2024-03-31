<?php

use Claudsonm\CepPromise\CepPromise;
use Claudsonm\CepPromise\Exceptions\CepPromiseException;

require 'vendor/autoload.php';

$cep = $_POST['cep'] ?? '';

$address = null;
$error_message = '';

if (!empty ($cep)) {
    try {
        $address = CepPromise::fetch($cep);
    } catch (CepPromiseException $e) {
        $error_message = '<h3>CEP: ' . $cep . '</h3>';
        $error_message .= '<p>Detalhes do erro</p>';
        $error_message .= '<li> CEP não encontrado na base do ViaCEP.</li>';
        $error_message .= '<li> CEP não encontrado na base do CEP Aberto.</li>';
        $error_message .= '<li> CEP INVÁLIDO (na base dos correios)</li>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca de Endereço por CEP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 20px;
        }

        .center-heading {
            text-align: center;
        }

        #info {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
        }

        .success {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            padding: 10px;
            border-radius: 5px;
        }

        .error {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
            padding: 10px;
            border-radius: 5px;
        }
    </style>

</head>

<body>
    <div class="container">
        <h2 class="center-heading">Busca de Endereço por CEP</h2>
        <br>
        <br>
        <br>
        <br>
        <form class="row g-3" action="cep.php" method="POST">
            <div class="col-3">
                <div class="row">
                    <div class="col">
                        <label for="cep">CEP:</label>
                    </div>
                    <div class="col">
                        <input class="form-control" type="text" name="cep" id="cep" required autofocus
                            placeholder="Somente números">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
                <div class="col">
                    <button type="reset" class="btn btn-warning">Limpar</button>
                </div>
            </div>

        </form>
        <?php if (!empty ($address)): ?>
            <div class="success mt-3" id="info">
                <h3>CEP:
                    <?= substr($address->zipCode, 0, 2) . '.' . substr($address->zipCode, 2, 3) . '-' . substr($address->zipCode, 5, 3) ?>
                </h3>
                <p>Rua:
                    <?= $address->street ?>
                </p>
                <p>Bairro:
                    <?= $address->district ?>
                </p>
                <p>Cidade:
                    <?= $address->city ?>
                </p>
                <p>Estado:
                    <?= $address->state ?>
                </p>
            </div>
        <?php elseif (!empty ($error_message)): ?>
            <div class="error mt-3" id="info">
                <p>
                    <?= $error_message ?>
                </p>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>