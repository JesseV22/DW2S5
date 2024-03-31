<?php
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
?>
