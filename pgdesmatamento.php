<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desmatamento</title>
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
        <h1>Desmatamento</h1>
        <img src="Imagens do site/titular3.webp" alt="Desmatamento" class="image">
        <div class="box">
            <h2>O que é o desmatamento?</h2>
            <p>O desmatamento é o processo de remoção ou destruição de florestas e vegetação nativa, geralmente para dar lugar a atividades humanas como agricultura, pecuária, mineração e urbanização. Esse processo resulta na perda de cobertura florestal, que desempenha um papel crucial na manutenção do equilíbrio ecológico, na regulação do clima e na preservação da biodiversidade.</p>
        </div>
        <div class="box">
            <h2>Impactos do desmatamento no meio ambiente</h2>
            <p>O desmatamento tem impactos devastadores no meio ambiente. A perda de florestas contribui significativamente para as mudanças climáticas, pois as árvores absorvem dióxido de carbono (CO₂) da atmosfera. Sem elas, há um aumento na concentração de gases de efeito estufa, agravando o aquecimento global. Além disso, o desmatamento leva à perda de habitats naturais, colocando inúmeras espécies em risco de extinção. A degradação do solo e a redução da qualidade da água também são consequências diretas, afetando a saúde dos ecossistemas.</p>
        </div>
        <div class="box">
            <h2>Impactos do desmatamento na sociedade</h2>
            <p>Os impactos do desmatamento na sociedade são profundos e multifacetados. A destruição das florestas pode levar à perda de recursos naturais essenciais, como madeira, plantas medicinais e alimentos. As comunidades indígenas e locais que dependem diretamente das florestas para sua subsistência são as mais afetadas. Além disso, o desmatamento pode contribuir para a ocorrência de desastres naturais, como enchentes e deslizamentos de terra, que colocam em risco a vida e a propriedade das pessoas. A perda de biodiversidade também pode afetar a pesquisa científica e o desenvolvimento de novos medicamentos.</p>
        </div>
        <div class="box">
            <h2>Pequenas atitudes que podem ser tomadas para mudar esse cenário</h2>
            <p>Cada indivíduo pode contribuir para a redução do desmatamento através de pequenas atitudes no dia a dia. Algumas dessas atitudes incluem: Optar por produtos que sejam certificados como sustentáveis e que não contribuam para o desmatamento. Utilizar papel reciclado, reduzir o desperdício de papel e optar por móveis e produtos de madeira certificados. Informar-se e informar os outros sobre a importância das florestas e os impactos do desmatamento. Apoiar ou participar de projetos que visem a recuperação de áreas desmatadas através do plantio de árvores.</p>
        </div>
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/yktUyC7Yqog?si=7BXcVnB8L823Pr7T" frameborder="0" allowfullscreen></iframe>
            <div class="video-caption">DESMATAMENTO - Brasil Escola</div>
        </div>
    </div>
</body>
</html>
