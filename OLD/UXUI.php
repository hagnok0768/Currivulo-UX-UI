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

    /* Estrelas das habilidades */
    .stars {
      color: #fbc02d; /* dourado */
      font-size: 1.1rem;
      line-height: 1;
      white-space: nowrap;
    }
    .skill-name { min-width: 65px; }
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
            <div class="flex-grow-1 mx-2">
              <span class="stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
              </span>
            </div>
          </div>

          <!-- Power BI ~65% => ★★★★☆ (3.5) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Dashboards, relatórios interativos, DAX e automação de insights.">
            <img src="https://img.icons8.com/color/28/power-bi.png" alt="Power BI" class="me-2">
            <span class="skill-name">Power BI</span>
            <div class="flex-grow-1 mx-2">
              <span class="stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
              </span>
            </div>
          </div>
          
          <!-- Azure Functions ~70% => ★★★★☆ (3.5) -->
<div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Serverless, integração de eventos e automação escalável.">
  <img src="https://img.icons8.com/color/28/azure-1.png" alt="Azure Functions" class="me-2">
  <span class="skill-name">Azure </span>
  <div class="flex-grow-1 mx-2">
    <span class="stars">
      <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
    </span>
  </div>
</div>

          <!-- Python ~55% => ★★★☆☆ (2.5) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Automação de tarefas, análise, scripts e APIs.">
            <img src="https://img.icons8.com/color/28/python--v1.png" alt="Python" class="me-2">
            <span class="skill-name">Python</span>
            <div class="flex-grow-1 mx-2">
              <span class="stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>
              </span>
            </div>
          </div>

          <!-- Excel ~65% => ★★★★☆ (3.5) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Dashboards, fórmulas avançadas, automações e integração com Power Query.">
            <img src="https://img.icons8.com/color/28/ms-excel.png" alt="Excel" class="me-2">
            <span class="skill-name">Excel</span>
            <div class="flex-grow-1 mx-2">
              <span class="stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
              </span>
            </div>
          </div>

          <!-- GSheets ~65% => ★★★★☆ (3.5) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Google Sheets para relatórios dinâmicos e automação colaborativa.">
            <img src="https://img.icons8.com/color/28/google-sheets.png" alt="GSheets" class="me-2">
            <span class="skill-name">GSheets</span>
            <div class="flex-grow-1 mx-2">
              <span class="stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
              </span>
            </div>
          </div>

          <!-- BI ~65% => ★★★★☆ (3.5) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Ferramentas de BI: análise de indicadores e tomada de decisão.">
            <img src="https://img.icons8.com/color/28/combo-chart--v1.png" alt="BI" class="me-2">
            <span class="skill-name">BI</span>
            <div class="flex-grow-1 mx-2">
              <span class="stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
              </span>
            </div>
          </div>

          <!-- Inglês ~74% => ★★★★☆ (4.0) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Inglês avançado: leitura, escrita, fala e ambiente de negócios.">
            <img src="https://img.icons8.com/color/28/usa.png" alt="Inglês" class="me-2">
            <span class="skill-name">Inglês</span>
            <div class="flex-grow-1 mx-2">
              <span class="stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
              </span>
            </div>
          </div>

          <!-- HTML ~75% => ★★★★☆ (4.0) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="HTML5 para páginas web responsivas.">
            <img src="https://img.icons8.com/color/28/html-5--v1.png" alt="HTML" class="me-2">
            <span class="skill-name">HTML</span>
            <div class="flex-grow-1 mx-2">
              <span class="stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
              </span>
            </div>
          </div>

          <!-- CSS ~70% => ★★★★☆ (3.5) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="CSS3: estilização e responsividade web.">
            <img src="https://img.icons8.com/color/28/css3.png" alt="CSS" class="me-2">
            <span class="skill-name">CSS</span>
            <div class="flex-grow-1 mx-2">
              <span class="stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
              </span>
            </div>
          </div>

          <!-- JS ~55% => ★★★☆☆ (2.5) -->
          <div class="d-flex align-items-center" data-bs-toggle="tooltip" title="JavaScript para interatividade básica e scripts web.">
            <img src="https://img.icons8.com/color/28/javascript--v1.png" alt="JS" class="me-2">
            <span class="skill-name">JS</span>
            <div class="flex-grow-1 mx-2">
              <span class="stars">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>
              </span>
            </div>
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
            <a href="https://vitorfm.work/clac%20en.jpg" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Curso de inglês prático e completo (CLAC UFRJ)">
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
            <a href="https://www.coursera.org/account/accomplishments/verify/86TY6U736SMU" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Google Data Analytics Coursera (em andamento)">
              <img src="https://img.icons8.com/color/48/google-logo.png" width="40" alt="Google Data"><br>
              <small>Google Data<br>Analytics</small><br>
              <span class="badge bg-warning text-dark">Em andamento</span>
            </a>
            <a href="https://vitorfm.work/IBM%20AI.jpg" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Curso introdutório de Inteligência Artificial promovido pelo Movimento IA Brasil, StartSe e IBM.">
              <img src="https://img.icons8.com/color/48/ibm.png" width="40" alt="IBM"><br>
              <small>IA para<br>Todos</small>
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

            
            <a href="https://vitorfm.work/NMFSBDB9.pdf" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title=" 3 dias práticos e ao vivo como criar agentes de IA com GitHub Copilot, Azure Functions, Copilot Studio e Azure DevOps para acelerar a carreira no desenvolvimento moderno.">
              <img src="https://vitorfm.work/9c3dfd3b-a832-4bac-9380-e5b7de2be140.webp" width="40" alt="DIO"><br>
              <small>Microsoft Week <br>Vibe Coding</small><br>
             
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
  <script>
    // Ativar tooltips Bootstrap em todos os elementos marcados
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl, {html: true});
    });
  </script>
</body>
</html>
