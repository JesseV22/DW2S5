<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <?php
                        // Usuário e senha corretos
                        $usuario_correto = "usuario";
                        $senha_correta = "senha";

                        // Verifica se o formulário foi enviado
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Obtém os valores enviados pelo formulário
                            $usuario = $_POST["username"];
                            $senha = $_POST["password"];

                            // Verifica se o usuário e a senha estão corretos
                            if ($usuario === $usuario_correto && $senha === $senha_correta) {
                                // Autenticação bem-sucedida
                                echo "<div class='alert alert-success' role='alert'>";
                                echo "Login bem-sucedido!";
                                echo "</div>";
                            } else {
                                // Autenticação falhou
                                echo "<div class='alert alert-danger' role='alert'>";
                                echo "Usuário ou senha incorretos.";
                                echo "</div>";
                            }
                        }
                        ?>
                        <div class="text-center">
                            <a href="login.html" class="btn btn-primary">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
