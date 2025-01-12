<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo de Energia</title>
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
        <h1>Consumo de Energia</h1>
        <img src="Imagens do site/titular2.jpg" alt="Consumo de Energia" class="image">
        <div class="box">
            <h2>O que é o consumo de energia?</h2>
            <p>O consumo de energia refere-se à quantidade de energia utilizada por indivíduos, empresas e indústrias para realizar diversas atividades, como aquecimento, iluminação, transporte e produção de bens. A energia pode ser obtida de várias fontes, incluindo combustíveis fósseis (como petróleo, carvão e gás natural), energia nuclear e fontes renováveis (como solar, eólica e hidrelétrica). O consumo de energia é um indicador importante do desenvolvimento econômico e do bem-estar social, mas também está diretamente relacionado aos impactos ambientais.</p>
        </div>
        <div class="box">
            <h2>Impactos do consumo de energia no meio ambiente</h2>
            <p>O consumo de energia, especialmente a partir de combustíveis fósseis, tem impactos significativos no meio ambiente. A queima de combustíveis fósseis libera grandes quantidades de dióxido de carbono (CO₂) e outros gases de efeito estufa na atmosfera, contribuindo para o aquecimento global e as mudanças climáticas. Além disso, a extração e o transporte de combustíveis fósseis podem causar poluição do solo e da água, destruição de habitats naturais e derramamentos de óleo. A produção de energia nuclear gera resíduos radioativos que precisam ser cuidadosamente gerenciados para evitar contaminação ambiental.</p>
        </div>
        <div class="box">
            <h2>Impactos do consumo de energia na sociedade</h2>
            <p>O consumo de energia tem efeitos profundos na sociedade. Por um lado, o acesso a fontes de energia confiáveis e acessíveis é essencial para o desenvolvimento econômico, a melhoria da qualidade de vida e a redução da pobreza. Por outro lado, a dependência de combustíveis fósseis pode levar a problemas de saúde pública, como doenças respiratórias causadas pela poluição do ar. Além disso, a volatilidade dos preços dos combustíveis fósseis pode causar instabilidade econômica e afetar negativamente as economias dependentes dessas fontes de energia. A transição para fontes de energia renováveis pode criar novas oportunidades de emprego e promover um desenvolvimento mais sustentável.</p>
        </div>
        <div class="box">
            <h2>Pequenas atitudes que podem ser tomadas para mudar esse cenário</h2>
            <p>Cada indivíduo pode contribuir para reduzir os impactos negativos do consumo de energia através de pequenas atitudes no dia a dia. Algumas dessas atitudes incluem: Desligar aparelhos eletrônicos quando não estão em uso, utilizar lâmpadas de LED e melhorar a eficiência energética dos eletrodomésticos. Instalar painéis solares ou escolher fornecedores de energia que utilizem fontes renováveis. Utilizar transporte público, bicicletas ou veículos elétricos em vez de carros movidos a combustíveis fósseis. Informar-se e informar os outros sobre a importância da eficiência energética e das fontes de energia renováveis.</p>
        </div>
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/VoGWjzo2my4?si=rpVtC6NZGXq8h5ga" frameborder="0" allowfullscreen></iframe>
            <div class="video-caption">Dica de Sustentabilidade - O impacto ambiental do consumo de energia elétrica</div>
        </div>
    </div>
</body>
</html>
