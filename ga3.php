<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo de Gestão Ambiental</title>
    
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #f0f2f5;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.07);
            overflow: hidden;
        }

        h1 {
            text-align: center;
            color: #1a535c;
            padding: 25px 20px 15px 20px;
            margin: 0;
            border-bottom: 2px solid #f0f2f5;
            font-size: 2em;
        }

        /* Estilo do botão "Acordeão" */
        .accordion {
            background-color: #f7f7f7;
            color: #444;
            cursor: pointer;
            padding: 20px 25px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 1.15em;
            font-weight: 600;
            transition: background-color 0.3s ease;
            border-bottom: 1px solid #e0e0e0;
        }

        .accordion:hover,
        .accordion.active {
            background-color: #e9f5f7;
            color: #1a535c;
        }

        /* Ícone de + e - */
        .accordion:after {
            content: '\002B'; /* Sinal de Mais */
            color: #1a535c;
            font-weight: bold;
            float: right;
            margin-left: 15px;
            font-size: 1.2em;
            line-height: 1;
        }

        .accordion.active:after {
            content: "\2212"; /* Sinal de Menos */
        }

        /* Painel com o conteúdo */
        .panel {
            padding: 0 25px; /* Padding vertical 0, será animado */
            background-color: white;
            max-height: 0; /* Começa fechado */
            overflow: hidden;
            transition: max-height 0.3s ease-out, padding 0.3s ease-out;
            border-bottom: 1px solid #e7e7e7;
        }
        
        /* Classe 'show' controla o padding na abertura/fechamento */
        .panel.show {
             padding: 22px 25px;
        }

        .panel ol {
            padding-left: 25px;
            margin: 0;
        }

        .panel li {
            margin-bottom: 18px;
        }
        
        /* Título de cada item da lista */
        .panel strong {
            color: #0056b3; 
            display: block; /* Faz o título ocupar sua própria linha */
            margin-bottom: 4px;
            font-size: 1.05em;
        }

        .panel ul {
            list-style-type: disc;
            margin-top: 10px;
            margin-left: 20px;
        }

         .panel ul li {
            margin-bottom: 8px;
         }

        footer {
            text-align: center;
            padding: 20px;
            font-size: 0.85em;
            color: #777;
            background-color: #f9f9f9;
            border-top: 1px solid #e0e0e0;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Resumo de Gestão Ambiental</h1>

        <button class="accordion">Aula 1 – Os antecedentes históricos da Gestão Ambiental</button>
        <div class="panel">
            <ol>
                <li>
                    <strong>Os antecedentes históricos da preocupação com o Meio Ambiente</strong>
                    Com o advento da Revolução industrial é que a ação antrópica (é aquela cujos efeitos derivam da atividade humana) conseguiu causar impactos
                    crescentes no meio ambiente. A partir de então, esta intervenção humana nos múltiplos ecossistemas do planeta cresceu sem parar.
                    A Revolução Industrial trouxe uma enorme quantidade de danos ao meio ambiente, que foram potencializados pelo uso sistemáticos de
                    combustíveis fósseis. O emprego dessa nova fonte de energia permitiu uma ampliação sem precedentes da escala das atividades humanas.
                    Este fato passou a pressionar cada vez mais a base dos recursos naturais do planeta.
                    Fatores como a explosão demográfica, a produção industrial em larga escala, as demandas de consumo cada vez maiores, a competitividade
                    desenfreada por mercados e a ocupação desregrada dos espaços públicos passaram a atuar de forma combinada no sentido de incorporar ao
                    planeta Terra novas formas de poluição do meio ambiente.
                    O fenômeno do aquecimento global, os recorrentes desastres ecológicos, a extinção de espécies, o crescente despejo de resíduos tóxicos nas
                    águas e na atmosfera, além da ameaça de escassez generalizada de elementos naturais indispensáveis à atividade humana passaram a
                    despertar na sociedade o interesse pela temática ambiental.
                </li>
                <li>
                    <strong>A capacidade de carga do Planeta (Carrying Capacity)</strong>
                    Essa capacidade de carga representa a capacidade que o planeta teria, representada pela soma das capacidades isoladas de seus múltiplos
                    ecossistemas, de suportar a ação antrópica sem sofrer degradação irreversível.
                </li>
                <li>
                    <strong>Punção ou Ecological Footprint (pegada ecológica)</strong>
                    É o avanço da ação humana sobre os recursos do planeta. É o resultado do tamanho da população mundial multiplicado pelo consumo per capta
                    dos recursos naturais, ou seja, as variáveis relevantes para uma análise são tanto o tamanho da população quanto o seu perfil de consumo.
                    Um dado nível de punção da humanidade vai demandar em contrapartida, o uso de áreas de terra e de água nos diversos ecossistemas, que
                    deverão fornecer os recursos naturais, renováveis ou não, necessários ao consumo humano.
                    Verifica-se que o progresso técnico é capaz de atenuar os efeitos da punção sobre o meio ambiente, mas jamais eliminá-la. É o caso do
                    desenvolvimento de combustíveis menos poluentes ou de filtros de resíduos industriais.
                    Para complicar o quadro, os pesquisadores se deparam com o problema de difícil mensuração da verdadeira capacidade de carga que o planeta
                    é capaz de suportar. Dessa forma, não existe uma precisão no cálculo dessa variável, é preciso, de antemão, adotar uma postura de precaução
                    em face do uso dos recursos naturais.
                </li>
                <li>
                    <strong>Para o Ecossistema é necessário que se faça</strong>
                    A criação das condições políticas, econômicas, institucionais, sociais, jurídicas e culturais que tenham por propósito, de um lado, o
                    desenvolvimento de inovações tecnológicas poupadoras de recursos naturais e, de outro, o estabelecimento de novos padrões de consumo que
                    não impliquem um crescimento contínuo e ilimitado do uso dos recursos naturais.
                </li>
                <li>
                    <strong>No início da década dos anos 1970, que esta temática passou a repercutir na sociedade.</strong>
                    O marco de evolução do pensamento relativo à questão ambiental, na década dos anos 1970, foi traduzido pela ideia de que o problema não
                    poderia ser gerenciado com base em responsabilidade localizada, mas sim com um enfoque de responsabilidade global (pensar globalmente e
                    agir localmente, ou seja, são pequenas iniciativas que, somadas, produzem o grande efeito).
                    O primeiro evento de caráter relevante para a questão do meio ambiente no mundo foi a conferência com a temática “O homem e a biosfera” da
                    Unesco, em 1971.
                </li>
                <li>
                    <strong>Bem público global e bem público local</strong>
                    Bem público global seria um oceano, enquanto um bem público local seria um bosque.
                </li>
                <li>
                    <strong>Problema das sociedades contemporâneas</strong>
                    Não é propriamente a incapacidade de obter inovações tecnológicas poupadoras de recursos naturais, mas sim conseguir uma mudança nos
                    padrões de consumo que permita, ao menos, estabilizar os níveis de consumo per capita.
                    Uma mudança de atitude e de comportamento das sociedades é difícil de ser obtida porque isso contraria as condutas do processo de
                    acumulação de capital desde os primórdios do capitalismo, caracterizado pela criação constante de novas necessidades de consumo.
                </li>
                <li>
                    <strong>A Carta de Belgrado (1975)</strong>
                    Propunha que as ações de preservação ambiental deveriam passar por uma etapa preliminar que consistiria num programa de educação
                    ambiental. A educação ambiental passou a assumir um grande desafio, desdobrado em quatro tópicos:
                    <ul>
                        <li>1º) Conscientização;</li>
                        <li>2º) Sensibilização;</li>
                        <li>3º) Responsabilidade Social;</li>
                        <li>4º) Desenvolvimento Sustentável.</li>
                    </ul>
                    Solucionar este desafio é essencial para manter o objetivo de permitir que a humanidade continue a viver.
                    Em outras palavras, a Carta de Belgrado buscava a conscientização das crianças acerca da importância de cuidar do meio ambiente através de
                    um programa de educação ambiental.
                </li>
                <li>
                    <strong>Qual foi o documento produzido em evento no final do século XX, sobre o Meio Ambiente</strong>
                    O maior compromisso com a questão do meio ambiente foi firmado, entre os países participantes, com a Conferência das Nações Unidas para
                    o Meio Ambiente e Desenvolvimento (UNCED), conhecida como ECO-92, realizada no Rio de Janeiro, oportunidade em que as nações, pela 1ª
                    vez, estabeleceram, em caráter definitivo, critérios para se atingir o desenvolvimento sustentável. Um importante documento foi produzido na
                    Conferência ECO-92. Trata-se da Agenda 21, que ainda é um ponto de referência na implantação de programas e política de governos e de
                    empresas no mundo todo, na medida em que promoveu significativa mudança nas relações comerciais, em suas diversas formas. Este
                    documento foi assinado por 170 países e ainda é considerado como sendo o maior esforço conjunto de governos dos países do mundo para
                    identificar ações que permitam combinar o desenvolvimento com a proteção do meio ambiente.
                </li>
                <li>
                    <strong>Conceito de Desenvolvimento Sustentável</strong>
                    Desenvolvimento que satisfaz as necessidades presentes, sem comprometer a capacidade das gerações futuras de suprir suas próprias
                    necessidades.
                </li>
                <li>
                    <strong>A Agenda 21 basicamente definiu:</strong>
                    Que deve existir uma reorientação na educação no sentido do desenvolvimento sustentável, aliada à ampliação da conscientização pública e do
                    incentivo ao treinamento. Ela se divide em quatro seções:
                    <ul>
                        <li>1ª Seção) trata de aspectos sociais, que versam sobre as relações entre meio ambiente e pobreza, saúde, comércio, dívida externa, consumo e população;</li>
                        <li>2ª Seção) trata da conservação e administração de recursos, com foco no gerenciamento de recursos físicos, tais como os mares, a terra, a energia e o lixo, de tal forma a garantir o desenvolvimento sustentável;</li>
                        <li>3ª)Seção) trata do fortalecimento dos grupos sociais organizados e minoritários que colaboram com a sustentabilidade, por meio de formas variadas e minoritárias que colaboram com a sustentabilidade, por meio de formas variadas de apoio;</li>
                        <li>4ª Seção) trata dos meios de implantação, através de programas de financiamentos e do papel das atividades governamentais e não governamentais.</li>
                    </ul>
                </li>
                <li>
                    <strong>No Brasil, os 1º diplomas legais de proteção ao meio ambiente foram:</strong>
                    <ul>
                        <li>Lei de Política Nacional do Meio Ambiente (PNMA);</li>
                        <li>Lei de ação civil pública.</li>
                    </ul>
                    Um detalhe importante é que ambas as legislações foram bastante influenciadas pelos ordenamentos jurídicos de países europeus.
                </li>
                <li>
                    <strong>Protocolo de Kyoto – 11 de dezembro de 1997</strong>
                    Foi estabelecido que para período compreendido entre 2008 e 2012, haveria o compromisso de diminuição de emissões totais dos gases
                    geradores do efeito estufa, por parte dos países listados no Anexo I (países poluidores), em um volume ao menos 5% abaixo dos níveis
                    monitorados em 1990.
                    Também foram ali consagrados os princípios das “responsabilidades comuns, mas diferenciadas” e do “poluidor pagador”.
                    O impasse desse protocolo foi a relutância da participação efetiva dos EUA e a China, justamente os 2 maiores poluidores.
                    Aconteceu uma prorrogação até 2020.
                </li>
                <li>
                    <strong>Princípio do “poluidor pagador”</strong>
                    Embora seja global o problema ambiental, caberia aos países tradicionalmente industrializados e por essa razão, historicamente responsáveis
                    pelos danos ambientais, o ônus de evitar o seu agravamento, sendo que, para esta tarefa, contaram com o auxílio dos países em
                    desenvolvimento.
                </li>
                <li>
                    <strong>Crescimento econômico x Desenvolvimento econômico</strong>
                    Crescimento econômico refere-se ao aumento da produção e da renda, enquanto o desenvolvimento econômico corresponde à elevação do
                    nível de vida da população, compreendendo outras dimensões da existência, tais como saúde, educação, segurança alimentar e outros aspectos
                    caracterizadores da dignidade humana.
                </li>
                <li>
                    <strong>Sustentabilidade</strong>
                    A sustentabilidade não é possível sem o crescimento econômico, pois ela requer o alívio da pobreza, a potencialização do capital humano e a
                    redução do uso e um suprimento responsável dos recursos naturais, com um manejo coerente do meio ambiente.
                </li>
            </ol>
        </div>

        <button class="accordion">Aula 3 – A avaliação econômica do meio ambiente</button>
        <div class="panel">
            <ol>
                <li>
                    <strong>Os aspectos econômicos dos Recursos Naturais</strong>
                    A capacidade de recomposição de um dado recurso, durante o horizonte de tempo da vida humana, tem sido o principal critério para a
                    classificação dos recursos naturais. Dessa forma, conforme os recursos sejam capazes de se recompor na natureza durante o horizonte de
                    tempo da vida humana, tem sido o principal critério para a classificação dos recursos na natureza durante o período de vida do homem, eles
                    poderão ser classificados da seguinte forma:
                    <ul>
                        <li>*Renováveis ou Reprodutíveis – os solos, as águas, o ar, as florestas, a fauna e a flora são consideradas recursos naturais renováveis, uma
                            vez que os seus ciclos de recomposição são compatíveis com o tempo da vida humana;</li>
                        <li>*Não Renováveis ou Não Reprodutíveis – os combustíveis fósseis, tais como o petróleo, o gás natural e os minérios em geral, são considerados
                            não-renováveis, porque são necessárias eras geológicas para a sua formação.</li>
                    </ul>
                </li>
                <li>
                    <strong>No caso dos Recursos Renováveis</strong>
                    Um aspecto fundamental, que explica em grande parte o seu desaparecimento, é a incompatibilidade entre a dinâmica biológica, que é quem vai
                    determinar a evolução, e a dinâmica econômica, que, por sua vez, determina a taxa de extração dos recursos:
                    <ul>
                        <li>*A dinâmica ecológica – demonstra que o estoque de recursos naturais renováveis não é constante;</li>
                        <li>*A dinâmica econômica – tende a pressionar no sentido do declínio de um recurso, na medida em que a sua taxa de extração exceder, de
                            maneira persistente, a taxa de reposição do recurso.</li>
                    </ul>
                </li>
                <li>
                    <strong>No caso dos Recursos Exauríveis (não renováveis)</strong>
                    Existem aspectos peculiares que determinam os modelos de exploração econômica dos mesmos.
                </li>
                <li>
                    <strong>Os Recursos Exauríveis economicamente aproveitáveis são:</strong>
                    <ul>
                        <li>I)Recurso – pura e simplesmente não apresenta o mesmo nível de detalhamento, embora a sua existência seja conhecida.</li>
                        <li>II)Reserva Mineral – implica algum tipo de medição física que anteriormente tenha sido realizada com relação ao teor e à quantidade de
                            concentração mineral in loco.</li>
                        <li>III)Recursos Hipotéticos – são todos aqueles recursos conhecidos e não-conhecidos, mas possíveis de existir numa determinada porção da
                            crosta terrestre e capazes de serem utilizados no futuro.</li>
                    </ul>
                </li>
                <li>
                    <strong>Sob a ótica da Teoria Econômica, quais as variáveis das quais depende a intensidade do uso de um recurso exaurível.</strong>
                    A intensidade do uso de um recurso exaurível será uma variável que dependerá do valor econômico desse recurso no presente, bem como das
                    taxas de juros e do tempo de exaustão da jazida. Assim, uma elevação de preços de um dado recurso tenderá a restringir o consumo do mesmo,
                    na medida em que aumenta o valor do royalty (recurso extraído à disposição de seu titular), e, por essa razão, seus possuidores não vão desejar
                    aumentar a taxa de extração para tornar este produto mais abundante e assim perder valor. O oposto também é verdadeiro, pois se os recursos
                    forem abundantes, o valor do recurso em estoque será baixo, e por isso fará sentido extraí-lo ao máximo, pois os recursos assim obtidos podem
                    ser aplicados a juros de mercado ao mesmo tempo em que reduzem a quantidade do estoque.
                </li>
                <li>
                    <strong>Considerações gerais sobre a velocidade de Exaustão:</strong>
                    <ul>
                        <li>1ª)A taxa de extração do recurso exaurível será tanto maior quanto menor for o valor do royalty (recurso em estoque).</li>
                        <li>2ª)A taxa de utilização do recurso é diretamente proporcional à taxa de juros que desconta os fluxos de benefícios futuros (custo de
                            Oportunidade), de tal forma que uma elevação das taxas de juros promove um aumento da taxa de extração, reduzindo o prazo de esgotamento
                            do recurso, já que a velocidade com que ele será extraído será maior.</li>
                    </ul>
                </li>
                <li>
                    <strong>Falhas de Mercado</strong>
                    São situações que ocorrem sem que um mercado livre seja capaz de evitar e que comprometem a alocação eficiente de riqueza. A existência
                    dessas falhas em princípio seria capaz de justificar a intervenção do Estado na economia.
                </li>
                <li>
                    <strong>A doutrina econômica assinala cinco falhas de mercado clássicas:</strong>
                    <ul>
                        <li>I)Externalidades – são efeitos externos, da produção ou do consumo, que atingem outros agentes econômicos.</li>
                        <li>II)Mercado Incompletos – são situações nas quais não ocorre naturalmente um mercado competitivo.</li>
                        <li>III)Monopólio Naturais – são atividades econômicas que, em razão de seu porte e complexidade, só se manifestam sob a forma de monopólio.</li>
                        <li>IV)Informações Assimétricas – decorrem do fato de alguns agentes serem mais informados do que outros, utilizando isso a seu favor.</li>
                        <li>V)Bens Públicos – são bens de uso comum, nos quais o consumo por parte de um agente não pode excluir o outro.</li>
                    </ul>
                </li>
                <li>
                    <strong>De acordo com a Teoria Econômica</strong>
                    Em um ambiente de mercado privado, os preços e as quantidades dos produtos transacionados são determinados pela interação entre a
                    disposição a pagar dos consumidores e a disposição a ofertar das empresas, de tal forma a orientar as decisões alocativas de recursos dos
                    agentes. Por sua vez, as decisões alocativas no setor público, envolvendo a provisão de bens e serviços que devem aumentar o bem-estar dos
                    cidadãos, em face de um orçamento limitado, são auxiliadas por análises sociais de custo-benefício.
                </li>
                <li>
                    <strong>A Análise Social de Custo-benefício</strong>
                    Tem por objetivo atribuir um valor social para todos os efeitos de um determinado projeto, investimento ou política. Os efeitos positivos são
                    considerados como sendo benefícios, e os efeitos negativos são tratados como custos.
                </li>
                <li>
                    <strong>Os métodos de valoração do Capital Natural sob a Ótica Privada</strong>
                    Em geral se considera a viabilidade de um projeto como de interesse apenas do investidor ou do agente financeiro que vai financiá-lo.
                </li>
                <li>
                    <strong>E sob a Ótica Social ou Econômica</strong>
                    Se propuser a examinar os efeitos diretos e indiretos que são ou serão causados por um determinado projeto, sob o enfoque da sociedade como
                    um todo.
                </li>
                <li>
                    <strong>Existem 3 abordagens que sintetizam as principais proposições analíticas:</strong>
                    <ul>
                        <li>I)Análise Custo-Benefício (ACB) – é a técnica econômica mais empregada para a determinação de prioridades na avaliação de políticas. As
                            maneiras de apresentar uma ACB são: Análise Privada (perspectiva do usuário); Análise Fiscal (perspectiva da eficiência); Análise Social
                            (perspectiva distributiva); Análise de Sustentabilidade (perspectiva ecológica).</li>
                        <li>II)Análise Custo Utilidade (ACU) – trata-se de um indicador de benefícios que busca integrar critérios econômicos com critérios ecológicos.
                            A Análise Custo Utilidade (ACU) gera indicadores e também critérios ecológicos tais como:
                            <ul>
                                <li>* Insubstitutibilidade – diz respeito ao fato de o benefício ser ou não substituível.</li>
                                <li>*Vulnerabilidade – diz respeito ao grau e que o objeto a ser protegido pode ser afetado com o impacto ambiental.</li>
                                <li>*Grau de Ameaça – refere-se ao nível em que o objeto a ser protegido encontra-se ameaçado com a atual ação humana.</li>
                                <li>*Representatividade – diz respeito à importância relativa do objeto a ser protegido para o equilíbrio da Terra.</li>
                                <li>*Criticabilidade – diz respeito à urgência com que uma medida deve ser adotada, em virtude de sua rápida evolução.</li>
                            </ul>
                        </li>
                        <li>III)A Análise Custo-Eficiência (ACE) – é empregada quando a estimação de benefícios ou utilidades for de difícil realização ou também quando
                            ela se mostrar além da capacidade institucional, restando apenas a possibilidade de ordenar as prioridades com base em critérios estritamente
                            ecológicos.</li>
                    </ul>
                </li>
                <li>
                    <strong>Disposição a Pagar (DAP)</strong>
                    É a disposição a pagar de um agente econômico por uma melhoria ou incremento de um dado recurso ambiental.
                </li>
                <li>
                    <strong>Disposição a Aceitar (DAA)</strong>
                    É a disposição a aceitar de um agente econômico por uma piora ou decréscimo da oferta do recurso.
                </li>
                <li>
                    <strong>O valor do Uso Direto de um Recurso Ambiental</strong>
                    É aquele decorrente de sua utilização ou do consumo direto do recurso. Um mesmo recurso ambiental pode servir para múltiplos usos, e assim
                    ter vários Valor de Uso Direto.
                </li>
                <li>
                    <strong>O Valor de Uso Indireto</strong>
                    É aqueles derivados das funções ecológicas do recurso. Ex.: com relação a uma floresta, a qualidade das águas, o ar puro e a beleza cênica.
                </li>
                <li>
                    <strong>Valor de Existência ou Valor de Não-uso de um Recurso Ambiental</strong>
                    Refere-se à satisfação pessoal em se saber que o objeto em questão está no seu local de origem, sem que o agente econômico venha auferir
                    qualquer vantagem direta ou indiretamente dessa existência de recurso natural.
                </li>
                <li>
                    <strong>Avaliação dos Recursos Ambientais pelos Métodos Indiretos</strong>
                    São os que inferem o valor de um dado recurso natural com base na observação do comportamento dos agentes econômicos em mercados que
                    têm relação com o ativo ambiental. Esses métodos são: custo de viagem, preços hedônicos, custos de reposição, gastos defensivos,
                    produtividade marginal, transferência de benefícios, capital humano ou produção sacrificada.
                </li>
                <li>
                    <strong>Avaliação dos Recursos Ambientais pelos Métodos Diretos</strong>
                    São aqueles que inferem as preferências individuais dos agentes econômicos, com relação aos recursos ambientais, a partir de perguntas feitas
                    diretamente aos mesmos. Esses métodos são: Valoração Contingente e Ranqueamento Contingente.
                </li>
                <li>
                    <strong>Valoração Contingente</strong>
                    Este método consiste no emprego de pesquisas amostrais para identificar, em termos monetários, as preferências dos agentes econômicos com
                    relação aos bens que não são comercializados no mercado.
                </li>
                <li>
                    <strong>Ranqueamento Contingente</strong>
                    Trata-se de um método que procura apresentar aos entrevistados múltiplas alternativas hipotéticas e características, com relação a um dado
                    recurso ambiental, de tal forma que os mesmos as ordenem segundo as suas preferências.
                </li>
            </ol>
        </div>

        <button class="accordion">Aula 6 – Os critérios para a Gestão do Impacto Ambiental</button>
        <div class="panel">
            <ol>
                <li>
                    <strong>O que é Estudo de Impacto Ambiental (EIA).</strong>
                    É o resultado das mudanças no ambiente natural e social, em razão de uma dada atividade ou de empreendimento proposto. Embora as
                    mudanças possam ocorrer em virtude de causas naturais, apenas aquelas decorrentes da ação antrópica são tratadas nesse contexto. Dessa
                    forma, o termo “impacto” diz respeito às alterações no meio ambiente físico, biótico e social em razão de atividades humanas em andamento ou
                    em fase de proposta.
                </li>
                <li>
                    <strong>O Estudo de Impacto Ambiental (EIA) é um processo formal</strong>
                    Constitui num instrumento de gestão ambiental muito importante, não apenas para a região ou para o país, como também para o proponente do
                    projeto que o ensejou.
                    O EIA é apenas um instrumento de cognição (que gera conhecimento) para formar o convencimento de um tomador de decisão, não tendo
                    qualquer força normativa intrínseca (força de lei ou regulamento). No máximo, o EIA poderá conter sugestões acerca de medidas e alternativas
                    destinadas a minimizar impactos negativos sobre o ambiente.
                </li>
                <li>
                    <strong>Resolução Conama nº 1/86</strong>
                    O licenciamento de atividades modificadoras do meio ambiente dependerá de elaboração de Estudo de Impacto Ambiental e respectivo Relatório
                    de Impacto Ambiental, a serem submetidos à aprovação do órgão estadual competente, e do Ibama em caráter supletivo.
                </li>
                <li>
                    <strong>O Objetivo do Estudo de Impacto Ambiental (EIA):</strong>
                    É permitir antecipadamente que se tenha ciência dos efeitos deletérios ao meio ambiente físico, biótipo e social ocasionados pela implantação
                    de empreendimentos e atividades.
                </li>
                <li>
                    <strong>A Lei exige que o Estudo de Impacto Ambiental (EIA):</strong>
                    Se torne parte integrante do processo de licenciamento de atividades e empreendimento efetiva ou potencialmente poluidores ou causadores de
                    degradação ambiental, embora a licença ambiental possa ser outorgada sem o respaldo do EIA, desde que a instalação da obra ou da atividade
                    a ser licenciada não seja considerada potentially causadora de significativa degradação no meio ambiente.
                </li>
                <li><strong>Impacto Real</strong> – quando a atividade já estiver em execução.</li>
                <li><strong>Impacto Potencial</strong> – quando uma atividade que ainda será implementada e está na fase de proposta.</li>
                <li><strong>Impacto Positivo</strong> – são aqueles que conferem sustentabilidade econômica, social e ambiental ao empreendimento ou atividade.</li>
                <li>
                    <strong>Tipos de Licenças Ambientais:</strong>
                    <ul>
                        <li>I)Licença Prévia – é necessária para a fase preliminar de planejamento da atividade, contendo requisitos básicos a serem atendidos nas
                            fases de localização, instalação e operação, levando-se em conta as restrições governamentais quanto ao uso do solo. Trata-se de uma
                            licença que é condição para a continuidade do processo de licenciamento. Validade de 5 anos.</li>
                        <li>II)Licença de instalação – autoriza o início da implantação, de acordo com as especificações constantes do projeto executivo aprovado. De
                            anteceder ao início da instalação do empreendimento ou atividade. Validade de 6 anos.</li>
                        <li>III)Licença de Operação – autoriza, após devidas verificações, o início da atividade licenciada e o funcionamento de seus equipamentos de
                            controle da poluição, de acordo com o estabelecimento na licença prévia e de instalação. Validade de 10 anos, podendo ser prorrogado.</li>
                    </ul>
                </li>
                <li>
                    <strong>O CONAMA, por meio da Resolução 237/1997 estabeleceu:</strong>
                    Uma relação não exaustiva de atividades ou empreendimentos que estão sujeitos ao licenciamento ambiental. Ou seja, não são todas as
                    atividades ou empreendimentos que estão sujeitos ao licenciamento ambiental.
                </li>
                <li>
                    <strong>Relação de atividades modificadoras do meio ambiente:</strong>
                    <ol>
                        <li>estradas de rodagem com 2 ou mais faixas de rolamento;</li>
                        <li>ferrovias;</li>
                        <li>portos e terminais de minério, petróleo e produtos químicos;</li>
                        <li>oleodutos, gasodutos, minerodutos, troncos coletores e emissários de esgotos sanitários;</li>
                        <li>extração de combustível fóssil (petróleo, xisto, carvão);</li>
                        <li>distritos industriais e Zonas Estritamente Industriais – ZEI</li>
                    </ol>
                </li>
                <li>
                    <strong>Etapas do procedimento de licenciamento: (8 no total)</strong>
                    <ol>
                        <li>a definição, por parte do órgão ambiental competente e integrante do Sisnama dos documentos, projetos e estudos ambientais necessários
                            para dar início ao processo de licenciamento correspondente à licença requerida (o empreendedor deve está presente);</li>
                        <li>o requerimento da concessão de licença ambiental, feito pelo empreendedor, devidamente instruídos com os estudos ambientais, projetos e
                            documentações, ao qual é dada a publicidade;</li>
                        <li>a análise pelo órgão ambiental competente dos documentos referenciados em (2), bem como a realização de vistorias técnicas, quando
                            necessárias;</li>
                        <li>a eventual solicitação de esclarecimentos e dados complementares por parte do órgão ambiental;</li>
                        <li>a realização de audiência pública, quando for o caso, de acordo com a legislação pertinente;</li>
                        <li>a solicitação de esclarecimentos complementares por parte do órgão ambiental competente, quando for o caso, em virtude de aspectos
                            tratados nas audiências públicas;</li>
                        <li>a emissão de parecer técnico conclusivo e, se preciso, também um parecer jurídico;</li>
                        <li>a tomada de decisão quanto ao deferimento ou indeferimento do pedido de licença, com a devida publicidade.</li>
                    </ol>
                </li>
                <li>
                    <strong>Problemas decorrentes da utilização do EIA:</strong>
                    <ol>
                        <li>o EIA pode ser reduzido a avaliações muito localizadas e pontuais, de forma que, em situações em que não existirem cenários de planejamento,
                            podem ocorrem conflitos com os objetivos regionais já estabelecidos;</li>
                        <li>a tradição de conhecimentos compartimentados em setores e a inexperiência de trabalhos multidisciplinares integrados, por parte dos
                            profissionais em geral, comprometem a eficácia das equipes multidisciplinares que devem elaborar o EIA;</li>
                        <li>a ausência de séries históricas de dados sistematizados no país compromete a análise ambiental qualitativa e quantitativa;</li>
                        <li>a resistência de algumas agências governamentais, sobretudo nos setores de energia e transporte, tanto na esfera federal quanto na estadual,
                            que ainda não incorporaram o fato de que a racionalização do uso dos recursos naturais e o esforço de conservação da natureza são
                            fundamentais para o desenvolvimento econômico do país;</li>
                        <li>a visão parcial e fundamentalista de parcela do movimento ambiental, que admite apenas a preservação absoluta da natureza e que, ao
                            participar dos procedimentos de avaliação ambiental, é sempre contra qualquer forma de intervenção, mesmo aquelas que são baseadas em
                            escolhas corretas de alternativas e que o objetivo do projeto redunde em novos benefícios sociais.</li>
                    </ol>
                </li>
                <li>
                    <strong>Casos acrescentados no elenco de atividades e empreendimentos que requerem um EIA para efetivação do licenciamento:</strong>
                    <ul>
                        <li>a) parcelamento e remembramento do solo, assim como a construção, a instalação, a ampliação e o funcionamento de atividades que alterem
                            as características naturais das zonas costeiras;</li>
                        <li>b) as obras de saneamento para as quais seja possível identificar modificações ambientais significativas;</li>
                        <li>c) as atividades e os empreendimentos com organismos geneticamente modificados (OGM);</li>
                        <li>d) os empreendimentos destinados ao recebimento de embalagens vazias de agrotóxicos</li>
                    </ul>
                </li>
                <li>
                    <strong>Itens que integram o EIA:</strong>
                    <ul>
                        <li>1º - um amplo diagnóstico ambiental acerca da área de influência do projeto, descrevendo e analisando todos os recursos ambientais existentes,
                            bem como as suas interações, de tal forma a caracterizar a situação ambiental da área antes da implementação do projeto, levando em
                            consideração o meio físico (ar, água, o subsolo e o clima), o meio socioeconômico, o meio biológico e os ecossistemas naturais.</li>
                        <li>2º - a análise dos impactos ambientais do projeto e suas alternativas, por meio da identificação, previsão da magnitude e interpretação da
                            relevância dos impactos, de forma a discriminar: impactos positivos e negativos; diretos e indiretos; imediatos e os médios e longos prazos;
                            temporários e permanentes; seu grau de reversibilidade; suas propriedades em termos de cumulatividade (os impactos vão se somando ao longo
                            do tempo) e sinergia; e a distribuição de benefícios sociais.</li>
                        <li>3º - a definição das medidas que vão mitigar os impactos negativos, entre elas os equipamentos de controle e os sistemas de tratamento de
                            despejos, com a avaliação da eficiência de cada uma delas.</li>
                        <li>4º - a elaboração de um programa de acompanhamento e monitoramento dos impactos positivos e negativos, com a indicação dos fatores e
                            parâmetros a serem considerados.</li>
                    </ul>
                </li>
                <li>
                    <strong>O Relatório de Impacto Ambiental (RIMA)</strong>
                    É o EIA sintetizado sob a forma de um relatório, que deverá servir como instrumento de divulgação.
                    Ele deve expressar de forma objetiva e adequada em linguagem acessível, aproveitando as técnicas de comunicação visual, tais como mapas,
                    quadros, cartas topográficas, gráficos etc., de tal forma a evidenciar as vantagens do projeto, assim como as consequências ambientais
                    decorrentes de sua implementação.
                    A publicidade é uma característica fundamental do EIA e seu respectivo RIMA.
                </li>
                <li>
                    <strong>A Resolução 01/1986 do CONAMA apresenta uma lista de tópicos que o RIMA deve contemplar, sob pena de não ser aceito pelo
                        órgão ambiental competente:</strong>
                    <ul>
                        <li>1º)os objetivos e as justificativas do projeto, bem como a sua aderência com as políticas setoriais e planos governamentais;</li>
                        <li>2º)a descrição do projeto e suas alternativas de localização, especificando para cada uma delas a área de influencia;</li>
                        <li>3º)a síntese dos resultados dos estudos de diagnóstico ambiental da área de influência do projeto;</li>
                        <li>4º)a descrição dos prováveis impactos ambientais decorrentes da implantação e operação da atividade;</li>
                        <li>5º)a caracterização da qualidade ambiental futura da área de influência;</li>
                        <li>6º)a descrição da qualidade ambiental futura da área de influência;</li>
                        <li>7º)o programa de acompanhamento e monitoramento dos impactos;</li>
                        <li>8º)as recomendações quanto à alternativa mais favorável.</li>
                    </ul>
                </li>
                <li>
                    <strong>Procedimentos para dar publicidade ao EIA e o RIMA:</strong>
                    Acesso às copias do RIMA; divulgação da existência desse material; o estabelecimento de um período de proposições e comentários por parte
                    de órgãos públicos e demais interessados; e organização de audiências públicas para o debate acerca do RIMA.
                </li>
                <li>
                    <strong>O Estudo de Impacto Ambientais (EIA)</strong>
                    Envolve um estudo mais amplo, compreendendo a identificação e classificação dos impactos, predição de efeitos, pesquisas de campo, análises
                    laboratoriais, valoração monetária de recursos ambientais, avaliação de alternativas e outros trabalhos correlatos. Por sua vez, o RIMA deve
                    expressar de for conclusiva este conjunto de trabalhos.
                </li>
                <li>
                    <strong>Outros documentos que resultam do EIA</strong>
                    Relatório Ambiental Preliminar (RAP), em São Paulo;
                    Plano de Recuperação de áreas degradadas (PRAD), utilizados para empreendimentos voltados para a exploração de recursos minerais;
                    Estudo Prévio de Impacto de Vizinhança (EIV), que é um instrumento de política urbana;
                    Relatório Ambiental Simplificados (RAS), que é um procedimento para o licenciamento ambiental simplificado de empreendimentos elétricos com
                    pequeno potencial de impacto ambiental.
                </li>
                <li>
                    <strong>Avaliação de impactos</strong>
                    Os métodos mais simples empregam listas de verificação ou de controle (check list) para avaliar e interpretar os impactos que poderão ocorrer
                    caso o projeto seja efetivamente implantado.
                </li>
            </ol>
        </div>

        <button class="accordion">Aula 9 – As Empresas e o Desenvolvimento Sustentável</button>
        <div class="panel">
            <ol>
                <li>
                    <strong>Motivos que levaram as empresas a implantar o Desenvolvimento Sustentável</strong>
                    Em razão de um quadro de crescente aumento da poluição e degradação do meio ambiente, que passou a se agravar cada vez mais, as
                    empresas verificaram que o custo financeiro de reduzir o passivo ambiental e administrar os múltiplos conflitos sociais poderia ser mais alto do
                    que o custo de respeitar os direitos humanos e o meio ambiente em todos os locais, pois ações que não estivessem alinhadas com esse propósito
                    moral elevado poderiam influenciar de forma negativa a percepção da opinião pública sobre a corporação, dificultando a sua atuação no ambiente
                    de negócios.
                </li>
                <li>
                    <strong>As preocupações ambientais dos empresários</strong>
                    Elas são influenciadas por três grandes conjuntos de forças que integram de forma recíproca: O governo, a sociedade e o mercado. Caso não
                    existissem pressões da sociedade e medidas governamentais, provavelmente não seriam observadas medidas efetivas e um maior envolvimento
                    por parte das empresas em matéria ambiental.
                </li>
                <li>
                    <strong>Conjuntos de características que distinguem as Empresas Sustentáveis</strong>
                    <ul>
                        <li>I)são empresas que satisfazem as necessidades atuais usando recursos de forma sustentável;</li>
                        <li>II)são empresas que mantêm um equilíbrio em relação ao meio ambiente natural, com base em tecnologias limpas, reuso, reciclagem ou
                            renovação de recursos;</li>
                        <li>III)são empresas que restauram os danos causados por suas operações;</li>
                        <li>IV)são empresas que contribuem para a solução dos problemas sociais em vez de exacerbá-los;</li>
                        <li>V)são empresas ou negócios que geram renda suficiente para dar continuidade às suas operações.</li>
                    </ul>
                </li>
                <li>
                    <strong>Explique o que vem a ser Selo Verde</strong>
                    São rótulos conferidos a produtos que geram menos impactos ambientais que outros produtos similares, tais como produtos que não contêm
                    metais pesados, que utilizam materiais reciclados, ou ainda aqueles fabricados com processos poupadores de água e energia e outras
                    considerações relativas aos produtos e seus processos de fabricação.
                </li>
                <li>
                    <strong>O que vem a ser o Selo Procel no Brasil</strong>
                    O Selo Procel de economia de energia, criado pelo Governo brasileiro para combater o desperdício de energia elétrica em equipamentos elétricos.
                </li>
                <li>
                    <strong>O que são Ativos Intangíveis</strong>
                    São os bens não-físicos que integram o patrimônio das empresas, influenciando o valor da mesma. O termo define todos os ativos de uma
                    empresa que não têm tangibilidade, tampouco representação física imediata. São exemplos: patentes, franquias, nomes, marcas, a base de
                    clientes, os direitos autorais etc.
                </li>
                <li>
                    <strong>Face dos problemas ambientais, em resposta aos efeitos das suas operações, pode ser desenvolvida de acordo com três abordagens
                        principais:</strong>
                    <ul>
                        <li>
                            I)Abordagem do Controle da Poluição – esta abordagem é caracterizada pelo estabelecimento de práticas que impeçam os efeitos da poluição
                            gerada por um processo produtivo.
                            As Soluções Tecnológicas são:
                            <ul>
                                <li>*Tecnologia de Remediação – que procura resolver um problema ambiental que já ocorreu;</li>
                                <li>*Tecnologia de Controle de Final de Processo (ou end-of-pipe) – que visa capturar a poluição gerada no final do processo, antes que a
                                    mesma seja lançada no meio ambiente.</li>
                            </ul>
                        </li>
                        <li>
                            II)Abordagem da Prevenção da Poluição – esta abordagem representa o meio pelo qual as empresas procuram atuar sobre os produtos e
                            processos produtivos com vistas à redução do volume de poluição.
                            A prevenção da poluição é uma medida que une duas preocupações ambientais fundamentais:
                            <ul>
                                <li>
                                    *O Uso Sustentável dos Recursos Naturais – existe uma série de atividades, denominadas 4Rs, que sintetizam essa proposta, dispostas em
                                    ordem de prioridade:
                                    <ol>
                                        <li>1ºR – Reduzir a Poluição – esta deve ser sempre a primeira opção, a despeito das quantidades e das características dos poluentes.</li>
                                        <li>2ºR – Reusar Internamente – esta medida consiste em empregar os resíduos gerados pela indústria, da mesma forma que foram criados via
                                            de regra, no próprio estabelecimento que os gerou.</li>
                                        <li>3ºR – Reciclagem – ela pode ser feita de duas formas: Interna – consiste no tratamento de resíduos para torná-los mais uma vez aproveitáveis
                                            na própria fonte produtora; Externa – consiste na utilização de resíduos que foram gerados em uma unidade produtiva por outra unidade
                                            produtiva.</li>
                                        <li>4ºR – Recuperação – não são todos os resíduos que podem ser reusados ou reciclados, interna ou externamente; há ainda a possibilidade de
                                            aproveitar o seu poder calorífico para a geração de energia, caso isto seja possível.</li>
                                    </ol>
                                </li>
                                <li>*O Controle da Poluição – na medida em que menos recursos são empregados na produção, menos poluição é gerada e mais rapidamente os
                                    níveis de redução de efluentes são atingidos (dois tipos de prevenção da poluição).</li>
                            </ul>
                        </li>
                        <li>
                            III)Abordagem Estratégica – nessa abordagem, os problemas ambientais são incorporados no cálculo estratégico das empresas, ou seja, são
                            relacionados à busca de situação vantajosa em seus negócios no presente ou no futuro.
                        </li>
                    </ul>
                </li>
                <li>
                    <strong>São os seguintes os benefícios estratégicos derivados da Gestão Ambiental</strong>
                    <ul>
                        <li>*melhoria da imagem institucional;</li>
                        <li>*renovação do portfólio de produtos;</li>
                        <li>*produtividade aumentada;</li>
                        <li>*maior comprometimento dos funcionários e melhores relações de trabalho;</li>
                        <li>*criatividade e abertura para novos desafios;</li>
                        <li>*melhores relações com autoridades públicas, comunidades e grupos ambientalistas ativistas;</li>
                        <li>*acesso assegurado aos mercados externos;</li>
                        <li>*maior facilidade para cumprir os padrões ambientais.</li>
                    </ul>
                </li>
                <li>
                    <strong>Definição do Conceito de Abordagem Ambiental Estratégica</strong>
                    Compreende todas as ações da empresa no sentido de tratar sistematicamente as questões ambientais, com vistas a proporcionar valores aos
                    componentes do ambiente de negócios da empresa que sejam capazes de diferenciá-los dos seus concorrentes e contribuam para dotar a
                    mesma de vantagens competitivas sustentáveis.
                </li>
                <li>
                    <strong>O que vem a ser Lavagem Verde</strong>
                    É toda a prática deliberada para esconder os impactos ambientais deletérios mediante o uso de ações paliativas, que geram uma falsa imagem
                    da empresa quanto ao seu verdadeiro envolvimento com as questões ambientais.
                </li>
                <li>
                    <strong>Qual a principal característica da Lavagem Verde</strong>
                    A sua principal característica é a intenção deliberada de cuidar mais da imagem da empresa do que das questões ambientais.
                </li>
                <li>
                    <strong>Os modelos de Gestão Ambiental Empresarial</strong>
                    Um modelo de gestão consiste no conjunto de normas e princípios que devem orientar os gestores na seleção de alternativas para levar a
                    organização a cumprir com eficácia a sua missão. Devem ser estruturado considerando os seguintes aspectos:
                    <ul>
                        <li>I)o processo de gestão dos sistema empresa – planejamento, execução e controle;</li>
                        <li>II)o processo decisório – centralização ou descentralização;</li>
                        <li>III)a avaliação de desempenho das áreas e dos gestores responsáveis;</li>
                        <li>IV)o comportamento dos gestores – sua motivação e grau de empreendedorismo.</li>
                    </ul>
                    As empresas, por sua vez, podem criar modelos próprios ou podem usar múltiplos modelos genéricos de gestão ambiental: Modelo de Atuação
                    Responsável; Modelo da Administração da Qualidade Ambiental Total; Modelo da Produção mais Limpa; Modelo de Projeto para o Meio
                    Ambiente; Modelos Inspirados na Natureza; Modelo de Ecoeficiência.
                </li>
            </ol>
        </div>

        <button class="accordion">Aula 10 – O fenômeno do Aquecimento Global e o Protocolo de Kyoto.</button>
        <div class="panel">
            <ol>
                <li>
                    <strong>O efeito estufa</strong>
                    É o fenômeno causado pelo acúmulo dos gases conhecidos como gases de efeito estufa (GEE) na atmosfera, provocando retenção do calor e
                    aquecimento da superfície da terra.
                </li>
                <li>
                    <strong>Biomassa</strong>
                    É qualquer matéria de origem vegetal, usada como fonte de energia.
                </li>
                <li>
                    <strong>Consequências provocadas pelo processo de Aquecimento Global:</strong>
                    <ul>
                        <li>I)aumento do nível dos oceanos;</li>
                        <li>II)o derretimento de geleiras, glaciares e calotas polares;</li>
                        <li>III)mudanças nos regimes de chuvas e ventos, com aumento de fenômenos extremos, tais como furacões, tufões, ciclones, tempestades tropicais
                            e inundações;</li>
                        <li>IV)aceleração de processo de desertificação e redução do acesso à água potável;</li>
                        <li>V)perda de biodiversidade;</li>
                        <li>VI)perda de áreas agricultáveis;</li>
                        <li>VII)aumento de incidência de algumas doenças transmissíveis e de seus vetores;</li>
                        <li>VIII)aumento do riso de incêndio etc.</li>
                    </ul>
                </li>
                <li>
                    <strong>O que é uma interferência Antrópica?</strong>
                    É aquela interferência produzida pelo homem na natureza.
                </li>
                <li>
                    <strong>O Protocolo de Kyoto (1997).</strong>
                    Constitui um acordo internacional onde foram compartilhadas as preocupações e os princípios disposto na Convenção-Quadro das Nações
                    Unidas sobre Mudança do Clima, a partir dos quais acrescenta novos compromissos, que seriam mais fortes, complexos e detalhados do que
                    os da Convenção.
                </li>
                <li>
                    <strong>O Protocolo de Kyoto tem como atribuição fundamental</strong>
                    Sua atribuição fundamental é alcançar a estabilização da concentração de GEE na atmosfera, reduzindo sua interferência no clima e favorecendo
                    a sustentabilidade do planeta.
                </li>
                <li>
                    <strong>As emissões a serem consideradas no âmbito do Protocolo de Kyoto são apenas aquelas geradas por atividades humanas, nos
                        seguintes setores:</strong>
                    <ul>
                        <li>I)setor energético (produção e uso de energia);</li>
                        <li>II)processos industriais (gases gerados como co-produtos do processo de fabricação de cimento, indústria química etc.)</li>
                        <li>III)no uso de solventes;</li>
                        <li>IV)no setor agropecuária (fermentação entérica de gado ruminante, produção de arroz inrrigado, solos agrícolas, queimadas de cerrados e de
                            resíduos agrícolas);</li>
                        <li>V)tratamento de resíduo (lixo e esgoto).</li>
                    </ul>
                </li>
                <li>
                    <strong>Remoção de gases GEE por meio de Sumidouros</strong>
                    É o estabelecimento de novas florestas e reflorestamento que devem então ser computadas para o atendimento das metas de redução.
                </li>
                <li>
                    <strong>Mecanismos de Desenvolvimento Limpo (MDL)</strong>
                    Trata-se da certificação de projetos de redução de emissões no Brasil e em outros países em desenvolvimento, com a posterior comercialização
                    desses certificados para os países desenvolvidos, como forma suplementar de demonstração do cumprimento de suas próprias metas de
                    emissão.
                </li>
            </ol>
        </div>

        <footer>
            Impresso por matheus.rodrigues5495, E-mail matheus.rodrigues5495@hotmail.com para uso pessoal e privado. Este material pode ser
            protegido por direitos autorais e não pode ser reproduzido ou repassado para terceiros. 17/10/2025, 11:14:14
        </footer>
    </div>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var acc = document.getElementsByClassName("accordion");
            for (var i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    /* Alterna a classe 'active' no botão */
                    this.classList.toggle("active");

                    /* Seleciona o painel (irmão seguinte) */
                    var panel = this.nextElementSibling;

                    /* Alterna a exibição do painel */
                    if (panel.style.maxHeight) {
                        // Se está aberto, fecha
                        panel.style.maxHeight = null;
                        panel.classList.remove("show"); // Remove a classe para animar o padding
                    } else {
                        // Se está fechado, abre
                        panel.classList.add("show"); // Adiciona a classe para animar o padding
                        panel.style.maxHeight = panel.scrollHeight + "px"; // Define altura máxima para o conteúdo
                    }
                });
            }
        });
    </script>
    
    

</body>
</html>