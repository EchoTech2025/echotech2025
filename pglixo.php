<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descarte Inadequado de Resíduos</title>
    <style>
         body, html {
            overflow-x: hidden; /* Impede o deslizamento horizontal */
        }
        body {
            font-family: 'Open Sans', sans-serif; /* Definindo a fonte */
            margin: 0; /* Remove a margem padrão do body */
            padding: 0; /* Remove o preenchimento padrão do body */
        }
        /* Media Query para telas pequenas (como smartphones) */
        @media (max-width: 768px) {
            /* Ajustes no menu de navegação */
            nav {
                flex-direction: column; /* Alinha os itens do menu verticalmente */
                text-align: center; /* Centraliza os itens */
            }

            nav ul {
                display: block; /* Muda de flex para block */
                margin-top: 20px;
            }

            nav li {
                margin: 10px 0; /* Diminui o espaço entre os itens do menu */
                font-size: 16px; /* Ajusta o tamanho da fonte para dispositivos menores */
            }

            /* Ajuste nos botões */
            .imagem-interativa {
                width: 200px; /* Diminui o tamanho dos botões em telas pequenas */
            }

            /* Ajustes nas imagens de fundo */
            div[style*="position: relative; text-align: center;"] {
                height: 400px; /* Diminui a altura da área de fundo para dispositivos menores */
            }

            /* Ajuste nas imagens principais (fundo e logotexto) */
            img[src="Imagens do site/logotexto.jpeg"] {
                width: 140px; /* Reduz o tamanho do logo em telas pequenas */
            }
            
            /* Ajustes nos textos */
            ul li {
                font-size: 22px; /* Diminui o tamanho da fonte do texto */
            }

            /* Ajuste da posição de alguns textos */
            .imagem-interativa {
                width: 200px;
                position: relative;
                top: 170%;
            }
        }
        body {
            background-color: white;
            font-family: Arial, sans-serif;
        }
        h1 {
            color: black;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        .image {
            display: block;
            margin: 20px auto;
            max-width: 63%;
            height: auto;
            border-radius: 15px;
        }
        .box {
            background-color: #e0f7fa;
            border: 2px solid Lime;
            border-radius: 15px;
            padding: 20px;
            margin: 10px 0;
        }
        .box h2 {
            margin-top: 0;
        }
        .video-container {
            text-align: center;
            margin: 20px 0;
        }
        .video-container iframe {
            width: 100%;
            max-width: 560px;
            height: 315px;
        }
        .video-caption {
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Descarte Inadequado de Resíduos</h1>
        <img src="Imagens do site/titular4.jpg" alt="Descarte Inadequado de Resíduos" class="image">
        <div class="box">
            <h2>O que é o descarte inadequado de resíduos?</h2>
            <p>O descarte inadequado de resíduos refere-se à eliminação incorreta de lixo e materiais descartáveis, seja em locais inadequados, como ruas, rios e terrenos baldios, ou sem o devido tratamento. Isso inclui resíduos domésticos, industriais, hospitalares e eletrônicos que não são descartados de acordo com as normas ambientais e de saúde pública. O descarte inadequado pode resultar em poluição e contaminação do solo, da água e do ar, além de representar riscos à saúde humana e à vida selvagem.</p>
        </div>
        <div class="box">
            <h2>Impactos do descarte inadequado de resíduos no meio ambiente</h2>
            <p>O descarte inadequado de resíduos tem impactos significativos no meio ambiente. A poluição do solo ocorre quando resíduos tóxicos e não biodegradáveis são descartados de forma incorreta, contaminando a terra e afetando a vegetação. A poluição da água é outro problema grave, pois resíduos jogados em rios, lagos e oceanos podem prejudicar a vida aquática e contaminar fontes de água potável. Além disso, a queima de resíduos a céu aberto libera poluentes nocivos na atmosfera, contribuindo para a poluição do ar e agravando problemas respiratórios em humanos e animais.</p>
        </div>
        <div class="box">
            <h2>Impactos do descarte inadequado de resíduos na sociedade</h2>
            <p>Os impactos do descarte inadequado de resíduos na sociedade são diversos e preocupantes. A saúde pública é diretamente afetada, pois a exposição a resíduos tóxicos pode causar doenças graves, como câncer, problemas respiratórios e infecções. A poluição ambiental resultante do descarte inadequado também pode prejudicar a qualidade de vida das comunidades, especialmente aquelas que vivem próximas a áreas de descarte irregular. Além disso, o turismo e a economia local podem ser negativamente impactados pela degradação ambiental e pela imagem negativa associada a áreas poluídas.</p>
        </div>
        <div class="box">
            <h2>Pequenas atitudes que podem ser tomadas para mudar esse cenário</h2>
            <p>Cada indivíduo pode contribuir para reduzir os impactos negativos do descarte inadequado de resíduos através de pequenas atitudes no dia a dia. Algumas dessas atitudes incluem: Separar o lixo reciclável do orgânico e encaminhá-lo para a reciclagem adequada. Optar por produtos reutilizáveis e evitar o uso de plásticos de uso único. Levar resíduos eletrônicos, baterias e produtos químicos a pontos de coleta específicos. Informar-se e informar os outros sobre a importância do descarte adequado de resíduos e os impactos ambientais e sociais do descarte inadequado.</p>
        </div>
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/G3yGtE0CHSY?si=j_Vpzev2Z89uG2b9" frameborder="0" allowfullscreen></iframe>
            <div class="video-caption">O descarte incorreto do lixo residencial e suas consequências.</div>
        </div>
    </div>
</body>
</html>
