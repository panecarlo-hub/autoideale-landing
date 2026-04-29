<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoIdeale.it – Trova la tua prossima auto usata</title>
    <meta name="description" content="Dicci cosa cerchi, ti troviamo le migliori offerte auto furgoni usati. Gratis, veloce, senza stress.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --bg: #0f172a;
            --accent: #E8A020;
            --text: #ffffff;
            --card-bg: #1e293b;
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

        header img { height: 60px; width: auto; }

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
            padding: 12px 0;
            font-size: 1.05rem;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .servizi-list li::before {
            content: '✓';
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
            font-size: 0.95rem;
            opacity: 0.9;
            margin-bottom: 16px;
            line-height: 1.7;
        }

        .testi-author { font-weight: 700; color: var(--accent); font-size: 0.9rem; }

        /* FORM */
        #form-section { background: #0a1120; }

        .form-card {
            background: #fff;
            color: #0f172a;
            max-width: 680px;
            margin: 0 auto;
            border-radius: 12px;
            padding: 32px;
        }

        .progress-bar {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin-bottom: 28px;
            font-size: 0.9rem;
            font-weight: 600;
            color: #64748b;
        }

        .progress-steps { display: flex; gap: 4px; }

        .progress-dot {
            width: 32px;
            height: 4px;
            background: #e2e8f0;
            border-radius: 2px;
            transition: background 0.3s;
        }

        .progress-dot.active { background: var(--accent); }

        .step { display: none; }
        .step.active { display: block; }

        .step h3 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 24px;
            color: #0f172a;
        }

        /* Tipo veicolo */
        .tipo-buttons {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            margin-bottom: 24px;
        }

        .tipo-btn {
            border: 2px solid #e2e8f0;
            background: #f8fafc;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            font-weight: 700;
            font-size: 1.1rem;
            color: #0f172a;
            transition: all 0.2s;
            font-family: 'Inter', sans-serif;
        }

        .tipo-btn:hover, .tipo-btn.selected {
            border-color: var(--accent);
            background: rgba(232, 160, 32, 0.1);
        }

        .tipo-btn .tipo-icon { font-size: 2.5rem; display: block; margin-bottom: 8px; }

        /* Sottotipi */
        .subtypes { display: none; margin-bottom: 24px; }
        .subtypes.visible { display: block; }

        .subtypes-label {
            font-size: 0.9rem;
            font-weight: 600;
            color: #475569;
            margin-bottom: 12px;
        }

        .checkbox-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 8px; }

        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 12px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            cursor: pointer;
            font-size: 0.9rem;
            color: #0f172a;
            transition: all 0.2s;
        }

        .checkbox-item:hover { border-color: var(--accent); background: rgba(232, 160, 32, 0.05); }

        .checkbox-item input[type="checkbox"] { accent-color: var(--accent); width: 16px; height: 16px; }

        /* Form step 2 */
        .form-group { margin-bottom: 20px; }

        .form-group label {
            display: block;
            font-size: 0.9rem;
            font-weight: 600;
            color: #475569;
            margin-bottom: 8px;
        }

        .form-group select,
        .form-group input[type="text"],
        .form-group input[type="tel"] {
            width: 100%;
            padding: 12px 14px;
            border: 1.5px solid #e2e8f0;
            border-radius: 8px;
            font-size: 0.95rem;
            color: #0f172a;
            background: #f8fafc;
            font-family: 'Inter', sans-serif;
            transition: border-color 0.2s;
        }

        .form-group select:focus,
        .form-group input:focus { outline: none; border-color: var(--accent); }

        .toggle-group { display: flex; flex-wrap: wrap; gap: 8px; }

        .toggle-btn {
            padding: 10px 18px;
            border: 1.5px solid #e2e8f0;
            border-radius: 8px;
            background: #f8fafc;
            color: #0f172a;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            font-family: 'Inter', sans-serif;
        }

        .toggle-btn.selected { border-color: var(--accent); background: var(--accent); color: #000; }

        .alimentazione-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 8px; }

        .alim-item {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            cursor: pointer;
            font-size: 0.85rem;
            color: #0f172a;
        }

        .alim-item input[type="checkbox"] { accent-color: var(--accent); }

        /* Step 3 */
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }

        .privacy-check {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            padding: 16px;
            background: #f8fafc;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1.5px solid #e2e8f0;
        }

        .privacy-check input[type="checkbox"] {
            accent-color: var(--accent);
            width: 18px;
            height: 18px;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .privacy-check label { font-size: 0.85rem; color: #475569; line-height: 1.5; }
        .privacy-check a { color: var(--accent); text-decoration: underline; }

        /* Nav buttons */
        .form-nav { display: flex; gap: 12px; justify-content: flex-end; margin-top: 8px; }

        .btn-back {
            padding: 14px 24px;
            border: 1.5px solid #e2e8f0;
            border-radius: 8px;
            background: transparent;
            color: #475569;
            font-weight: 600;
            cursor: pointer;
            font-family: 'Inter', sans-serif;
            font-size: 0.95rem;
        }

        .btn-next {
            padding: 14px 32px;
            background: var(--accent);
            border: none;
            border-radius: 8px;
            color: #000;
            font-weight: 700;
            cursor: pointer;
            font-family: 'Inter', sans-serif;
            font-size: 0.95rem;
            transition: opacity 0.2s;
        }

        .btn-next:hover { opacity: 0.9; }

        .btn-submit {
            padding: 14px 32px;
            background: var(--accent);
            border: none;
            border-radius: 8px;
            color: #000;
            font-weight: 700;
            cursor: pointer;
            font-family: 'Inter', sans-serif;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-submit:disabled { opacity: 0.7; cursor: not-allowed; }

        .spinner {
            width: 18px;
            height: 18px;
            border: 2px solid rgba(0,0,0,0.3);
            border-top-color: #000;
            border-radius: 50%;
            animation: spin 0.7s linear infinite;
            display: none;
        }

        @keyframes spin { to { transform: rotate(360deg); } }

        .error-msg { color: #ef4444; font-size: 0.85rem; margin-top: 8px; display: none; }

        /* Success */
        .success-box { text-align: center; padding: 40px 20px; display: none; }
        .success-box .success-icon { font-size: 4rem; margin-bottom: 16px; }
        .success-box h3 { font-size: 1.5rem; font-weight: 800; color: var(--accent); margin-bottom: 12px; }
        .success-box p { color: #475569; font-size: 1rem; line-height: 1.6; }

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
        }

        @media (max-width: 500px) {
            .form-row { grid-template-columns: 1fr; }
            .alimentazione-grid { grid-template-columns: repeat(2, 1fr); }
            .checkbox-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

<!-- HEADER -->
<header>
    <img src="images/Logo.png" alt="AutoIdeale.it">
</header>

<!-- HERO -->
<section class="hero">
    <div class="hero-content">
        <h1>Trova la tua prossima auto<br><span>Gratis, veloce, senza stress</span></h1>
        <p>Dicci cosa cerchi e ti troviamo le migliori offerte selezionate dalle concessionarie partner.<br>Ti contattiamo su WhatsApp in poche ore.</p>
        <a href="#form-section" class="btn-primary">Inizia la ricerca — è gratis</a>
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
                <p>Analizziamo le offerte delle concessionarie partner per trovare quelle più adatte a te.</p>
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
                    <li>Finanziamento su misura, anche PIVA</li>
                    <li>Permuta valutata</li>
                    <li>Consegna tutta Italia</li>
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
                <h2>Perché scegliere AutoIdeale</h2>
                <p class="perche-subtitle">Non siamo una concessionaria. Siamo dalla tua parte.</p>
                <div class="stats">
                    <div class="stat">
                        <span class="stat-number">+500</span>
                        <span class="stat-label">veicoli disponibili</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">&lt; 3 ore</span>
                        <span class="stat-label">Risposta in meno di 3 ore</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">100%</span>
                        <span class="stat-label">gratuito per chi cerca</span>
                    </div>
                </div>
            </div>
            <div class="perche-img">
                <img src="images/perche_sceglierci.png" alt="Perché scegliere AutoIdeale">
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
            <div class="marchio-card">Citroën</div>
        </div>
    </div>
</section>

<!-- TESTIMONIANZE -->
<section>
    <div class="container">
        <h2>Cosa dicono i nostri clienti</h2>
        <div class="testimonianze-grid">
            <div class="testi-card">
                <div class="stars">★★★★★</div>
                <p class="testi-text">"Ho compilato il form la sera e la mattina avevo tre proposte su WhatsApp. Servizio velocissimo e preciso!"</p>
                <div class="testi-author">Marco T. — Milano</div>
            </div>
            <div class="testi-card">
                <div class="stars">★★★★★</div>
                <p class="testi-text">"Cercavo un furgone con IVA detraibile e in 48 ore avevo già quello che volevo. Consiglio a tutti."</p>
                <div class="testi-author">Giuseppe R. — Napoli</div>
            </div>
            <div class="testi-card">
                <div class="stars">★★★★★</div>
                <p class="testi-text">"Finalmente un servizio che ascolta davvero. Zero stress, proposte mirate. Consigliatissimo!"</p>
                <div class="testi-author">Alessia M. — Roma</div>
            </div>
        </div>
    </div>
</section>

<!-- FORM -->
<section id="form-section">
    <div class="container">
        <h2>Dicci cosa cerchi</h2>
        <div class="form-card">

            <div class="progress-bar">
                <span id="step-label">Step 1 di 3</span>
                <div class="progress-steps">
                    <div class="progress-dot active" id="dot-1"></div>
                    <div class="progress-dot" id="dot-2"></div>
                    <div class="progress-dot" id="dot-3"></div>
                </div>
            </div>

            <!-- STEP 1 -->
            <div class="step active" id="step-1">
                <h3>Che tipo di veicolo cerchi?</h3>
                <div class="tipo-buttons">
                    <button type="button" class="tipo-btn" onclick="selectTipo('auto')" id="btn-auto">
                        <span class="tipo-icon">🚗</span>
                        Auto
                    </button>
                    <button type="button" class="tipo-btn" onclick="selectTipo('furgone')" id="btn-furgone">
                        <span class="tipo-icon">🚐</span>
                        Furgone
                    </button>
                </div>

                <div class="subtypes" id="subtypes-auto">
                    <div class="subtypes-label">Quale tipologia? (opzionale)</div>
                    <div class="checkbox-grid">
                        <label class="checkbox-item"><input type="checkbox" name="tipo_auto" value="Utilitaria"> Utilitaria</label>
                        <label class="checkbox-item"><input type="checkbox" name="tipo_auto" value="Berlina"> Berlina</label>
                        <label class="checkbox-item"><input type="checkbox" name="tipo_auto" value="SUV"> SUV</label>
                        <label class="checkbox-item"><input type="checkbox" name="tipo_auto" value="Crossover"> Crossover</label>
                        <label class="checkbox-item"><input type="checkbox" name="tipo_auto" value="Monovolume"> Monovolume</label>
                        <label class="checkbox-item"><input type="checkbox" name="tipo_auto" value="Station Wagon"> Station Wagon</label>
                        <label class="checkbox-item"><input type="checkbox" name="tipo_auto" value="Cabrio"> Cabrio</label>
                        <label class="checkbox-item"><input type="checkbox" name="tipo_auto" value="Coupé"> Coupé</label>
                    </div>
                </div>

                <div class="subtypes" id="subtypes-furgone">
                    <div class="subtypes-label">Quale tipologia? (opzionale)</div>
                    <div class="checkbox-grid">
                        <label class="checkbox-item"><input type="checkbox" name="tipo_furgone" value="Standard"> Standard</label>
                        <label class="checkbox-item"><input type="checkbox" name="tipo_furgone" value="Gemellato"> Gemellato</label>
                        <label class="checkbox-item"><input type="checkbox" name="tipo_furgone" value="Con sponda idraulica"> Con sponda idraulica</label>
                        <label class="checkbox-item"><input type="checkbox" name="tipo_furgone" value="Cassone fisso"> Cassone fisso</label>
                        <label class="checkbox-item"><input type="checkbox" name="tipo_furgone" value="Cassone ribaltabile"> Cassone ribaltabile</label>
                        <label class="checkbox-item"><input type="checkbox" name="tipo_furgone" value="Frigo"> Frigo</label>
                        <label class="checkbox-item"><input type="checkbox" name="tipo_furgone" value="L1H1"> L1H1</label>
                        <label class="checkbox-item"><input type="checkbox" name="tipo_furgone" value="L2H1"> L2H1</label>
                        <label class="checkbox-item"><input type="checkbox" name="tipo_furgone" value="L2H2"> L2H2</label>
                        <label class="checkbox-item"><input type="checkbox" name="tipo_furgone" value="L3H2"> L3H2</label>
                        <label class="checkbox-item"><input type="checkbox" name="tipo_furgone" value="L3H3"> L3H3</label>
                    </div>
                </div>

                <div id="error-step1" class="error-msg">Seleziona Auto o Furgone per continuare.</div>
                <div class="form-nav">
                    <button type="button" class="btn-next" onclick="goStep(2)">Avanti &rarr;</button>
                </div>
            </div>

            <!-- STEP 2 -->
            <div class="step" id="step-2">
                <h3>Raccontaci le tue preferenze</h3>

                <div class="form-group">
                    <label>Budget</label>
                    <select id="budget">
                        <option value="">Seleziona budget</option>
                        <option value="Fino a €5.000">Fino a €5.000</option>
                        <option value="€5.000 - €10.000">€5.000 – €10.000</option>
                        <option value="€10.000 - €15.000">€10.000 – €15.000</option>
                        <option value="€15.000 - €20.000">€15.000 – €20.000</option>
                        <option value="€20.000 - €30.000">€20.000 – €30.000</option>
                        <option value="Oltre €30.000">Oltre €30.000</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Chilometri</label>
                    <select id="km">
                        <option value="">Seleziona km</option>
                        <option value="Fino a 50.000 km">Fino a 50.000 km</option>
                        <option value="50.000 - 100.000 km">50.000 – 100.000 km</option>
                        <option value="100.000 - 150.000 km">100.000 – 150.000 km</option>
                        <option value="Oltre 150.000 km">Oltre 150.000 km</option>
                        <option value="Indifferente">Indifferente</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Alimentazione</label>
                    <div class="alimentazione-grid">
                        <label class="alim-item"><input type="checkbox" name="alimentazione" value="Benzina"> Benzina</label>
                        <label class="alim-item"><input type="checkbox" name="alimentazione" value="Diesel"> Diesel</label>
                        <label class="alim-item"><input type="checkbox" name="alimentazione" value="Ibrido"> Ibrido</label>
                        <label class="alim-item"><input type="checkbox" name="alimentazione" value="Elettrico"> Elettrico</label>
                        <label class="alim-item"><input type="checkbox" name="alimentazione" value="Indifferente"> Indifferente</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>Cambio</label>
                    <div class="toggle-group" id="cambio-group">
                        <button type="button" class="toggle-btn" onclick="toggleSelect(this,'cambio-group')">Manuale</button>
                        <button type="button" class="toggle-btn" onclick="toggleSelect(this,'cambio-group')">Automatico</button>
                        <button type="button" class="toggle-btn" onclick="toggleSelect(this,'cambio-group')">Indifferente</button>
                    </div>
                </div>

                <div class="form-group">
                    <label>Marca preferita (opzionale)</label>
                    <input type="text" id="marca" placeholder="Es. BMW, Fiat, Ford...">
                </div>

                <div class="form-group">
                    <label>Regione</label>
                    <select id="regione">
                        <option value="">Seleziona regione</option>
                        <option>Abruzzo</option>
                        <option>Basilicata</option>
                        <option>Calabria</option>
                        <option>Campania</option>
                        <option>Emilia-Romagna</option>
                        <option>Friuli-Venezia Giulia</option>
                        <option>Lazio</option>
                        <option>Liguria</option>
                        <option>Lombardia</option>
                        <option>Marche</option>
                        <option>Molise</option>
                        <option>Piemonte</option>
                        <option>Puglia</option>
                        <option>Sardegna</option>
                        <option>Sicilia</option>
                        <option>Toscana</option>
                        <option>Trentino-Alto Adige</option>
                        <option>Umbria</option>
                        <option>Valle d'Aosta</option>
                        <option>Veneto</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Utilizzo</label>
                    <div class="toggle-group" id="utilizzo-group">
                        <button type="button" class="toggle-btn" onclick="toggleSelect(this,'utilizzo-group')">Privato</button>
                        <button type="button" class="toggle-btn" onclick="toggleSelect(this,'utilizzo-group')">Lavoro</button>
                        <button type="button" class="toggle-btn" onclick="toggleSelect(this,'utilizzo-group')">PIVA</button>
                    </div>
                </div>

                <div class="form-nav">
                    <button type="button" class="btn-back" onclick="goStep(1)">&larr; Indietro</button>
                    <button type="button" class="btn-next" onclick="goStep(3)">Avanti &rarr;</button>
                </div>
            </div>

            <!-- STEP 3 -->
            <div class="step" id="step-3">
                <h3>Ultimi dettagli</h3>

                <div class="form-group">
                    <label>Hai un veicolo in permuta?</label>
                    <div class="toggle-group" id="permuta-group">
                        <button type="button" class="toggle-btn" onclick="toggleSelect(this,'permuta-group')">Sì</button>
                        <button type="button" class="toggle-btn" onclick="toggleSelect(this,'permuta-group')">No</button>
                    </div>
                </div>

                <div class="form-group">
                    <label>Sei interessato al finanziamento?</label>
                    <div class="toggle-group" id="finanziamento-group">
                        <button type="button" class="toggle-btn" onclick="toggleSelect(this,'finanziamento-group')">Sì</button>
                        <button type="button" class="toggle-btn" onclick="toggleSelect(this,'finanziamento-group')">No</button>
                    </div>
                </div>

                <div class="form-group">
                    <label>Quando vorresti acquistare?</label>
                    <div class="toggle-group" id="acquisto-group">
                        <button type="button" class="toggle-btn" onclick="toggleSelect(this,'acquisto-group')">Subito</button>
                        <button type="button" class="toggle-btn" onclick="toggleSelect(this,'acquisto-group')">Entro 1 mese</button>
                        <button type="button" class="toggle-btn" onclick="toggleSelect(this,'acquisto-group')">Sto valutando</button>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Nome *</label>
                        <input type="text" id="nome" placeholder="Il tuo nome">
                    </div>
                    <div class="form-group">
                        <label>Cognome *</label>
                        <input type="text" id="cognome" placeholder="Il tuo cognome">
                    </div>
                </div>

                <div class="form-group">
                    <label>Telefono WhatsApp *</label>
                    <input type="tel" id="telefono" placeholder="Es. 3391234567">
                </div>

                <div class="privacy-check">
                    <input type="checkbox" id="privacy">
                    <label for="privacy">
                        Ho letto e accetto la <a href="privacy-policy.php" target="_blank">Privacy Policy</a>.
                        Acconsento al trattamento dei miei dati personali per essere ricontattato riguardo alla mia ricerca.
                    </label>
                </div>

                <div id="error-step3" class="error-msg">Compila tutti i campi obbligatori e accetta la privacy policy.</div>

                <div class="form-nav">
                    <button type="button" class="btn-back" onclick="goStep(2)">&larr; Indietro</button>
                    <button type="button" class="btn-submit" id="submit-btn" onclick="submitForm()">
                        <span class="spinner" id="spinner"></span>
                        Invia la mia richiesta
                    </button>
                </div>
            </div>

            <!-- SUCCESS -->
            <div class="success-box" id="success-box">
                <div class="success-icon">✅</div>
                <h3>Perfetto! Abbiamo ricevuto la tua richiesta.</h3>
                <p>Ti contatteremo su WhatsApp entro poche ore.<br><br>Grazie per aver scelto AutoIdeale.</p>
            </div>

        </div>
    </div>
</section>

<!-- FOOTER -->
<footer>
    <div class="footer-brand">AutoIdeale.it</div>
    <div class="footer-tagline">Il modo più semplice per trovare la tua prossima auto</div>
    <div class="footer-info">G83 Solution &mdash; <a href="mailto:g83solution@gmail.com">g83solution@gmail.com</a></div>
    <a href="privacy-policy.php">Privacy Policy</a>
</footer>

<!-- COOKIE BANNER -->
<div id="cookie-banner">
    <p>Questo sito utilizza solo cookie tecnici necessari al funzionamento. Per maggiori informazioni consulta la nostra <a href="privacy-policy.php">Privacy Policy</a>.</p>
    <button id="cookie-accept" onclick="acceptCookie()">Accetta</button>
</div>

<script>
    var tipoSelezionato = '';
    var currentStep = 1;

    if (document.cookie.indexOf('cookie_ok=1') !== -1) {
        document.getElementById('cookie-banner').style.display = 'none';
    }

    function acceptCookie() {
        var d = new Date();
        d.setTime(d.getTime() + (365 * 24 * 60 * 60 * 1000));
        document.cookie = 'cookie_ok=1; expires=' + d.toUTCString() + '; path=/; SameSite=Lax';
        document.getElementById('cookie-banner').style.display = 'none';
    }

    function selectTipo(tipo) {
        tipoSelezionato = tipo;
        document.getElementById('btn-auto').classList.toggle('selected', tipo === 'auto');
        document.getElementById('btn-furgone').classList.toggle('selected', tipo === 'furgone');
        document.getElementById('subtypes-auto').classList.toggle('visible', tipo === 'auto');
        document.getElementById('subtypes-furgone').classList.toggle('visible', tipo === 'furgone');
        document.getElementById('error-step1').style.display = 'none';
    }

    function toggleSelect(btn, groupId) {
        document.getElementById(groupId).querySelectorAll('.toggle-btn').forEach(function(b) {
            b.classList.remove('selected');
        });
        btn.classList.add('selected');
    }

    function goStep(n) {
        if (n === 2 && !tipoSelezionato) {
            document.getElementById('error-step1').style.display = 'block';
            return;
        }
        document.getElementById('step-' + currentStep).classList.remove('active');
        document.getElementById('step-' + n).classList.add('active');
        currentStep = n;
        document.getElementById('step-label').textContent = 'Step ' + n + ' di 3';
        for (var i = 1; i <= 3; i++) {
            document.getElementById('dot-' + i).classList.toggle('active', i <= n);
        }
        document.getElementById('form-section').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    function submitForm() {
        var nome = document.getElementById('nome').value.trim();
        var cognome = document.getElementById('cognome').value.trim();
        var telefono = document.getElementById('telefono').value.trim();
        var privacy = document.getElementById('privacy').checked;

        if (!nome || !cognome || !telefono || !privacy) {
            document.getElementById('error-step3').style.display = 'block';
            return;
        }
        document.getElementById('error-step3').style.display = 'none';

        var checks = tipoSelezionato === 'auto'
            ? document.querySelectorAll('input[name="tipo_auto"]:checked')
            : document.querySelectorAll('input[name="tipo_furgone"]:checked');
        var sottotipi = Array.from(checks).map(function(c) { return c.value; }).join(', ');
        var interesse = tipoSelezionato.charAt(0).toUpperCase() + tipoSelezionato.slice(1);
        if (sottotipi) interesse += ' (' + sottotipi + ')';

        var alimentazione = Array.from(document.querySelectorAll('input[name="alimentazione"]:checked'))
            .map(function(c) { return c.value; }).join(', ');
        var cambioBtn = document.querySelector('#cambio-group .toggle-btn.selected');
        var utilizzoBtn = document.querySelector('#utilizzo-group .toggle-btn.selected');
        var permutaBtn = document.querySelector('#permuta-group .toggle-btn.selected');
        var finanziamentoBtn = document.querySelector('#finanziamento-group .toggle-btn.selected');
        var acquistoBtn = document.querySelector('#acquisto-group .toggle-btn.selected');

        var note = [
            'Budget: ' + (document.getElementById('budget').value || 'non specificato'),
            'Km: ' + (document.getElementById('km').value || 'non specificato'),
            'Alimentazione: ' + (alimentazione || 'non specificata'),
            'Cambio: ' + (cambioBtn ? cambioBtn.textContent.trim() : 'non specificato'),
            'Marca: ' + (document.getElementById('marca').value.trim() || 'non specificata'),
            'Regione: ' + (document.getElementById('regione').value || 'non specificata'),
            'Utilizzo: ' + (utilizzoBtn ? utilizzoBtn.textContent.trim() : 'non specificato'),
            'Permuta: ' + (permutaBtn ? permutaBtn.textContent.trim() : 'non specificato'),
            'Finanziamento: ' + (finanziamentoBtn ? finanziamentoBtn.textContent.trim() : 'non specificato'),
            'Acquisto: ' + (acquistoBtn ? acquistoBtn.textContent.trim() : 'non specificato')
        ].join(' | ');

        var payload = {
            nome: nome + ' ' + cognome,
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
        document.getElementById('step-' + currentStep).classList.remove('active');
        document.querySelector('.progress-bar').style.display = 'none';
        document.getElementById('success-box').style.display = 'block';
        document.getElementById('form-section').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }

    document.querySelector('a[href="#form-section"]').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('form-section').scrollIntoView({ behavior: 'smooth' });
    });
</script>

</body>
</html>
