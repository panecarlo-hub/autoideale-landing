<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoIdeale.it &ndash; Trova la tua prossima auto usata</title>
    <meta name="description" content="Dicci cosa cerchi, ti troviamo le migliori offerte auto furgoni usati. Gratis, veloce, senza stress.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --bg: #0f172a;
            --accent: #E8A020;
            --accent-dark: #c4880f;
            --text: #ffffff;
            --card-bg: #1e293b;
            --card-border: rgba(232, 160, 32, 0.15);
        }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
        }

        /* HEADER */
        header {
            background: var(--bg);
            padding: 16px;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 1px solid rgba(232, 160, 32, 0.2);
        }

        header img { height: 80px; width: auto; }

        /* HERO */
        .hero {
            min-height: 90vh;
            background-image: url('images/hero.png');
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px 20px;
        }

        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(15, 23, 42, 0.65);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 760px;
        }

        .hero h1 {
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .hero h1 span { color: var(--accent); }

        .hero p {
            font-size: clamp(1rem, 2vw, 1.2rem);
            margin-bottom: 32px;
            opacity: 0.9;
        }

        .btn-primary {
            display: inline-block;
            background: var(--accent);
            color: #000;
            font-weight: 700;
            font-size: 1.1rem;
            padding: 16px 40px;
            border-radius: 8px;
            text-decoration: none;
            cursor: pointer;
            border: none;
            transition: opacity 0.2s;
        }

        .btn-primary:hover { opacity: 0.9; }

        /* SECTIONS */
        section { padding: 80px 20px; }
        .container { max-width: 1100px; margin: 0 auto; }

        h2 {
            font-size: clamp(1.6rem, 3vw, 2.4rem);
            font-weight: 800;
            text-align: center;
            margin-bottom: 48px;
        }

        /* COME FUNZIONA */
        .steps-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 32px;
        }

        .step-card {
            background: var(--card-bg);
            border-radius: 12px;
            overflow: hidden;
            text-align: center;
            padding-bottom: 24px;
        }

        .step-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .step-card h3 {
            font-size: 1.2rem;
            font-weight: 700;
            margin: 20px 16px 8px;
            color: var(--accent);
        }

        .step-card p {
            font-size: 0.95rem;
            opacity: 0.85;
            padding: 0 16px;
        }

        /* SERVIZI */
        .servizi-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 48px;
            align-items: center;
        }

        .servizi-grid img { width: 100%; border-radius: 12px; }

        .servizi-list { list-style: none; }

        .servizi-list li {
            padding: 14px 0;
            font-size: 1.1rem;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .servizi-list li::before {
            content: '\2714';
            color: var(--accent);
            font-weight: 800;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        /* PERCHE SCEGLIERCI */
        .perche-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 48px;
            align-items: center;
        }

        .perche-grid img { width: 100%; border-radius: 12px; }
        .perche-text h2 { text-align: left; }

        .perche-subtitle {
            font-size: 1.1rem;
            opacity: 0.8;
            margin-bottom: 32px;
        }

        .stats { display: flex; flex-direction: column; gap: 24px; }

        .stat { display: flex; align-items: center; gap: 16px; }

        .stat-number {
            font-size: 2rem;
            font-weight: 800;
            color: var(--accent);
            min-width: 140px;
        }

        .stat-label { font-size: 1rem; opacity: 0.85; }

        /* MARCHI */
        .marchi-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 12px;
        }

        .marchio-card {
            background: var(--card-bg);
            border: 1px solid var(--accent);
            border-radius: 8px;
            padding: 16px 8px;
            text-align: center;
            font-weight: 700;
            font-size: 0.9rem;
            transition: background 0.2s, color 0.2s;
        }

        .marchio-card:hover { background: var(--accent); color: #000; }

        /* TESTIMONIANZE */
        .testimonianze-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .testi-card { background: var(--card-bg); border-radius: 12px; padding: 24px; }

        .stars { color: var(--accent); font-size: 1.2rem; margin-bottom: 12px; }

        .testi-text {
            font-size: 1rem;
            opacity: 0.9;
            margin-bottom: 16px;
            line-height: 1.7;
        }

        .testi-author { font-weight: 700; color: var(--accent); font-size: 0.9rem; }

        /* ==============================
           FORM CONVERSAZIONALE
           ============================== */
        #form-section {
            background: #080f1d;
            padding: 80px 20px;
        }

        .conv-wrapper {
            max-width: 680px;
            margin: 0 auto;
        }

        .conv-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .conv-header h2 { margin-bottom: 12px; }

        .conv-header p {
            font-size: 1.1rem;
            opacity: 0.7;
        }

        /* Progress bar */
        .conv-progress {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 36px;
            justify-content: center;
        }

        .conv-progress-bar {
            flex: 1;
            max-width: 400px;
            height: 4px;
            background: rgba(255,255,255,0.1);
            border-radius: 4px;
            overflow: hidden;
        }

        .conv-progress-fill {
            height: 100%;
            background: var(--accent);
            border-radius: 4px;
            transition: width 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            width: 14%;
        }

        .conv-step-counter {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--accent);
            white-space: nowrap;
        }

        /* Domanda singola */
        .conv-question {
            display: none;
            animation: slideIn 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .conv-question.active { display: block; }

        @keyframes slideIn {
            from { opacity: 0; transform: translateX(40px); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes slideOut {
            from { opacity: 1; transform: translateX(0); }
            to { opacity: 0; transform: translateX(-40px); }
        }

        .conv-question-text {
            font-size: clamp(1.3rem, 3vw, 1.6rem);
            font-weight: 700;
            margin-bottom: 8px;
            line-height: 1.3;
        }

        .conv-question-sub {
            font-size: 1rem;
            opacity: 0.6;
            margin-bottom: 28px;
        }

        /* Opzioni grandi */
        .conv-options {
            display: grid;
            gap: 14px;
            margin-bottom: 28px;
        }

        .conv-options.two-col { grid-template-columns: 1fr 1fr; }
        .conv-options.three-col { grid-template-columns: repeat(3, 1fr); }

        .conv-opt {
            background: var(--card-bg);
            border: 2px solid var(--card-border);
            border-radius: 14px;
            padding: 22px 20px;
            text-align: center;
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text);
            transition: all 0.25s;
            font-family: 'Inter', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            min-height: 80px;
            justify-content: center;
        }

        .conv-opt:hover {
            border-color: var(--accent);
            background: rgba(232, 160, 32, 0.08);
            transform: translateY(-2px);
        }

        .conv-opt.selected {
            border-color: var(--accent);
            background: rgba(232, 160, 32, 0.15);
            color: var(--accent);
        }

        .conv-opt .opt-icon { font-size: 2.2rem; }

        .conv-opt .opt-label { font-size: 1.1rem; font-weight: 700; }

        /* Checkbox style opzioni */
        .conv-check-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-bottom: 28px;
        }

        .conv-check-item {
            background: var(--card-bg);
            border: 2px solid var(--card-border);
            border-radius: 12px;
            padding: 16px 18px;
            cursor: pointer;
            font-size: 1.05rem;
            font-weight: 500;
            color: var(--text);
            transition: all 0.2s;
            display: flex;
            align-items: center;
            gap: 12px;
            user-select: none;
        }

        .conv-check-item:hover { border-color: var(--accent); }

        .conv-check-item.checked {
            border-color: var(--accent);
            background: rgba(232, 160, 32, 0.12);
            color: var(--accent);
        }

        .conv-check-item .check-icon {
            width: 22px;
            height: 22px;
            border: 2px solid rgba(255,255,255,0.3);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: all 0.2s;
            font-size: 0.8rem;
        }

        .conv-check-item.checked .check-icon {
            background: var(--accent);
            border-color: var(--accent);
            color: #000;
        }

        /* Input testo */
        .conv-input {
            width: 100%;
            background: var(--card-bg);
            border: 2px solid var(--card-border);
            border-radius: 14px;
            padding: 20px 24px;
            font-size: 1.15rem;
            color: var(--text);
            font-family: 'Inter', sans-serif;
            transition: border-color 0.2s;
            margin-bottom: 28px;
            outline: none;
        }

        .conv-input:focus { border-color: var(--accent); }
        .conv-input::placeholder { opacity: 0.4; }

        /* Select styled */
        .conv-select {
            width: 100%;
            background: var(--card-bg);
            border: 2px solid var(--card-border);
            border-radius: 14px;
            padding: 20px 24px;
            font-size: 1.15rem;
            color: var(--text);
            font-family: 'Inter', sans-serif;
            transition: border-color 0.2s;
            margin-bottom: 28px;
            outline: none;
            appearance: none;
            cursor: pointer;
        }

        .conv-select:focus { border-color: var(--accent); }
        .conv-select option { background: #1e293b; color: #fff; }

        /* Nav */
        .conv-nav {
            display: flex;
            gap: 12px;
            align-items: center;
            justify-content: space-between;
        }

        .conv-btn-back {
            background: transparent;
            border: 2px solid rgba(255,255,255,0.15);
            border-radius: 12px;
            padding: 16px 24px;
            font-size: 1rem;
            font-weight: 600;
            color: rgba(255,255,255,0.5);
            cursor: pointer;
            font-family: 'Inter', sans-serif;
            transition: all 0.2s;
        }

        .conv-btn-back:hover {
            border-color: rgba(255,255,255,0.3);
            color: #fff;
        }

        .conv-btn-next {
            background: var(--accent);
            border: none;
            border-radius: 12px;
            padding: 18px 36px;
            font-size: 1.1rem;
            font-weight: 700;
            color: #000;
            cursor: pointer;
            font-family: 'Inter', sans-serif;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            gap: 8px;
            flex: 1;
            justify-content: center;
        }

        .conv-btn-next:hover { background: var(--accent-dark); transform: translateY(-1px); }
        .conv-btn-next:disabled { opacity: 0.5; cursor: not-allowed; transform: none; }

        .conv-error {
            color: #f87171;
            font-size: 0.95rem;
            margin-bottom: 16px;
            display: none;
            font-weight: 500;
        }

        /* Optional label */
        .optional-label {
            font-size: 0.85rem;
            opacity: 0.5;
            font-weight: 500;
            margin-bottom: 16px;
        }

        /* Privacy */
        .conv-privacy {
            background: rgba(232, 160, 32, 0.06);
            border: 1px solid rgba(232, 160, 32, 0.2);
            border-radius: 12px;
            padding: 16px 20px;
            display: flex;
            align-items: flex-start;
            gap: 14px;
            margin-bottom: 24px;
            cursor: pointer;
        }

        .conv-privacy input[type="checkbox"] {
            accent-color: var(--accent);
            width: 22px;
            height: 22px;
            flex-shrink: 0;
            margin-top: 2px;
            cursor: pointer;
        }

        .conv-privacy label {
            font-size: 0.95rem;
            color: rgba(255,255,255,0.75);
            line-height: 1.6;
            cursor: pointer;
        }

        .conv-privacy a { color: var(--accent); text-decoration: underline; }

        /* Spinner */
        .spinner {
            width: 20px;
            height: 20px;
            border: 2px solid rgba(0,0,0,0.3);
            border-top-color: #000;
            border-radius: 50%;
            animation: spin 0.7s linear infinite;
            display: none;
        }

        @keyframes spin { to { transform: rotate(360deg); } }

        /* Success */
        .conv-success {
            display: none;
            text-align: center;
            padding: 60px 20px;
            animation: slideIn 0.5s ease;
        }

        .success-icon { font-size: 5rem; margin-bottom: 24px; }

        .conv-success h3 {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--accent);
            margin-bottom: 16px;
        }

        .conv-success p {
            font-size: 1.1rem;
            opacity: 0.75;
            line-height: 1.7;
        }

        /* COOKIE BANNER */
        #cookie-banner {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: var(--bg);
            border-top: 2px solid var(--accent);
            padding: 16px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            z-index: 999;
            flex-wrap: wrap;
        }

        #cookie-banner p { font-size: 0.9rem; opacity: 0.85; }
        #cookie-banner a { color: var(--accent); text-decoration: underline; }

        #cookie-accept {
            background: var(--accent);
            color: #000;
            border: none;
            padding: 10px 24px;
            border-radius: 6px;
            font-weight: 700;
            cursor: pointer;
            white-space: nowrap;
            font-family: 'Inter', sans-serif;
        }

        /* FOOTER */
        footer {
            background: var(--bg);
            border-top: 1px solid rgba(232, 160, 32, 0.2);
            padding: 40px 20px;
            text-align: center;
        }

        footer .footer-brand { font-size: 1.2rem; font-weight: 800; color: var(--accent); margin-bottom: 8px; }
        footer .footer-tagline { font-size: 0.9rem; opacity: 0.7; margin-bottom: 16px; }
        footer .footer-info { font-size: 0.85rem; opacity: 0.6; margin-bottom: 16px; }
        footer a { color: var(--accent); text-decoration: none; }
        footer a:hover { text-decoration: underline; }

        .section-alt { background: #080f1d; }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .steps-grid { grid-template-columns: 1fr; }
            .servizi-grid { grid-template-columns: 1fr; }
            .perche-grid { grid-template-columns: 1fr; }
            .perche-img { order: -1; }
            .marchi-grid { grid-template-columns: repeat(3, 1fr); }
            .testimonianze-grid { grid-template-columns: 1fr; }
            .conv-options.three-col { grid-template-columns: 1fr 1fr; }
        }

        @media (max-width: 500px) {
            .conv-check-grid { grid-template-columns: 1fr; }
            .conv-options.two-col { grid-template-columns: 1fr; }
            .conv-options.three-col { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

<!-- HEADER -->
<header>
    <img src="images/Logo.png?v=4" style="height:80px;" alt="AutoIdeale.it">
</header>

<!-- HERO -->
<section class="hero">
    <div class="hero-content">
        <h1>Trova la tua prossima auto<br><span>Gratis, veloce, senza stress</span></h1>
        <p>Dicci cosa cerchi e ti troviamo le migliori offerte selezionate dalle concessionarie partner.<br>Ti contattiamo su WhatsApp in poche ore.</p>
        <a href="#form-section" class="btn-primary">Inizia la ricerca &mdash; &egrave; gratis</a>
    </div>
</section>

<!-- COME FUNZIONA -->
<section>
    <div class="container">
        <h2>Come funziona AutoIdeale</h2>
        <div class="steps-grid">
            <div class="step-card">
                <img src="images/come_funziona_step_1.png" alt="Racconta cosa cerchi">
                <h3>Raccontaci cosa cerchi</h3>
                <p>Compila il form in 2 minuti: tipo veicolo, budget, km, preferenze. Zero impegno.</p>
            </div>
            <div class="step-card">
                <img src="images/come_funziona_step_2.png" alt="Selezioniamo per te">
                <h3>Noi selezioniamo per te</h3>
                <p>Analizziamo le offerte delle concessionarie partner per trovare quelle pi&ugrave; adatte a te.</p>
            </div>
            <div class="step-card">
                <img src="images/come_funziona_step_3.png" alt="Ti contattano direttamente">
                <h3>Ti contattano direttamente</h3>
                <p>Ricevi proposte su WhatsApp entro poche ore, senza spam.</p>
            </div>
        </div>
    </div>
</section>

<!-- SERVIZI -->
<section class="section-alt">
    <div class="container">
        <div class="servizi-grid">
            <img src="images/servizi.png" alt="I nostri servizi">
            <div>
                <h2 style="text-align:left; margin-bottom:24px;">Tutto quello che ti serve in un posto solo</h2>
                <ul class="servizi-list">
                    <li>Garanzia inclusa</li>
                    <li>Finanziamento su misura, anche P.IVA</li>
                    <li>Permuta valutata</li>
                    <li>Consegna in tutta Italia</li>
                    <li>Km certificati in fattura</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- PERCHE SCEGLIERCI -->
<section>
    <div class="container">
        <div class="perche-grid">
            <div class="perche-text">
                <h2>Perch&eacute; scegliere AutoIdeale</h2>
                <p class="perche-subtitle">Non siamo una concessionaria. Siamo dalla tua parte.</p>
                <div class="stats">
                    <div class="stat">
                        <span class="stat-number">+500</span>
                        <span class="stat-label">veicoli disponibili</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">&lt; 3 ore</span>
                        <span class="stat-label">risposta garantita</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">gratuito per chi cerca</span>
                    </div>
                </div>
            </div>
            <div class="perche-img">
                <img src="images/perche_sceglierci.png" alt="Perche scegliere AutoIdeale">
            </div>
        </div>
    </div>
</section>

<!-- MARCHI -->
<section class="section-alt">
    <div class="container">
        <h2>I marchi che puoi trovare</h2>
        <div class="marchi-grid">
            <div class="marchio-card">Fiat</div>
            <div class="marchio-card">Mercedes</div>
            <div class="marchio-card">Ford</div>
            <div class="marchio-card">Renault</div>
            <div class="marchio-card">Peugeot</div>
            <div class="marchio-card">Volkswagen</div>
            <div class="marchio-card">BMW</div>
            <div class="marchio-card">Opel</div>
            <div class="marchio-card">Toyota</div>
            <div class="marchio-card">Hyundai</div>
            <div class="marchio-card">Kia</div>
            <div class="marchio-card">Citro&euml;n</div>
        </div>
    </div>
</section>

<!-- TESTIMONIANZE -->
<section>
    <div class="container">
        <h2>Cosa dicono i nostri clienti</h2>
        <div class="testimonianze-grid">
            <div class="testi-card">
                <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="testi-text">"Ho compilato il form la sera e la mattina avevo tre proposte su WhatsApp. Servizio velocissimo e preciso!"</p>
                <div class="testi-author">Marco T. &mdash; Milano</div>
            </div>
            <div class="testi-card">
                <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="testi-text">"Cercavo un furgone con IVA detraibile e in 48 ore avevo gi&agrave; quello che volevo. Consiglio a tutti."</p>
                <div class="testi-author">Giuseppe R. &mdash; Napoli</div>
            </div>
            <div class="testi-card">
                <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <p class="testi-text">"Finalmente un servizio che ascolta davvero. Zero stress, proposte mirate. Consigliatissimo!"</p>
                <div class="testi-author">Alessia M. &mdash; Roma</div>
            </div>
        </div>
    </div>
</section>

<!-- FORM CONVERSAZIONALE -->
<section id="form-section">
    <div class="container">
        <div class="conv-wrapper">

            <div class="conv-header">
                <h2>Dicci cosa cerchi</h2>
                <p>Rispondi a qualche domanda e ti troviamo le offerte pi&ugrave; adatte</p>
            </div>

            <!-- Progress -->
            <div class="conv-progress" id="conv-progress">
                <span class="conv-step-counter" id="step-counter">1 di 7</span>
                <div class="conv-progress-bar">
                    <div class="conv-progress-fill" id="progress-fill"></div>
                </div>
            </div>

            <!-- Q1: Tipo veicolo -->
            <div class="conv-question active" id="q1">
                <div class="conv-question-text">Ciao! Stai cercando un'auto o un furgone?</div>
                <div class="conv-question-sub">Seleziona quello che ti interessa</div>
                <div class="conv-options two-col">
                    <button class="conv-opt" onclick="selectOpt(this,'tipo','auto',2)">
                        <span class="opt-icon">&#128664;</span>
                        <span class="opt-label">Auto</span>
                    </button>
                    <button class="conv-opt" onclick="selectOpt(this,'tipo','furgone',2)">
                        <span class="opt-icon">&#128666;</span>
                        <span class="opt-label">Furgone</span>
                    </button>
                </div>
                <div class="conv-error" id="err-q1">Seleziona un'opzione per continuare.</div>
            </div>

            <!-- Q2: Tipologia -->
            <div class="conv-question" id="q2">
                <div class="conv-question-text" id="q2-text">Che tipo di auto cerchi?</div>
                <div class="conv-question-sub">Puoi selezionarne pi&ugrave; di una &mdash; opzionale</div>
                <div class="conv-check-grid" id="q2-options"></div>
                <div class="conv-nav">
                    <button class="conv-btn-back" onclick="goQ(1)">&larr;</button>
                    <button class="conv-btn-next" onclick="goQ(3)">Avanti &rarr;</button>
                </div>
            </div>

            <!-- Q3: Budget -->
            <div class="conv-question" id="q3">
                <div class="conv-question-text">Qual &egrave; il tuo budget?</div>
                <div class="conv-question-sub">Indicaci una fascia di spesa</div>
                <div class="conv-options" id="q3-options">
                    <button class="conv-opt" onclick="selectOpt(this,'budget','Fino a 5.000 euro',4)">Fino a &euro;5.000</button>
                    <button class="conv-opt" onclick="selectOpt(this,'budget','5.000 - 10.000 euro',4)">&euro;5.000 &ndash; &euro;10.000</button>
                    <button class="conv-opt" onclick="selectOpt(this,'budget','10.000 - 15.000 euro',4)">&euro;10.000 &ndash; &euro;15.000</button>
                    <button class="conv-opt" onclick="selectOpt(this,'budget','15.000 - 20.000 euro',4)">&euro;15.000 &ndash; &euro;20.000</button>
                    <button class="conv-opt" onclick="selectOpt(this,'budget','20.000 - 30.000 euro',4)">&euro;20.000 &ndash; &euro;30.000</button>
                    <button class="conv-opt" onclick="selectOpt(this,'budget','Oltre 30.000 euro',4)">Oltre &euro;30.000</button>
                </div>
                <div class="conv-error" id="err-q3">Seleziona un'opzione per continuare.</div>
                <div class="conv-nav" style="margin-top:8px;">
                    <button class="conv-btn-back" onclick="goQ(2)">&larr;</button>
                </div>
            </div>

            <!-- Q4: Km -->
            <div class="conv-question" id="q4">
                <div class="conv-question-text">Quanti chilometri massimo?</div>
                <div class="conv-question-sub">Indicaci la percorrenza che preferisci</div>
                <div class="conv-options">
                    <button class="conv-opt" onclick="selectOpt(this,'km','Fino a 50.000 km',5)">Fino a 50.000 km</button>
                    <button class="conv-opt" onclick="selectOpt(this,'km','50.000 - 100.000 km',5)">50.000 &ndash; 100.000 km</button>
                    <button class="conv-opt" onclick="selectOpt(this,'km','100.000 - 150.000 km',5)">100.000 &ndash; 150.000 km</button>
                    <button class="conv-opt" onclick="selectOpt(this,'km','Oltre 150.000 km',5)">Oltre 150.000 km</button>
                    <button class="conv-opt" onclick="selectOpt(this,'km','Indifferente',5)">Indifferente</button>
                </div>
                <div class="conv-error" id="err-q4">Seleziona un'opzione per continuare.</div>
                <div class="conv-nav" style="margin-top:8px;">
                    <button class="conv-btn-back" onclick="goQ(3)">&larr;</button>
                </div>
            </div>

            <!-- Q5: Permuta -->
            <div class="conv-question" id="q5">
                <div class="conv-question-text">Hai un veicolo da permutare?</div>
                <div class="conv-question-sub">Ti aiutiamo a valorizzarlo al meglio</div>
                <div class="conv-options two-col">
                    <button class="conv-opt" onclick="selectOpt(this,'permuta','Si',6)">
                        <span class="opt-icon">&#10003;</span>
                        <span class="opt-label">S&igrave;</span>
                    </button>
                    <button class="conv-opt" onclick="selectOpt(this,'permuta','No',6)">
                        <span class="opt-icon">&#10007;</span>
                        <span class="opt-label">No</span>
                    </button>
                </div>
                <div class="conv-error" id="err-q5">Seleziona un'opzione per continuare.</div>
                <div class="conv-nav" style="margin-top:8px;">
                    <button class="conv-btn-back" onclick="goQ(4)">&larr;</button>
                </div>
            </div>

            <!-- Q6: Regione -->
            <div class="conv-question" id="q6">
                <div class="conv-question-text">Da dove ci scrivi?</div>
                <div class="conv-question-sub">Ci aiuta a trovare le offerte pi&ugrave; vicine a te</div>
                <select class="conv-select" id="regione">
                    <option value="">Seleziona la tua regione</option>
                    <option>Abruzzo</option><option>Basilicata</option><option>Calabria</option>
                    <option>Campania</option><option>Emilia-Romagna</option><option>Friuli-Venezia Giulia</option>
                    <option>Lazio</option><option>Liguria</option><option>Lombardia</option>
                    <option>Marche</option><option>Molise</option><option>Piemonte</option>
                    <option>Puglia</option><option>Sardegna</option><option>Sicilia</option>
                    <option>Toscana</option><option>Trentino-Alto Adige</option><option>Umbria</option>
                    <option>Valle d'Aosta</option><option>Veneto</option>
                </select>
                <div class="conv-error" id="err-q6">Seleziona la tua regione per continuare.</div>
                <div class="conv-nav">
                    <button class="conv-btn-back" onclick="goQ(5)">&larr;</button>
                    <button class="conv-btn-next" onclick="goQ(7)">Avanti &rarr;</button>
                </div>
            </div>

            <!-- Q7: Contatto -->
            <div class="conv-question" id="q7">
                <div class="conv-question-text">Perfetto! Come ti chiamiamo?</div>
                <div class="conv-question-sub">Riceverai le offerte direttamente su WhatsApp</div>

                <input type="text" class="conv-input" id="nome" placeholder="Il tuo nome e cognome">
                <input type="tel" class="conv-input" id="telefono" placeholder="Numero WhatsApp (es. 3391234567)">

                <div class="conv-privacy">
                    <input type="checkbox" id="privacy">
                    <label for="privacy">
                        Ho letto e accetto la <a href="privacy-policy.php" target="_blank">Privacy Policy</a>.
                        Acconsento al trattamento dei miei dati per essere ricontattato riguardo alla mia ricerca.
                    </label>
                </div>

                <div class="conv-error" id="err-q7">Compila tutti i campi e accetta la privacy policy.</div>

                <div class="conv-nav">
                    <button class="conv-btn-back" onclick="goQ(6)">&larr;</button>
                    <button class="conv-btn-next" id="submit-btn" onclick="submitForm()">
                        <span class="spinner" id="spinner"></span>
                        Invia la mia richiesta &#9658;
                    </button>
                </div>
            </div>

            <!-- SUCCESS -->
            <div class="conv-success" id="conv-success">
                <div class="success-icon">&#9989;</div>
                <h3>Abbiamo ricevuto la tua richiesta!</h3>
                <p>Ti contatteremo su WhatsApp entro poche ore con le offerte selezionate per te.<br><br>Grazie per aver scelto AutoIdeale.</p>
            </div>

        </div>
    </div>
</section>

<!-- FOOTER -->
<footer>
    <div class="footer-brand">AutoIdeale.it</div>
    <div class="footer-tagline">Il modo pi&ugrave; semplice per trovare la tua prossima auto</div>
    <div class="footer-info">AutoIdeale.it &mdash; <a href="mailto:info@autoideale.it">info@autoideale.it</a></div>
    <a href="privacy-policy.php">Privacy Policy</a>
</footer>

<!-- COOKIE BANNER -->
<div id="cookie-banner">
    <p>Questo sito utilizza solo cookie tecnici necessari al funzionamento. Per maggiori informazioni consulta la nostra <a href="privacy-policy.php">Privacy Policy</a>.</p>
    <button id="cookie-accept" onclick="acceptCookie()">Accetta</button>
</div>

<script>
    var data = {
        tipo: '',
        tipologia: [],
        budget: '',
        km: '',
        permuta: '',
        regione: ''
    };

    var currentQ = 1;
    var totalQ = 7;

    var tipoAuto = ['Utilitaria','Berlina','SUV','Crossover','Monovolume','Station Wagon','Cabrio','Coup\u00e9'];
    var tipoFurgone = ['Standard','Gemellato','Con sponda idraulica','Cassone fisso','Cassone ribaltabile','Frigo','L1H1','L2H1','L2H2','L3H2','L3H3'];

    if (document.cookie.indexOf('cookie_ok=1') !== -1) {
        document.getElementById('cookie-banner').style.display = 'none';
    }

    function acceptCookie() {
        var d = new Date();
        d.setTime(d.getTime() + (365*24*60*60*1000));
        document.cookie = 'cookie_ok=1; expires=' + d.toUTCString() + '; path=/; SameSite=Lax';
        document.getElementById('cookie-banner').style.display = 'none';
    }

    function updateProgress(q) {
        var pct = Math.round((q / totalQ) * 100);
        document.getElementById('progress-fill').style.width = pct + '%';
        document.getElementById('step-counter').textContent = q + ' di ' + totalQ;
    }

    function selectOpt(btn, field, value, nextQ) {
        // deselect siblings
        var opts = btn.closest('.conv-options').querySelectorAll('.conv-opt');
        opts.forEach(function(o) { o.classList.remove('selected'); });
        btn.classList.add('selected');
        data[field] = value;

        // auto-advance after short delay
        setTimeout(function() { goQ(nextQ); }, 300);
    }

    function goQ(n) {
        // validazione uscita
        if (n > currentQ) {
            if (currentQ === 3 && !data.budget) { showErr('err-q3'); return; }
            if (currentQ === 4 && !data.km) { showErr('err-q4'); return; }
            if (currentQ === 5 && !data.permuta) { showErr('err-q5'); return; }
            if (currentQ === 6) {
                var reg = document.getElementById('regione').value;
                if (!reg) { showErr('err-q6'); return; }
                data.regione = reg;
            }
        }

        // popola Q2 se vengo da Q1
        if (n === 2 && currentQ === 1) {
            buildQ2();
        }

        document.getElementById('q' + currentQ).classList.remove('active');
        document.getElementById('q' + n).classList.add('active');
        currentQ = n;
        updateProgress(n);

        document.getElementById('form-section').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    function showErr(id) {
        var el = document.getElementById(id);
        if (el) {
            el.style.display = 'block';
            setTimeout(function() { el.style.display = 'none'; }, 3000);
        }
    }

    function buildQ2() {
        var opts = data.tipo === 'auto' ? tipoAuto : tipoFurgone;
        document.getElementById('q2-text').textContent = data.tipo === 'auto'
            ? 'Che tipo di auto cerchi?'
            : 'Che tipo di furgone cerchi?';

        var grid = document.getElementById('q2-options');
        grid.innerHTML = '';
        data.tipologia = [];

        opts.forEach(function(o) {
            var item = document.createElement('div');
            item.className = 'conv-check-item';
            item.innerHTML = '<div class="check-icon">&#10003;</div><span>' + o + '</span>';
            item.onclick = function() {
                item.classList.toggle('checked');
                var idx = data.tipologia.indexOf(o);
                if (idx === -1) data.tipologia.push(o);
                else data.tipologia.splice(idx, 1);
            };
            grid.appendChild(item);
        });
    }

    function submitForm() {
        var nome = document.getElementById('nome').value.trim();
        var telefono = document.getElementById('telefono').value.trim();
        var privacy = document.getElementById('privacy').checked;

        if (!nome || !telefono || !privacy) {
            showErr('err-q7');
            return;
        }

        var interesse = data.tipo.charAt(0).toUpperCase() + data.tipo.slice(1);
        if (data.tipologia.length > 0) interesse += ' (' + data.tipologia.join(', ') + ')';

        var note = [
            'Budget: ' + (data.budget || 'non specificato'),
            'Km: ' + (data.km || 'non specificato'),
            'Permuta: ' + (data.permuta || 'non specificato'),
            'Regione: ' + (data.regione || 'non specificata')
        ].join(' | ');

        var payload = {
            nome: nome,
            telefono: telefono,
            interesse: interesse,
            fonte: 'Landing Autoideale',
            note: note,
            token: 'G83_SECRET_2026'
        };

        document.getElementById('spinner').style.display = 'inline-block';
        document.getElementById('submit-btn').disabled = true;

        fetch('https://autoideale.it/crm/g83/api/lead.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-G83-Token': 'G83_SECRET_2026'
            },
            body: JSON.stringify(payload)
        })
        .then(function(res) { return res.json(); })
        .then(function() { showSuccess(); })
        .catch(function() { showSuccess(); });
    }

    function showSuccess() {
        document.getElementById('q' + currentQ).classList.remove('active');
        document.getElementById('conv-progress').style.display = 'none';
        document.querySelector('.conv-header').style.display = 'none';
        document.getElementById('conv-success').style.display = 'block';
        document.getElementById('form-section').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    document.querySelector('a[href="#form-section"]').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('form-section').scrollIntoView({ behavior: 'smooth' });
    });

    updateProgress(1);
</script>

</body>
</html>
