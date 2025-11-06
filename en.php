<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resume - Vitor de Freitas Morais — UX/UI & Data Visualization</title>
  <meta name="description" content="Administrator and Data Science student with experience in analysis, visualization and strategic data management.">
  <link rel="icon" type="image/png" href="img/BI.png">
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

    /* WhatsApp link: remove underline and keep green color */
    a.wa-link { text-decoration: none !important; color: #1db954 !important; }
    a.wa-link:hover { text-decoration: none !important; color: #16a34a !important; }

    /* Estrelas das habilidades (substituídas por barras elétricas) */
    .stars { display:none; }
    .skill-name { min-width: 80px; font-weight:600; }

  /* Electric glowing bars (increased vertical size for better visibility) */
  /* bumped up slightly per user request */
  .skill-bar { height: 26px; background: #0b1218; border-radius: 999px; padding: 6px; box-shadow: inset 0 -4px 12px rgba(0,0,0,0.72); overflow: hidden; position: relative; }
    .skill-fill {
        height: 100%; border-radius: 999px; width: 0%;
        background-size: 200% 100%;
        transition: width 900ms cubic-bezier(.2,.9,.2,1), box-shadow .18s ease, filter .18s ease;
        box-shadow: 0 0 18px rgba(0,0,0,0.12) inset;
        position: relative; overflow: hidden;
        /* canonical color vars: color is used for currentColor; --glow-color controls glow tints */
        --glow-color: currentColor;
        color: inherit;
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
    .skill-fill.glow { box-shadow: 0 0 60px var(--glow-color), 0 0 140px var(--glow-color), 0 0 200px rgba(0,0,0,0.2) inset; filter: saturate(1.3) brightness(1.2); }

  /* constant electric glow on all bars (boosted +10% intensity) */
  .skill-fill { --glow-color: currentColor; box-shadow: 0 0 24px var(--glow-color), 0 0 44px rgba(0,0,0,0.11) inset; }

    /* color variants using CSS variables for easy tweak */
  .electric-red { --c1: #ff6b6b; --c2: #ff2e2e; }
  .electric-gold { --c1: #ffe88a; --c2: #f4b400; }
  .electric-blue { --c1: #9ff0ff; --c2: #2aa7ff; }
  .electric-red{ background: none; }
  .electric-gold{ background: none; }
  .electric-blue{ background: none; }
  .electric-red .skill-fill{ color: var(--c2); --glow-color: rgba(255,90,90,0.45); background: linear-gradient(90deg,var(--c1),var(--c2)); box-shadow: 0 0 20px var(--glow-color); }
  .electric-gold .skill-fill{ color: var(--c2); --glow-color: rgba(244,180,0,0.35); background: linear-gradient(90deg,var(--c1),var(--c2)); box-shadow: 0 0 18px var(--glow-color); }
  .electric-blue .skill-fill{ color: var(--c2); --glow-color: rgba(42,167,255,0.45); background: linear-gradient(90deg,var(--c1),var(--c2)); box-shadow: 0 0 20px var(--glow-color); }

  /* map qualitative levels to bar color/gradient while keeping electric effects */
  /* level-based fills and boosted glow (≈ +10%) */
  .skill-fill[data-level="adv"] { color: #1db954; --glow-color: rgba(29,185,84,0.55); background: linear-gradient(90deg,#8ef3b0,#1db954); box-shadow: 0 0 24px var(--glow-color); }
  .skill-fill[data-level="reg"] { color: #f4b400; --glow-color: rgba(244,180,0,0.44); background: linear-gradient(90deg,#fff3b0,#f4b400); box-shadow: 0 0 22px var(--glow-color); }
  .skill-fill[data-level="bas"] { color: #ff8a00; --glow-color: rgba(255,138,0,0.495); background: linear-gradient(90deg,#ffd6a3,#ff8a00); box-shadow: 0 0 22px var(--glow-color); }

  /* status label shown inside the bar (centered). Black in light theme, white in dark theme.
     Positioned absolutely inside the .skill-box so it overlays the .skill-fill. */
  .skill-perc {
    position: absolute;
    left: 6px;
    right: 6px;
    top: 50%;
    transform: translateY(-50%);
    text-align: center;
    font-size: .56rem; /* ainda menores conforme pedido */
    color: inherit; /* color definida pelas classes .skill-adv/.skill-reg/.skill-bas */
    font-weight: 700;
    pointer-events: none;
    z-index: 3;
    white-space: nowrap;
    /* black outer border via multiple shadows to simulate outline */
    text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;
  }

  /* qualitative skill level colors */
  .skill-adv { color: #1db954; font-weight:700; } /* Avançado - green */
  .skill-reg { color: #f4b400; font-weight:700; } /* Regular - yellow/gold */
  .skill-bas { color: #ff8a00; font-weight:700; } /* Básico - orange */

    /* small responsive tweak */
  @media (max-width: 576px){ .skill-name{ min-width:64px; font-size:.95rem } .skill-perc{ font-size:.5rem; left:4px; right:4px } }

  /* do not force label color here — keep level colors (they already have dark-theme overrides) */
  /* outline remains via text-shadow so labels keep readable over fills */

    /* intensified electric overlay */
    .skill-fill::after {
      content: '';
      position: absolute; inset: 0;
      background: linear-gradient(90deg, rgba(8, 7, 7, 0.18) 0%, rgba(255,255,255,0.02) 8%, rgba(255,255,255,0.12) 18%, rgba(255,255,255,0) 40%);
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
      /* moved a bit higher and made taller so bolt sweep covers the taller bar */
      position: absolute; top: -14%; left: -40%; height: 200%; width: 42%;
      pointer-events: none; mix-blend-mode: screen;
      background: linear-gradient(90deg, rgba(255,255,255,0.98) 0%, rgba(255,255,255,0.28) 18%, rgba(255,255,255,0.06) 36%, transparent 60%);
      filter: blur(14px) drop-shadow(0 0 14px rgba(255,255,255,0.28));
      transform: skewX(-12deg) translateX(-120%);
      opacity: 0;
      box-shadow: 0 0 60px currentColor, 0 0 140px currentColor, 0 0 18px rgba(255,255,255,0.3);
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
  <style>
    /* Skill box sizing to keep bars uniform */
    .skill-box { width: 140px; min-width: 120px; flex: 0 0 140px; }
    .skill-box .skill-bar { width: 100%; }
    @media (max-width: 576px) {
      .skill-box { width: 110px; min-width: 90px; flex: 0 0 110px; }
    }
  /* adjust .skill-perc positioning (now absolute inside .skill-box) */
  .skill-box { position: relative; }
  .skill-box .skill-perc { position: absolute; left:6px; right:6px; top:50%; transform:translateY(-50%); }
    /* keep two-line certificate second row on a single line with badge */
    .cert-line-2 { display: inline-block; white-space: nowrap; vertical-align: middle; }
  </style>
  <style>
    /* Dark theme styles inspired by Spotify (apply when <body class="dark-theme">) */
    body.dark-theme {
      --spotify-black: #121212;
      --spotify-dark-gray: #1e1e1e;
      --spotify-gray: #b3b3b3;
      --spotify-light-gray: #535353;
      --spotify-green: #1db954;
      --spotify-white: #ffffff;
      background: var(--spotify-black) !important;
      color: var(--spotify-white) !important;
    }

    body.dark-theme .navbar {
      background: var(--spotify-black) !important;
      border-bottom: 1px solid var(--spotify-dark-gray);
    }

    body.dark-theme .navbar-brand { color: var(--spotify-white) !important; }
    body.dark-theme .navbar-nav .nav-link { color: var(--spotify-gray) !important; }
    body.dark-theme .navbar-nav .nav-link:hover { color: var(--spotify-white) !important; }

    body.dark-theme .card {
      background: var(--spotify-dark-gray) !important;
      color: var(--spotify-white) !important;
      border: 1px solid var(--spotify-light-gray);
    }

    body.dark-theme .bg-light, body.dark-theme .bg-white {
      background: var(--spotify-dark-gray) !important;
      color: var(--spotify-white) !important;
    }

    body.dark-theme .text-muted, body.dark-theme .text-secondary { color: var(--spotify-gray) !important; }
    body.dark-theme .text-dark { color: var(--spotify-white) !important; }

    body.dark-theme .badge { background: var(--spotify-green) !important; color: var(--spotify-black) !important; }

    body.dark-theme .accordion-button {
      background: var(--spotify-dark-gray) !important;
      color: var(--spotify-white) !important;
      border: 1px solid var(--spotify-light-gray);
    }

    body.dark-theme .accordion-button:not(.collapsed) { background: var(--spotify-light-gray) !important; color: var(--spotify-white) !important; }
    body.dark-theme .accordion-body { background: var(--spotify-black) !important; color: var(--spotify-white) !important; }

    body.dark-theme .list-unstyled li a { color: var(--spotify-gray) !important; }
    body.dark-theme .list-unstyled li a:hover { color: var(--spotify-white) !important; }

    body.dark-theme #theme-toggle { color: var(--spotify-green) !important; }

    /* Improve electric bars contrast on dark theme */
    body.dark-theme .skill-bar {
      background: linear-gradient(180deg,#0b0b0b,#0f0f0f) !important;
      border: 1px solid rgba(255,255,255,0.04);
    }
  body.dark-theme .skill-fill { box-shadow: 0 0 30px var(--glow-color), inset 0 -3px 8px rgba(0,0,0,0.6); }
    /* ensure contrast in dark mode for skill labels */
    body.dark-theme .skill-adv { color: #1db954 !important; }
    body.dark-theme .skill-reg { color: #f4b400 !important; }
    body.dark-theme .skill-bas { color: #ff8a00 !important; }
    /* level-specific fills in dark theme to preserve glow */
  body.dark-theme .skill-fill[data-level="adv"] { --glow-color: rgba(29,185,84,0.70); box-shadow: 0 0 40px var(--glow-color), inset 0 -3px 10px rgba(0,0,0,0.6); }
  body.dark-theme .skill-fill[data-level="reg"] { --glow-color: rgba(244,180,0,0.58); box-shadow: 0 0 36px var(--glow-color), inset 0 -3px 10px rgba(0,0,0,0.6); }
  body.dark-theme .skill-fill[data-level="bas"] { --glow-color: rgba(255,138,0,0.58); box-shadow: 0 0 36px var(--glow-color), inset 0 -3px 10px rgba(0,0,0,0.6); }
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
            <a class="nav-link" href="https://github.com/hagnok0768" target="_blank">
              My Repositories
              <img src="https://img.icons8.com/ios-filled/18/000000/github.png" style="margin-left:2px;" alt="GitHub">
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://vitorfm.work/default.php">
              Portuguese Version
              <img src="https://img.icons8.com/color/18/usa.png" style="margin-left:2px;" alt="USA">
            </a>
          </li>
        </ul>
      </div>
      <b>UX/UI with Data Visualization</b>
      <button id="theme-toggle" class="btn btn-sm ms-2" style="background: none; border: none; color: #259d59; font-size: 1.2rem;" aria-label="Toggle theme">🌙</button>
    </div>
  </nav>

  <div class="container-fluid py-4">
    <div class="row g-4 justify-content-center">
      <!-- HABILIDADES -->
      <div class="col-12 col-md-5 col-lg-3">
        <div class="card shadow-sm p-3 h-100">
          <h5 class="mb-3">Skills</h5>
          
                    <!-- Inglês ~74% => ★★★★☆ (4.0) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="English — advanced: reading, writing, speaking and business communication.">
            <img src="https://img.icons8.com/color/28/usa.png" alt="Inglês" class="me-2">
            <span class="skill-name">Inglês</span>
            <div class="d-flex flex-column align-items-start mx-2 electric-blue skill-box" style="width: 140px; flex-shrink: 0;">
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:74%" data-perc="74" data-level="adv"></div>
              </div>
              <div class="skill-perc skill-adv">Advanced</div>
            </div>
          </div>
          

          <!-- SQL ~60% => ★★★★☆ (3.5 arred. visual) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Consultas SQL para análise de dados, automação de relatórios e integração de bancos.">
            <img src="https://img.icons8.com/color/28/sql.png" alt="SQL" class="me-2">
            <span class="skill-name">SQL</span>
            <div class="d-flex flex-column align-items-start mx-2 electric-gold skill-box" style="width: 140px; flex-shrink: 0;">
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:60%" data-perc="60" data-level="reg"></div>
              </div>
              <div class="skill-perc skill-reg">Intermediate</div>
            </div>
          </div>

          <!-- Power BI ~65% => ★★★★☆ (3.5) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Dashboards, relatórios interativos, DAX e automação de insights.">
            <img src="https://img.icons8.com/color/28/power-bi.png" alt="Power BI" class="me-2">
            <span class="skill-name">Power BI</span>
            <div class="d-flex flex-column align-items-start mx-2 electric-gold skill-box" style="width: 140px; flex-shrink: 0;">
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:65%" data-perc="65" data-level="reg"></div>
              </div>
              <div class="skill-perc skill-reg">Intermediate</div>
            </div>
          </div>
          
          <!-- Azure Functions ~70% => ★★★★☆ (3.5) -->
  <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Serverless functions, event integration and scalable automation.">
  <img src="https://img.icons8.com/color/28/azure-1.png" alt="Azure Functions" class="me-2">
  <span class="skill-name">Azure </span>
  <div class="d-flex flex-column align-items-start mx-2 electric-gold skill-box" style="width: 140px; flex-shrink: 0;">
    <div class="skill-bar" aria-hidden="true">
      <div class="skill-fill" style="width:70%" data-perc="70" data-level="adv"></div>
    </div>
  <div class="skill-perc skill-adv">Advanced</div>
  </div>
</div>



          <!-- Python ~55% => ★★★☆☆ (2.5) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Automação de tarefas, análise, scripts e APIs.">
            <img src="https://img.icons8.com/color/28/python--v1.png" alt="Python" class="me-2">
            <span class="skill-name">Python</span>
            <div class="d-flex flex-column align-items-start mx-2 electric-blue skill-box">
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:55%" data-perc="55" data-level="bas"></div>
              </div>
            <div class="skill-perc skill-bas">Basic</div>
            </div>
          </div>

          <!-- Excel ~65% => ★★★★☆ (3.5) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Dashboards, fórmulas avançadas, automações e integração com Power Query.">
            <img src="https://img.icons8.com/color/28/ms-excel.png" alt="Excel" class="me-2">
            <span class="skill-name">Excel</span>
            <div class="d-flex flex-column align-items-start mx-2 electric-gold skill-box">
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:65%" data-perc="65" data-level="reg"></div>
              </div>
              <div class="skill-perc skill-reg">Intermediate</div>
            </div>
          </div>

          <!-- GSheets ~65% => ★★★★☆ (3.5) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Google Sheets para relatórios dinâmicos e automação colaborativa.">
            <img src="https://img.icons8.com/color/28/google-sheets.png" alt="GSheets" class="me-2">
            <span class="skill-name">GSheets</span>
            <div class="d-flex flex-column align-items-start mx-2 electric-blue skill-box">
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:65%" data-perc="65" data-level="reg"></div>
              </div>
              <div class="skill-perc skill-reg">Intermediate</div>
            </div>
          </div>

          <!-- BI ~65% => ★★★★☆ (3.5) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Ferramentas de BI: análise de indicadores e tomada de decisão.">
            <img src="https://img.icons8.com/color/28/combo-chart--v1.png" alt="BI" class="me-2">
            <span class="skill-name">BI</span>
            <div class="d-flex flex-column align-items-start mx-2 electric-gold skill-box">
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:65%" data-perc="65" data-level="reg"></div>
              </div>
              <div class="skill-perc skill-reg">Regular</div>
            </div>
          </div>

          <!-- HTML ~75% => ★★★★☆ (4.0) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="HTML5 para páginas web responsivas.">
            <img src="https://img.icons8.com/color/28/html-5--v1.png" alt="HTML" class="me-2">
            <span class="skill-name">HTML</span>
            <div class="d-flex flex-column align-items-start mx-2 electric-blue skill-box">
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:75%" data-perc="75" data-level="adv"></div>
              </div>
              <div class="skill-perc skill-adv">Advanced</div>
            </div>
          </div>

          <!-- CSS ~70% => ★★★★☆ (3.5) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="CSS3: estilização e responsividade web.">
            <img src="https://img.icons8.com/color/28/css3.png" alt="CSS" class="me-2">
            <span class="skill-name">CSS</span>
            <div class="d-flex flex-column align-items-start mx-2 electric-red skill-box">
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:70%" data-perc="70" data-level="adv"></div>
              </div>
              <div class="skill-perc skill-adv">Advanced</div>
            </div>
          </div>

          <!-- JS ~55% => ★★★☆☆ (2.5) -->
          <div class="d-flex align-items-center" data-bs-toggle="tooltip" title="JavaScript para interatividade básica e scripts web.">
            <img src="https://img.icons8.com/color/28/javascript--v1.png" alt="JS" class="me-2">
            <span class="skill-name">JS</span>
            <div class="d-flex flex-column align-items-start mx-2 electric-red skill-box">
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:75%" data-perc="75" data-level="adv"></div>
              </div>
              <div class="skill-perc skill-adv">Advanced</div>
            </div>
          </div>
          <!-- Additional skills: Coding, VS Code, GitHub -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Programação e práticas de desenvolvimento.">
            <img src="https://img.icons8.com/color/28/source-code.png" alt="Coding" class="me-2">
            <span class="skill-name">Coding</span>
            <div class="d-flex flex-column align-items-start mx-2 skill-box" >
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:80%" data-perc="80" data-level="adv"></div>
              </div>
              <div class="skill-perc skill-adv">Avançado</div>
            </div>
          </div>

          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Editor de código - VS Code.">
            <img src="https://img.icons8.com/color/28/visual-studio-code-2019.png" alt="VS Code" class="me-2">
            <span class="skill-name">VS Code</span>
            <div class="d-flex flex-column align-items-start mx-2 skill-box" >
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:70%" data-perc="70" data-level="reg"></div>
              </div>
              <div class="skill-perc skill-reg">Regular</div>
            </div>
          </div>

          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Controle de versão e repositórios (GitHub).">
            <img src="https://img.icons8.com/ios-filled/28/000000/github.png" alt="GitHub" class="me-2">
            <span class="skill-name">GitHub</span>
            <div class="d-flex flex-column align-items-start mx-2 skill-box" >
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:75%" data-perc="75" data-level="adv"></div>
              </div>
              <div class="skill-perc skill-adv">Avançado</div>
            </div>
          </div>
        </div>
      </div>

      <!-- SOBRE MIM E CERTIFICADOS -->
      <div class="col-12 col-md-7 col-lg-5">
        <div class="card shadow-sm p-4 h-100">
            <h2 class="mb-3 text-center">Vitor de Freitas Morais</h2>
            <div class="mb-3 text-center mx-auto" style="font-size:1.08rem; max-width:720px;">
              Administrator with an analytical and tech profile, focused on turning data into business results.
            </div>
          <div class="bg-light rounded-3 p-3 mb-3">
            <h6 class="fw-bold mb-2 text-center">Education</h6>
            <div class="d-flex flex-wrap flex-md-nowrap gap-3 align-items-center justify-content-center">
              <div class="d-flex align-items-center bg-white rounded-pill px-3 py-2 shadow-sm" style="min-width:210px;">
                <a href="img/Grade Adm Vitor Atualizada.jpeg" target="_blank" class="me-2">
                  <img src="https://img.icons8.com/color/48/000000/university.png" alt="Administração" width="28" height="28"/>
                </a>
                <div>
                  <a href="img/Grade Adm Vitor Atualizada.jpeg" target="_blank" class="fw-semibold text-decoration-none text-dark">Business Administration</a>
                  <div class="small text-muted">UFRRJ <span class="badge bg-warning text-dark ms-1">In progress</span></div>
                  <div class="small text-secondary">Expected: 2026/1</div>
                </div>
              </div>
              <div class="d-flex align-items-center bg-white rounded-pill px-3 py-2 shadow-sm" style="min-width:210px;">
                <img src="https://img.icons8.com/color/48/000000/engineering.png" alt="Engenharia da Computação" width="28" height="28" class="me-2"/>
                <div>
                  <span class="fw-semibold">Computer Engineering</span>
                  <div class="small text-muted">UERJ</div>
                </div>
              </div>
            </div>
          </div>
          <h6 class="fw-bold mb-2 text-center">Certificates</h6>
          <div class="d-flex flex-wrap gap-3 justify-content-center">
              <a href="img/clac en.jpg" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Comprehensive English course (CLAC UFRJ, 400h)">
              <img src="https://img.icons8.com/color/48/language.png" width="40" alt="Idioma"><br>
              <small>English<br>CLAC UFRJ</small>
            </a>
            <a href="img/Certificado Descomplica.png" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Desenvolvimento web com CSS, JavaScript, UX, HTML, design thinking e gestão de projetos (220h, 2023)">
              <img src="https://img.icons8.com/color/48/source-code.png" width="40" alt="Front-end"><br>
              <small>FrontEnd<br>Descomplica</small>
            </a>
            <a href="img/Conclusão Potência Tech iFood.jpg" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Programação do Zero, 32 módulos e desafios práticos em programação (68h, 2024)">
              <img src="https://img.icons8.com/color/48/chef-hat.png" width="40" alt="iFood"><br>
              <small>Potência Tech<br>iFood</small>
            </a>
            <a href="pdf/R37XDBSH.pdf" class="text-center text-decoration-none" target="_blank" data-bs-toggle="tooltip" title="SQL, NoSQL, Power BI e machine learning (68h, 2024)">
              <img src="https://img.icons8.com/color/48/python.png" width="40" alt="Python"><br>
              <small>Squadio<br>Analytics</small>
            </a>
            <a href="https://www.coursera.org/account/accomplishments/verify/86TY6U736SMU" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Google Data Analytics (Coursera)">
              <img src="https://img.icons8.com/color/48/google-logo.png" width="40" alt="Google Data"><br>
              <small>Google Data<br>Analytics</small><br>
             
            </a>
            <!-- Binance certificate removed from here and reinserted as last certificate to avoid ordering issues -->
            <a href="img/LSPILSMF.png" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="From collection and modeling to interactive dashboards for decision-making, applying ETL, cleaning and storytelling with data. (180h, 2025)">
              <img src="img/klabinIA" width="40" alt="Excel e Power BI"><br>
              <small>Excel & Power BI <br>Dashboards</small>
            </a>
            <a href="img/HUO5JUNU.png" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title=" Fluxo de análise de dados com ferramentas como SQL, Excel com copilot, Azure Services e IA, aplicando projetos práticos com ETL, dashboards e machine learning. (104hr, 2025)">
              <img src="img/dio.webp" width="40" alt="DIO"><br>
              <small>Dio Randstad <br>Análise de Dados</small><br>
              
            </a>
            
            <a href="pdf/VITOR DE FREITAS MORAIS.pdf" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Curso de Qualificação Profissional em Inovação e Design Thinking (180h, 2025)">
                <img src="img/e18c7813-3115-4def-819f-0a277644516a.png" width="40" alt="Inovação e Design Thinking"><br>
                <small>Inovação </br>e Design </br>Thinking</small><br>
            </a>

            

            
            <a href="pdf/Estatística_conceitos_e_representações-Certificado_250728_153957[1].pdf" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Curso Estatística: conceitos e representações – IFRS (20h, 2025)">
              <img src="img/44b8ca65-a423-406d-bc1a-7e77a59feaf0.png" width="40" alt="Estatística"><br>
              <small>IFRS<br>Estatística</small></br>
            </a>
            
                        <a href="https://web.dio.me/track/bootcamp-blockchain-developer-with-solidity-2025" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Binance - Blockchain Developer (Bootcamp) - In progress">
              <img src="img/Binance - Blockchain Developer.webp" width="40" alt="Binance - Blockchain Developer"><br>
                          <small>Binance<br>Blockchain<br> Dev</small></br>
            </a>

            
          </div>
        </div>
      </div>

      <!-- EXPERIÊNCIA + CONTATO -->
      <div class="col-12 col-lg-4">
          <div class="card shadow-sm p-4 h-100 text-center">
          <h5 class="mb-3 text-center">Work Experience</h5>
          <div class="accordion mb-4" id="experienciaAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#exp1">
                  Hardware Support & Maintenance Intern – ADM (NBS)
                </button>
              </h2>
              <div id="exp1" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                <div class="accordion-body">
                  Technical support and hardware maintenance to optimize the advertising agency's infrastructure.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#exp3">
                  Software Development Intern – Pix Soft (DeMillus)
                </button>
              </h2>
              <div id="exp3" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                <div class="accordion-body">
                  Worked with VB and SQL, updating versions and developing reports for management.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#exp4">
                  Software Development Intern – DB Trans
                </button>
              </h2>
              <div id="exp4" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                <div class="accordion-body">
                  Worked with ASP.NET, SQL and XML, developing solutions for the toll company.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#exp5">
                  Marketplaces Manager (Current)
                </button>
              </h2>
              <div id="exp5" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                <div class="accordion-body">
                  Managing sales on platforms such as Mercado Livre, eBay and Amazon, optimizing listings, analyzing performance metrics and implementing strategies to increase sales.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed text-success fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#exp6">
                  BI Data Analysis Intern - Ligg Contact Services (Current)
                </button>
              </h2>
              <div id="exp6" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                <div class="accordion-body text-success">
                  Support in Business Intelligence, performing analyses, dashboards and cross-referencing system data to generate insights and support strategic decisions in the collections area with  
                  <span class="hover-text">
                    Data Visualization.
                    <img src="img/visu.png" alt="Preview">
                  </span>
                </div>
              </div>
            </div>
          </div>
          <h5 class="mb-2">Contact</h5>
          <ul class="list-unstyled mb-0">
            <li>
              <img src="https://img.icons8.com/color/20/whatsapp.png" alt="WhatsApp">
              <a class="wa-link" href="https://wa.me/5521987385290?text=Hello%2C%20I%27d%20like%20to%20talk%20with%20you!" target="_blank">WhatsApp: +55 21 98738-5290</a>
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
    // Ativar tooltips Bootstrap em todos os elementos marcados
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl, {html: true});
    });
  </script>
  <script>
    // Theme toggle functionality
    document.addEventListener('DOMContentLoaded', function() {
      const themeToggle = document.getElementById('theme-toggle');
      const body = document.body;

      // Check for saved theme preference or default to light
      const currentTheme = localStorage.getItem('theme') || 'light';
      if (currentTheme === 'dark') {
        body.classList.add('dark-theme');
        themeToggle.textContent = '☀️';
      } else {
        themeToggle.textContent = '🌙';
      }

      // Toggle theme on button click
      themeToggle.addEventListener('click', function() {
        body.classList.toggle('dark-theme');
        const isDark = body.classList.contains('dark-theme');
        localStorage.setItem('theme', isDark ? 'dark' : 'light');
        themeToggle.textContent = isDark ? '☀️' : '🌙';
      });
    });
  </script>
</body>
</html>
