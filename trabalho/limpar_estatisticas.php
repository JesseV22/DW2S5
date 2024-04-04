<?php
// Verifica se o botão de limpar estatísticas foi clicado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['limpar_estatisticas'])) {
    // Inclui as funções
    include('functions.php');

    // Limpa as estatísticas
    limparEstatisticas();

    // Redireciona de volta para a página de estatísticas após a limpeza
    header("Location: logs.php");
    exit();
} else {
    // Se alguém tentar acessar esta página diretamente sem submeter o formulário, redireciona para a página de estatísticas
    header("Location: logs.php");
    exit();
}
?>
