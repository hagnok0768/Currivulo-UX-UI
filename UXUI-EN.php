<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - Vitor de Freitas Morais | UX/UI & Data Visualization</title>
    <link rel="icon" type="image/png" href="BI.png">
    <meta name="description" content="Professional in Administration and Data Science with experience in analysis, visualization, and strategic data management.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f7f9fa; }
        .navbar-brand { font-weight: bold; letter-spacing: 1px; }
        .navbar-brand span { color: #259d59; }
        .main-content {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            margin-top: 1.5rem;
            margin-bottom: 2rem;
            max-width: 1500px;
            margin-left: auto;
            margin-right: auto;
        }
        .card-habilidades {
            min-width: 270px;
            max-width: 325px;
            flex: 1.05 1 280px;
            padding: 2rem 1.1rem 2rem 1.1rem;
        }
        .card-main {
            flex: 2.2 1 480px;
            min-width: 330px;
            padding: 2rem 2.3rem 2rem 2.3rem;
        }
        .card-direita {
            flex: 1.08 1 280px;
            min-width: 235px;
            max-width: 330px;
            padding: 2rem 1.1rem 2rem 1.1rem;
        }
        .card { border-radius: 16px; box-shadow: 0 2px 16px rgba(60,60,60,0.08); background: #fff; }
        .skill-row {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 16px;
            cursor: pointer;
        }
        .skill-label { font-weight: 500; font-size: 1.08rem; min-width: 70px; }
        .icon-skill { width: 27px; height: 27px; margin-right: 0.2rem; }
        .progress-skill {
            flex: 1;
            background: #e7e7e7;
            border-radius: 8px;
            height: 17px;
            margin-right: 8px;
            min-width: 100px;
            position: relative;
        }
        .progress-bar-skill {
            background-color: #259d59;
            height: 100%;
            border-radius: 8px;
            text-align: right;
            font-size: .92rem;
            color: #fff;
            font-weight: 500;
            transition: width .5s;
            display: flex; align-items: center; justify-content: flex-end;
            padding-right: 6px;
        }
        .skill-percent { min-width: 44px; font-weight: 500; color: #259d59; text-align:right; }
        .certs-wrap {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 20px;
        }
        .cert-badge {
            background: #f3f3f3;
            border-radius: 50%;
            box-shadow: 0 1px 6px rgba(0,0,0,0.09);
            width: 66px; height: 66px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            cursor: pointer;
            transition: box-shadow .2s;
        }
        .cert-badge:hover { box-shadow: 0 2px 12px rgba(60,60,60,0.14); background: #e5f6ed; }
        .cert-badge .badge-img {
            width: 32px;
            height: 32px;
            margin-bottom: 2px;
        }
        .cert-badge .badge-label {
            font-size: 0.75rem;
            text-align: center;
            color: #333;
            font-weight: 500;
            margin-top: 2px;
            white-space: normal;
        }
        .tooltip-inner {
            background-color: #222 !important;
            color: #fff !important;
            font-size: 0.93rem;
            padding: 0.45rem 0.8rem;
            border-radius: 9px;
            max-width: 260px;
            text-align: left;
        }
        @media (max-width: 1200px) {
            .main-content { flex-direction: column; gap: 1.1rem; }
            .card-habilidades, .card-main, .card-direita { max-width: 100%; min-width: 0; }
        }
        @media (max-width: 700px) {
            .main-content { padding: 0 4px; }
            .card-habilidades, .card-main, .card-direita { padding: 1.1rem 0.6rem;}
            .certs-wrap { gap: 10px; }
        }
        @media print { .navbar, #downloadBtn { display: none !important; } }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://vitorfm.work/">
                vitorfm.<span>work</span>
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/hagnok0768?tab=repositories" target="_blank">
                            My Repositories
                            <img src="https://img.icons8.com/ios-filled/18/000000/github.png" style="margin-left:2px;">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://vitorfm.work/UXUI.php">
                            Portuguese Version
                            <img src="https://img.icons8.com/color/18/brazil.png" style="margin-left:2px;">
                        </a>
                    </li>
                </ul>
            </div>
            <b>UX/UI & Data Visualization</b>
        </div>
    </nav>

    <div class="container main-content">
        <!-- SKILLS -->
        <div class="card card-habilidades">
            <h5 class="mb-3">Skills</h5>
            <div>
                <div class="skill-row" data-bs-toggle="tooltip" data-bs-placement="right" title="SQL queries for data analysis, report automation, and database integration.">
                    <img class="icon-skill" src="https://img.icons8.com/color/28/sql.png" alt="SQL">
                    <span class="skill-label">SQL</span>
                    <div class="progress-skill"><div class="progress-bar-skill" style="width: 60%"></div></div>
                    <span class="skill-percent">60%</span>
                </div>
                <div class="skill-row" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards, interactive reports, DAX, and insight automation.">
                    <img class="icon-skill" src="https://img.icons8.com/color/28/power-bi.png" alt="Power BI">
                    <span class="skill-label">Power BI</span>
                    <div class="progress-skill"><div class="progress-bar-skill" style="width: 65%"></div></div>
                    <span class="skill-percent">65%</span>
                </div>
                <div class="skill-row" data-bs-toggle="tooltip" data-bs-placement="right" title="Task automation, analysis, scripts, and APIs.">
                    <img class="icon-skill" src="https://img.icons8.com/color/28/python--v1.png" alt="Python">
                    <span class="skill-label">Python</span>
                    <div class="progress-skill"><div class="progress-bar-skill" style="width: 55%"></div></div>
                    <span class="skill-percent">55%</span>
                </div>
                <div class="skill-row" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards, advanced formulas, automations, and Power Query integration.">
                    <img class="icon-skill" src="https://img.icons8.com/color/28/ms-excel.png" alt="Excel">
                    <span class="skill-label">Excel</span>
                    <div class="progress-skill"><div class="progress-bar-skill" style="width: 65%"></div></div>
                    <span class="skill-percent">65%</span>
                </div>
                <div class="skill-row" data-bs-toggle="tooltip" data-bs-placement="right" title="Google Sheets for dynamic reports and collaborative automation.">
                    <img class="icon-skill" src="https://img.icons8.com/color/28/google-sheets.png" alt="GSheets">
                    <span class="skill-label">GSheets</span>
                    <div class="progress-skill"><div class="progress-bar-skill" style="width: 65%"></div></div>
                    <span class="skill-percent">65%</span>
                </div>
                <div class="skill-row" data-bs-toggle="tooltip" data-bs-placement="right" title="BI tools: indicators analysis and decision making.">
                    <img class="icon-skill" src="https://img.icons8.com/color/28/combo-chart--v1.png" alt="BI">
                    <span class="skill-label">BI</span>
                    <div class="progress-skill"><div class="progress-bar-skill" style="width: 65%"></div></div>
                    <span class="skill-percent">65%</span>
                </div>
                <div class="skill-row" data-bs-toggle="tooltip" data-bs-placement="right" title="Advanced English: reading, writing, speaking, and business environment.">
                    <img class="icon-skill" src="https://img.icons8.com/color/28/usa.png" alt="English">
                    <span class="skill-label">English</span>
                    <div class="progress-skill"><div class="progress-bar-skill" style="width: 74%"></div></div>
                    <span class="skill-percent">74%</span>
                </div>
                <div class="skill-row" data-bs-toggle="tooltip" data-bs-placement="right" title="HTML5 for responsive web pages.">
                    <img class="icon-skill" src="https://img.icons8.com/color/28/html-5--v1.png" alt="HTML">
                    <span class="skill-label">HTML</span>
                    <div class="progress-skill"><div class="progress-bar-skill" style="width: 75%"></div></div>
                    <span class="skill-percent">75%</span>
                </div>
                <div class="skill-row" data-bs-toggle="tooltip" data-bs-placement="right" title="CSS3: styling and web responsiveness.">
                    <img class="icon-skill" src="https://img.icons8.com/color/28/css3.png" alt="CSS">
                    <span class="skill-label">CSS</span>
                    <div class="progress-skill"><div class="progress-bar-skill" style="width: 70%"></div></div>
                    <span class="skill-percent">70%</span>
                </div>
                <div class="skill-row" data-bs-toggle="tooltip" data-bs-placement="right" title="JavaScript for basic interactivity and web scripts.">
                    <img class="icon-skill" src="https://img.icons8.com/color/28/javascript--v1.png" alt="JS">
                    <span class="skill-label">JS</span>
                    <div class="progress-skill"><div class="progress-bar-skill" style="width: 55%"></div></div>
                    <span class="skill-percent">55%</span>
                </div>
            </div>
        </div>
        <!-- ABOUT ME & CERTIFICATIONS (BADGES) -->
        <div class="card card-main">
            <h4 class="mb-3">About Me</h4>
            <div style="font-size:1.08rem;">
                Administrator with an analytical and tech profile, focused on turning data into results for business.
            </div>
            <!-- Academic Background -->
            <div class="academic-section p-3 mb-3 rounded shadow-sm bg-white">
                <h5 class="mb-3 fw-bold" style="letter-spacing:0.5px;">Academic Background</h5>
                <div class="d-flex flex-wrap gap-3 align-items-center">
                    <!-- Badge ADM -->
                    <div class="d-flex align-items-center bg-light rounded-pill px-3 py-2 shadow-sm" style="min-width:220px;">
                        <a href="https://vitorfm.work/Grade%20Adm%20Vitor%20Atualizada.jpeg" target="_blank" style="text-decoration:none">
                            <img src="https://img.icons8.com/color/48/000000/university.png" alt="Administration" width="32" height="32" class="me-2"/>
                        </a>
                        <div>
                            <a href="https://vitorfm.work/Grade%20Adm%20Vitor%20Atualizada.jpeg" target="_blank" style="text-decoration:none; color:inherit;">
                                <div class="fw-semibold">Administration</div>
                            </a>
                            <div class="small text-muted">UFRRJ <span class="badge rounded-pill text-bg-warning ms-1">In progress</span></div>
                            <div class="small text-secondary">Expected: 2026/1</div>
                        </div>
                    </div>
                    <!-- Badge Engineering -->
                    <div class="d-flex align-items-center bg-light rounded-pill px-3 py-2 shadow-sm" style="min-width:220px;">
                        <img src="https://img.icons8.com/color/48/000000/engineering.png" alt="Computer Engineering" width="32" height="32" class="me-2"/>
                        <div>
                            <div class="fw-semibold">Computer Engineering</div>
                            <div class="small text-muted">UERJ</div>
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="mt-4 mb-3">Certifications</h5>
            <div class="certs-wrap">
                <!-- Badge: CLAC UFRJ -->
                <a class="cert-badge" data-bs-toggle="tooltip" title="Course focused on developing English communication skills, from basics to conversation. Focus on oral practice and understanding (440h)." href="https://vitorfm.work/clac%20en.jpg" target="_blank">
                    <img class="badge-img" src="https://img.icons8.com/color/48/language.png" alt="CLAC UFRJ">
                    <div class="badge-label">English <br> CLAC UFRJ</div>
                </a>
                <!-- Badge: FrontEnd Dev Descomplica/Nubank -->
                <a class="cert-badge" data-bs-toggle="tooltip" title="Web development with CSS, JavaScript, UX, HTML, design thinking and project management (220h, 2023)." href="https://vitorfm.work/Certificado%20Descomplica.png" target="_blank">
                    <img class="badge-img" src="https://img.icons8.com/color/48/source-code.png" alt="Frontend Dev">
                    <div class="badge-label">FrontEnd <br>Descomplica</div>
                </a>
                <!-- Badge: Potência Tech iFood -->
                <a class="cert-badge" data-bs-toggle="tooltip" title="Programming from scratch, 32 modules and practical programming challenges (68h, 2024)." href="https://vitorfm.work/Conclus%C3%A3o%20Pot%C3%AAncia%20Tech%20IFood.jpg" target="_blank">
                    <img class="badge-img" src="https://img.icons8.com/color/48/chef-hat.png" alt="Potência Tech iFood">
                    <div class="badge-label">Potência Tech<br>iFood</div>
                </a>
                <!-- Badge: Squadio Python Data Analytics -->
                <a class="cert-badge" data-bs-toggle="tooltip" title="SQL, NoSQL, Power BI and machine learning (68h, 2024)." href="https://vitorfm.work/R37XDBSH.pdf" target="_blank">
                    <img class="badge-img" src="https://img.icons8.com/color/48/python.png" alt="Python Analytics">
                    <div class="badge-label">Squadio<br>Analytics</div>
                </a>
                <!-- Badge: Google Data Analytics -->
                <a class="cert-badge" data-bs-toggle="tooltip" title="Google Data Analytics Coursera (in progress, 5/8 modules, 2025). Data analysis, R, Spreadsheet, SQL, Data Viz, Data Cleansing." href="https://www.coursera.org/account/accomplishments/verify/86TY6U736SMU" target="_blank">
                    <img class="badge-img" src="https://img.icons8.com/color/48/google-logo.png" alt="Google Analytics">
                    <div class="badge-label">Google Data<br>Analytics</div>
                    <span class="badge rounded-pill text-bg-warning ms-1">In progress</span>
                </a>
                <!-- Badge: IBM IA para todos -->
                <a class="cert-badge" 
                   data-bs-toggle="tooltip" 
                   title="Introductory course on Artificial Intelligence promoted by Movimento IA Brasil, StartSe and IBM. Practical applications and essential AI fundamentals." 
                   href="https://vitorfm.work/IBM%20AI.jpg" target="_blank">
                    <img class="badge-img" src="https://img.icons8.com/color/48/ibm.png" alt="AI for Everyone">
                    <div class="badge-label">AI for<br>Everyone</div>
                </a>
            </div>
        </div>
        <!-- EXPERIENCE + CONTACT -->
        <div class="card card-direita">
            <h5 class="mb-3">Professional Experience</h5>
            <div class="accordion" id="experienciaAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed py-2 px-2" type="button" data-bs-toggle="collapse" data-bs-target="#exp1">
                            Internship in IT Support & Hardware – ADM (NBS)
                        </button>
                    </h2>
                    <div id="exp1" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                        <div class="accordion-body py-2">
                            Provided technical support and hardware maintenance to optimize the advertising company's infrastructure.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed py-2 px-2" type="button" data-bs-toggle="collapse" data-bs-target="#exp2">
                            Internship in Software Development – Pix Soft
                        </button>
                    </h2>
                    <div id="exp2" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                        <div class="accordion-body py-2">
                            Software development and technical support for various business applications.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed py-2 px-2" type="button" data-bs-toggle="collapse" data-bs-target="#exp3">
                            Internship in Software Development – Pix Soft (DeMillus)
                        </button>
                    </h2>
                    <div id="exp3" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                        <div class="accordion-body py-2">
                            Worked with VB and SQL, updating versions and developing reports for board and management.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed py-2 px-2" type="button" data-bs-toggle="collapse" data-bs-target="#exp4">
                            Internship in Software Development – DB Trans
                        </button>
                    </h2>
                    <div id="exp4" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                        <div class="accordion-body py-2">
                            Worked with ASP.NET, SQL and XML, developing solutions for the toll company.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed py-2 px-2" type="button" data-bs-toggle="collapse" data-bs-target="#exp5">
                            Marketplace Manager (Current)
                        </button>
                    </h2>
                    <div id="exp5" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                        <div class="accordion-body py-2">
                            Managing sales on platforms like Mercado Livre, eBay and Amazon, optimizing listings, analyzing performance metrics and implementing strategies to boost sales.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed py-2 px-2" type="button" data-bs-toggle="collapse" data-bs-target="#exp6">
                            Data Analysis BI Intern - Ligg Contact Services (Current)
                        </button>
                    </h2>
                    <div id="exp6" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                        <div class="accordion-body py-2">
                            Business Intelligence support, conducting analyses, dashboards and data cross-referencing from systems to generate insights and support strategic decisions in the collections area.
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="mt-4 mb-2">Contact: Vitor de Freitas</h5>
            <ul class="list-unstyled mb-0">
                <li>
                    <img src="https://img.icons8.com/color/20/whatsapp.png" alt="WhatsApp">
                    Phone: +55 21 98738-5290
                </li>
                <li>
                    <img src="https://img.icons8.com/color/20/new-post.png" alt="Email">
                    Email: hagnok@hotmail.com
                </li>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Activate Bootstrap tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl, {html: true});
        });

        // PDF export
        if(document.getElementById("downloadBtn")){
            document.getElementById("downloadBtn").addEventListener("click", function () {
                import('https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js').then(() => {
                    html2pdf().from(document.body).save("resume_vitor.pdf");
                });
            });
        }
    </script>
</body>
</html>
