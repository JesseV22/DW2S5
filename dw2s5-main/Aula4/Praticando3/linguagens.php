<!DOCTYPE html>
<html lang="en">

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
    if ($lan) {
        $acu = "<p>Você cliclou no <b>" . $lan . ".</b></p>";
        if ($lan == "JavaScript") {
            $acu .= "<p>JavaScript é uma linguagem de programação interpretada estruturada, de script em alto nível com tipagem dinâmica fraca e multiparadigma. Juntamente com HTML e CSS, o JavaScript é uma das três principais tecnologias da World Wide Web.</p>";
        } else {
            if ($lan == "Java") {
                $acu .= "<p>Java é uma linguagem de programação orientada a objetos desenvolvida na década de 90 por uma equipe de programadores chefiada por James Gosling, na empresa Sun Microsystems, que em 2008 foi adquirido pela empresa Oracle Corporation.</p>";
            } else {
                if ($lan == "Ruby") {
                    $acu .= '<p>Ruby é uma linguagem de programação interpretada multiparadigma, de tipagem dinâmica e forte, com gerenciamento de memória automático, originalmente planejada e desenvolvida no Japão em 1995, por Yukihiro "Matz" Matsumoto, para ser usada como linguagem de script.</p>';
                } else {
                    if ($lan == "PHP") {
                        $acu .= "<p>PHP é uma linguagem interpretada livre, usada originalmente apenas para o desenvolvimento de aplicações presentes e atuantes no lado do servidor, capazes de gerar conteúdo dinâmico na World Wide Web.</p>";
                    }
                }
            }
        }
        if ($n1) {
            $acu .="</br><h2>Últimos clicados:</h2>";
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
                                                        $acumulator .= "&n12=CHEGAAAA";
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
            $acu .= "<a href='linguagens.php'>Limpar</a>";
        } else {
            $acumulator = "n1=" . $lan;
        }
    }
    ?>
    <div class="container">
        <h1>Praticando 3 - Linguagens</h1><br><br>
        <div id="images" class="d-flex justify-content-evenly">
            <a <?= "href='linguagens.php?lan=JavaScript&" . $acumulator . "'" ?> id="JavaScript"><figure><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/1200px-Unofficial_JavaScript_logo_2.svg.png" alt="JavaScript"></figure></a>
            <a <?= "href='linguagens.php?lan=PHP&" . $acumulator . "'" ?> id="PHP">
        <figure><img src="https://iconape.com/wp-content/files/hc/353261/png/353261.png" alt="PHP"></figure>
        </a>
            <a <?= "href='linguagens.php?lan=Java&" . $acumulator . "'" ?> id="Java">
        <figure><img src="https://cdn.icon-icons.com/icons2/2415/PNG/512/java_original_wordmark_logo_icon_146459.png" alt="Java"></figure>
        </a>
            <a <?= "href='linguagens.php?lan=Ruby&" . $acumulator . "'" ?> id="Ruby">
        <figure><img src="https://cdn.icon-icons.com/icons2/2415/PNG/512/ruby_plain_wordmark_logo_icon_146362.png" alt="Ruby"></figure>
        </a>
        </div>
        <br><br>
        <div class="cont">
            <?= $acu ?>
        </div>
    </div>
    <style>
        <?=
        "#".$lan." img {
            border: 0.3vw solid yellow;
        }"
        ?>
        img{
            width: 10vw;
        }
        figure{
            width: 12vw;
        }
    </style>
</body>