<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impacto da Indústria de TI</title>
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
            max-width: 62%;
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
        <h1>Impacto da Indústria de TI</h1>
        <img src="Imagens do site/titular6.png" alt="Impacto da Indústria de TI" class="image">
        <div class="box">
            <h2>O que é o impacto da indústria de TI?</h2>
            <p>A indústria de Tecnologia da Informação (TI) abrange a produção, desenvolvimento e uso de tecnologias como computadores, software, redes e dispositivos eletrônicos. O impacto da indústria de TI refere-se às consequências ambientais, sociais e econômicas resultantes dessas atividades. Embora a TI tenha revolucionado a forma como vivemos e trabalhamos, proporcionando avanços significativos em eficiência e conectividade, ela também apresenta desafios e impactos que precisam ser gerenciados.</p>
        </div>
        <div class="box">
            <h2>Impactos da indústria de TI no meio ambiente</h2>
            <p>A indústria de TI tem impactos ambientais significativos. A produção de dispositivos eletrônicos requer a extração de minerais e metais raros, o que pode levar à degradação ambiental e à poluição. Além disso, a fabricação e o descarte inadequado de equipamentos eletrônicos geram resíduos eletrônicos (e-waste), que contêm substâncias tóxicas e podem contaminar o solo e a água. O consumo de energia pelos data centers e dispositivos eletrônicos também contribui para a emissão de gases de efeito estufa, agravando as mudanças climáticas.</p>
        </div>
        <div class="box">
            <h2>Impactos da indústria de TI na sociedade</h2>
            <p>Os impactos da indústria de TI na sociedade são amplos e variados. Por um lado, a TI tem impulsionado a inovação, melhorado a eficiência e criado novas oportunidades de emprego e crescimento econômico. Ela também tem facilitado o acesso à informação, educação e serviços de saúde. Por outro lado, a rápida evolução tecnológica pode levar à obsolescência programada, onde dispositivos se tornam rapidamente desatualizados, gerando mais resíduos eletrônicos. Além disso, a dependência crescente da tecnologia pode aumentar a desigualdade digital, onde comunidades sem acesso à TI ficam em desvantagem.</p>
        </div>
        <div class="box">
            <h2>Pequenas atitudes que podem ser tomadas para mudar esse cenário</h2>
            <p>Cada indivíduo pode contribuir para reduzir os impactos negativos da indústria de TI através de pequenas atitudes no dia a dia. Algumas dessas atitudes incluem: Manter e reparar dispositivos eletrônicos em vez de substituí-los frequentemente. Levar equipamentos eletrônicos antigos a pontos de coleta específicos para reciclagem. Escolher dispositivos de empresas que adotam práticas sustentáveis e utilizam materiais recicláveis. Desligar dispositivos eletrônicos quando não estão em uso e optar por equipamentos energeticamente eficientes.</p>
        </div>
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/VYLLhCnPnVc?si=DN9_qa0pkWKKvzr4" frameborder="0" allowfullscreen></iframe>
            <div class="video-caption">IMPACTO do Lixo Eletrônico no Meio Ambiente | Como descartar o lixo eletrônico de forma correta</div>
        </div>
    </div>
</body>
</html>