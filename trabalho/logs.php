<?php
// Verifica se a palavra-chave foi enviada
if (isset($_POST['palavra_chave']) && $_POST['palavra_chave'] === "senha_da_nasa") {
    // Se a palavra-chave está correta, exibe as estatísticas de acesso

    // Inclui o header
    include ('header.php');

    // Inclui as funções
    include ('functions.php');

    // Obtém as estatísticas de acesso de cada página
    $estatisticas_inicio = obterEstatisticasAcesso('index');
    $estatisticas_sobre = obterEstatisticasAcesso('sobre');
    $estatisticas_contato = obterEstatisticasAcesso('contato');

    // Calcula o total de acessos
    $total_acessos = $estatisticas_inicio['acessos'] + $estatisticas_sobre['acessos'] + $estatisticas_contato['acessos'];

    // Verifica se o botão de limpar estatísticas foi clicado
    if (isset($_POST['limpar_estatisticas'])) {
        // Limpa as estatísticas
        limparEstatisticas();
        // Recarrega a página para mostrar as estatísticas atualizadas
        header("Location: {$_SERVER['REQUEST_URI']}");
        exit();
    }
    ?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Estatísticas de Acesso</title>
        <!-- Estilos Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="inicio">
            <div class="bg-light p-4 mb-4 rounded">
                <div class="container mt-5">
                    <h2>Estatísticas de Acesso</h2>
                    <h3>Quantidade de acessos por página:</h3>
                    <ul>
                        <li>Início:
                            <?php echo $estatisticas_inicio['acessos']; ?> acessos
                        </li>
                        <li>Sobre:
                            <?php echo $estatisticas_sobre['acessos']; ?> acessos
                        </li>
                        <li>Contato:
                            <?php echo $estatisticas_contato['acessos']; ?> acessos
                        </li>
                    </ul>
                    <h3>Total de acessos:
                        <?php echo $total_acessos; ?>
                    </h3>
                    <h3>Registros de acesso:</h3>
                    <form method="post" action="limpar_estatisticas.php">
                        <button type="submit" class="btn btn-danger" name="limpar_estatisticas">Limpar Estatísticas</button>
                    </form>

                    <?php
                    // Exibe os registros de acesso de cada página
                    echo "<h4>Início:</h4>";
                    foreach ($estatisticas_inicio['registros'] as $registro) {
                        echo "<p>{$registro['dataHora']} - Navegador: {$registro['navegador']}</p>";
                    }

                    echo "<h4>Sobre:</h4>";
                    foreach ($estatisticas_sobre['registros'] as $registro) {
                        echo "<p>{$registro['dataHora']} - Navegador: {$registro['navegador']}</p>";
                    }

                    echo "<h4>Contato:</h4>";
                    foreach ($estatisticas_contato['registros'] as $registro) {
                        echo "<p>{$registro['dataHora']} - Navegador: {$registro['navegador']}</p>";
                    }
                    ?>

                </div>
            </div>
        </div>

    </body>

    </html>

    <?php
    // Inclui o footer
    include ('footer.php');
} else {
    // Se a palavra-chave está incorreta, exibe o formulário de proteção
    include ('header.php');
    ?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Proteção de Acesso</title>
        <!-- Estilos Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>
        <div class="inicio">
            <div class="bg-light p-4 mb-4 rounded">
                <div class="container mt-5">
                    <h2>Proteção de Acesso</h2>
                    <form method="post">
                        <div class="form-group">
                            <label for="palavra_chave">Palavra-chave:</label>
                            <input type="password" class="form-control" id="palavra_chave" name="palavra_chave">
                        </div>
                        <button type="submit" class="btn btn-primary">Acessar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>

    </html>

    <?php
    // Inclui o footer
    include ('footer.php');
}
?>