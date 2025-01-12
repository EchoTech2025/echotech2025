<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desastres Ambientais</title>
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
            max-width: 59%;
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
        <h1>Desastres Ambientais</h1>
        <img src="Imagens do site/titular5.webp" alt="Desastres Ambientais" class="image">
        <div class="box">
            <h2>O que são os desastres ambientais?</h2>
            <p>Desastres ambientais são eventos catastróficos que resultam em danos significativos ao meio ambiente, à vida selvagem e às comunidades humanas. Esses desastres podem ser naturais, como terremotos, tsunamis, furacões e erupções vulcânicas, ou causados por atividades humanas, como derramamentos de óleo, acidentes nucleares e desmatamento. Eles geralmente resultam em destruição de habitats, perda de vidas e impactos econômicos e sociais significativos.</p>
        </div>
        <div class="box">
            <h2>Impactos dos desastres ambientais no meio ambiente</h2>
            <p>Os desastres ambientais têm impactos devastadores no meio ambiente. Eles podem destruir ecossistemas inteiros, levando à perda de biodiversidade e à extinção de espécies. A poluição resultante de derramamentos de óleo, acidentes nucleares e outros desastres causados pelo homem pode contaminar o solo, a água e o ar, afetando a saúde dos ecossistemas e das espécies que dependem deles. Além disso, desastres naturais como incêndios florestais e inundações podem alterar drasticamente a paisagem e os ciclos naturais, dificultando a recuperação dos ecossistemas afetados.</p>
        </div>
        <div class="box">
            <h2>Impactos dos desastres ambientais na sociedade</h2>
            <p>Os impactos dos desastres ambientais na sociedade são profundos e variados. Eles podem causar a perda de vidas humanas, destruição de propriedades e infraestrutura, e deslocamento de comunidades inteiras. Além disso, os desastres ambientais podem ter efeitos econômicos significativos, como a interrupção de atividades econômicas, aumento dos custos de seguros e necessidade de grandes investimentos em recuperação e reconstrução. A saúde pública também pode ser afetada, com o aumento de doenças relacionadas à poluição e ao estresse pós-traumático.</p>
        </div>
        <div class="box">
            <h2>Pequenas atitudes que podem ser tomadas para mudar esse cenário</h2>
            <p>Cada indivíduo pode contribuir para reduzir os impactos dos desastres ambientais através de pequenas atitudes no dia a dia. Algumas dessas atitudes incluem: Informar-se e informar os outros sobre os riscos e impactos dos desastres ambientais e a importância da preparação e mitigação. Reduzir o consumo de recursos naturais, reciclar e reutilizar materiais, e optar por produtos sustentáveis. Participar de campanhas e apoiar políticas que visem a proteção do meio ambiente e a redução dos riscos de desastres. Desenvolver planos de emergência, manter kits de emergência em casa e participar de treinamentos e exercícios de preparação para desastres.</p>
        </div>
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/oQHTWzVCADM?si=-U6rFjzrIb1iKeJa" frameborder="0" allowfullscreen></iframe>
            <div class="video-caption">Vamos falar sobre Desastres Ambientais! | Quer Que Desenhe</div>
        </div>
    </div>
</body>
</html>