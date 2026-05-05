<?php
// Landing veicoli — AutoIdeale.it
// Stile chat-style mobile-first, versione 2.0
// Invia lead a: /crm/g83/api/lead.php via POST (token: X-G83-Token)
// Backup versione precedente: landing-veicoli-old.php
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Trova la tua auto ideale in 60 secondi | AutoIdeale.it</title>
    <meta name="description" content="Componi la tua auto ideale rispondendo a poche domande. Ti contattiamo su WhatsApp entro 30 minuti con le migliori offerte selezionate per te.">
    <meta property="og:title" content="Trova la tua auto ideale in 60 secondi">
    <meta property="og:description" content="Servizio gratuito: dicci cosa cerchi, ti contattiamo su WhatsApp entro 30 minuti.">
    <meta property="og:image" content="https://autoideale.it/images/og-chat.jpg">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://autoideale.it/landing-veicoli.php">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0a0a0a">

    <!-- META PIXEL HERE -->

    <!-- GOOGLE ADS TAG HERE -->

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'main':  '#0a0a0a',
                        'card':  '#1c1c1c',
                        'bub':   '#2c2c2c',
                        'gwa':   '#25D366',
                        'gwad':  '#1da851',
                        'sand':  '#E8D5B7',
                    }
                }
            }
        }
    </script>

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            background: #0a0a0a;
            color: #fff;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        /* Previene zoom su input in iOS */
        input, select, textarea { font-size: 16px !important; }

        /* ---- Typing dots ---- */
        .typing-dot {
            display: inline-block;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #888;
            animation: typeBounce 1.2s infinite ease-in-out;
        }
        .typing-dot:nth-child(2) { animation-delay: 0.18s; }
        .typing-dot:nth-child(3) { animation-delay: 0.36s; }

        @keyframes typeBounce {
            0%, 60%, 100% { transform: translateY(0); opacity: 0.35; }
            30%            { transform: translateY(-5px); opacity: 1; }
        }

        /* ---- Bubble in ---- */
        @keyframes bubbleIn {
            from { opacity: 0; transform: translateY(8px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .bubble-in { animation: bubbleIn 0.28s ease-out forwards; }

        /* ---- Tag riepilogo ---- */
        @keyframes tagPop {
            from { opacity: 0; transform: scale(0.88); }
            to   { opacity: 1; transform: scale(1); }
        }
        .tag-pop { animation: tagPop 0.3s ease-out forwards; }

        /* ---- Bottone opzione ---- */
        .opt-btn {
            display: block;
            width: 100%;
            background: #1c1c1c;
            border: 1px solid rgba(255,255,255,0.13);
            color: #fff;
            border-radius: 16px;
            padding: 16px 18px;
            text-align: left;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.14s, border-color 0.14s, transform 0.08s;
            font-family: inherit;
        }
        .opt-btn:hover  { background: rgba(37,211,102,0.1); border-color: #25D366; }
        .opt-btn:active { transform: scale(0.97); background: rgba(37,211,102,0.16); }

        /* ---- Input zona fissa ---- */
        #input-zone {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: #0a0a0a;
            border-top: 1px solid rgba(255,255,255,0.07);
            padding: 12px 14px;
            padding-bottom: max(12px, env(safe-area-inset-bottom));
            z-index: 60;
        }

        .chat-input-field {
            flex: 1;
            background: #1c1c1c;
            border: 1px solid rgba(255,255,255,0.14);
            border-radius: 24px;
            padding: 12px 18px;
            color: #fff;
            font-family: inherit;
            outline: none;
            transition: border-color 0.2s;
        }
        .chat-input-field:focus   { border-color: #25D366; }
        .chat-input-field::placeholder { color: rgba(255,255,255,0.3); }

        .send-btn {
            background: #25D366;
            border: none;
            border-radius: 50%;
            width: 46px;
            height: 46px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            flex-shrink: 0;
            transition: transform 0.1s;
        }
        .send-btn:active { transform: scale(0.9); }

        /* ---- Header ---- */
        .app-header {
            position: sticky;
            top: 0;
            z-index: 70;
            background: #111;
            border-bottom: 1px solid rgba(255,255,255,0.07);
        }

        /* ---- Card riepilogo ---- */
        #summary-card {
            background: #111;
            border: 1px solid rgba(232,213,183,0.2);
            transition: opacity 0.3s;
        }

        /* ---- Padding sicuro in fondo ---- */
        .bottom-pad { height: calc(90px + env(safe-area-inset-bottom)); }

        /* ---- Scrollbar chat ---- */
        #chat-area::-webkit-scrollbar { width: 3px; }
        #chat-area::-webkit-scrollbar-thumb { background: #333; border-radius: 3px; }
    </style>
</head>
<body>

<!-- ============================================================
     HEADER STICKY
     ============================================================ -->
<div class="app-header">
    <div style="display:flex;align-items:center;justify-content:space-between;padding:10px 14px;">

        <!-- Brand -->
        <div style="display:flex;align-items:center;gap:10px;">
            <div style="width:38px;height:38px;background:#25D366;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:900;color:#000;font-size:15px;flex-shrink:0;">AI</div>
            <div>
                <div style="font-weight:700;font-size:15px;line-height:1.1;color:#fff;">Autoideale</div>
                <div style="font-size:11px;color:#25D366;">&#9679; Online</div>
            </div>
        </div>

        <!-- Contatore live -->
        <div style="text-align:right;">
            <div id="counter-num" style="font-size:13px;font-weight:600;color:#E8D5B7;">&#8203;</div>
            <div style="font-size:10px;color:#666;">hanno trovato la loro auto</div>
        </div>

    </div>
</div>

<!-- ============================================================
     CARD RIEPILOGO LIVE (appare dopo la prima risposta)
     ============================================================ -->
<div id="summary-card" class="hidden" style="margin:8px 12px 0;border-radius:16px;padding:10px 14px;">
    <div style="font-size:10px;font-weight:700;color:#E8D5B7;text-transform:uppercase;letter-spacing:0.07em;margin-bottom:6px;">La tua auto ideale</div>
    <div id="summary-tags" style="display:flex;flex-wrap:wrap;gap:6px;"></div>
</div>

<!-- ============================================================
     AREA CHAT
     ============================================================ -->
<div id="chat-area" style="display:flex;flex-direction:column;gap:10px;padding:14px 12px;">
    <!-- messaggi inseriti dinamicamente via JS -->
</div>

<!-- Padding per non nascondere l'ultimo messaggio dietro la zona input -->
<div class="bottom-pad"></div>

<!-- ============================================================
     ZONA INPUT FISSA (visibile solo per step testo)
     ============================================================ -->
<div id="input-zone" style="display:none;">
    <div style="display:flex;gap:10px;align-items:center;max-width:520px;margin:0 auto;">
        <input
            type="text"
            id="chat-input"
            class="chat-input-field"
            placeholder=""
            autocomplete="off"
            autocorrect="off"
            autocapitalize="words"
        >
        <button class="send-btn" onclick="handleSend()">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="#000">
                <path d="M3.478 2.405a.75.75 0 00-.926.94l2.432 7.905H13.5a.75.75 0 010 1.5H4.984l-2.432 7.905a.75.75 0 00.926.94 60.519 60.519 0 0018.445-8.986.75.75 0 000-1.218A60.517 60.517 0 003.478 2.405z"/>
            </svg>
        </button>
    </div>
    <div id="input-error" style="display:none;color:#f87171;font-size:12px;text-align:center;margin-top:6px;max-width:520px;margin-left:auto;margin-right:auto;padding:0 4px;"></div>
    <div id="optional-hint" style="display:none;color:#555;font-size:11px;text-align:center;margin-top:4px;">Facoltativo — puoi premere Invia per saltare</div>
</div>

<script>
// ================================================================
// CONFIGURAZIONE
// ================================================================

var API_ENDPOINT = 'https://autoideale.it/crm/g83/api/lead.php';
var API_TOKEN    = 'G83_SECRET_2026';

// ================================================================
// DEFINIZIONE STEP CONVERSAZIONALI (9 step)
// ================================================================
var STEPS = [
    {
        id:      'tipo_auto',
        domanda: 'Ciao! Che tipo di auto cerchi?',
        tipo:    'bottoni',
        opzioni: [
            { testo: '🚗 Berlina',         val: 'Berlina' },
            { testo: '🚙 SUV',              val: 'SUV' },
            { testo: '🚐 Station Wagon',    val: 'Station Wagon' },
            { testo: '🏙️ City Car',   val: 'City Car' },
            { testo: '🏎️ Coupé', val: 'Coupé' },
            { testo: '🤷 Indifferente',     val: 'Indifferente' }
        ]
    },
    {
        id:      'alimentazione',
        domanda: 'Alimentazione preferita?',
        tipo:    'bottoni',
        opzioni: [
            { testo: '⛽ Benzina',        val: 'Benzina' },
            { testo: '💧 Diesel',   val: 'Diesel' },
            { testo: '🔋 Ibrida',   val: 'Ibrida' },
            { testo: '⚡ Elettrica',      val: 'Elettrica' },
            { testo: '🤷 Indifferente', val: 'Indifferente' }
        ]
    },
    {
        id:      'cambio',
        domanda: 'Tipo di cambio?',
        tipo:    'bottoni',
        opzioni: [
            { testo: '🔧 Manuale',         val: 'Manuale' },
            { testo: '🤖 Automatico',      val: 'Automatico' },
            { testo: '🤷 Indifferente',    val: 'Indifferente' }
        ]
    },
    {
        id:      'budget',
        domanda: 'Qual è il tuo budget?',
        tipo:    'bottoni',
        opzioni: [
            { testo: '💶 Fino a 10.000€',  val: 'Fino a 10.000€' },
            { testo: '💶 10−20.000€',  val: '10-20.000€' },
            { testo: '💶 20−30.000€',  val: '20-30.000€' },
            { testo: '💶 Oltre 30.000€',    val: 'Oltre 30.000€' }
        ]
    },
    {
        id:      'km_max',
        domanda: 'Km massimi?',
        tipo:    'bottoni',
        opzioni: [
            { testo: '📍 Fino a 50.000',   val: 'Fino a 50.000 km' },
            { testo: '📍 50–100.000', val: '50-100.000 km' },
            { testo: '📍 100–150.000',val: '100-150.000 km' },
            { testo: '🤷 Indifferente',    val: 'Indifferente' }
        ]
    },
    {
        id:      'tempistica',
        domanda: 'Quando vorresti l\'auto?',
        tipo:    'bottoni',
        opzioni: [
            { testo: '🔥 Subito',                   val: 'Subito' },
            { testo: '📅 Entro 1 mese',             val: 'Entro 1 mese' },
            { testo: '📅 Entro 3 mesi',             val: 'Entro 3 mesi' },
            { testo: '👁️ Sto solo guardando', val: 'Sto solo guardando' }
        ]
    },
    {
        id:           'nome',
        domanda:      'Come ti chiami?',
        tipo:         'input',
        placeholder:  'Nome e cognome',
        inputType:    'text',
        obbligatorio: true
    },
    {
        id:           'telefono',
        domanda:      'Il tuo numero WhatsApp?',
        tipo:         'input',
        placeholder:  'Es. 3391234567',
        inputType:    'tel',
        obbligatorio: true
    },
    {
        id:           'email',
        domanda:      'Email? Ti mandiamo anche un riepilogo. (opzionale)',
        tipo:         'input',
        placeholder:  'La tua email',
        inputType:    'email',
        obbligatorio: false
    }
];

// Icone per i tag del riepilogo live
var TAG_ICONS = {
    tipo_auto:     '🚗',
    alimentazione: '⛽',
    cambio:        '⚙️',
    budget:        '💶',
    km_max:        '📍',
    tempistica:    '🕒'
};

// ================================================================
// STATO APPLICAZIONE
// ================================================================
var stato = {
    step:          0,
    nome:          '',
    cognome:       '',
    telefono:      '',
    email:         '',
    tipo_auto:     '',
    alimentazione: '',
    cambio:        '',
    budget:        '',
    km_max:        '',
    tempistica:    '',
    completato:    false
};

// ================================================================
// RIFERIMENTI DOM
// ================================================================
var elChat      = document.getElementById('chat-area');
var elInputZone = document.getElementById('input-zone');
var elInput     = document.getElementById('chat-input');
var elInputErr  = document.getElementById('input-error');
var elOptHint   = document.getElementById('optional-hint');
var elSummary   = document.getElementById('summary-card');
var elTags      = document.getElementById('summary-tags');

// ================================================================
// LOCALSTORAGE — salvataggio progressi
// ================================================================
var LS_KEY = 'autoideale_chat_v2';

function salvaStato() {
    try { localStorage.setItem(LS_KEY, JSON.stringify(stato)); } catch(e) {}
}

function caricaStato() {
    try {
        var s = localStorage.getItem(LS_KEY);
        return s ? JSON.parse(s) : null;
    } catch(e) { return null; }
}

function pulisciStato() {
    try { localStorage.removeItem(LS_KEY); } catch(e) {}
}

// ================================================================
// CONTATORE LIVE
// ================================================================
function caricaContatore() {
    var el = document.getElementById('counter-num');
    if (!el) return;

    // TODO: quando GET /crm/g83/api/lead.php?action=count sarà implementato, sostituire con:
    // fetch(API_ENDPOINT + '?action=count', { headers: { 'X-G83-Token': API_TOKEN } })
    //     .then(function(r) { return r.json(); })
    //     .then(function(d) { if (d && d.count) el.textContent = d.count + ' persone'; })
    //     .catch(function() { el.textContent = '127 persone'; });
    // Fallback statico in attesa dell'endpoint:
    el.textContent = '127 persone';
}

// ================================================================
// SCROLL AUTOMATICO
// ================================================================
function scrollGiu() {
    setTimeout(function() {
        window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
    }, 60);
}

// ================================================================
// BUBBLE CHAT
// ================================================================
function aggiungiBubble(html, lato, callback) {
    var wrap = document.createElement('div');
    wrap.style.cssText = 'display:flex;' + (lato === 'destra' ? 'justify-content:flex-end;' : 'justify-content:flex-start;');

    var bub = document.createElement('div');
    bub.className = 'bubble-in';
    bub.style.cssText =
        'max-width:82%;padding:11px 15px;border-radius:18px;font-size:14px;line-height:1.55;' +
        (lato === 'destra'
            ? 'background:#25D366;color:#000;font-weight:600;border-bottom-right-radius:4px;'
            : 'background:#2c2c2c;color:#fff;border-bottom-left-radius:4px;');
    bub.innerHTML = html;

    wrap.appendChild(bub);
    elChat.appendChild(wrap);
    scrollGiu();

    if (callback) setTimeout(callback, 280);
}

// ================================================================
// TYPING INDICATOR (puntini per 800ms poi callback)
// ================================================================
function mostraTyping(callback) {
    var wrap = document.createElement('div');
    wrap.id = 'typing-wrap';
    wrap.style.cssText = 'display:flex;justify-content:flex-start;';

    var bub = document.createElement('div');
    bub.style.cssText = 'background:#2c2c2c;padding:12px 15px;border-radius:18px;border-bottom-left-radius:4px;display:flex;gap:4px;align-items:center;';
    bub.innerHTML = '<span class="typing-dot"></span><span class="typing-dot"></span><span class="typing-dot"></span>';

    wrap.appendChild(bub);
    elChat.appendChild(wrap);
    scrollGiu();

    setTimeout(function() {
        var el = document.getElementById('typing-wrap');
        if (el) el.remove();
        if (callback) callback();
    }, 820);
}

// ================================================================
// BOTTONI OPZIONE
// ================================================================
function mostraBottoni(step) {
    rimuoviBottoni();

    var wrap = document.createElement('div');
    wrap.id = 'opt-wrap';
    wrap.style.cssText = 'display:flex;flex-direction:column;gap:8px;margin-top:4px;padding-bottom:12px;';

    step.opzioni.forEach(function(opt) {
        var btn = document.createElement('button');
        btn.className = 'opt-btn';
        btn.textContent = opt.testo;
        btn.onclick = function() { gestisciSelezione(step, opt.val, opt.testo); };
        wrap.appendChild(btn);
    });

    elChat.appendChild(wrap);
    scrollGiu();
}

function rimuoviBottoni() {
    var el = document.getElementById('opt-wrap');
    if (el) el.remove();
}

function gestisciSelezione(step, valore, testoVisibile) {
    rimuoviBottoni();
    stato[step.id] = valore;
    salvaStato();
    aggiungiBubble(testoVisibile, 'destra');
    aggiornaRiepilogo();
    setTimeout(avanziStep, 420);
}

// ================================================================
// INPUT TESTO
// ================================================================
function mostraInput(step) {
    elInput.value       = '';
    elInput.placeholder = step.placeholder || '';
    elInput.type        = step.inputType || 'text';
    elInputErr.style.display  = 'none';
    elOptHint.style.display   = step.obbligatorio === false ? 'block' : 'none';
    elInputZone.style.display = 'block';

    elInput.onkeydown = function(e) {
        if (e.key === 'Enter') { e.preventDefault(); handleSend(); }
    };

    setTimeout(function() { elInput.focus(); }, 350);
}

function nascondiInput() {
    elInputZone.style.display = 'none';
    elInput.blur();
}

function handleSend() {
    var step      = STEPS[stato.step];
    var val       = elInput.value.trim();
    var facoltativo = (step.obbligatorio === false);

    if (!facoltativo && !val) {
        mostraErroreInput('Inserisci un valore per continuare.');
        return;
    }

    // Validazione telefono (9-11 cifre, formato italiano)
    if (step.id === 'telefono' && val) {
        var cifre = val.replace(/\D/g, '');
        if (cifre.length < 9 || cifre.length > 11) {
            mostraErroreInput('Numero non valido. Usa il formato 3391234567.');
            return;
        }
        val = cifre;
    }

    // Validazione email
    if (step.id === 'email' && val) {
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val)) {
            mostraErroreInput('Email non valida.');
            return;
        }
    }

    nascondiInput();
    stato[step.id] = val;
    salvaStato();

    aggiungiBubble(val || '(salto)', 'destra');
    aggiornaRiepilogo();
    setTimeout(avanziStep, 420);
}

function mostraErroreInput(msg) {
    elInputErr.textContent   = msg;
    elInputErr.style.display = 'block';
    setTimeout(function() { elInputErr.style.display = 'none'; }, 3000);
}

// ================================================================
// RIEPILOGO LIVE — si aggiorna dopo ogni risposta
// ================================================================
function aggiornaRiepilogo() {
    var campi = ['tipo_auto', 'alimentazione', 'cambio', 'budget', 'km_max', 'tempistica'];
    var html  = '';
    var trovato = false;

    campi.forEach(function(k) {
        if (stato[k]) {
            trovato = true;
            html += '<span class="tag-pop" style="display:inline-flex;align-items:center;gap:4px;background:rgba(255,255,255,0.09);border-radius:20px;padding:4px 10px;font-size:12px;color:#fff;">' +
                (TAG_ICONS[k] || '') + ' ' + stato[k] + '</span>';
        }
    });

    if (trovato) {
        elSummary.classList.remove('hidden');
        elTags.innerHTML = html;
    }
}

// ================================================================
// AVANZAMENTO STEP
// ================================================================
function avanziStep() {
    stato.step++;
    salvaStato();

    if (stato.step < STEPS.length) {
        eseguiStep(stato.step);
    } else {
        mostraStepPrivacy();
    }
}

function eseguiStep(idx) {
    var step = STEPS[idx];

    mostraTyping(function() {
        aggiungiBubble(step.domanda, 'sinistra', function() {
            if (step.tipo === 'bottoni') {
                mostraBottoni(step);
            } else {
                mostraInput(step);
            }
        });
    });
}

// ================================================================
// STEP PRIVACY (dopo lo step 9)
// ================================================================
function mostraStepPrivacy() {
    rimuoviBottoni();
    nascondiInput();

    mostraTyping(function() {
        aggiungiBubble(
            'Quasi fatto! Prima di inviarti le offerte, ho bisogno del tuo consenso.',
            'sinistra',
            function() {
                var wrap = document.createElement('div');
                wrap.id = 'opt-wrap';
                wrap.style.cssText = 'display:flex;flex-direction:column;gap:10px;margin-top:4px;padding-bottom:20px;';

                // Label checkbox privacy
                var lbl = document.createElement('label');
                lbl.id = 'privacy-label';
                lbl.style.cssText = 'display:flex;gap:12px;align-items:flex-start;background:#1c1c1c;border:1px solid rgba(255,255,255,0.12);border-radius:16px;padding:14px 16px;cursor:pointer;transition:border-color 0.2s;';
                lbl.innerHTML =
                    '<input type="checkbox" id="privacy-check" style="width:20px;height:20px;flex-shrink:0;margin-top:2px;accent-color:#25D366;cursor:pointer;">' +
                    '<span style="font-size:13px;color:rgba(255,255,255,0.7);line-height:1.6;">' +
                    'Ho letto e accetto la <a href="/privacy-policy.php" target="_blank" style="color:#E8D5B7;text-decoration:underline;">Privacy Policy</a>. ' +
                    'Acconsento al trattamento dei dati per essere ricontattato in merito alla mia ricerca auto.' +
                    '</span>';
                wrap.appendChild(lbl);

                // Bottone invio
                var btnInvia = document.createElement('button');
                btnInvia.style.cssText = 'display:block;width:100%;background:#25D366;color:#000;border:none;border-radius:16px;padding:18px 20px;font-size:16px;font-weight:700;cursor:pointer;font-family:inherit;transition:transform 0.1s;';
                btnInvia.textContent = '✓  Invia la mia ricerca';
                btnInvia.onclick = function() { inviaLead(); };
                btnInvia.onmousedown = function() { this.style.transform = 'scale(0.97)'; };
                btnInvia.onmouseup   = function() { this.style.transform = 'scale(1)'; };
                wrap.appendChild(btnInvia);

                elChat.appendChild(wrap);
                scrollGiu();
            }
        );
    });
}

// ================================================================
// INVIO LEAD AL CRM
// ================================================================
function inviaLead() {
    var check = document.getElementById('privacy-check');
    if (!check || !check.checked) {
        var lbl = document.getElementById('privacy-label');
        if (lbl) {
            lbl.style.borderColor = '#f87171';
            setTimeout(function() { lbl.style.borderColor = 'rgba(255,255,255,0.12)'; }, 1600);
        }
        return;
    }

    rimuoviBottoni();
    stato.completato = true;
    salvaStato();

    // Separa nome e cognome (split naive sul primo spazio)
    var parti      = (stato.nome || '').trim().split(/\s+/);
    var nomeVal    = parti[0] || '';
    var cognomeVal = parti.slice(1).join(' ') || '';

    // Concatena le preferenze nel campo interesse
    var interesse = [
        'Tipo: '         + (stato.tipo_auto     || '-'),
        'Alimentazione: '+ (stato.alimentazione || '-'),
        'Cambio: '       + (stato.cambio        || '-'),
        'Budget: '       + (stato.budget        || '-'),
        'Km max: '       + (stato.km_max        || '-'),
        'Tempistica: '   + (stato.tempistica    || '-')
    ].join(' | ');

    var payload = {
        nome:            nomeVal,
        cognome:         cognomeVal,
        telefono:        stato.telefono,
        email:           stato.email,
        interesse:       interesse,
        fonte:           'landing-chat',
        id_concessionaria: 1,
        note:            ''
    };

    // Feedback visivo immediato
    mostraTyping(function() {
        aggiungiBubble('Ricevuto! 🔍 Sto elaborando la tua ricerca...', 'sinistra');
    });

    fetch(API_ENDPOINT, {
        method:  'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-G83-Token':  API_TOKEN
        },
        body: JSON.stringify(payload)
    })
    .then(function(r) { return r.json(); })
    .then(function() { mostraSuccesso(); })
    .catch(function() { mostraSuccesso(); }); // Mostra sempre il messaggio di conferma
}

