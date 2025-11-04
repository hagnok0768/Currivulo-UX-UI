<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo - Vitor de Freitas Morais</title>
    <meta name="description" content="Profissional de Administração e Ciência de Dados com experiência em análise, visualização e gestão estratégica de dados.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 900px;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .accordion-button:not(.collapsed) {
            background-color: #007bff;
            color: white;
        }
        /* Olho UX/UI e balão */
        .uxui-group {
            display: flex;
            align-items: flex-end;
            gap: 4px;
            margin-right: 11px;
            position: relative;
        }
        .uxui-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: #f5f8fc;
            border-radius: 50%;
            box-shadow: 0 1px 5px rgba(40,70,90,0.09);
            border: 2px solid #d2e6e8;
            transition: box-shadow .2s, background .2s;
            text-decoration: none;
            position: relative;
            z-index: 2;
        }
        .uxui-btn:hover {
            box-shadow: 0 2px 10px rgba(60,90,110,0.18);
            background: #e0f9ee;
        }
        .eye-blink {
            width: 26px;
            height: 26px;
            animation: blink 2.6s infinite;
            transform-origin: 50% 60%;
        }
        @keyframes blink {
            0%, 95%, 100% { filter: none; opacity: 1; transform: scaleY(1);}
            96%, 98% { filter: brightness(0.1) contrast(0.8) blur(1.5px); opacity: 0.13; transform: scaleY(0.12);}
        }
        .uxui-balao {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: 46px;
            z-index: 10;
        }
        .uxui-balao-inner {
            background: #181f3a;
            color: #fff;
            padding: 8px 18px 8px 15px;
            border-radius: 11px;
            font-size: 1rem;
            font-weight: 600;
            white-space: nowrap;
            box-shadow: 0 3px 16px rgba(60,90,110,0.10);
            text-align: center;
            position: relative;
        }
        .uxui-balao-inner::after {
            content: '';
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            border-width: 8px;
            border-style: solid;
            border-color: #181f3a transparent transparent transparent;
        }
        /* Avatar escondido por padrão */
        .avatar-print {
            display: none;
            align-items: flex-end;
            margin-right: 11px;
        }
        .avatar-img {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #d2e6e8;
            box-shadow: 0 1px 4px rgba(60,60,90,0.13);
            background: #e4ecef;
        }
        /* Correções para impressão */
        @media print {
            html, body {
                width: 100% !important;
                height: auto !important;
                margin: 0 !important;
                padding: 0 !important;
                background: #fff !important;
                overflow: visible !important;
            }
            .container, .accordion-item, h1, h3, h2, h4, h5, h6 {
                page-break-inside: avoid !important;
                break-inside: avoid !important;
            }
        }
        @media (max-width: 540px) {
            .container { padding: 7px;}
            .uxui-balao-inner { font-size: .89rem; padding: 6px 8px 6px 8px;}
            .uxui-balao { bottom: 38px;}
        }
    </style>
