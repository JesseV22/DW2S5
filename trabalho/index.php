<?php
// Aqui você incluirá o header.php
include ('header.php');
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

<style>
    h1 {
        color: #00aaaa;
        font-family: "Cormorant Garamond", serif;
        font-weight: 700;
        font-style: normal;
    }

    span {
        font-family: "Cormorant Garamond", serif;
        font-weight: 700;
        font-style: normal;
    }
    .custom-style {
    padding: 1rem; /* Mesmo que p-4 */
    margin-bottom: 1rem; /* Mesmo que mb-4 */
    border-radius: 0.25rem; /* Mesmo que rounded */
    /* Você pode adicionar outros estilos aqui */
}


    .tradingview-widget-container {
        position: relative;
        width: 100%;
        max-width: 800px;
        /* Defina a largura máxima conforme necessário */
        margin: 0 auto;
        /* Centraliza o widget */
    }

    .tradingview-widget-container__widget {
        width: 100%;
    }

    /* Estilo adicional para tornar a responsividade do widget agradável */
    .tradingview-widget-container iframe {
        max-width: 100%;
        height: auto;
    }

    /* Adicionar regras de mídia queries para dispositivos móveis */
    @media only screen and (max-width: 768px) {
        .tradingview-widget-container {
            max-width: 100%;
            /* Altera a largura máxima para 100% em telas menores que 768px */
        }
    }
</style>

<main>

   
        <div class="custom-style">
            <h1 class="text-center">Jessé Vitorino Oliveira Capital </h1>
        </div>
    

    <img class="img-lorem img-thumbnail m-4 rounded float-end" src="logo.png" alt="Investiments">

    <br><br><br><br><br> <br><br> <br><br><br><br><br>

    <span>Nós somos investidores impulsionados por pesquisas constantes, focados em oportunidades especiais, guiados
        por
        times com incentivos alinhados e perspectivas sólidas de crescimento a longo prazo </span>
    <br><br><br><br><br>


    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <div class="tradingview-widget-copyright"><a href="https://br.tradingview.com/" rel="noopener nofollow"
                target="_blank"><span class="blue-text">Monitore todos os mercados no TradingView</span></a></div>
        <script type="text/javascript"
            src="https://s3.tradingview.com/external-embedding/embed-widget-symbol-overview.js" async>
                {
                    "symbols": [
                        [
                            "BMFBOVESPA:IBOV|1D"
                        ],
                        [
                            "TVC:DXY|1D"
                        ],
                        [
                            "SP:SPX|1D"
                        ],
                        [
                            "CRYPTO:BTCUSD|1D"
                        ],
                        [
                            "BITSTAMP:ETHUSD|1D"
                        ],
                        [
                            "NASDAQ:META|1D"
                        ],
                        [
                            "NASDAQ:NVDA|1D"
                        ],
                        [
                            "NASDAQ:AMZN|1D"
                        ],
                        [
                            "ECONOMICS:BRM2|1D"
                        ],
                        [
                            "COMEX:GC1!|1D"
                        ]
                    ],
                        "chartOnly": false,
                            "width": 550,
                                "height": 400,
                                    "locale": "br",
                                        "colorTheme": "light",
                                            "autosize": false,
                                                "showVolume": false,
                                                    "showMA": false,
                                                        "hideDateRanges": false,
                                                            "hideMarketStatus": false,
                                                                "hideSymbolLogo": false,
                                                                    "scalePosition": "right",
                                                                        "scaleMode": "Normal",
                                                                            "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
                                                                                "fontSize": "10",
                                                                                    "noTimeScale": false,
                                                                                        "valuesTracking": "1",
                                                                                            "changeMode": "price-and-percent",
                                                                                                "chartType": "area",
                                                                                                    "maLineColor": "#2962FF",
                                                                                                        "maLineWidth": 1,
                                                                                                            "maLength": 9,
                                                                                                                "lineWidth": 2,
                                                                                                                    "lineType": 0,
                                                                                                                        "dateRanges": [
                                                                                                                            "1d|1",
                                                                                                                            "1m|30",
                                                                                                                            "3m|60",
                                                                                                                            "12m|1D",
                                                                                                                            "60m|1W",
                                                                                                                            "all|1M"
                                                                                                                        ]
                }
            </script>
    </div>
    <!-- TradingView Widget END -->
    <br><br><br><br><br> <br><br><br><br><br>

    </div>

</main>

<?php
// Aqui você incluirá o footer.php
include ('footer.php');
?>