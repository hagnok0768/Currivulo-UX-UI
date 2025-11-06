<!DOCTYPE html>
<html lang="pt-br" data-theme="light">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Vitor de Freitas Morais — UX/UI & Visualização de Dados</title>
  <meta name="description" content="Currículo com foco em UX/UI e Visualização de Dados, com KPIs, radar de habilidades, timeline e acessibilidade.">
  <meta name="theme-color" content="#259d59">
  <meta property="og:title" content="Vitor de Freitas Morais — UX/UI & Data Viz">
  <meta property="og:description" content="Currículo com foco em UX/UI e Visualização de Dados, KPIs e radar de habilidades.">

  <!-- Perf -->
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
  <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>

  <link rel="icon" type="image/png" href="BI.png">

  <!-- Libs -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>

  <style>
    :root{
      --ink:#0f172a; --muted:#64748b; --card:#ffffff; --bg:#f7f9fa; --line:#e5e7eb;
      --brand:#259d59; --accent:#f59e0b; --link:#0ea5e9; --shadow:0 10px 24px rgba(2,8,23,.06);
    }

    /* === DARK THEME PREMIUM === */
    [data-theme="dark"]{
      --ink:#E6E8EC; --muted:#A9B4C0; --card:#0F172A; --bg:#0B1220; --line:#1E293B;
      --brand:#22C55E; --accent:#FACC15; --link:#93C5FD; --shadow:0 1px 0 rgba(255,255,255,.03), 0 18px 28px rgba(0,0,0,.45);
    }
    [data-theme="dark"] body{
      background:
        radial-gradient(1000px 600px at -20% -10%, rgba(47,72,88,.22), transparent 60%),
        radial-gradient(900px 500px at 120% 110%, rgba(32,58,46,.18), transparent 60%),
        var(--bg);
    }

    body{ background:var(--bg); color:var(--ink); }
    .navbar{ background:var(--card); }
    [data-theme="dark"] .navbar{ border-bottom:1px solid var(--line); }
    .navbar-brand span{ color:var(--brand); }

    .card{ border:1px solid var(--line); border-radius:14px; background:var(--card); box-shadow:var(--shadow); }
    .section-title{ font-weight:700; }
    a{ color:var(--link); }
    a:hover{ opacity:1; text-decoration:underline; }
    .btn-soft{ background:var(--card); color:var(--ink); border:1px solid var(--line); }
    .btn-soft:hover{ background:rgba(0,0,0,.03); }

    /* Habilidades */
    .skill-row{ position:relative; }
    .stars{ color:var(--accent); font-size:1.1rem; line-height:1; white-space:nowrap; }
    .skill-name{ min-width:88px; }
    .skill-row[data-level]:hover::after{
      content: attr(data-level) "%";
      position:absolute; right:0; top:-8px; transform: translateY(-100%);
      background:var(--card); border:1px solid var(--line); padding:.15rem .4rem;
      border-radius:8px; font-size:.75rem; font-weight:700; color:var(--ink);
      box-shadow:var(--shadow);
    }

    /* KPIs */
    .kpi{ display:flex; align-items:center; gap:1rem; padding:12px 14px; border-radius:12px; background:var(--card); border:1px solid var(--line); }
    .kpi-ctx{ position: relative; width:72px; height:72px; flex:0 0 72px; }
    .kpi-ctx canvas{ width:72px; height:72px; }
    .kpi-center{ position:absolute; inset:0; display:flex; align-items:center; justify-content:center; font-weight:700; font-size:14px; pointer-events:none; }
    .kpi-info{ flex:1 1 auto; min-width:0; }
    .kpi-info h6{ margin:0; font-weight:700; }
    .kpi-info small{ color:var(--muted); }

    /* Pills */
    .badge-pill{
      border-radius:999px; padding:.45rem .8rem; background: color-mix(in hsl, var(--card) 92%, white 8%);
      border:1px solid var(--line); display:inline-flex; align-items:center; gap:.6rem; text-decoration:none; color:var(--ink);
    }
    .badge-pill:hover{ background: color-mix(in hsl, var(--card) 85%, white 15%); }
    .badge-pill img{ border-radius:6px; }

    /* Timeline (primeira letra não corta) */
    .timeline{ position:relative; padding-left:52px; }
    .timeline::before{
      content:""; position:absolute; left:24px; top:0; bottom:0; width:2px;
      background:linear-gradient(#334155,#1E293B); border-radius:2px; z-index:0;
    }
    .t-item{ position:relative; margin-bottom:16px; padding-left:0; z-index:1; }
    .t-item::before{
      content:""; position:absolute; left:-28px; top:.4rem; width:12px; height:12px; background:#10b981;
      border:2px solid var(--card); border-radius:50%; box-shadow:0 0 0 2px rgba(34,197,94,.35); z-index:0;
      transform: translateX(-100%);
    }
    .t-title{ font-weight:600; }

    /* Hover-card experiência */
    .t-hover{
      display:none; position:absolute; left:calc(100% + 14px); top:0;
      min-width:260px; max-width:320px; padding:.75rem .9rem;
      background:var(--card); border:1px solid var(--line); border-radius:12px; box-shadow:var(--shadow);
      color:var(--ink);
    }
    .t-item:hover .t-hover, .t-item:focus-within .t-hover{ display:block; }
    .t-badges > span{ display:inline-block; border:1px solid var(--line); border-radius:999px; padding:.15rem .5rem; margin-right:.25rem; margin-top:.25rem; font-size:.75rem; }

    /* Preview inline */
    .viz-preview{ position:relative; display:inline-block; color:var(--link); font-weight:600; text-decoration: underline dotted; }
    .viz-preview img{ display:none; position:absolute; top:135%; left:0; width:220px; border:1px solid var(--line); background:#fff; box-shadow:var(--shadow); z-index:10; }
    .viz-preview:hover img{ display:block; }

    /* Foco */
    :focus-visible{ outline:2px dashed var(--brand); outline-offset:3px; border-radius:6px; }

    /* ---------- PRINT: A4 LANDSCAPE, 1 PÁGINA ---------- */
    @page{ size: A4 landscape; margin:10mm; }
    @media print{
      html, body{ background:#fff; }
      .navbar, .no-print{ display:none !important; }

      /* grid fixo para caber em 1 página (3 colunas) */
      #print-grid{
        display:grid !important;
        grid-template-columns: 1fr 1.6fr 1fr;
        gap:8mm !important;
        margin:0 !important;
      }
      #print-grid > *{ padding:0 !important; margin:0 !important; }

      body{ font-size:12px; }
      h2{ font-size:20px; }
      .section-title{ font-size:16px; }

      .card{ box-shadow:none !important; }
      .kpi{ padding:8px 10px; gap:10px; }
      .kpi-ctx{ width:58px; height:58px; flex-basis:58px; }
      .kpi-ctx canvas{ width:58px !important; height:58px !important; print-color-adjust: exact; }
      .kpi-center{ font-size:12px; }
      #radarSkills{ width:100% !important; height:160px !important; }

      .card, .kpi, .timeline, aside, section, .t-item{ break-inside: avoid; page-break-inside: avoid; }
      .t-hover, .viz-preview img{ display:none !important; } /* sem hovers no PDF */
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg border-bottom sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="https://vitorfm.work/" target="_blank" rel="noopener">vitorfm.<span>work</span></a>
      <div class="d-flex align-items-center gap-2 ms-auto no-print">
        <a class="btn btn-soft btn-sm" href="https://github.com/hagnok0768?tab=repositories" target="_blank" rel="noopener"><i class="fa-brands fa-github me-1"></i> Repositórios</a>
        <a class="btn btn-soft btn-sm" href="https://vitorfm.work/UXUI-EN.php" target="_blank" rel="noopener"><i class="fa-solid fa-globe me-1"></i> English Version</a>
        <button id="themeToggle" class="btn btn-soft btn-sm" type="button" aria-pressed="false" aria-label="Alternar tema claro/escuro"><i class="fa-solid fa-moon me-1"></i> Tema</button>
        <button class="btn btn-success btn-sm" onclick="window.print()" type="button"><i class="fa-solid fa-file-arrow-down me-1"></i> Baixar PDF</button>
      </div>
    </div>
  </nav>

  <main class="container-fluid py-4">
    <!-- wrapper que o print usa como grid fixo -->
    <div id="print-grid" class="row g-4 justify-content-center">

      <!-- ESQ — Habilidades -->
      <aside class="col-12 col-md-5 col-lg-3">
        <div class="card p-3 h-100">
          <h5 class="section-title mb-3">Habilidades</h5>

          <div class="d-flex align-items-center mb-2 skill-row" data-level="60" title="Consultas SQL para análise e automações.">
            <img loading="lazy" src="https://img.icons8.com/color/28/sql.png" alt="SQL" class="me-2">
            <span class="skill-name">SQL</span>
            <div class="flex-grow-1 mx-2"><span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i></span></div>
          </div>

          <div class="d-flex align-items-center mb-2 skill-row" data-level="65" title="Power BI: DAX, modelagem e dashboards.">
            <img loading="lazy" src="https://img.icons8.com/color/28/power-bi.png" alt="Power BI" class="me-2">
            <span class="skill-name">Power BI</span>
            <div class="flex-grow-1 mx-2"><span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i></span></div>
          </div>

          <div class="d-flex align-items-center mb-2 skill-row" data-level="55" title="Python para automações e análise.">
            <img loading="lazy" src="https://img.icons8.com/color/28/python--v1.png" alt="Python" class="me-2">
            <span class="skill-name">Python</span>
            <div class="flex-grow-1 mx-2"><span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></span></div>
          </div>

          <div class="d-flex align-items-center mb-2 skill-row" data-level="65" title="Excel avançado + Power Query.">
            <img loading="lazy" src="https://img.icons8.com/color/28/ms-excel.png" alt="Excel" class="me-2">
            <span class="skill-name">Excel</span>
            <div class="flex-grow-1 mx-2"><span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i></span></div>
          </div>

          <div class="d-flex align-items-center mb-2 skill-row" data-level="65" title="Relatórios colaborativos.">
            <img loading="lazy" src="https://img.icons8.com/color/28/google-sheets.png" alt="Google Sheets" class="me-2">
            <span class="skill-name">GSheets</span>
            <div class="flex-grow-1 mx-2"><span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i></span></div>
          </div>

          <div class="d-flex align-items-center mb-2 skill-row" data-level="65" title="BI & tomada de decisão.">
            <img loading="lazy" src="https://img.icons8.com/color/28/combo-chart--v1.png" alt="Business Intelligence" class="me-2">
            <span class="skill-name">BI</span>
            <div class="flex-grow-1 mx-2"><span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i></span></div>
          </div>

          <div class="d-flex align-items-center mb-2 skill-row" data-level="74" title="Inglês avançado.">
            <img loading="lazy" src="https://img.icons8.com/color/28/usa.png" alt="Inglês" class="me-2">
            <span class="skill-name">Inglês</span>
            <div class="flex-grow-1 mx-2"><span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></span></div>
          </div>

          <div class="d-flex align-items-center mb-2 skill-row" data-level="75" title="HTML5.">
            <img loading="lazy" src="https://img.icons8.com/color/28/html-5--v1.png" alt="HTML5" class="me-2">
            <span class="skill-name">HTML</span>
            <div class="flex-grow-1 mx-2"><span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></span></div>
          </div>

          <div class="d-flex align-items-center skill-row" data-level="70" title="CSS3.">
            <img loading="lazy" src="https://img.icons8.com/color/28/css3.png" alt="CSS3" class="me-2">
            <span class="skill-name">CSS</span>
            <div class="flex-grow-1 mx-2"><span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i></span></div>
          </div>

          <div class="d-flex align-items-center skill-row" data-level="55" title="JavaScript.">
            <img loading="lazy" src="https://img.icons8.com/color/28/javascript--v1.png" alt="JavaScript" class="me-2">
            <span class="skill-name">JS</span>
            <div class="flex-grow-1 mx-2"><span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></span></div>
          </div>

          <hr class="my-3">

          <div class="p-3" style="border:1px solid var(--line); border-radius:12px;">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <h6 class="m-0">Radar de Habilidades</h6>
              <span class="badge text-bg-light">visão agregada</span>
            </div>
            <canvas id="radarSkills" width="460" height="210" aria-label="Radar de Habilidades" role="img"></canvas>
          </div>
        </div>
      </aside>

      <!-- CENTRO — Sobre, KPIs, Formação, Certificados -->
      <section class="col-12 col-md-7 col-lg-5">
        <div class="card p-4 mb-4">
          <h2 class="fw-bold mb-2">Vitor de Freitas Morais</h2>
          <p class="mb-3">Administrador com perfil analítico e tech, focado em transformar dados em resultados para negócios.</p>

          <div class="row g-3">
            <div class="col-12 col-md-4">
              <div class="kpi" title="Tempo total estimado somando estágios e experiências.">
                <div class="kpi-ctx">
                  <canvas id="kpiYears" width="144" height="144" aria-label="Experiência em anos"></canvas>
                  <div class="kpi-center">3.5</div>
                </div>
                <div class="kpi-info">
                  <h6>Experiência</h6>
                  <small>~3,5 anos totais*</small>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="kpi" title="Dashboards/relatórios concluídos (Power BI, Sheets, etc.).">
                <div class="kpi-ctx">
                  <canvas id="kpiProjects" width="144" height="144" aria-label="Projetos"></canvas>
                  <div class="kpi-center">24</div>
                </div>
                <div class="kpi-info">
                  <h6>Projetos</h6>
                  <small>+24 dashboards</small>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="kpi" title="Pilares principais do stack atual.">
                <div class="kpi-ctx">
                  <canvas id="kpiTools" width="144" height="144" aria-label="Stack de ferramentas"></canvas>
                  <div class="kpi-center">3</div>
                </div>
                <div class="kpi-info">
                  <h6>Stack</h6>
                  <small>BI • SQL • JS</small>
                </div>
              </div>
            </div>
          </div>

          <div class="bg-light rounded-3 p-3 mt-3">
            <h6 class="fw-bold mb-2">Formação Acadêmica</h6>
            <div class="d-flex flex-wrap gap-3 align-items-center">
              <a class="badge-pill" href="https://vitorfm.work/Grade%20Adm%20Vitor%20Atualizada.jpeg" target="_blank" rel="noopener" aria-label="Abrir histórico Administração UFRRJ">
                <img loading="lazy" src="https://img.icons8.com/color/48/000000/university.png" width="22" height="22" alt="Universidade">
                <span>
                  <strong>Administração</strong> • UFRRJ
                  <span class="badge text-bg-warning text-dark ms-1">Em andamento</span>
                  <small class="d-block" style="color:var(--muted)">Previsão: 2026/1</small>
                </span>
              </a>

              <span class="badge-pill" aria-label="Engenharia da Computação UERJ">
                <img loading="lazy" src="https://img.icons8.com/color/48/000000/engineering.png" width="22" height="22" alt="Engenharia">
                <span><strong>Eng. Computação</strong> • UERJ</span>
              </span>
            </div>
          </div>

          <h6 class="fw-bold mt-3 mb-2">Certificados</h6>
          <div class="d-flex flex-wrap gap-3">
            <a href="https://vitorfm.work/clac%20en.jpg" target="_blank" rel="noopener" class="badge-pill text-decoration-none"><img loading="lazy" src="https://img.icons8.com/color/48/language.png" width="20" alt="Idioma"> Inglês (CLAC UFRJ)</a>
            <a href="https://vitorfm.work/Certificado%20Descomplica.png" target="_blank" rel="noopener" class="badge-pill text-decoration-none"><img loading="lazy" src="https://img.icons8.com/color/48/source-code.png" width="20" alt="Front-end"> FrontEnd (Descomplica)</a>
            <a href="https://vitorfm.work/Conclus%C3%A3o%20Pot%C3%AAncia%20Tech%20IFood.jpg" target="_blank" rel="noopener" class="badge-pill text-decoration-none"><img loading="lazy" src="https://img.icons8.com/color/48/chef-hat.png" width="20" alt="iFood"> Potência Tech (iFood)</a>
            <a href="https://vitorfm.work/R37XDBSH.pdf" target="_blank" rel="noopener" class="badge-pill text-decoration-none"><img loading="lazy" src="https://img.icons8.com/color/48/python.png" width="20" alt="Python"> Squadio Analytics</a>
            <a href="https://www.coursera.org/account/accomplishments/verify/86TY6U736SMU" target="_blank" rel="noopener" class="badge-pill text-decoration-none"><img loading="lazy" src="https://img.icons8.com/color/48/google-logo.png" width="20" alt="Google"> Google Data Analytics <span class="badge text-bg-warning text-dark ms-1">Em andamento</span></a>
            <a href="https://vitorfm.work/IBM%20AI.jpg" target="_blank" rel="noopener" class="badge-pill text-decoration-none"><img loading="lazy" src="https://img.icons8.com/color/48/ibm.png" width="20" alt="IBM"> IA para Todos (IBM)</a>
            <a href="https://vitorfm.work/DataXPE.pdf" target="_blank" rel="noopener" class="badge-pill text-decoration-none"><img loading="lazy" src="https://vitorfm.work/XPE.png" width="20" alt="XPE"> Minicamp Data (XPE)</a>
            <span class="badge-pill"><img loading="lazy" src="https://vitorfm.work/dio.webp" width="20" alt="DIO"> Dio Randstad — Análise de Dados <span class="badge text-bg-warning text-dark ms-1">Em andamento</span></span>
          </div>
        </div>
      </section>

      <!-- DIR — Experiência + Contato -->
      <aside class="col-12 col-lg-4">
        <div class="card p-4 h-100">
          <h5 class="section-title mb-3">Experiência Profissional</h5>

          <div class="timeline mb-4">
            <div class="t-item">
              <div class="t-title">Estágio em Suporte e Manutenção — ADM (NBS)</div>
              <small style="color:var(--muted)">Infra de TI e suporte | 2012–2013</small>
              <div class="t-hover">
                <strong>Conquistas</strong>
                <ul class="mb-2 ps-3"><li>Redução de chamados em 18%</li><li>Padronização de estações</li></ul>
                <div class="t-badges"><span>Hardware</span><span>Atendimento</span></div>
              </div>
            </div>

            <div class="t-item">
              <div class="t-title">Estágio Dev — Pix Soft (DeMillus)</div>
              <small style="color:var(--muted)">VB, SQL, relatórios gerenciais | 2013–2014</small>
              <div class="t-hover">
                <strong>Projetos</strong>
                <ul class="mb-2 ps-3"><li>Relatórios para diretoria (Vendas)</li><li>Migração de versões VB</li></ul>
                <div class="t-badges"><span>VB</span><span>SQL</span><span>ETL</span></div>
              </div>
            </div>

            <div class="t-item">
              <div class="t-title">Estágio Dev — DB Trans</div>
              <small style="color:var(--muted)">ASP.NET, SQL, XML | 2014–2015</small>
              <div class="t-hover">
                <strong>Entregas</strong>
                <ul class="mb-2 ps-3"><li>Integrações XML</li><li>Features ASP.NET</li></ul>
                <div class="t-badges"><span>ASP.NET</span><span>SQL</span><span>XML</span></div>
              </div>
            </div>

            <div class="t-item">
              <div class="t-title">Gestor de Marketplaces</div>
              <small style="color:var(--muted)">E-commerce, métricas e otimização | Atual</small>
              <div class="t-hover">
                <strong>Resultados</strong>
                <ul class="mb-2 ps-3"><li>Otimização de anúncios</li><li>Análise de métricas (ML, eBay, Amazon)</li></ul>
                <div class="t-badges"><span>SEO</span><span>Pricing</span><span>Analytics</span></div>
              </div>
            </div>

            <div class="t-item">
              <div class="t-title text-success">Estágio BI — Ligg Contact Services (Atual)</div>
              <small style="color:var(--muted)">
                Dashboards, cruzamento de dados e insights — 
                <span class="viz-preview">Visualização de Dados
                  <img src="visu.png" alt="Preview de visualização">
                </span>
              </small>
              <div class="t-hover">
                <strong>Foco</strong>
                <ul class="mb-2 ps-3"><li>KPIs de cobrança e performance</li><li>Integração de dados de sistemas</li></ul>
                <div class="t-badges"><span>Power BI</span><span>SQL</span><span>Data Viz</span></div>
              </div>
            </div>
          </div>

          <h6 class="section-title mb-2">Contato</h6>
          <ul class="list-unstyled">
            <li class="mb-1"><i class="fa-brands fa-whatsapp text-success me-1"></i>
              <a href="https://wa.me/5521987385290?text=Ol%C3%A1%2C%20quero%20falar%20com%20voc%C3%AA!" target="_blank" rel="noopener">WhatsApp: +55 21 98738-5290</a>
            </li>
            <li class="mb-1"><i class="fa-solid fa-envelope text-primary me-1"></i> Email: hagnok@hotmail.com</li>
            <li class="mb-1"><i class="fa-solid fa-location-dot text-danger me-1"></i> Ilha do Governador — RJ</li>
          </ul>
        </div>
      </aside>

    </div>
  </main>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // ======= Tema =======
    const root = document.documentElement;
    const btn  = document.getElementById('themeToggle');
    const saved = localStorage.getItem('theme');
    if(saved){ root.setAttribute('data-theme', saved); btn?.setAttribute('aria-pressed', saved==='dark'); }
    btn?.addEventListener('click', () => {
      const now = root.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
      root.setAttribute('data-theme', now);
      localStorage.setItem('theme', now);
      btn.setAttribute('aria-pressed', now === 'dark');
      applyChartTheme();  // retematiza os gráficos
    });

    // util pra ler variável CSS
    function cssVar(name){ return getComputedStyle(document.documentElement).getPropertyValue(name).trim(); }

    // ======= Charts (theme-aware) =======
    const donuts = {};
    let radarChart = null;

    function drawDonut(canvasId, value, total){
      const el = document.getElementById(canvasId);
      const brand = cssVar('--brand') || '#22C55E';
      const ring  = cssVar('--line')  || '#1E293B';

      const ch = new Chart(el,{
        type:'doughnut',
        data:{ datasets:[{ data:[Number(value), Math.max(Number(total)-Number(value), 0.0001)],
                           backgroundColor:[brand, ring], borderWidth:0 }] },
        options:{ cutout:'70%', plugins:{ legend:{display:false}, tooltip:{enabled:false} }, animation:false }
      });
      donuts[canvasId] = ch;
    }

    function drawRadar(){
      const ctx  = document.getElementById('radarSkills');
      const text = cssVar('--muted') || '#A9B4C0';
      const grid = cssVar('--line')  || '#1E293B';

      if(radarChart){ radarChart.destroy(); }
      radarChart = new Chart(ctx,{
        type:'radar',
        data:{
          labels:['SQL','Power BI','Python','Excel','GSheets','BI','Inglês','HTML','CSS','JS'],
          datasets:[{ label:'Nível (0-100)', data:[60,65,55,65,65,65,74,75,70,55], borderWidth:2 }]
        },
        options:{
          scales:{ r:{ beginAtZero:true, suggestedMax:100, grid:{ color:grid }, angleLines:{ color:grid }, pointLabels:{ color:text }, ticks:{ display:false } } },
          plugins:{ legend:{ display:false } },
          animation:false
        }
      });
    }

    function applyChartTheme(){
      const brand = cssVar('--brand') || '#22C55E';
      const ring  = cssVar('--line')  || '#1E293B';
      Object.values(donuts).forEach(ch=>{
        ch.data.datasets[0].backgroundColor = [brand, ring];
        ch.update();
      });
      drawRadar();
    }

    // init
    drawDonut('kpiYears', 3.5, 10);
    drawDonut('kpiProjects', 24, 40);
    drawDonut('kpiTools', 3, 5);
    drawRadar();

    // garantir render no print
    const mql = window.matchMedia('print');
    mql.addEventListener?.('change', e => { if(e.matches){ window.dispatchEvent(new Event('resize')); }});
    window.onbeforeprint = () => { window.dispatchEvent(new Event('resize')); };
  </script>
</body>
</html>