</head>
<body>
    <!-- Menu Superior -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://vitorfm.work/">vitorfm.work</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/hagnok0768?tab=repositories" target="_blank">Meus Repositórios
                            <img src="https://img.icons8.com/?size=100&id=12599&format=png&color=000000" alt="Ícone" style="width: 20px; height: 20px;" class="ms-2">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://vitorfm.work/en.php" target="_self">English Version
                            <img src="https://img.icons8.com/?size=100&id=aRiu1GGi6Aoe&format=png&color=000000" alt="Ícone" style="width: 20px; height: 20px;" class="ms-2">
                        </a>
                    </li>
                </ul>
            </div>
            <button id="download" class="btn btn-success btn-sm ms-auto">
                Salve esse arquivo em PDF
                <img src="https://img.icons8.com/?size=100&id=13417&format=png&color=000000" alt="Ícone" style="width: 20px; height: 20px;" class="ms-2">
            </button>
        </div>
    </nav>

    <!-- Conteúdo principal -->
    <div class="container mt-5" id="content">
        <div class="d-flex align-items-center justify-content-center mb-3" style="gap: 9px;" id="perfilLinha">
            <span class="uxui-group" id="uxuiGroup">
                <span class="uxui-balao">
                    <span class="uxui-balao-inner">Versão UX – clique Aqui!</span>
                </span>
                <a href="https://vitorfm.work/UXUI.php"
                   class="uxui-btn"
                   title="Cansado de ler currículos? Clique para uma versão UX/UI!"
                   target="_blank">
                    <img class="eye-blink" src="https://img.icons8.com/color/48/visible--v1.png" alt="UX/UI" />
                </a>
            </span>
            <!-- Avatar para PDF (escondido por padrão) -->
            <span class="avatar-print" id="avatarPrint">
                <img src="self.png" alt="Foto Vitor" class="avatar-img">
            </span>
            <h1 class="text-center mb-0">Vitor de Freitas Morais</h1>
        </div>
        <p class="text-center">Profissional que busca aliar Administração e Tecnologia com Ciência de Dados</p>
        <h3 class="mt-4">Sobre Mim
        <img src="https://img.icons8.com/?size=100&id=13042&format=png&color=000000" alt="Ícone" style="width: 20px; height: 20px;" class="ms-2">
        </h3>
        <p>Iniciei minha trajetória acadêmica em Engenharia da Computação na UERJ, onde desenvolvi uma base sólida em tecnologia. Decidi interromper temporariamente esse percurso para me dedicar a projetos pessoais que contribuíram para meu crescimento prático e visão empreendedora. Posteriormente, ingressei no curso de Administração, onde descobri uma afinidade genuína com Rotinas Administrativas e Ciência de Dados. Atualmente, busco consolidar uma carreira que integre Administração, Tecnologia e Análise de Dados, com foco em soluções estratégicas e inovação no mercado.</p>
        <!-- Seção de Contato -->
        <h3 class="mt-4">Contato
            <img src="https://img.icons8.com/?size=100&id=59775&format=png&color=000000" alt="Contato" width="24" height="24">
        </h3>
        <ul>
            <li>
                <a href="https://wa.me/5521981846114" target="_blank" style="text-decoration: none; color: inherit;">
                    <img src="https://img.icons8.com/?size=100&id=16713&format=png&color=000000" alt="WhatsApp" width="24" height="24">
                    <a href="https://wa.me/5521987385290?text=Olá%2C%20quero%20falar%20com%20você!" target="_blank">WhatsApp: +55 21 98738-5290</a>
                </a>
            </li>
            <li>
                <a href="mailto:hagnok@hotmail.com" style="text-decoration: none; color: inherit;">
                    <img src="https://img.icons8.com/?size=100&id=12580&format=png&color=000000" alt="Email" width="24" height="24">
                    Email: hagnok@hotmail.com
                </a>
            </li>
        </ul>
        <h3 class="mt-4">Experiência Profissional
         <img src="https://img.icons8.com/?size=100&id=pLsGEVZ0CYPb&format=png&color=000000" alt="Evolução" width="24" height="24">
        </h3>
        <div class="accordion" id="experienciaAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#adm">
                        Estágio em Suporte e Manutenção em Hardware - ADM (NBS Publicidade)
                    </button>
                </h2>
                <div id="adm" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                    <div class="accordion-body">
                        Atuei com suporte técnico e manutenção de hardware para otimizar a infraestrutura da empresa publicitária.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pixsoft">
                        Estágio em Desenvolvimento de Software - Pix Soft
                    </button>
                </h2>
                <div id="pixsoft" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                    <div class="accordion-body">
                        Desenvolvimento de software e suporte técnico para diversas aplicações empresariais.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#demillus">
                        Estágio em Desenvolvimento de Software - Pix Soft (DeMillus)
                    </button>
                </h2>
                <div id="demillus" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                    <div class="accordion-body">
                        Atuei com VB e SQL, atualizando versões e desenvolvendo relatórios para diretoria e gerência.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dbtrans">
                        Estágio em Desenvolvimento de Software - DB Trans
                    </button>
                </h2>
                <div id="dbtrans" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                    <div class="accordion-body">
                        Trabalhei com ASP.NET, SQL e XML, desenvolvendo soluções para a empresa de pedágios.
                    </div>
                </div>
            </div>
        </div>
        <h3 class="mt-4">
            Formação Acadêmica
            <img src="https://img.icons8.com/?size=100&id=71188&format=png&color=000000" alt="Formação" width="24" height="24">
        </h3>
        <ul>
            <li>Administração - UFRRJ (<a href="https://vitorfm.work/Grade%20Adm%20Vitor%20Atualizada.jpeg" target="_blank">Em andamento</a>, previsão de conclusão: 2026/1)</li>
            <li>Engenharia da Computação - UERJ </li>
        </ul>
        <h3 class="mt-4">Certificações
            <img src="https://img.icons8.com/?size=100&id=6PEs2EypZuRA&format=png&color=000000" alt="Certificações" width="24" height="24">
        </h3>
        <div class="accordion" id="certificacoesAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#clac">
                        Inglês - Basico a Conversação Clac UFRJ (440h)
                    </button>
                </h2>
                <div id="clac" class="accordion-collapse collapse" data-bs-parent="#certificacoesAccordion">
                    <div class="accordion-body">
                        Curso voltado para o desenvolvimento das habilidades comunicativas em inglês, desde os fundamentos até a conversação. Com foco na prática oral e compreensão, o curso é ideal para quem deseja aprimorar a fluência e a confiança no idioma.<a href="https://vitorfm.work/clac%20en.jpg" target="_blank">Certificado</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#frontend">
                        Fundamentos de FrontEnd Development - Descomplica/Nubank (220h, 2023)
                    </button>
                </h2>
                <div id="frontend" class="accordion-collapse collapse" data-bs-parent="#certificacoesAccordion">
                    <div class="accordion-body">
                        Curso de desenvolvimento web com CS, JavaScript, UX, CSS, HTML, design thinking e gestão de projetos.
                        <a href="https://vitorfm.work/Certificado%20Descomplica.png" target="_blank">Certificado</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ifood">
                        Potência Tech iFood - Programação do Zero (68h, 2024)
                    </button>
                </h2>
                <div id="ifood" class="accordion-collapse collapse" data-bs-parent="#certificacoesAccordion">
                    <div class="accordion-body">
                        Curso com 32 módulos, desafios de código e projetos práticos em programação.
                        <a href="https://vitorfm.work/Conclus%C3%A3o%20Pot%C3%AAncia%20Tech%20IFood.jpg" target="_blank">Certificado</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#squadio">
                        Squadio - Python Data Analytics (68h, 2024)
                    </button>
                </h2>
                <div id="squadio" class="accordion-collapse collapse" data-bs-parent="#certificacoesAccordion">
                    <div class="accordion-body">
                        Curso abrangendo SQL, NoSQL, Power BI e machine learning.
                        <a href="https://vitorfm.work/R37XDBSH.pdf" target="_blank">Certificado</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#google">
                        Google Data Analytics - Coursera (Em curso 5/8 módulos, 2025)
                    </button>
                </h2>
                <div id="google" class="accordion-collapse collapse" data-bs-parent="#certificacoesAccordion">
                    <div class="accordion-body">
                        Formação cobrindo desde conceitos básicos até análise de dados com R, Spreadsheet, Data Analysis, SQL, Data Visualization, Data Cleansing.
                        <a href="https://www.coursera.org/account/accomplishments/verify/86TY6U736SMU" target="_blank">Certificado</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#IBM">
                        IA Para Todos - IBM (4hrs, 2025)
                    </button>
                </h2>
                <div id="IBM" class="accordion-collapse collapse" data-bs-parent="#certificacoesAccordion">
                    <div class="accordion-body">
                        IA para Todos" da IBM apresenta os conceitos fundamentais de Inteligência Artificial, explicando aplicações práticas, tipos de IA e o impacto dessa tecnologia no cotidiano e nos negócios. Ele é voltado para iniciantes, não exige conhecimento técnico prévio e mostra como a IA está transformando diferentes setores da sociedade.
                        <a href="https://vitorfm.work/IBM%20AI.jpg" target="_blank">Certificado</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>

    <!-- Scripts no final para garantir funcionamento -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Troca o avatar pelo olho só para exportar PDF
        document.addEventListener("DOMContentLoaded", function () {
            var downloadBtn = document.getElementById("download");
            var uxuiGroup = document.getElementById("uxuiGroup");
            var avatarPrint = document.getElementById("avatarPrint");
            var perfilLinha = document.getElementById("perfilLinha");
            var nextSibling = uxuiGroup ? uxuiGroup.nextSibling : null;
            if (downloadBtn && uxuiGroup && perfilLinha && avatarPrint) {
                downloadBtn.addEventListener("click", function () {
                    // some o grupo UXUI, mostra o avatar
                    uxuiGroup.style.display = "none";
                    avatarPrint.style.display = "inline-flex";
                    // Gera o PDF (corrigido para margens e quebra)
                    html2pdf()
                        .from(document.getElementById("content"))
                        .set({
                            margin: [10, 10, 10, 10], // margens em mm: [top, left, bottom, right]
                            filename: "curriculo_vitor.pdf",
                            pagebreak: { mode: ['avoid-all', 'css', 'legacy'] },
                            jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
                        })
                        .save()
                        .then(function () {
                            // volta tudo ao normal
                            uxuiGroup.style.display = "";
                            avatarPrint.style.display = "none";
                        });
                });
            }
        });
    </script>
</body>
</html>
