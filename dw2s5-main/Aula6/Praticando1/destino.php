<?php
include("header.php");


$nom = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
$ema = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$men = filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_STRING);
date_default_timezone_set('UTC');
if (isset($nom) && isset($ema) && isset($men)) {
    $data = date("d/m/Y - H:i:s");
    $dataar = date("d_m_Y_His");
    //echo $dataar;
    $filename = "./contatos/Contato_" . $dataar . ".txt";
?>

    <div class="container">
        <p><b>Nome:</b> <?= $nom ?></p>
        <p><b>Email:</b> <?= $ema ?></p>
        <p><b>Mensagem:</b> <?= $men ?></p>
        <p><b>Data:</b> <?= $data ?></p>
    </div>



<?php

        if (!$fp = fopen($filename, 'w')) {
            echo "Erro ao abrir o ($filename)";
            exit;
        }
        if (fwrite($fp, "Contato via Site: ") === FALSE) {
            echo "Erro ao escrever no arquivo ($filename)";
            exit;
        }else{
$msg = "\nData: ".$data."\n\nNome: ".$nom."\nEmail: ".$ema."\nMensagem: ".$men."\n\n\n----------------";
            fwrite($fp, $msg);
        }
        fclose($fp);
} else {
    echo "</br></br><h1 style='color:red;'>ERRO LOUCO, FAZ MAIS ISSO NÃO</h1></br></br>";
}
echo "<a class='primary-button'href='index.php'>Voltar</a>";

include("footer.php");
?>