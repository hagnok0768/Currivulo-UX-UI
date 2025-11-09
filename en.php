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

  /* Company link style: blue like a link but without underline */
  .company-link { color: #0d6efd; text-decoration: none; font-weight:600; }
  .company-link:hover, .company-link:focus { color: #0b5ed7; text-decoration: none; }
  body.dark-theme .company-link { color: #66aaff; }

  /* Prevent accordion role titles from breaking inconsistently on wide screens; allow wrap on very small viewports */
  /* allow role titles to wrap instead of forcing overflow (fix accordion break) */
  .accordion-button .role-title { white-space: normal; overflow-wrap: anywhere; }
  /* header wrapper for title (centered) - duration will be positioned to the right of the button */
  .accordion-button .header-left { flex: 1 1 auto; min-width: 0; display:flex; flex-direction:column; align-items:center; gap:2px; }
  .accordion-button .role-title { text-align:center; }
  /* duration moved out of .header-left so it can align to the right; allow normal wrapping */
  .accordion-button .duration { white-space: normal; margin-left: auto; text-align: right; }
  /* helper to prevent specific durations from breaking (keep '4 meses • Atual' on one line) */
  .accordion-button .duration.no-break { white-space: nowrap; flex: 0 0 auto; }
  /* Ensure accordion buttons in the experience card align content to the left
    - reserve a fixed column for the company link on the left
    - keep title + duration stacked on the right and left-aligned
  */
  .card .accordion-button { text-align: left; display: flex; align-items: center; gap: 8px; }
  /* slightly narrower company column so role/title has room */
  .card .accordion-button .company-link { flex: 0 0 88px; display: inline-block; width:88px; min-width:64px; text-align:left; margin-right:8px; font-size:0.95rem; line-height:1.05rem; }
  .card .accordion-button .company-link { word-break:break-word; }
  .card .accordion-button .header-left { margin-left: 0; }
  /* make durations smaller and slightly muted so they don't dominate the header */
  .card .accordion-button .duration { font-size: 0.78rem; color: rgba(255,255,255,0.82); margin-top:2px; }
  .card .accordion-button .role-title { display:block; font-weight:600; }
  body.dark-theme .card .accordion-button .duration { color: rgba(255,255,255,0.75); }
  @media (max-width: 420px) { .accordion-button .role-title { white-space: normal; } }

  /* Make accordion caret/chevron brighter and more readable in dark theme */
  .accordion-button::after {
    /* replace default caret with a high-contrast white chevron using an inline data-URI SVG */
    background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M6 9l6 6 6-6' stroke='%23ffffff' stroke-width='2' fill='none' stroke-linecap='round' stroke-linejoin='round'/></svg>");
    background-repeat: no-repeat;
    background-position: center;
    background-size: 1.1rem 1.1rem;
    width: 1.6rem; height: 1.6rem; /* give it a slightly larger clickable area */
    margin-left: 0.5rem; /* keep space from content */
    opacity: 1 !important;
    filter: none !important;
    transition: transform 160ms ease, opacity 160ms ease, filter 160ms ease;
    /* preserve Bootstrap rotation behavior (collapsed/expanded) */
    transform-origin: center;
  }
  /* stronger effect specifically in dark theme and inside cards for contrast */
  body.dark-theme .card .accordion-button::after,
  body.dark-theme .accordion-button::after {
    background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M6 9l6 6 6-6' stroke='%23ffffff' stroke-width='2' fill='none' stroke-linecap='round' stroke-linejoin='round'/></svg>");
    opacity: 1 !important;
    background-size: 1.15rem 1.15rem;
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

  /* Replace skill-bar styling with a clean progress style + glow (adapted from user-provided snippet) */
  .skill-bar {
    background-color: #333333; /* dark track */
    border: 1px solid #222222;
    border-radius: 4px;
    height: 15px;
    overflow: hidden;
    position: relative;
    box-shadow: inset 0 1px 3px rgba(0,0,0,0.4);
  }

  /* Colored fill inside the bar */
  .skill-fill {
    height: 100%;
    border-radius: 4px;
    position: relative;
    transition: width 0.8s ease-out, filter 0.3s ease-in-out;
    /* default soft glow - may be overridden by color-specific rules below */
    filter: drop-shadow(0 0 5px rgba(255,255,255,0.08));
  }

  /* little dark notch at the right edge of the fill */
  .skill-fill::after {
    content: '';
    position: absolute;
    right: -2px;
    top: 50%;
    transform: translateY(-50%);
    width: 3px;
    height: 15px;
    background-color: #333333;
    border-radius: 1.5px;
    z-index: 2;
    box-shadow: 0 0 5px rgba(0,0,0,0.4);
  }

  /* map common colors to skill-fill classes (keeps compatibility with existing markup) */
  .skill-fill.html5, .skill-fill[data-skill="html"] { background-color: #E64C4C; box-shadow: inset 0 0 4px rgba(230,76,76,0.7); filter: drop-shadow(0 0 8px rgba(230,76,76,0.6)); }
  .skill-fill.css3,  .skill-fill[data-skill="css"]  { background-color: #FFD700; box-shadow: inset 0 0 4px rgba(255,215,0,0.7); filter: drop-shadow(0 0 8px rgba(255,215,0,0.6)); }
  .skill-fill.javascript, .skill-fill[data-skill="js"] { background-color: #007BFF; box-shadow: inset 0 0 4px rgba(0,123,255,0.7); filter: drop-shadow(0 0 8px rgba(0,123,255,0.6)); }
  .skill-fill.jquery, .skill-fill[data-skill="git"] { background-color: #8BC34A; box-shadow: inset 0 0 4px rgba(139,195,74,0.7); filter: drop-shadow(0 0 8px rgba(139,195,74,0.6)); }

  /* Also keep mapping for adv/reg/bas levels to gentle hues with glow */
  .skill-fill[data-level="adv"] { background: linear-gradient(90deg,#8ef3b0,#1db954); filter: drop-shadow(0 0 8px rgba(29,185,84,0.45)); }
  .skill-fill[data-level="reg"] { background: linear-gradient(90deg,#fff3b0,#f4b400); filter: drop-shadow(0 0 8px rgba(244,180,0,0.38)); }
  .skill-fill[data-level="bas"] { background: linear-gradient(90deg,#ffd6a3,#ff8a00); filter: drop-shadow(0 0 8px rgba(255,138,0,0.42)); }

  /* hover intensifies glow */
  .skill-fill:hover { filter: drop-shadow(0 0 12px rgba(255,255,255,0.9)); }
  .skill-fill.html5:hover { filter: drop-shadow(0 0 12px rgba(230,76,76,0.95)); }
  .skill-fill.css3:hover  { filter: drop-shadow(0 0 12px rgba(255,215,0,0.95)); }
  .skill-fill.javascript:hover { filter: drop-shadow(0 0 12px rgba(0,123,255,0.95)); }
  .skill-fill.jquery:hover { filter: drop-shadow(0 0 12px rgba(139,195,74,0.95)); }

  /* keep existing label positioning but style it like the snippet's label */
  .skill-perc {
    position: absolute;
    left: 6px;
    right: 6px;
    top: 50%;
    transform: translateY(-50%);
    text-align: center;
    font-size: .56rem;
    color: #fff;
    font-weight: 700;
    pointer-events: none;
    z-index: 3;
    white-space: nowrap;
    text-shadow: -1px -1px 0 rgba(0,0,0,0.9), 1px -1px 0 rgba(0,0,0,0.9), -1px 1px 0 rgba(0,0,0,0.9), 1px 1px 0 rgba(0,0,0,0.9);
  }
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
    /* center skills card contents */
    .skills-card { display:flex; flex-direction:column; align-items:center; }
    .skills-card > h5 { width:100%; text-align:center; }
    .skills-card .d-flex.align-items-center { justify-content:center; gap:10px; }
    .skills-card .skill-name { min-width:64px; text-align:left; }
    .skills-card .skill-box { margin-left:0; }
    /* Simple certificates grid for expanded accordion */
    .cert-grid { gap: 10px; }
    .cert-item { width: 72px; text-align: center; color: inherit; text-decoration: none; }
    .cert-item img { width: 32px; height: 32px; display:block; margin: 0 auto 6px; }
    .cert-item .caption { font-size: 0.7rem; line-height:1rem; }
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
  <style>
    /* Profile image + description layout (match default.php) */
    .profile-row { display:flex; align-items:center; gap:12px; justify-content:flex-start; }
    .profile-pic { width:72px; height:72px; object-fit:cover; border-radius:50%; flex:0 0 72px; }
    .profile-desc { text-align:left; }
    @media (max-width:576px) {
      .profile-row { flex-direction:column; text-align:center; align-items:center; }
      .profile-desc { text-align:center; }
    }
  </style>
</head>
<body class="dark-theme">
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
              <img src="https://img.icons8.com/color/18/brazil.png" style="margin-left:2px;" alt="Brazil">
            </a>
          </li>
        </ul>
      </div>
      <b>UX/UI with Data Visualization</b>
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
            <img src="https://img.icons8.com/color/28/usa.png" alt="English" class="me-2">
            <span class="skill-name">English</span>
            <div class="d-flex flex-column align-items-start mx-2 electric-blue skill-box" style="width: 140px; flex-shrink: 0;">
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:74%" data-perc="74" data-level="adv"></div>
              </div>
              <div class="skill-perc skill-adv">Advanced</div>
            </div>
          </div>
          

          <!-- SQL ~60% => ★★★★☆ (3.5 arred. visual) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="SQL queries for data analysis, report automation and database integration.">
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
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Interactive dashboards, reports, DAX and insight automation.">
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
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Task automation, analysis, scripts and APIs.">
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
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Dashboards, advanced formulas, automations and Power Query integration.">
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
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Google Sheets for dynamic reports and collaborative automation.">
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
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="BI tools: indicator analysis and decision making.">
            <img src="https://img.icons8.com/color/28/combo-chart--v1.png" alt="BI" class="me-2">
            <span class="skill-name">BI</span>
            <div class="d-flex flex-column align-items-start mx-2 electric-gold skill-box">
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:65%" data-perc="65" data-level="reg"></div>
              </div>
              <div class="skill-perc skill-reg">Intermediate</div>
            </div>
          </div>

          <!-- HTML ~75% => ★★★★☆ (4.0) -->
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="HTML5 for responsive web pages.">
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
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="CSS3: web styling and responsiveness.">
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
          <div class="d-flex align-items-center" data-bs-toggle="tooltip" title="JavaScript for basic interactivity and web scripts.">
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
          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Programming and development practices.">
            <img src="https://img.icons8.com/color/28/source-code.png" alt="Coding" class="me-2">
            <span class="skill-name">Coding</span>
            <div class="d-flex flex-column align-items-start mx-2 skill-box" >
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:80%" data-perc="80" data-level="adv"></div>
              </div>
              <div class="skill-perc skill-adv">Advanced</div>
            </div>
          </div>

          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Code editor - VS Code.">
            <img src="https://img.icons8.com/color/28/visual-studio-code-2019.png" alt="VS Code" class="me-2">
            <span class="skill-name">VS Code</span>
            <div class="d-flex flex-column align-items-start mx-2 skill-box" >
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:70%" data-perc="70" data-level="reg"></div>
              </div>
              <div class="skill-perc skill-reg">Intermediate</div>
            </div>
          </div>

          <div class="d-flex align-items-center mb-2" data-bs-toggle="tooltip" title="Version control and repositories (GitHub).">
            <img src="https://img.icons8.com/ios-filled/28/000000/github.png" alt="GitHub" class="me-2">
            <span class="skill-name">GitHub</span>
            <div class="d-flex flex-column align-items-start mx-2 skill-box" >
              <div class="skill-bar" aria-hidden="true">
                <div class="skill-fill" style="width:75%" data-perc="75" data-level="adv"></div>
              </div>
              <div class="skill-perc skill-adv">Advanced</div>
            </div>
          </div>
        </div>
      </div>

      <!-- SOBRE MIM E CERTIFICADOS -->
      <div class="col-12 col-md-7 col-lg-5">
        <div class="card shadow-sm p-4 h-100">
            <h2 class="mb-3 text-center">Vitor de Freitas Morais</h2>
            <div class="mb-3 profile-row mx-auto" style="font-size:1.08rem; max-width:720px;">
              <img src="img/Vitor.png" alt="Vitor" class="profile-pic">
              <div class="profile-desc">Administrator with an analytical and tech profile, focused on turning data into business results.</div>
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
          <h6 class="fw-bold mb-2 text-center">Certificates and Courses</h6>
          <div class="d-flex flex-wrap gap-3 justify-content-center">
              <a href="img/clac en.jpg" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Comprehensive English course (CLAC UFRJ, 400h)">
              <img src="https://img.icons8.com/color/48/language.png" width="40" alt="Idioma"><br>
              <small>English<br>CLAC UFRJ</small>
            </a>
            <a href="img/Certificado Descomplica.png" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Web development with CSS, JavaScript, UX, HTML, design thinking and project management (220h, 2023)">
              <img src="https://img.icons8.com/color/48/source-code.png" width="40" alt="Front-end"><br>
              <small>FrontEnd<br>Descomplica</small>
            </a>
            <a href="img/IFood.jpg" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Programming from Zero, 32 modules and practical programming challenges (68h, 2024)">
              <img src="https://img.icons8.com/color/48/chef-hat.png" width="40" alt="iFood"><br>
              <small>Potência Tech<br>iFood</small>
            </a>
            <a href="pdf/R37XDBSH.pdf" class="text-center text-decoration-none" target="_blank" data-bs-toggle="tooltip" title="SQL, NoSQL, Power BI and machine learning (68h, 2024)">
              <img src="https://img.icons8.com/color/48/python.png" width="40" alt="Python"><br>
              <small>Squadio<br>Analytics</small>
            </a>
            <a href="https://www.coursera.org/account/accomplishments/verify/86TY6U736SMU" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Google Data Analytics (Coursera)">
              <img src="https://img.icons8.com/color/48/google-logo.png" width="40" alt="Google Data"><br>
              <small>Google Data<br>Analytics</small><br>
              
            </a>
            <!-- Binance certificate removed from here and reinserted as last certificate to avoid ordering issues -->
                        <a href="img/LSPILSMF.png" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="From data collection and modeling to interactive dashboards for decision-making, applying ETL, cleaning and data storytelling. (180h, 2025)">
              <img src="img/klabinIA" width="40" alt="Excel e Power BI"><br>
              <small>Excel & Power BI <br>Dashboards</small>
            </a>
            <a href="img/HUO5JUNU.png" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Data analysis flow with tools like SQL, Excel with copilot, Azure Services and AI, applying practical projects with ETL, dashboards and machine learning. (104h, 2025)">
              <img src="img/dio.webp" width="40" alt="DIO"><br>
              <small>Dio Randstad <br>Data Analysis</small><br>
              
            </a>
            
            <a href="pdf/VITOR DE FREITAS MORAIS.pdf" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Professional Qualification Course in Innovation and Design Thinking (180h, 2025)">
                <img src="img/e18c7813-3115-4def-819f-0a277644516a.png" width="40" alt="Inovação e Design Thinking"><br>
                <small>Inovação </br>e Design </br>Thinking</small><br>
            </a>

            

            
            <a href="pdf/Estatística_conceitos_e_representações-Certificado_250728_153957[1].pdf" target="_blank" class="text-center text-decoration-none" data-bs-toggle="tooltip" title="Statistics course: concepts and representations – IFRS (20h, 2025)">
              <img src="img/44b8ca65-a423-406d-bc1a-7e77a59feaf0.png" width="40" alt="Estatística"><br>
              <small>IFRS<br>Statistics</small></br>
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
          <div class="card shadow-sm p-4 h-100">
          <h5 class="mb-3 text-center">Work Experience</h5>
          <div class="accordion mb-4" id="experienciaAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#exp1">
                  <a href="https://advti-infor.com.br/site/" target="_blank" class="company-link me-2" onclick="event.stopPropagation()">ADM (NBS)</a>
                  <div class="header-left">
                    <span class="role-title">Hardware Support Intern</span>
                  </div>
                  <span class="duration text-muted small">1 year (2005)</span>
                </button>
              </h2>
              <div id="exp1" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                <div class="accordion-body">
                  <p>Provided complete technical support and hardware maintenance, working from network configuration and monitoring to fault diagnosis and correction.</p>
                  <p>Optimized infrastructure availability and performance, implemented preventive maintenance routines, coordinated equipment updates and documented procedures to reduce downtime and accelerate incident resolution.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#exp3">
                  <a href="https://www.pixsoft.com.br/" target="_blank" class="company-link me-2" onclick="event.stopPropagation()">Pix Soft (DeMillus)</a>
                  <div class="header-left">
                    <span class="role-title">Software Development Intern</span>
                  </div>
                  <span class="duration text-muted small">1 year (2006)</span>
                </button>
              </h2>
              <div id="exp3" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                <div class="accordion-body">
                  <p>Developed and maintained internal applications in VB integrated with SQL databases, creating optimized queries, procedures and automations that accelerated data extraction and processing for analysis.</p>
                  <p>Delivered management reports and dashboards for board and management, translated business requirements into technical solutions, coordinated version updates and testing and implemented improvements that increased information reliability and decision-making agility.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#exp4">
                  <a href="https://central.dbtrans.com.br/" target="_blank" class="company-link me-2" onclick="event.stopPropagation()">DB Trans</a>
                  <div class="header-left">
                    <span class="role-title">Software Development Intern</span>
                  </div>
                  <span class="duration text-muted small">1 year (2007)</span>
                </button>
              </h2>
              <div id="exp4" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                <div class="accordion-body">
                  <p>Developed backend solutions in ASP.NET, implementing services and endpoints for integration with billing systems and XML-based flows, ensuring secure and reliable information exchange between platforms.</p>
                  <p>Modeled databases and optimized SQL queries, created XML file automation and transformation routines, and collaborated with operations to test and deploy updates that reduced processing failures and improved transaction traceability.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed text-success fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#exp5">
                  <span class="company-link me-2">Freelance</span>
                  <div class="header-left" style="width:100%;">
                    <span class="fw-semibold role-title">Marketplaces Manager</span>
                  </div>
                  <span id="marketplace-duration" class="duration text-success small">&nbsp;</span>
                </button>
              </h2>
              <div id="exp5" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                <div class="accordion-body">
                  <p>Act as a freelance professional managing sales operations on marketplaces (Shopee, Mercado Livre, Amazon and TikTok Shop), offering an end-to-end service from catalog preparation to commercial performance optimization.</p>
                  <p>My responsibilities include creating and optimizing ads (titles, descriptions, images and attributes), pricing and inventory management, configuration and optimization of sponsored campaigns, continuous monitoring of KPIs (visits, conversion, cancellations, average ticket) and competition analysis to adjust positioning strategy.</p>
                  <p>I also implemented automations to synchronize inventory and orders, established SLA processes for service and logistics, and delivered actionable reports to clients with tactical recommendations — all focused on increasing conversion, reducing rejections and scaling sales sustainably.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed text-success fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#exp6">
                  <a href="http://ligg.site/" target="_blank" class="company-link me-2" onclick="event.stopPropagation()">Ligg Contact Services</a>
                  <div class="header-left">
                    <span class="role-title">BI Data Analysis Intern</span>
                  </div>
                  <span class="duration text-success small">4 months<br><span class="fw-semibold small">Current</span></span>
                </button>
              </h2>
              <div id="exp6" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                <div class="accordion-body text-success">
                  <p>Support in Business Intelligence, performing analyses, dashboards and cross-referencing system data to generate insights and support strategic decisions in the collections area, with focus on <span class="hover-text">Data Visualization.<img src="img/visu.png" alt="Preview"></span></p>
                  <p>Internally developed a web tool for monitoring, planning and preventive, predictive and prescriptive analysis, which complements collection actions — access: <a href="https://ligg.site/intra2/pnop.php" target="_blank" rel="noopener" class="company-link">Tool Demonstration</a>.</p>
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
      // Theme toggle removed: site uses dark theme by default.
      // No-op placeholder kept intentionally in case future logic is added.
    });
  </script>
  <script>
    // Certificates accordion with small icons always visible in the button,
    // expanded body shows a simple 2-word description + hours highlighted;
    // hover on each cert shows full details via Bootstrap tooltip (html).
    document.addEventListener('DOMContentLoaded', function(){
      try{
        var headings = Array.from(document.querySelectorAll('h6.fw-bold.mb-2.text-center'));
        var certHeading = headings.find(h => /certifica/i.test(h.textContent));
        if(!certHeading) return;
        var grid = certHeading.nextElementSibling;
        if(!grid) return;

        // certificate data (href, image, alt, short two-word desc, hours, full details)
        var certs = [
          {href:'img/clac en.jpg', img:'https://img.icons8.com/color/48/language.png', alt:'CLAC Inglês', short:'Practical English', hours:'400h', full:'Comprehensive English course (CLAC UFRJ, 400h)'},
          {href:'img/Certificado Descomplica.png', img:'https://img.icons8.com/color/48/source-code.png', alt:'Front-end', short:'Front-End', hours:'220h', full:'Web development with CSS, JavaScript, UX, HTML, design thinking and project management (220h, 2023)'},
          {href:'img/IFood.jpg', img:'https://img.icons8.com/color/48/chef-hat.png', alt:'iFood', short:'Programming', hours:'68h', full:'Programming from Zero, 32 modules and practical programming challenges (68h, 2024)'},
          {href:'pdf/R37XDBSH.pdf', img:'https://img.icons8.com/color/48/python.png', alt:'Squadio', short:'Data & BI', hours:'68h', full:'SQL, NoSQL, Power BI and machine learning (68h, 2024)'},
          {href:'https://www.coursera.org/account/accomplishments/verify/86TY6U736SMU', img:'https://img.icons8.com/color/48/google-logo.png', alt:'Google Data', short:'Data Analytics', hours:'---', full:'Google Data Analytics (Coursera)'},
          {href:'img/LSPILSMF.png', img:'img/klabinIA', alt:'Excel e Power BI', short:'Dashboards', hours:'180h', full:'From data collection and modeling to interactive dashboards for decision-making, applying ETL, cleaning and data storytelling. (180h, 2025)'},
          {href:'img/HUO5JUNU.png', img:'img/dio.webp', alt:'DIO', short:'Data Analysis', hours:'104h', full:'Data analysis flow with tools like SQL, Excel with copilot, Azure Services and AI, applying practical projects with ETL, dashboards and machine learning. (104h, 2025)'},
          {href:'pdf/VITOR DE FREITAS MORAIS.pdf', img:'img/e18c7813-3115-4def-819f-0a277644516a.png', alt:'Inovação', short:'Design Thinking', hours:'180h', full:'Professional Qualification Course in Innovation and Design Thinking (180h, 2025)'},
          {href:'pdf/Estatística_conceitos_e_representações-Certificado_250728_153957[1].pdf', img:'img/44b8ca65-a423-406d-bc1a-7e77a59feaf0.png', alt:'Estatística', short:'Statistics', hours:'20h', full:'Statistics course: concepts and representations – IFRS (20h, 2025)'},
          {href:'https://web.dio.me/track/bootcamp-blockchain-developer-with-solidity-2025', img:'img/Binance - Blockchain Developer.webp', alt:'Binance', short:'Blockchain', hours:'In progress', full:'Binance - Blockchain Developer (Bootcamp) - In progress'}
        ];

        // build accordion
        var acc = document.createElement('div'); acc.className = 'accordion mb-3'; acc.id = 'certAccordion';
        var item = document.createElement('div'); item.className = 'accordion-item';
        var h2 = document.createElement('h2'); h2.className = 'accordion-header'; h2.id = 'certHeading';
        var btn = document.createElement('button');
        btn.className = 'accordion-button collapsed d-flex align-items-center';
        btn.type = 'button';
        btn.setAttribute('data-bs-toggle','collapse');
        btn.setAttribute('data-bs-target','#certCollapse');
        btn.setAttribute('aria-expanded','false');
        btn.setAttribute('aria-controls','certCollapse');

        // icons container always visible (small icons in the button)
        var iconsContainer = document.createElement('div');
        iconsContainer.className = 'cert-btn-icons d-flex flex-wrap align-items-center';
        iconsContainer.style.gap = '6px';
        certs.forEach(function(c){
          var a = document.createElement('a'); a.href = c.href; a.target = '_blank'; a.className = 'd-inline-block'; a.setAttribute('title', c.short + ' — ' + c.hours);
          var img = document.createElement('img'); img.src = c.img; img.alt = c.alt; img.style.width = '20px'; img.style.height = '20px'; img.style.objectFit = 'cover'; img.style.display = 'block';
          a.appendChild(img);
          iconsContainer.appendChild(a);
        });

        // button text removed per request (no text inside button)
        var btnText = document.createElement('span'); btnText.className = 'cert-btn-text ms-2'; btnText.textContent = '';
        btnText.style.display = 'none';

        btn.appendChild(iconsContainer);
        btn.appendChild(btnText);
        h2.appendChild(btn);

        var collapseDiv = document.createElement('div');
        collapseDiv.id = 'certCollapse'; collapseDiv.className = 'accordion-collapse collapse'; collapseDiv.setAttribute('aria-labelledby','certHeading'); collapseDiv.setAttribute('data-bs-parent','#certAccordion');
        var body = document.createElement('div'); body.className = 'accordion-body';

        // detailed grid: short desc (two words) + hours highlighted; hover shows full details
        var detailedGrid = document.createElement('div'); detailedGrid.className = 'cert-grid d-flex flex-wrap justify-content-center';
        certs.forEach(function(c){
          var a = document.createElement('a'); a.href = c.href; a.target = '_blank'; a.className = 'cert-item text-center text-decoration-none';
          // tooltip with full details (html)
          a.setAttribute('data-bs-toggle','tooltip');
          a.setAttribute('data-bs-html','true');
          a.setAttribute('title', '<strong>' + (c.full || '') + '</strong>');
          var img = document.createElement('img'); img.src = c.img; img.alt = c.alt; img.style.width = '32px'; img.style.height = '32px'; img.style.display='block'; img.style.margin='0 auto 6px';
          var cap = document.createElement('div'); cap.className = 'caption'; cap.innerHTML = (c.short + '<br>');
          var hrs = document.createElement('div'); hrs.className = 'hours'; hrs.textContent = c.hours; hrs.style.color = '#1db954'; hrs.style.fontWeight = '700'; hrs.style.fontSize = '0.8rem';
          a.appendChild(img); a.appendChild(cap); a.appendChild(hrs); detailedGrid.appendChild(a);
        });

        body.appendChild(detailedGrid);
        collapseDiv.appendChild(body);
        item.appendChild(h2); item.appendChild(collapseDiv); acc.appendChild(item);

        // replace old grid with our accordion
        grid.parentNode.replaceChild(acc, grid);

        // initialize tooltips for new elements inside accordion
        var tooltipTriggerListNew = [].slice.call(acc.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerListNew.map(function (el) { return new bootstrap.Tooltip(el); });

      }catch(e){ console.error('cert accordion replace', e); }
    });
  </script>
  <script>
    // Calculate and display Marketplace years since 2008
    (function(){
      try{
        var el = document.getElementById('marketplace-duration');
        if(!el) return;
        var start = new Date(2008,0,1); // 1 Jan 2008
        var now = new Date();
        var years = now.getFullYear() - start.getFullYear();
        var monthDiff = now.getMonth() - start.getMonth();
        if (monthDiff < 0 || (monthDiff === 0 && now.getDate() < start.getDate())) years--;
        years = Math.max(0, years);
  // follow Ligg pattern: short inline duration label (e.g. "17 anos") with same success styling
  // include '• Atual' to indicate ongoing role and align to the right via ms-auto in the markup
  if (years > 0) {
          // show as single line in English, keep number + unit together using non-breaking space
          el.textContent = years + '\u00A0' + (years === 1 ? 'year' : 'years');
        } else {
          el.textContent = '—';
        }
      }catch(e){ console.error('calc marketplace years', e); }
    })();
  </script>
</body>
</html>
