<?php
// functions.php

// Função para obter estatísticas de acesso
function obterEstatisticasAcesso($pagina) {
    // Define o nome do arquivo de log
    $logFile = "logs/{$pagina}_log.txt";

    // Inicializa as estatísticas
    $estatisticas = array(
        'pagina' => $pagina,
        'acessos' => 0,
        'registros' => array()
    );

    // Verifica se o arquivo de log existe
    if (file_exists($logFile)) {
        // Lê o conteúdo do arquivo de log
        $lines = file($logFile, FILE_IGNORE_NEW_LINES);

        // Conta o número de acessos
        $estatisticas['acessos'] = count($lines);

        // Obtém os registros de acesso
        foreach ($lines as $line) {
            // Separa a data/hora e o navegador
            list($dataHora, $navegador) = explode(" - Navegador: ", $line);

            // Adiciona o registro à lista de registros
            $estatisticas['registros'][] = array(
                'dataHora' => $dataHora,
                'navegador' => $navegador
            );
        }
    }

    return $estatisticas;
}

// Função para limpar as estatísticas de acesso
function limparEstatisticas() {
    // Caminho para os arquivos de log
    $logFileInicio = "logs/index_log.txt";
    $logFileSobre = "logs/sobre_log.txt";
    $logFileContato = "logs/contato_log.txt";

    // Verifica se os arquivos de log existem e os limpa
    if (file_exists($logFileInicio)) {
        file_put_contents($logFileInicio, "");
    }

    if (file_exists($logFileSobre)) {
        file_put_contents($logFileSobre, "");
    }

    if (file_exists($logFileContato)) {
        file_put_contents($logFileContato, "");
    }
}
?>
