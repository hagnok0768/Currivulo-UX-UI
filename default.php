<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Currículo - Vitor de Freitas Morais UX/UI com Visualização de Dados</title>
  <meta name="description" content="Profissional de Administração e Ciência de Dados com experiência em análise, visualização e gestão estratégica de dados.">
  <link rel="icon" type="image/png" href="BI.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome para as estrelas -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <style>
    body { background: #f7f9fa; }
    .progress { background: #e9ecef; }
    @media (max-width: 100%) {
      .row.g-4.justify-content-center {
        flex-direction: column;
        align-items: stretch;
      }
      .col-12.col-md-5.col-lg-3, .col-12.col-md-7.col-lg-6, .col-12.col-lg-3 {
        max-width: 100%;
        flex: 100%;
      }
    }
    .hover-text {
      position: relative;
      display: inline-block;
      cursor: pointer;
      font-weight: bold;
      color: Red;
    }

    .hover-text img {
      display: none;
      position: absolute;
      top: 120%;
      left: 0;
      width: 200px;
      z-index: 100;
      border: 1px solid #ccc;
      background: #fff;
      box-shadow: 0 0 5px rgba(0,0,0,0.3);
    }

    .hover-text:hover img {
      display: block;
    }

    /* Estrelas das habilidades (substituídas por barras elétricas) */
    .stars { display:none; }
    .skill-name { min-width: 80px; font-weight:600; }

    /* Electric glowing bars */
    .skill-bar { height: 14px; background: #0b1218; border-radius: 999px; padding: 3px; box-shadow: inset 0 -3px 8px rgba(0,0,0,0.7); overflow: hidden; position: relative; }
    .skill-fill {
      height: 100%; border-radius: 999px; width: 0%;
      background-size: 200% 100%;
      transition: width 900ms cubic-bezier(.2,.9,.2,1), box-shadow .18s ease, filter .18s ease;
      box-shadow: 0 0 18px rgba(0,0,0,0.12) inset;
      position: relative; overflow: hidden;
    }
    /* animated moving energy inside the fill */
    .skill-fill::before{
      content: '';
      position: absolute; left: -50%; top: 0; bottom: 0; width: 250%;
      background: linear-gradient(90deg, rgba(255,255,255,0.06) 0%, rgba(255,255,255,0.02) 8%, rgba(255,255,255,0.12) 12%, rgba(255,255,255,0) 30%);
      mix-blend-mode: overlay; transform: skewX(-10deg);
      animation: energy-move 1.6s linear infinite;
      pointer-events: none;
      opacity: .9;
    }
    @keyframes energy-move { 0% { transform: translateX(-40%) skewX(-10deg);} 50% { transform: translateX(0%) skewX(-10deg);} 100% { transform: translateX(40%) skewX(-10deg);} }

    /* glow pulse */
    .skill-fill.glow { box-shadow: 0 0 60px currentColor, 0 0 140px currentColor, 0 0 200px rgba(0,0,0,0.2) inset; filter: saturate(1.3) brightness(1.2); }

    /* constant electric glow on all bars */
    .skill-fill { box-shadow: 0 0 20px currentColor, 0 0 40px rgba(0,0,0,0.1) inset; }

    /* color variants using CSS variables for easy tweak */
    .electric-red { --c1: #ff6b6b; --c2: #ff2e2e; color: var(--c2); }
    .electric-gold { --c1: #ffe88a; --c2: #f4b400; color: var(--c2); }
    .electric-blue { --c1: #9ff0ff; --c2: #2aa7ff; color: var(--c2); }
    .electric-red{ background: none; }
    .electric-gold{ background: none; }
    .electric-blue{ background: none; }
    .electric-red .skill-fill{ background: linear-gradient(90deg,var(--c1),var(--c2)); box-shadow: 0 0 20px rgba(255,90,90,0.45); }
    .electric-gold .skill-fill{ background: linear-gradient(90deg,var(--c1),var(--c2)); box-shadow: 0 0 18px rgba(244,180,0,0.35); }
    .electric-blue .skill-fill{ background: linear-gradient(90deg,var(--c1),var(--c2)); box-shadow: 0 0 20px rgba(42,167,255,0.45); }

    /* percentage label on the right */
    .skill-perc { min-width:44px; text-align:right; font-size:.86rem; color:#64748b; }

    /* small responsive tweak */
    @media (max-width: 576px){ .skill-name{ min-width:64px; font-size:.95rem } .skill-perc{ min-width:36px; font-size:.8rem } }

    /* intensified electric overlay */
    .skill-fill::after {
      content: '';
      position: absolute; inset: 0;
      background: linear-gradient(90deg, rgba(255,255,255,0.18) 0%, rgba(255,255,255,0.02) 8%, rgba(255,255,255,0.12) 18%, rgba(255,255,255,0) 40%);
      mix-blend-mode: screen;
      pointer-events: none;
      opacity: 1;
      filter: url(#electricNoise);
      transform: translateZ(0);
      animation: overlay-shift 1.0s linear infinite;
    }
    @keyframes overlay-shift { 0%{ transform: translateX(-10%);} 50%{ transform: translateX(6%);} 100%{ transform: translateX(-10%);} }

    /* bolt sweep element inside fill (bigger, brighter, faster) */
    .skill-fill .bolt {
      position: absolute; top: -12%; left: -40%; height: 140%; width: 40%;
      pointer-events: none; mix-blend-mode: screen;
      background: linear-gradient(90deg, rgba(255,255,255,0.98) 0%, rgba(255,255,255,0.28) 18%, rgba(255,255,255,0.06) 36%, transparent 60%);
      filter: blur(12px) drop-shadow(0 0 12px rgba(255,255,255,0.25));
      transform: skewX(-12deg) translateX(-120%);
      opacity: 0;
      box-shadow: 0 0 50px currentColor, 0 0 120px currentColor, 0 0 18px rgba(255,255,255,0.3);
      transition: opacity .08s ease;
      will-change: transform, opacity, filter;
    }
    @keyframes bolt-sweep { 0% { transform: translateX(-140%) skewX(-12deg); opacity:0 } 8%{ opacity:1 } 30%{ transform: translateX(40%) skewX(-12deg); opacity:0.95 } 60%{ transform: translateX(120%) skewX(-12deg); opacity:0.6 } 100%{ transform: translateX(240%) skewX(-12deg); opacity:0 } }

    /* quick flash burst inside the fill to simulate an electric strike */
    .skill-fill .flash { position:absolute; inset:0; pointer-events:none; opacity:0; transform:scale(.9);
      background: radial-gradient(circle at 20% 50%, rgba(255,255,255,0.98), rgba(255,255,255,0.5) 12%, rgba(255,255,255,0.12) 28%, transparent 40%);
      mix-blend-mode: screen; filter: blur(8px) drop-shadow(0 0 18px rgba(255,255,255,0.6));
      animation: flash-burst 420ms ease-out forwards; }
    @keyframes flash-burst { 0%{ opacity:0; transform:scale(.96);} 40%{ opacity:1; transform:scale(1);} 100%{ opacity:0; transform:scale(1.06);} }

    /* constant electric sparks inside the fill */
    .skill-fill .spark { position:absolute; width:3px; height:3px; background:currentColor; border-radius:50%; pointer-events:none;
      box-shadow: 0 0 10px currentColor, 0 0 20px currentColor; opacity:0; animation: spark-flicker 0.6s ease-in-out infinite; }
    @keyframes spark-flicker { 0%,100%{ opacity:0; transform:scale(0.5);} 50%{ opacity:1; transform:scale(1.2);} }

    /* electric arc lines sweeping across the fill */
    .skill-fill .arc { position:absolute; top:0; bottom:0; width:4px; background: linear-gradient(to bottom, transparent, currentColor, transparent);
      pointer-events:none; opacity:0; transform: translateX(-100%); animation: arc-sweep 0.3s ease-out forwards; }
    @keyframes arc-sweep { 0%{ opacity:0; transform: translateX(-100%); } 50%{ opacity:1; transform: translateX(50%); } 100%{ opacity:0; transform: translateX(200%); } }
  </style>
</head>
<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="https://vitorfm.work/">vitorfm.<span style="color:#259d59">work</span></a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/hagnok0768?tab=repositories" target="_blank">
              Meus Repositórios
              <img src="https://img.icons8.com/ios-filled/18/000000/github.png" style="margin-left:2px;" alt="GitHub">
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://vitorfm.work/UXUI-EN.php">
              English Version
              <img src="https://img.icons8.com/color/18/usa.png" style="margin-left:2px;" alt="USA">
            </a>
          </li>
        </ul>
      </div>
      <b>UX/UI com Visualização de Dados</b>
    </div>
  </nav>

  <div class="container-fluid py-4">
    <div class="row g-4 justify-content-center">
      <!-- HABILIDADES -->
      <div class="col-12 col-md-5 col-lg-3">
        <div class="card shadow-sm p-3 h-100">
          <h5 class="mb-3">Habilidades</h5>

          <!-- SQL ~60% => ★★★★☆ (3.5 arred. visual) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Consultas SQL para análise de dados, automação de relatórios e integração de bancos.">
            <img src="https://img.icons8.com/color/28/sql.png" alt="SQL" class="me-2">
            <span class="skill-name">SQL</span>
            <div class="flex-grow-1 mx-2 electric-gold">
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:60%" data-perc="60"></div>
              </div>
            </div>
            <div class="skill-stars" data-perc="60"></div>
          </div>

          <!-- Power BI ~65% => ★★★★☆ (3.5) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Dashboards, relatórios interativos, DAX e automação de insights.">
            <img src="https://img.icons8.com/color/28/power-bi.png" alt="Power BI" class="me-2">
            <span class="skill-name">Power BI</span>
            <div class="flex-grow-1 mx-2 electric-gold">
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:65%" data-perc="65"></div>
              </div>
            </div>
            <div class="skill-stars" data-perc="65"></div>
          </div>
          
          <!-- Azure Functions ~70% => ★★★★☆ (3.5) -->
<div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Serverless, integração de eventos e automação escalável.">
  <img src="https://img.icons8.com/color/28/azure-1.png" alt="Azure Functions" class="me-2">
  <span class="skill-name">Azure </span>
  <div class="flex-grow-1 mx-2 electric-gold">
    <div class="skill-bar" aria-hidden="true">
      <div class="skill-fill" style="width:70%" data-perc="70"></div>
    </div>
  </div>
  <div class="skill-stars" data-perc="70"></div>
</div>

          <!-- Python ~55% => ★★★☆☆ (2.5) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Automação de tarefas, análise, scripts e APIs.">
            <img src="https://img.icons8.com/color/28/python--v1.png" alt="Python" class="me-2">
            <span class="skill-name">Python</span>
            <div class="flex-grow-1 mx-2 electric-blue">
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:55%" data-perc="55"></div>
              </div>
            </div>
            <div class="skill-stars" data-perc="55"></div>
          </div>

          <!-- Excel ~65% => ★★★★☆ (3.5) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Dashboards, fórmulas avançadas, automações e integração com Power Query.">
            <img src="https://img.icons8.com/color/28/ms-excel.png" alt="Excel" class="me-2">
            <span class="skill-name">Excel</span>
            <div class="flex-grow-1 mx-2 electric-gold">
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:65%" data-perc="65"></div>
              </div>
            </div>
            <div class="skill-stars" data-perc="65"></div>
          </div>

          <!-- GSheets ~65% => ★★★★☆ (3.5) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Google Sheets para relatórios dinâmicos e automação colaborativa.">
            <img src="https://img.icons8.com/color/28/google-sheets.png" alt="GSheets" class="me-2">
            <span class="skill-name">GSheets</span>
            <div class="flex-grow-1 mx-2 electric-blue">
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:65%" data-perc="65"></div>
              </div>
            </div>
            <div class="skill-stars" data-perc="65"></div>
          </div>

          <!-- BI ~65% => ★★★★☆ (3.5) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Ferramentas de BI: análise de indicadores e tomada de decisão.">
            <img src="https://img.icons8.com/color/28/combo-chart--v1.png" alt="BI" class="me-2">
            <span class="skill-name">BI</span>
            <div class="flex-grow-1 mx-2 electric-gold">
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:65%" data-perc="65"></div>
              </div>
            </div>
            <div class="skill-stars" data-perc="65"></div>
          </div>

          <!-- Inglês ~74% => ★★★★☆ (4.0) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Inglês avançado: leitura, escrita, fala e ambiente de negócios.">
            <img src="https://img.icons8.com/color/28/usa.png" alt="Inglês" class="me-2">
            <span class="skill-name">Inglês</span>
            <div class="flex-grow-1 mx-2 electric-blue">
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:74%" data-perc="74"></div>
              </div>
            </div>
            <div class="skill-stars" data-perc="74"></div>
          </div>

          <!-- HTML ~75% => ★★★★☆ (4.0) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="HTML5 para páginas web responsivas.">
            <img src="https://img.icons8.com/color/28/html-5--v1.png" alt="HTML" class="me-2">
            <span class="skill-name">HTML</span>
            <div class="flex-grow-1 mx-2 electric-blue">
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:75%" data-perc="75"></div>
              </div>
            </div>
            <div class="skill-stars" data-perc="75"></div>
          </div>

          <!-- CSS ~70% => ★★★★☆ (3.5) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="CSS3: estilização e responsividade web.">
            <img src="https://img.icons8.com/color/28/css3.png" alt="CSS" class="me-2">
            <span class="skill-name">CSS</span>
            <div class="flex-grow-1 mx-2 electric-red">
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:70%" data-perc="70"></div>
              </div>
            </div>
            <div class="skill-stars" data-perc="70"></div>
          </div>

          <!-- JS ~55% => ★★★☆☆ (2.5) -->
          <div class="d-flex align-items-center" data-bs-toggle="tooltip" title="JavaScript para interatividade básica e scripts web.">
            <img src="https://img.icons8.com/color/28/javascript--v1.png" alt="JS" class="me-2">
            <span class="skill-name">JS</span>
            <div class="flex-grow-1 mx-2 electric-red">
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:55%" data-perc="55"></div>
              </div>
            </div>
            <div class="skill-stars" data-perc="55"></div>
          </div>
        </div>
      </div>

      <!-- SOBRE MIM E CERTIFICADOS -->
      <div class="col-12 col-md-7 col-lg-5">
        <div class="card shadow-sm p-4 h-100">
             <h2 class="mb-3">Vitor de Freitas Morais</h2>
          <h5 class="mb-3">Sobre Mim</h5>
          <div class="mb-3" style="font-size:1.08rem;">
            Administrador com perfil analítico e tech, focado em transformar dados em resultados para negócios.
          </div>
          <div class="bg-light rounded-3 p-3 mb-3">
            <h6 class="fw-bold mb-2">Formação Acadêmica</h6>
            <div class="d-flex flex-wrap gap-3 align-items-center">
              <div class="d-flex align-items-center bg-white rounded-pill px-3 py-2 shadow-sm" style="min-width:210px;">
                <a href="https://vitorfm.work/Grade%20Adm%20Vitor%20Atualizada.jpeg" target="_blank" class="me-2">
                  <img src="https://img.icons8.com/color/48/000000/university.png" alt="Administração" width="28" height="28"/>
                </a>
                <div>
                  <a href="https://vitorfm.work/Grade%20Adm%20Vitor%20Atualizada.jpeg" target="_blank" class="fw-semibold text-decoration-none text-dark">Administração</a>
                  <div class="small text-muted">UFRRJ <span class="badge bg-warning text-dark ms-1">Em andamento</span></div>
                  <div class="small text-secondary">Previsão: 2026/1</div>
                </div>
              </div>
              <div class="d-flex align-items-center bg-white rounded-pill px-3 py-2 shadow-sm" style="min-width:210px;">
                <img src="https://img.icons8.com/color/48/000000/engineering.png" alt="Engenharia da Computação" width="28" height="28" class="me-2"/>
                <div>
                  <span class="fw-semibold">Eng. da Computação</span>
                  <div class="small text-muted">UERJ</div>
                </div>
              </div>
            </div>
          </div>
          <h6 class="fw-bold mb-2">Certificados</h6>
          <div class="d-flex flex-wrap gap-3 justify-content-center">
            <a href="https://vitorfm.work/clac%20en.jpg" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Curso de inglês prático e completo (CLAC UFRJ, 400h)">
              <img src="https://img.icons8.com/color/48/language.png" width="40" alt="Idioma"><br>
              <small>Inglês<br>CLAC UFRJ</small>
            </a>
            <a href="https://vitorfm.work/Certificado%20Descomplica.png" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Desenvolvimento web com CSS, JavaScript, UX, HTML, design thinking e gestão de projetos (220h, 2023)">
              <img src="https://img.icons8.com/color/48/source-code.png" width="40" alt="Front-end"><br>
              <small>FrontEnd<br>Descomplica</small>
            </a>
            <a href="https://vitorfm.work/Conclus%C3%A3o%20Pot%C3%AAncia%20Tech%20IFood.jpg" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Programação do Zero, 32 módulos e desafios práticos em programação (68h, 2024)">
              <img src="https://img.icons8.com/color/48/chef-hat.png" width="40" alt="iFood"><br>
              <small>Potência Tech<br>iFood</small>
            </a>
            <a href="https://vitorfm.work/R37XDBSH.pdf" class="text-center text-decoration-none" target="_blank" data-bs-toggle="tooltip" title="SQL, NoSQL, Power BI e machine learning (68h, 2024)">
              <img src="https://img.icons8.com/color/48/python.png" width="40" alt="Python"><br>
              <small>Squadio<br>Analytics</small>
            </a>
            <a href="https://www.coursera.org/account/accomplishments/verify/86TY6U736SMU" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Google Data Analytics Coursera">
              <img src="https://img.icons8.com/color/48/google-logo.png" width="40" alt="Google Data"><br>
              <small>Google Data<br>Analytics</small><br>
             
            </a>
            <a href="https://vitorfm.work/LSPILSMF.png" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Desde a coleta e modelagem até a criação de dashboards interativos para tomada de decisões, aplicando ETL, tratamento e storytelling com dados, preparando-os para atuar em áreas como análise de dados, M.I.S. e inteligência de negócios.">
              <img src="https://vitorfm.work/klabinIA" width="40" alt="Excel e Power BI"><br>
              <small>Excel e Power BI <br>Dashboards</small>
            </a>
            <a href="https://vitorfm.work/DataXPE.pdf" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="O Minicamp Data Beginner da XPE apresenta os fundamentos, carreiras e ferramentas essenciais da área de dados para quem está começando.">
              <img src="https://vitorfm.work/XPE.png" width="40" alt="XPE"><br>
              <small>Minicamp<br>Data Miner</small>
            </a>
            <a href="https://vitorfm.work/HUO5JUNU.png" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title=" Fluxo de análise de dados com ferramentas como SQL, Excel com copilot, Azure Services e IA, aplicando projetos práticos com ETL, dashboards e machine learning. (104hr, 2025)">
              <img src="https://vitorfm.work/dio.webp" width="40" alt="DIO"><br>
              <small>Dio Randstad <br>Análise de Dados</small><br>
              
            </a>
            
            <a href="https://vitorfm.work/VITOR%20DE%20FREITAS%20MORAIS.pdf" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Curso de Qualificação Profissional em Inovação e Design Thinking (180h, 2025)">
                <img src="https://vitorfm.work/e18c7813-3115-4def-819f-0a277644516a.png" width="40" alt="Inovação e Design Thinking"><br>
                <small>Inovação </br>e Design </br>Thinking</small><br>
            </a>

            

            
            <a href="https://vitorfm.work/Estatística_conceitos_e_representações-Certificado_250728_153957%5B1%5D.pdf" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Curso Estatística: conceitos e representações – IFRS (20h, 2025)">
              <img src="https://vitorfm.work/44b8ca65-a423-406d-bc1a-7e77a59feaf0.png" width="40" alt="Estatística"><br>
              <small>IFRS<br>Estatística</small><br>
            </a>

            
          </div>
        </div>
      </div>

      <!-- EXPERIÊNCIA + CONTATO -->
      <div class="col-12 col-lg-4">
        <div class="card shadow-sm p-4 h-100">
          <h5 class="mb-3">Experiência Profissional</h5>
          <div class="accordion mb-4" id="experienciaAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#exp1">
                  Estágio em Suporte e Manutenção em Hardware – ADM (NBS)
                </button>
              </h2>
              <div id="exp1" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                <div class="accordion-body">
                  Atuei com suporte técnico e manutenção de hardware para otimizar a infraestrutura da empresa publicitária.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#exp3">
                  Estágio em Desenvolvimento de Software – Pix Soft (DeMillus)
                </button>
              </h2>
              <div id="exp3" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                <div class="accordion-body">
                  Atuei com VB e SQL, atualizando versões e desenvolvendo relatórios para diretoria e gerência.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#exp4">
                  Estágio em Desenvolvimento de Software – DB Trans
                </button>
              </h2>
              <div id="exp4" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                <div class="accordion-body">
                  Trabalhei com ASP.NET, SQL e XML, desenvolvendo soluções para a empresa de pedágios.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#exp5">
                  Gestor de Marketplaces (Atual)
                </button>
              </h2>
              <div id="exp5" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                <div class="accordion-body">
                  Atuo gerenciando vendas em plataformas como Mercado Livre, eBay e Amazon, otimizando anúncios, analisando métricas de desempenho e implementando estratégias para aumento de vendas.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed text-success fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#exp6">
                  Estágio BI Análise de Dados - Ligg Contact Services (Atual)
                </button>
              </h2>
              <div id="exp6" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                <div class="accordion-body text-success">
                  Suporte em Business Intelligence, realizando análises, dashboards e cruzamento de dados de sistemas para gerar insights e apoiar decisões estratégicas na área de cobrança com  
                  <span class="hover-text">
                    Visualização de Dados.
                    <img src="visu.png" alt="Preview">
                  </span>
                </div>
              </div>
            </div>
          </div>
          <h5 class="mb-2">Contato: Vitor de Freitas</h5>
          <ul class="list-unstyled mb-0">
            <li>
              <img src="https://img.icons8.com/color/20/whatsapp.png" alt="WhatsApp">
              <a href="https://wa.me/5521987385290?text=Olá%2C%20quero%20falar%20com%20você!" target="_blank">WhatsApp: +55 21 98738-5290</a>
            </li>
            <li>
              <img src="https://img.icons8.com/color/20/new-post.png" alt="Email">
              Email: hagnok@hotmail.com
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- SCRIPTS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- SVG filter defs for electric noise (stronger baseline + named displacement map) -->
  <svg width="0" height="0" style="position:absolute;left:-9999px;visibility:hidden" aria-hidden="true">
    <defs>
      <filter id="electricNoise">
        <!-- stronger baseline turbulence for more visible displacement -->
        <feTurbulence type="fractalNoise" baseFrequency="0.06" numOctaves="2" stitchTiles="stitch" result="noise" />
        <feColorMatrix type="saturate" values="0" in="noise" result="mono" />
        <feComponentTransfer in="mono" result="disp">
          <feFuncR type="table" tableValues="0 1" />
          <feFuncG type="table" tableValues="0 1" />
          <feFuncB type="table" tableValues="0 1" />
        </feComponentTransfer>
        <!-- larger scale produces a much more dramatic 'electric' jitter -->
        <feDisplacementMap id="electricDisp" in="SourceGraphic" in2="disp" scale="40" xChannelSelector="R" yChannelSelector="G" />
      </filter>
    </defs>
  </svg>
  <script>
    // Animate skill fills from 0 to their data-perc and add electric glow pulses.
    console.log('Electric bars script starting...');
    document.addEventListener('DOMContentLoaded', function(){
      console.log('DOM loaded, initializing electric effects...');
      try{
        if (window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
          // if reduced motion, just ensure fills show final width
          document.querySelectorAll('.skill-fill').forEach(function(f){
            var p = f.getAttribute('data-perc') || f.style.width || '0%';
            f.style.width = p;
          });
          return;
        }

        document.querySelectorAll('.skill-fill').forEach(function(fill, i){
          var target = fill.getAttribute('data-perc') || fill.style.width || '0%';
          if (!/\d+%/.test(target)) target = parseInt(target,10) + '%';
          fill.style.width = '0%';
          setTimeout(function(){ fill.style.width = target; }, 80 + i*80);

          // stronger periodic glow pulses
          (function loopPulse(){
            var delay = 600 + Math.random()*1000;
            setTimeout(function(){
              fill.classList.add('glow');
              setTimeout(function(){ fill.classList.remove('glow'); }, 300 + Math.random()*200);
              loopPulse();
            }, delay);
          })();
        });
        // append stronger bolt elements and occasional sweeps + flashes for more electricity
        document.querySelectorAll('.skill-fill').forEach(function(fill){
          // add 4-6 bolt elements that run bolt-sweep animation randomly
          var bolts = 4 + Math.floor(Math.random()*3);
          for(var b=0;b<bolts;b++){
            var el = document.createElement('div'); el.className='bolt';
            el.style.animation = 'bolt-sweep ' + (0.5 + Math.random()*0.8).toFixed(2) + 's linear infinite';
            el.style.animationDelay = (Math.random()*0.8).toFixed(2) + 's';
            fill.appendChild(el);
            // periodically trigger a focused sweep (restarts animation)
            (function(elm){
              function triggerOnce(){
                elm.style.opacity = '1';
                elm.style.animation = 'none';
                void elm.offsetWidth;
                elm.style.animation = 'bolt-sweep ' + (0.5 + Math.random()*0.8).toFixed(2) + 's linear';
                var dur = 800 + Math.random()*600;
                setTimeout(function(){ elm.style.opacity='0'; }, dur*0.7);
                setTimeout(triggerOnce, 600 + Math.random()*1200);
              }
              setTimeout(triggerOnce, 150 + Math.random()*450);
            })(el);
          }

          // occasional quick flash burst to simulate electric strike
          (function(targetFill){
            function maybeFlash(){
              if (Math.random() < 0.5) { // ~50% chance each tick
                var f = document.createElement('div'); f.className='flash';
                targetFill.appendChild(f);
                setTimeout(function(){ try{ f.remove(); }catch(e){} }, 480);
              }
              setTimeout(maybeFlash, 500 + Math.random()*800);
            }
            setTimeout(maybeFlash, 400 + Math.random()*400);
          })(fill);

          // constant electric sparks
          (function(targetFill){
            function addSpark(){
              var s = document.createElement('div'); s.className='spark';
              s.style.left = Math.random()*100 + '%';
              s.style.top = Math.random()*100 + '%';
              s.style.animationDelay = Math.random()*0.8 + 's';
              targetFill.appendChild(s);
              setTimeout(function(){ try{ s.remove(); }catch(e){} }, 800 + Math.random()*400);
              setTimeout(addSpark, 200 + Math.random()*400);
            }
            setTimeout(addSpark, 100 + Math.random()*200);
          })(fill);

          // electric arcs sweeping across
          (function(targetFill){
            function addArc(){
              var a = document.createElement('div'); a.className='arc';
              targetFill.appendChild(a);
              setTimeout(function(){ try{ a.remove(); }catch(e){} }, 300);
              setTimeout(addArc, 800 + Math.random()*1200);
            }
            setTimeout(addArc, 200 + Math.random()*400);
          })(fill);
        });
      }catch(e){ console.error('skill fill init', e); }

      // animate the SVG turbulence baseFrequency and displacement 'scale' for living electric noise
      try{
        var turb = document.querySelector('filter#electricNoise feTurbulence');
        var disp = document.getElementById('electricDisp');
        if(turb){
          setInterval(function(){
            // vary base frequency more visibly
            var v = (0.02 + Math.random()*0.12).toFixed(3);
            turb.setAttribute('baseFrequency', v);
          }, 180 + Math.random()*340);
        }
        if(disp){
          setInterval(function(){
            // animate displacement intensity between 20 and 50 for bursts
            var s = 20 + Math.floor(Math.random()*30);
            disp.setAttribute('scale', s);
          }, 300 + Math.random()*600);
        }
      }catch(err){ /* non-fatal */ }
    });
  </script>
  <script>
    // Generate star ratings based on data-perc
    document.addEventListener('DOMContentLoaded', function(){
      document.querySelectorAll('.skill-stars').forEach(function(el) {
        const perc = parseInt(el.getAttribute('data-perc'));
        const fullStars = Math.floor(perc / 20);
        const halfStar = (perc % 20) >= 10 ? 1 : 0;
        const emptyStars = 5 - fullStars - halfStar;
        let stars = '';
        for (let i = 0; i < fullStars; i++) stars += '<i class="fas fa-star"></i>';
        if (halfStar) stars += '<i class="fas fa-star-half-alt"></i>';
        for (let i = 0; i < emptyStars; i++) stars += '<i class="far fa-star"></i>';
        el.innerHTML = stars;
      });
    });
  </script>
  <script>
    // Ativar tooltips Bootstrap em todos os elementos marcados
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl, {html: true});
    });
  </script>
</body>
</html>
