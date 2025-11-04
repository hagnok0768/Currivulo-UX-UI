<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - Vitor de Freitas Morais</title>
    <link rel="icon" type="image/png" href="BI.png">
    <meta name="description" content="Professional in Administration and Data Science with experience in analysis, visualization, and strategic data management.">
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
        /* Eye UX/UI and tooltip */
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
        /* Avatar hidden by default */
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
        @media (max-width: 540px) {
            .container { padding: 7px;}
            .uxui-balao-inner { font-size: .89rem; padding: 6px 8px 6px 8px;}
            .uxui-balao { bottom: 38px;}
        }
    </style>
</head>
<body>
    <!-- Top Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://vitorfm.work/">vitorfm.work</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/hagnok0768?tab=repositories" target="_blank">My Repositories
                            <img src="https://img.icons8.com/?size=100&id=12599&format=png&color=000000" alt="Icon" style="width: 20px; height: 20px;" class="ms-2">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://vitorfm.work" target="_self">Portuguese Version
                            <img src="https://img.icons8.com/color/18/brazil.png" alt="Icon" style="width: 20px; height: 20px;" class="ms-2">
                        </a>
                    </li>
                </ul>
            </div>
            <button id="download" class="btn btn-success btn-sm ms-auto">
                Download this file as PDF
                <img src="https://img.icons8.com/?size=100&id=13417&format=png&color=000000" alt="Icon" style="width: 20px; height: 20px;" class="ms-2">
            </button>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5" id="content">
        <div class="d-flex align-items-center justify-content-center mb-3" style="gap: 9px;" id="perfilLinha">
            <span class="uxui-group" id="uxuiGroup">
                <span class="uxui-balao">
                    <span class="uxui-balao-inner">UX Version – click here!</span>
                </span>
                <a href="https://vitorfm.work/UXUI.php"
                   class="uxui-btn"
                   title="Tired of reading resumes? Click for a UX/UI version!"
                   target="_blank">
                    <img class="eye-blink" src="https://img.icons8.com/color/48/visible--v1.png" alt="UX/UI" />
                </a>
            </span>
            <!-- Avatar for PDF (hidden by default) -->
            <span class="avatar-print" id="avatarPrint">
                <img src="self.png" alt="Vitor Photo" class="avatar-img">
            </span>
            <h1 class="text-center mb-0">Vitor de Freitas Morais</h1>
        </div>
        <p class="text-center">Professional seeking to combine Administration and Technology with Data Science</p>

        <h3 class="mt-4">About Me
            <img src="https://img.icons8.com/?size=100&id=13042&format=png&color=000000" alt="Icon" style="width: 20px; height: 20px;" class="ms-2">
        </h3>
        <p>I started my academic journey in Computer Engineering at UERJ, where I developed a strong foundation in technology. I decided to temporarily pause this path to dedicate myself to personal projects that contributed to my practical growth and entrepreneurial vision. Later, I joined the Administration course, where I discovered a genuine affinity for Administrative Routines and Data Science. Currently, I seek to consolidate a career that integrates Administration, Technology, and Data Analysis, focusing on strategic solutions and innovation in the market.</p>

        <h3 class="mt-4">Contact
            <img src="https://img.icons8.com/?size=100&id=59775&format=png&color=000000" alt="Contact" width="24" height="24">
        </h3>
        <ul>
            <li>
                <a href="https://wa.me/5521981846114" target="_blank" style="text-decoration: none; color: inherit;">
                    <img src="https://img.icons8.com/?size=100&id=16713&format=png&color=000000" alt="WhatsApp" width="24" height="24">
                    <a href="https://wa.me/5521987385290?text=Olá%2C%20quero%20falar%20com%20você!" target="_blank">WhatsApp: +55 21 98738-5290</a>
                </a>
            </li>
            <li>
                <img src="https://img.icons8.com/?size=100&id=124377&format=png&color=000000" alt="Phone" width="24" height="24">
                Phone: +55 21 98738-5290
            </li>
            <li>
                <a href="mailto:hagnok@hotmail.com" style="text-decoration: none; color: inherit;">
                    <img src="https://img.icons8.com/?size=100&id=12580&format=png&color=000000" alt="Email" width="24" height="24">
                    Email: hagnok@hotmail.com
                </a>
            </li>
        </ul>
        <h3 class="mt-4">Professional Experience
            <img src="https://img.icons8.com/?size=100&id=pLsGEVZ0CYPb&format=png&color=000000" alt="Experience" width="24" height="24">
        </h3>
        <div class="accordion" id="experienciaAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#adm">
                        Internship in IT Support and Hardware Maintenance - ADM (NBS Publicidade)
                    </button>
                </h2>
                <div id="adm" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                    <div class="accordion-body">
                        I worked with technical support and hardware maintenance to optimize the company's infrastructure.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pixsoft">
                        Internship in Software Development - Pix Soft
                    </button>
                </h2>
                <div id="pixsoft" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                    <div class="accordion-body">
                        Software development and technical support for various business applications.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#demillus">
                        Internship in Software Development - Pix Soft (DeMillus)
                    </button>
                </h2>
                <div id="demillus" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                    <div class="accordion-body">
                        I worked with VB and SQL, updating versions and developing reports for management.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#dbtrans">
                        Internship in Software Development - DB Trans
                    </button>
                </h2>
                <div id="dbtrans" class="accordion-collapse collapse" data-bs-parent="#experienciaAccordion">
                    <div class="accordion-body">
                        I worked with ASP.NET, SQL, and XML, developing solutions for the toll company.
                    </div>
                </div>
            </div>
        </div>
        <h3 class="mt-4">
            Academic Background
            <img src="https://img.icons8.com/?size=100&id=71188&format=png&color=000000" alt="Education" width="24" height="24">
        </h3>
        <ul>
            <li>Administration - UFRRJ (<a href="https://vitorfm.work/Grade%20Adm%20Vitor%20Atualizada.jpeg" target="_blank">In progress</a>, expected completion: 2026/1)</li>
            <li>Computer Engineering - UERJ </li>
        </ul>
        <h3 class="mt-4">Certifications
            <img src="https://img.icons8.com/?size=100&id=6PEs2EypZuRA&format=png&color=000000" alt="Certifications" width="24" height="24">
        </h3>
        <div class="accordion" id="certificacoesAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#clac">
                        English - Basic to Conversation CLAC UFRJ (440h)
                    </button>
                </h2>
                <div id="clac" class="accordion-collapse collapse" data-bs-parent="#certificacoesAccordion">
                    <div class="accordion-body">
                        Course focused on developing English communication skills, from basics to conversation. With a focus on oral practice and understanding, it is ideal for those who wish to improve fluency and confidence in the language. <a href="https://vitorfm.work/clac%20en.jpg" target="_blank">Certificate</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#frontend">
                        FrontEnd Development Fundamentals - Descomplica/Nubank (220h, 2023)
                    </button>
                </h2>
                <div id="frontend" class="accordion-collapse collapse" data-bs-parent="#certificacoesAccordion">
                    <div class="accordion-body">
                        Web development course with CS, JavaScript, UX, CSS, HTML, design thinking and project management.
                        <a href="https://vitorfm.work/Certificado%20Descomplica.png" target="_blank">Certificate</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ifood">
                        Potência Tech iFood - Programming from Scratch (68h, 2024)
                    </button>
                </h2>
                <div id="ifood" class="accordion-collapse collapse" data-bs-parent="#certificacoesAccordion">
                    <div class="accordion-body">
                        Course with 32 modules, coding challenges and practical programming projects.
                        <a href="https://vitorfm.work/Conclus%C3%A3o%20Pot%C3%AAncia%20Tech%20IFood.jpg" target="_blank">Certificate</a>
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
                        Course covering SQL, NoSQL, Power BI, and machine learning.
                        <a href="https://vitorfm.work/R37XDBSH.pdf" target="_blank">Certificate</a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#google">
                        Google Data Analytics - Coursera (In progress 4/8 modules, 2025)
                    </button>
                </h2>
                <div id="google" class="accordion-collapse collapse" data-bs-parent="#certificacoesAccordion">
                    <div class="accordion-body">
                        Program covering everything from basic concepts to data analysis with R, Spreadsheet, Data Analysis, SQL, Data Visualization, Data Cleansing.
                        <a href="https://www.coursera.org/account/accomplishments/verify/86TY6U736SMU" target="_blank">Certificate</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>

    <!-- Scripts for functionality -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Switch avatar for eye only on PDF export
        document.addEventListener("DOMContentLoaded", function () {
            var downloadBtn = document.getElementById("download");
            var uxuiGroup = document.getElementById("uxuiGroup");
            var avatarPrint = document.getElementById("avatarPrint");
            var perfilLinha = document.getElementById("perfilLinha");
            var nextSibling = uxuiGroup ? uxuiGroup.nextSibling : null;
            if (downloadBtn && uxuiGroup && perfilLinha && avatarPrint) {
                downloadBtn.addEventListener("click", function () {
                    // hide UXUI group, show avatar
                    uxuiGroup.style.display = "none";
                    avatarPrint.style.display = "inline-flex";
                    // Generate the PDF
                    html2pdf()
                        .from(document.getElementById("content"))
                        .save("resume_vitor.pdf")
                        .then(function () {
                            // Revert to original view
                            uxuiGroup.style.display = "";
                            avatarPrint.style.display = "none";
                        });
                });
            }
        });
    </script>
</body>
</html>
