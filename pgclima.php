<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mudanças Climáticas</title>
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
            max-width: 100%;
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
        <h1>Mudanças Climáticas</h1>
        <img src="Imagens do site/titular1.jpg" alt="Mudanças Climáticas" class="image">
        <div class="box">
            <h2>O que é a mudança climática?</h2>
            <p>A mudança climática refere-se a alterações significativas e duradouras nos padrões climáticos globais e regionais. Essas mudanças podem ser naturais, como variações na radiação solar ou erupções vulcânicas, mas, nas últimas décadas, a atividade humana tem sido a principal responsável. A queima de combustíveis fósseis, o desmatamento e a agricultura intensiva aumentam a concentração de gases de efeito estufa na atmosfera, como dióxido de carbono (CO₂) e metano (CH₄), que retêm o calor e aquecem o planeta.</p>
        </div>
        <div class="box">
            <h2>Impactos das mudanças climáticas no meio ambiente</h2>
            <p>As mudanças climáticas têm efeitos profundos no meio ambiente. O aumento das temperaturas globais provoca o derretimento das calotas polares e geleiras, resultando na elevação do nível do mar. Isso ameaça habitats costeiros e ilhas baixas. Além disso, as mudanças nos padrões de precipitação podem levar a secas severas em algumas regiões e inundações em outras. A biodiversidade também é afetada, com muitas espécies enfrentando extinção devido à perda de habitat e mudanças nas condições ambientais.</p>
        </div>
        <div class="box">
            <h2>Impactos das mudanças climáticas na sociedade</h2>
            <p>Os impactos das mudanças climáticas na sociedade são vastos e variados. A saúde humana é diretamente afetada pelo aumento de doenças relacionadas ao calor, como insolação, e pela propagação de doenças transmitidas por vetores, como a dengue. Economicamente, as mudanças climáticas podem causar danos significativos à infraestrutura, aumentar os custos de seguros e afetar a produtividade agrícola, levando à insegurança alimentar. As comunidades mais vulneráveis, especialmente em países em desenvolvimento, são as mais afetadas, exacerbando desigualdades sociais e econômicas.</p>
        </div>
        <div class="box">
            <h2>Pequenas atitudes que podem ser tomadas para mudar esse cenário</h2>
            <p>Cada indivíduo pode contribuir para mitigar as mudanças climáticas através de pequenas atitudes no dia a dia. Reduzir o consumo de energia, optar por fontes renováveis e melhorar a eficiência energética em casa são passos importantes. Práticas sustentáveis, como reciclagem, redução de resíduos e consumo consciente, também fazem a diferença. Além disso, apoiar políticas públicas e iniciativas que visem a proteção ambiental e a redução de emissões de gases de efeito estufa é crucial. A conscientização e a mobilização da comunidade são essenciais para promover mudanças significativas.</p>
        </div>
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/PH5halrNnfI?si=sAnF0D4nnqvHI0yB" frameborder="0" allowfullscreen></iframe>
            <div class="video-caption">Mudança Climática para crianças</div>
        </div>
    </div>
</body>
</html>


