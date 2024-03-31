<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <title>Destino GET</title>
</head>

<body>
    <?php
    $lan = filter_input(INPUT_GET, "lan", FILTER_SANITIZE_STRING);
    $n1 = filter_input(INPUT_GET, "n1", FILTER_SANITIZE_STRING);
    $n2 = filter_input(INPUT_GET, "n2", FILTER_SANITIZE_STRING);
    $n3 = filter_input(INPUT_GET, "n3", FILTER_SANITIZE_STRING);
    $n4 = filter_input(INPUT_GET, "n4", FILTER_SANITIZE_STRING);
    $n5 = filter_input(INPUT_GET, "n5", FILTER_SANITIZE_STRING);
    $n12 = filter_input(INPUT_GET, "n12", FILTER_SANITIZE_STRING);
    $n11 = filter_input(INPUT_GET, "n11", FILTER_SANITIZE_STRING);
    $n10 = filter_input(INPUT_GET, "n10", FILTER_SANITIZE_STRING);
    $n9 = filter_input(INPUT_GET, "n9", FILTER_SANITIZE_STRING);
    $n8 = filter_input(INPUT_GET, "n8", FILTER_SANITIZE_STRING);
    $n7 = filter_input(INPUT_GET, "n7", FILTER_SANITIZE_STRING);
    $n6 = filter_input(INPUT_GET, "n6", FILTER_SANITIZE_STRING);
    $acumulator = "";
    $acu = "";
    if ($lan) {
        $acu = "<p>Você clicou no <b>" . $lan . ".</b></p>";
        if ($lan == "Bitcoin") {
            $acu .= "<p> Inventado em 2008 por um indivíduo ou grupo desconhecido usando o pseudônimo Satoshi Nakamoto, o Bitcoin se tornou praticamente sinônimo de criptomoeda. Construído em código-fonte aberto, o Bitcoin é uma plataforma de domínio público e também um ativo digital dentro de sua própria classe. </p>";
        } else {
            if ($lan == "Ethereum ") {
                $acu .= "<p>O Com software totalmente de código aberto, o Ethereum foi concebido pela primeira vez em 2013 por Vitalik Buterin, e tem como criptomoeda nativa o Ether. A plataforma criptográfica permite aos usuários implantar nela aplicativos descentralizados permanentes, com os quais outros usuários podem interagir.</p>";
            } else {
                if ($lan == "Tether (USDT)") {
                    $acu .= '<p>Lançada em 2014, Tether é uma stablecoin lastreada em ativos com valor de mercado de US$ 83,8 bilhões. Com sede em Hong Kong, a Tether é propriedade da empresa de tecnologia iFinex e sua criptomoeda é feita em dez protocolos e blockchains. Hoje, é a maior stablecoin em termos de volume de negociação e capitalização de mercado, com 64% da participação de mercado</p>';
                } else {
                    if ($lan == "Binance Coin (BNB)") {
                        $acu .= "<p>BNB é a criptomoeda proprietária da plataforma de negociação Binance e um dos ativos criptográficos mais negociados no mundo atualmente. Na época de sua fundação, a Binance lançou duas de suas próprias criptomoedas, Binance Coin (BNB) e BinanceUSD (BUSD). Começando inicialmente como um token Ethereum, a BNB posteriormente mudou para o blockchain proprietário da Binance</p>";
                    }
                }
            }
        }
        if ($n1) {
            $acu .= "</br><h2>Últimos clicados:</h2>";
            $acumulator .= "n1=" . $n1;
            if ($n2) {
                $acumulator .= "&n2=" . $n2;
                if ($n3) {
                    $acumulator .= "&n3=" . $n3;
                    if ($n4) {
                        $acumulator .= "&n4=" . $n4;
                        if ($n5) {
                            $acumulator .= "&n5=" . $n5;
                            if ($n6) {
                                $acumulator .= "&n6=" . $n6;
                                if ($n7) {
                                    $acumulator .= "&n7=" . $n7;
                                    if ($n8) {
                                        $acumulator .= "&n8=" . $n8;
                                        if ($n9) {
                                            $acumulator .= "&n9=" . $n9;
                                            if ($n10) {
                                                $acumulator .= "&n10=" . $n10;
                                                if ($n11) {
                                                    $acumulator .= "&n11=" . $n11;
                                                    if ($n12) {
                                                        $acumulator .= "&n12=" . $n12;
                                                        $acu .= "<p>" . $n12 . "</p>";
                                                    } else {
                                                        $acumulator .= "&n12=CHEGA!";
                                                    }
                                                    $acu .= "<p>" . $n11 . "</p>";
                                                } else {
                                                    $acumulator .= "&n11=" . $lan;
                                                }
                                                $acu .= "<p>" . $n10 . "</p>";
                                            } else {
                                                $acumulator .= "&n10=" . $lan;
                                            }
                                            $acu .= "<p>" . $n9 . "</p>";
                                        } else {
                                            $acumulator .= "&n9=" . $lan;
                                        }
                                        $acu .= "<p>" . $n8 . "</p>";
                                    } else {
                                        $acumulator .= "&n8=" . $lan;
                                    }
                                    $acu .= "<p>" . $n7 . "</p>";
                                } else {
                                    $acumulator .= "&n7=" . $lan;
                                }
                                $acu .= "<p>" . $n6 . "</p>";
                            } else {
                                $acumulator .= "&n6=" . $lan;
                            }
                            $acu .= "<p>" . $n5 . "</p>";
                        } else {
                            $acumulator .= "&n5=" . $lan;
                        }
                        $acu .= "<p>" . $n4 . "</p>";
                    } else {
                        $acumulator .= "&n4=" . $lan;
                    }
                    $acu .= "<p>" . $n3 . "</p>";
                } else {
                    $acumulator .= "&n3=" . $lan;
                }
                $acu .= "<p>" . $n2 . "</p>";
            } else {
                $acumulator .= "&n2=" . $lan;
            }
            $acu .= "<p>" . $n1 . "</p>";
            $acu .= "<a href='cripto.php'>Limpar</a>";
        } else {
            $acumulator = "n1=" . $lan;
        }
    }
    ?>
    <div class="container">
        <h1>Praticando 3 - Cripto</h1><br>
        <hr>
        <a href="index.php">Voltar</a>
        <br>
        <br>
        <div id="images" class="d-flex justify-content-evenly">
            <a <?= "href='cripto.php?lan=Bitcoin&" . $acumulator . "'" ?> id="bit">
                <figure><img src="https://static.vecteezy.com/system/resources/previews/019/767/927/non_2x/bitcoin-logo-bitcoin-icon-transparent-free-png.png" alt="Bitcoin"></figure>
            </a>
            <a <?= "href='cripto.php?lan=Ethereum&" . $acumulator . "'" ?> id="eth">
                <figure><img src="https://cryptologos.cc/logos/ethereum-eth-logo.png" alt="Ethereum "></figure>
            </a>
            <a <?= "href='cripto.php?lan=Tether&" . $acumulator . "'" ?> id="Tether">
                <figure><img src="https://cdn-icons-png.flaticon.com/512/825/825508.png" alt="Tether"></figure>
            </a>
            <a <?= "href='cripto.php?lan=Binance Coin&" . $acumulator . "'" ?> id="Binance Coin">
                <figure><img src="https://assets-global.website-files.com/5e73a1e3ba24f2cd5dd2232a/65847d5cdc48ee90fbb44d28_620b31921bac94c44de5969d_bnb.png" alt="Escudo Binance Coin"></figure>
            </a>
        </div>
        <br><br>
        <div class="cont">
            <?= $acu ?>
        </div>
    </div>
    <style>
        <?=
        "#" . $lan . " img {
            border: 0.3vw solid blue;
        }"
        ?>img {
            width: 10vw;
        }

        figure {
            width: 12vw;
        }
    </style>
</body>