// ================================================================
// MESSAGGIO DI SUCCESSO FINALE
// ================================================================
function mostraSuccesso() {
    pulisciStato();

    var primoNome = stato.nome ? stato.nome.split(/\s+/)[0] : '';

    setTimeout(function() {
        mostraTyping(function() {
            aggiungiBubble(
                'Perfetto' + (primoNome ? ', <strong>' + primoNome + '</strong>' : '') + '! 🎉 ' +
                'Abbiamo ricevuto la tua richiesta. Un nostro consulente ti contatterà su WhatsApp ' +
                'al numero che ci hai lasciato <strong>entro 30 minuti</strong> per mostrarti le auto perfette per te.',
                'sinistra',
                function() {
                    var nota = document.createElement('div');
                    nota.className = 'bubble-in';
                    nota.style.cssText = 'text-align:center;padding:10px 12px 20px;font-size:12px;color:#555;';
                    nota.textContent = 'Nel frattempo controlla che WhatsApp sia attivo sul tuo telefono.';
                    elChat.appendChild(nota);
                    scrollGiu();
                }
            );
        });
    }, 600);
}

// ================================================================
// AVVIO — controlla localStorage e parte
// ================================================================
function avvia() {
    caricaContatore();

    var salvato = caricaStato();

    // Ripristino da localStorage se l'utente era a metà
    if (salvato && !salvato.completato && salvato.step > 0 && salvato.step < STEPS.length) {
        stato = salvato;

        mostraTyping(function() {
            aggiungiBubble(
                'Bentornato! 👋 Ho salvato la tua ricerca precedente. Continuiamo da dove ci siamo fermati.',
                'sinistra',
                function() {
                    aggiornaRiepilogo();
                    eseguiStep(stato.step);
                }
            );
        });
        return;
    }

    // Avvio fresh
    pulisciStato();
    stato.step = 0;

    mostraTyping(function() {
        aggiungiBubble(
            'Ciao! 👋 Sono il tuo consulente auto virtuale di <strong>Autoideale</strong>.',
            'sinistra',
            function() {
                mostraTyping(function() {
                    aggiungiBubble(
                        'Ti aiuto a trovare la tua auto ideale in meno di 60 secondi, gratis.',
                        'sinistra',
                        function() {
                            eseguiStep(0);
                        }
                    );
                });
            }
        );
    });
}

// Avvio al caricamento pagina
avvia();
</script>

<!--
================================================================
SCHEMA MARKUP AutoDealer — decommenta e personalizza prima del go-live
================================================================
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AutoDealer",
  "name": "AutoIdeale.it",
  "url": "https://autoideale.it",
  "description": "Trova la tua auto ideale in 60 secondi. Servizio gratuito di matching auto usate con concessionarie partner.",
  "email": "info@autoideale.it",
  "areaServed": {
    "@type": "Country",
    "name": "Italy"
  },
  "sameAs": []
}
</script>
-->

</body>
</html>
