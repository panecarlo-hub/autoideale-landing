<?php
// landing-veicoli.php — Autoideale Chat Configurator
?><!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<!-- ===== SEO META ===== -->
<title>Trova la tua auto o furgone ideale in 60 secondi | Autoideale</title>
<meta name="description" content="Configura la tua auto o furgone ideale in 60 secondi con il nostro consulente AI. Berlina, SUV, furgonato, ibrida o elettrica: ricevi le migliori offerte su WhatsApp entro 30 minuti.">
<!-- Open Graph per condivisione social -->
<meta property="og:title" content="Trova la tua auto o furgone ideale in 60 secondi | Autoideale">
<meta property="og:description" content="Il consulente AI che trova l'auto giusta per te. Gratis, in 60 secondi.">
<meta property="og:image" content="https://TUODOMINIO.it/images/og-autoideale.jpg">
<meta property="og:type" content="website">
<meta name="robots" content="index, follow">

<!-- META PIXEL -->
<!--
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', 'TUO_PIXEL_ID');
fbq('track', 'PageView');
</script>
-->

<!-- ===== GOOGLE ADS TAG HERE ===== -->
<!-- Sostituisci AW-XXXXXXXXX con il tuo ID Google Ads reale -->
<!--
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-XXXXXXXXX"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'AW-XXXXXXXXX');
</script>
-->

<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

:root {
  --bg: #0A0A0A;
  --bubble-sys: #1A1A1A;
  --green: #25D366;
  --sand: #D4B996;
  --text: #F5F5F0;
  --gray2: #888;
  --gray3: #666;
  --blue-car: #4A7FE8;
  --border: #1A1A1A;
}

html, body {
  background: var(--bg);
  color: var(--text);
  font-family: -apple-system, system-ui, 'Segoe UI', sans-serif;
  height: 100%;
  overflow-x: hidden;
}

body {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  min-height: 100dvh;
}

/* ======= HEADER STICKY ======= */
#ai-header {
  position: sticky;
  top: 0;
  z-index: 100;
  background: var(--bg);
  border-bottom: 1px solid var(--border);
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 16px;
}

.ai-avatar {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: var(--green);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 13px;
  font-weight: 700;
  color: #fff;
  flex-shrink: 0;
}

.ai-header-info {
  display: flex;
  flex-direction: column;
  margin-left: 10px;
}

.ai-brand-name {
  font-size: 17px;
  font-weight: 700;
  color: var(--text);
  line-height: 1.2;
}

.ai-online {
  display: flex;
  align-items: center;
  gap: 4px;
  font-size: 10px;
  color: var(--green);
  margin-top: 2px;
}

.ai-pulse-dot {
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: var(--green);
  animation: ai-pulse-dot 1.8s ease-in-out infinite;
}

.ai-header-left {
  display: flex;
  align-items: center;
}

.ai-header-right {
  text-align: right;
}

.ai-header-right .count {
  font-size: 13px;
  font-weight: 600;
  color: var(--text);
  display: block;
}

.ai-header-right .label {
  font-size: 10px;
  color: var(--gray2);
  display: block;
}

/* ======= STATUS BAR ======= */
#ai-statusbar {
  position: sticky;
  top: 61px;
  z-index: 99;
  background: #0F0F0F;
  border-bottom: 1px solid var(--border);
  padding: 8px 16px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.ai-status-left {
  display: flex;
  align-items: center;
  gap: 6px;
  font-size: 12px;
}

.ai-status-left .pulse-dot {
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: var(--green);
  animation: ai-pulse-dot 1.8s ease-in-out infinite;
  flex-shrink: 0;
}

.ai-status-left .count-num {
  font-weight: 500;
  color: var(--text);
}

.ai-status-left .count-label {
  color: #999;
}

.ai-status-right {
  font-size: 10px;
  color: var(--gray3);
}

/* ======= CARD AUTO LIVE ======= */
#ai-card-live {
  background: var(--bg);
  padding: 16px 18px 14px;
  border-bottom: 1px solid var(--border);
}

.ai-card-label {
  font-size: 9px;
  font-weight: 600;
  color: var(--sand);
  letter-spacing: 0.22em;
  text-transform: uppercase;
  margin-bottom: 8px;
}

.ai-chips-container {
  display: flex;
  flex-wrap: wrap;
  gap: 6px;
  min-height: 24px;
  margin-bottom: 12px;
}

.ai-chip {
  display: inline-flex;
  align-items: center;
  background: var(--green);
  color: #000;
  font-size: 11px;
  font-weight: 700;
  padding: 5px 11px;
  border-radius: 100px;
  animation: ai-fadein-pop 0.4s cubic-bezier(0.34, 1.56, 0.64, 1) forwards;
}

.ai-car-wrap {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 8px 0 4px;
}

.ai-car-glow {
  position: absolute;
  width: 240px;
  height: 80px;
  border-radius: 50%;
  background: radial-gradient(ellipse at center, rgba(74,127,232,0.4) 0%, transparent 70%);
  animation: ai-pulse-glow 3s ease-in-out infinite;
  pointer-events: none;
}

.ai-car-svg {
  animation: ai-float-car 3.5s ease-in-out infinite;
  position: relative;
  z-index: 1;
}

/* ======= CHAT AREA ======= */
#ai-chat {
  flex: 1;
  padding: 14px 14px;
  display: flex;
  flex-direction: column;
  gap: 0;
  overflow-y: auto;
}

.ai-bubble {
  max-width: 85%;
  padding: 11px 14px;
  font-size: 14px;
  line-height: 1.5;
  color: var(--text);
  margin-bottom: 10px;
  animation: ai-fadein-up 0.3s ease forwards;
}

.ai-bubble.system {
  background: var(--bubble-sys);
  border-radius: 4px 16px 16px 16px;
  align-self: flex-start;
}

.ai-bubble.user {
  background: var(--green);
  color: #000;
  font-weight: 600;
  border-radius: 16px 4px 16px 16px;
  align-self: flex-end;
}

.ai-typing {
  background: var(--bubble-sys);
  border-radius: 4px 16px 16px 16px;
  padding: 11px 16px;
  display: inline-flex;
  align-items: center;
  gap: 5px;
  margin-bottom: 10px;
  align-self: flex-start;
  animation: ai-fadein-up 0.3s ease forwards;
}

.ai-typing span {
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: var(--gray2);
  display: inline-block;
  animation: ai-typing-bounce 1.2s ease-in-out infinite;
}

.ai-typing span:nth-child(2) { animation-delay: 0.2s; }
.ai-typing span:nth-child(3) { animation-delay: 0.4s; }

/* ======= BOTTONI OPZIONI ======= */
#ai-options {
  padding: 8px 14px 12px;
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  animation: ai-fadein-up 0.3s ease forwards;
}

.ai-option-btn {
  background: transparent;
  border: 1.5px solid var(--green);
  color: var(--green);
  padding: 14px 20px;
  border-radius: 100px;
  font-size: 15px;
  font-weight: 600;
  min-height: 52px;
  cursor: pointer;
  transition: background 0.15s, color 0.15s;
  font-family: inherit;
  flex: 1 1 calc(50% - 4px);
  min-width: 120px;
  line-height: 1.2;
}

.ai-option-btn:active,
.ai-option-btn:hover {
  background: var(--green);
  color: #000;
}

/* ======= INPUT TESTO ======= */
.ai-input-wrap {
  padding: 8px 14px 12px;
  animation: ai-fadein-up 0.3s ease forwards;
}

.ai-input-field {
  width: 100%;
  font-size: 16px;
  padding: 14px 16px;
  background: var(--bubble-sys);
  color: var(--text);
  border: 1px solid #2A2A2A;
  border-radius: 12px;
  font-family: inherit;
  outline: none;
  transition: border-color 0.15s;
  -webkit-appearance: none;
}

.ai-input-field:focus {
  border-color: var(--green);
}

.ai-input-field::placeholder {
  color: var(--gray3);
}

.ai-send-btn {
  width: 100%;
  margin-top: 10px;
  background: var(--green);
  color: #000;
  font-size: 16px;
  font-weight: 700;
  padding: 16px;
  border-radius: 12px;
  border: none;
  cursor: pointer;
  font-family: inherit;
  transition: opacity 0.15s;
}

.ai-send-btn:active { opacity: 0.85; }

.ai-skip-btn {
  width: 100%;
  margin-top: 8px;
  background: transparent;
  color: var(--gray2);
  font-size: 13px;
  font-weight: 500;
  padding: 10px;
  border-radius: 12px;
  border: 1px solid #2A2A2A;
  cursor: pointer;
  font-family: inherit;
}

/* ======= PRIVACY ======= */
.ai-privacy-wrap {
  padding: 8px 14px 12px;
  animation: ai-fadein-up 0.3s ease forwards;
}

.ai-checkbox-label {
  display: flex;
  align-items: flex-start;
  gap: 10px;
  font-size: 13px;
  color: var(--gray2);
  line-height: 1.5;
  cursor: pointer;
  margin-bottom: 14px;
}

.ai-checkbox-label input[type="checkbox"] {
  width: 20px;
  height: 20px;
  accent-color: var(--green);
  flex-shrink: 0;
  margin-top: 1px;
  cursor: pointer;
}

.ai-checkbox-label a {
  color: var(--sand);
  text-decoration: underline;
}

/* ======= PROGRESS BAR ======= */
#ai-progress {
  position: sticky;
  bottom: 0;
  z-index: 100;
  background: var(--bg);
  border-top: 1px solid var(--border);
  padding: 10px 18px 14px;
}

.ai-progress-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 6px;
}

.ai-progress-label {
  font-size: 10px;
  color: var(--gray3);
}

.ai-progress-pct {
  font-size: 10px;
  color: var(--gray3);
}

.ai-progress-track {
  height: 3px;
  background: #1F1F1F;
  border-radius: 100px;
  overflow: hidden;
}

.ai-progress-fill {
  height: 100%;
  background: var(--green);
  border-radius: 100px;
  width: 0%;
  transition: width 0.4s ease;
}

/* ======= MESSAGGIO FINALE ======= */
.ai-final-msg {
  font-size: 13px;
  color: var(--gray2);
  text-align: center;
  padding: 8px 14px 0;
  animation: ai-fadein-up 0.3s ease forwards;
}

/* ======= ANIMAZIONI ======= */
@keyframes ai-pulse-dot {
  0%, 100% { opacity: 1; transform: scale(1); }
  50% { opacity: 0.4; transform: scale(0.75); }
}

@keyframes ai-float-car {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-7px); }
}

@keyframes ai-pulse-glow {
  0%, 100% { opacity: 0.6; transform: scale(1); }
  50% { opacity: 1; transform: scale(1.12); }
}

@keyframes ai-fadein-pop {
  0% { opacity: 0; transform: scale(0.6); }
  100% { opacity: 1; transform: scale(1); }
}

@keyframes ai-fadein-up {
  0% { opacity: 0; transform: translateY(10px); }
  100% { opacity: 1; transform: translateY(0); }
}

@keyframes ai-typing-bounce {
  0%, 60%, 100% { transform: translateY(0); }
  30% { transform: translateY(-6px); }
}

@media (max-width: 400px) {
  .ai-option-btn {
    flex: 1 1 100%;
  }
}
</style>
</head>
<body>

<!-- HEADER STICKY -->
<header id="ai-header">
  <div class="ai-header-left">
    <div class="ai-avatar">AI</div>
    <div class="ai-header-info">
      <span class="ai-brand-name">Autoideale</span>
      <span class="ai-online">
        <span class="ai-pulse-dot"></span>
        Online
      </span>
    </div>
  </div>
  <div class="ai-header-right">
    <span class="count">127 persone</span>
    <span class="label">hanno trovato la loro auto</span>
  </div>
</header>

<!-- STATUS BAR -->
<div id="ai-statusbar">
  <div class="ai-status-left">
    <span class="pulse-dot"></span>
    <span class="count-num">247</span>
    <span class="count-label">auto disponibili</span>
  </div>
  <div class="ai-status-right">ultimo brief · pochi minuti fa</div>
</div>

<!-- CARD AUTO LIVE -->
<div id="ai-card-live">
  <div class="ai-card-label">La tua auto, in tempo reale</div>
  <div class="ai-chips-container" id="ai-chips"></div>
  <div class="ai-car-wrap">
    <div class="ai-car-glow"></div>
    <svg class="ai-car-svg" width="270" height="98" viewBox="0 0 270 98" fill="none" xmlns="http://www.w3.org/2000/svg">
      <!-- Ombra ellittica -->
      <ellipse cx="135" cy="90" rx="105" ry="7" fill="rgba(0,0,0,0.45)"/>
      <!-- Carrozzeria principale -->
      <path d="M28 68 Q28 58 38 56 L68 46 Q88 30 120 27 L160 26 Q188 26 204 36 L230 50 Q242 54 244 62 L244 68 Z" fill="#3A6FD8"/>
      <!-- Tetto / cabina -->
      <path d="M74 56 Q90 34 118 30 L158 29 Q184 29 200 40 L226 54 Z" fill="#4A7FE8"/>
      <!-- Highlights tetto -->
      <path d="M82 52 Q96 37 118 34 L155 33 Q178 34 196 44 L218 52 Z" fill="rgba(255,255,255,0.08)"/>
      <!-- Parabrezza anteriore -->
      <path d="M180 54 L202 42 Q212 38 226 50 L222 54 Z" fill="#1A2E5A" opacity="0.85"/>
      <!-- Parabrezza posteriore -->
      <path d="M82 54 L94 36 Q100 30 120 29 L74 54 Z" fill="#1A2E5A" opacity="0.85"/>
      <!-- Finestrino laterale -->
      <path d="M100 54 L106 36 L152 34 L158 54 Z" fill="#1A2E5A" opacity="0.75"/>
      <!-- Fanale anteriore giallo -->
      <ellipse cx="238" cy="60" rx="8" ry="5" fill="#F5C842"/>
      <ellipse cx="238" cy="60" rx="5" ry="3" fill="#FFE070"/>
      <!-- Fanale posteriore rosso -->
      <ellipse cx="32" cy="60" rx="7" ry="4.5" fill="#CC3333"/>
      <ellipse cx="32" cy="60" rx="4" ry="2.5" fill="#FF5555"/>
      <!-- Linea laterale accento -->
      <path d="M38 62 L240 62" stroke="rgba(74,127,232,0.5)" stroke-width="1"/>
      <!-- Minigonna -->
      <path d="M50 68 L220 68 L220 72 Q135 75 50 72 Z" fill="#2A5CB8"/>
      <!-- Ruota anteriore -->
      <circle cx="196" cy="74" r="16" fill="#141414"/>
      <circle cx="196" cy="74" r="12" fill="#222"/>
      <circle cx="196" cy="74" r="7" fill="#333"/>
      <circle cx="196" cy="74" r="4" fill="#555"/>
      <!-- Raggi ruota ant -->
      <line x1="196" y1="62" x2="196" y2="86" stroke="#444" stroke-width="1.5"/>
      <line x1="184" y1="74" x2="208" y2="74" stroke="#444" stroke-width="1.5"/>
      <line x1="187.5" y1="65.5" x2="204.5" y2="82.5" stroke="#444" stroke-width="1.5"/>
      <line x1="187.5" y1="82.5" x2="204.5" y2="65.5" stroke="#444" stroke-width="1.5"/>
      <!-- Ruota posteriore -->
      <circle cx="74" cy="74" r="16" fill="#141414"/>
      <circle cx="74" cy="74" r="12" fill="#222"/>
      <circle cx="74" cy="74" r="7" fill="#333"/>
      <circle cx="74" cy="74" r="4" fill="#555"/>
      <!-- Raggi ruota post -->
      <line x1="74" y1="62" x2="74" y2="86" stroke="#444" stroke-width="1.5"/>
      <line x1="62" y1="74" x2="86" y2="74" stroke="#444" stroke-width="1.5"/>
      <line x1="65.5" y1="65.5" x2="82.5" y2="82.5" stroke="#444" stroke-width="1.5"/>
      <line x1="65.5" y1="82.5" x2="82.5" y2="65.5" stroke="#444" stroke-width="1.5"/>
    </svg>
  </div>
</div>

<!-- CHAT AREA -->
<div id="ai-chat"></div>

<!-- OPTIONS / INPUT AREA (dynamic) -->
<div id="ai-interact"></div>

<!-- PROGRESS BAR -->
<div id="ai-progress">
  <div class="ai-progress-row">
    <span class="ai-progress-label" id="ai-step-label">Brief 0 di 9</span>
    <span class="ai-progress-pct" id="ai-step-pct">0%</span>
  </div>
  <div class="ai-progress-track">
    <div class="ai-progress-fill" id="ai-progress-fill"></div>
  </div>
</div>

<script>
(function() {

  // ─── STATE ───────────────────────────────────────────────────
  const LS_KEY = 'ai_brief_v3';
  let state = {
    step: 0,
    answers: {},
    chips: [],
    done: false
  };

  // Try restore from localStorage
  try {
    const saved = localStorage.getItem(LS_KEY);
    if (saved) {
      const parsed = JSON.parse(saved);
      if (!parsed.done) state = parsed;
    }
  } catch(e) {}

  function saveState() {
    try { localStorage.setItem(LS_KEY, JSON.stringify(state)); } catch(e) {}
  }

  // ─── ELEMENTS ────────────────────────────────────────────────
  const chatEl = document.getElementById('ai-chat');
  const interactEl = document.getElementById('ai-interact');
  const chipsEl = document.getElementById('ai-chips');
  const progressFill = document.getElementById('ai-progress-fill');
  const stepLabel = document.getElementById('ai-step-label');
  const stepPct = document.getElementById('ai-step-pct');

  // ─── PROGRESS ────────────────────────────────────────────────
  const TOTAL_STEPS = 9;

  function updateProgress(step) {
    const pct = Math.round((step / TOTAL_STEPS) * 100);
    progressFill.style.width = pct + '%';
    stepLabel.textContent = 'Brief ' + step + ' di ' + TOTAL_STEPS;
    stepPct.textContent = pct + '%';
  }

  // ─── CHIPS ───────────────────────────────────────────────────
  function addChip(text) {
    state.chips.push(text);
    const chip = document.createElement('span');
    chip.className = 'ai-chip';
    chip.textContent = text;
    chipsEl.appendChild(chip);
  }

  function renderChips() {
    chipsEl.innerHTML = '';
    state.chips.forEach(function(c) {
      const chip = document.createElement('span');
      chip.className = 'ai-chip';
      chip.style.animationDuration = '0ms';
      chip.textContent = c;
      chipsEl.appendChild(chip);
    });
  }

  // ─── TYPING + BUBBLE ─────────────────────────────────────────
  function showTyping() {
    const el = document.createElement('div');
    el.className = 'ai-typing';
    el.innerHTML = '<span></span><span></span><span></span>';
    chatEl.appendChild(el);
    scrollChat();
    return el;
  }

  function addBubble(text, type, delay) {
    return new Promise(function(resolve) {
      const typing = showTyping();
      setTimeout(function() {
        typing.remove();
        const bubble = document.createElement('div');
        bubble.className = 'ai-bubble ' + (type || 'system');
        bubble.innerHTML = text;
        chatEl.appendChild(bubble);
        scrollChat();
        resolve();
      }, delay || 800);
    });
  }

  function addUserBubble(text) {
    const bubble = document.createElement('div');
    bubble.className = 'ai-bubble user';
    bubble.textContent = text;
    chatEl.appendChild(bubble);
    scrollChat();
  }

  function scrollChat() {
    requestAnimationFrame(function() {
      chatEl.scrollTop = chatEl.scrollHeight;
      window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
    });
  }

  // ─── RENDER OPZIONI ──────────────────────────────────────────
  function renderOptions(options, onSelect) {
    interactEl.innerHTML = '';
    const wrap = document.createElement('div');
    wrap.id = 'ai-options';
    options.forEach(function(opt) {
      const btn = document.createElement('button');
      btn.className = 'ai-option-btn';
      btn.textContent = opt;
      btn.addEventListener('click', function() {
        interactEl.innerHTML = '';
        onSelect(opt);
      });
      wrap.appendChild(btn);
    });
    interactEl.appendChild(wrap);
    scrollChat();
  }

  function renderInput(type, placeholder, onSubmit, skipLabel) {
    interactEl.innerHTML = '';
    const wrap = document.createElement('div');
    wrap.className = 'ai-input-wrap';

    const input = document.createElement('input');
    input.type = type || 'text';
    input.placeholder = placeholder || '';
    input.className = 'ai-input-field';
    input.autocomplete = type === 'tel' ? 'tel' : type === 'email' ? 'email' : 'name';
    wrap.appendChild(input);

    const btn = document.createElement('button');
    btn.className = 'ai-send-btn';
    btn.textContent = 'Continua →';
    btn.addEventListener('click', function() {
      const val = input.value.trim();
      if (onSubmit(val)) {
        interactEl.innerHTML = '';
      }
    });
    input.addEventListener('keydown', function(e) {
      if (e.key === 'Enter') btn.click();
    });
    wrap.appendChild(btn);

    if (skipLabel) {
      const skip = document.createElement('button');
      skip.className = 'ai-skip-btn';
      skip.textContent = 'Salta →';
      skip.addEventListener('click', function() {
        interactEl.innerHTML = '';
        onSubmit('');
      });
      wrap.appendChild(skip);
    }

    interactEl.appendChild(wrap);
    setTimeout(function() { input.focus(); }, 300);
    scrollChat();
  }

  function renderPrivacy(onConfirm) {
    interactEl.innerHTML = '';
    const wrap = document.createElement('div');
    wrap.className = 'ai-privacy-wrap';

    const label = document.createElement('label');
    label.className = 'ai-checkbox-label';

    const cb = document.createElement('input');
    cb.type = 'checkbox';

    const txt = document.createElement('span');
    txt.innerHTML = 'Ho letto e accetto la <a href="privacy-policy.php" target="_blank">Privacy Policy</a>. Acconsento al trattamento dei dati personali per essere contattato da Autoideale.';

    label.appendChild(cb);
    label.appendChild(txt);
    wrap.appendChild(label);

    const btn = document.createElement('button');
    btn.className = 'ai-send-btn';
    btn.textContent = 'Invia richiesta ✓';
    btn.addEventListener('click', function() {
      if (!cb.checked) {
        cb.style.outline = '2px solid red';
        setTimeout(function() { cb.style.outline = ''; }, 1500);
        return;
      }
      interactEl.innerHTML = '';
      onConfirm();
    });
    wrap.appendChild(btn);
    interactEl.appendChild(wrap);
    scrollChat();
  }

  // ─── CRM SUBMIT ──────────────────────────────────────────────
  function submitCRM() {
    const a = state.answers;
    const tipo = a.tipo || '';
    const sottotipo = a.sottotipo || '';
    const alimentazione = a.alimentazione || '';
    const cambio = a.cambio || '';
    const budget = a.budget || '';
    const km = a.km || '';
    const tempistica = a.tempistica || '';

    const interesse = [
      'Tipo: ' + tipo + (sottotipo ? ' - ' + sottotipo : ''),
      'Alimentazione: ' + alimentazione,
      'Cambio: ' + cambio,
      'Budget: ' + budget,
      'Km: ' + km,
      'Tempistica: ' + tempistica
    ].filter(function(s) { return !s.endsWith(': '); }).join(' | ');

    const payload = {
      nome: a.nome || '',
      telefono: a.telefono || '',
      email: a.email || '',
      interesse: interesse,
      fonte: 'landing-chat',
      id_concessionaria: 1,
      note: ''
    };

    fetch('/crm/g83/api/lead.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-G83-Token': 'G83_SECRET_2026'
      },
      body: JSON.stringify(payload)
    }).catch(function() {});
  }

  // ─── STEPS ───────────────────────────────────────────────────
  async function runIntro() {
    await addBubble('Ciao! 👋 Sono il tuo consulente auto virtuale di Autoideale.', 'system', 900);
    await addBubble('Ti aiuto a trovare la tua auto ideale in meno di 60 secondi, gratis.', 'system', 700);
    await runStep1();
  }

  async function runStep1() {
    updateProgress(1);
    await addBubble('Cosa stai cercando?', 'system', 600);
    renderOptions(['Auto', 'Furgone'], function(val) {
      addUserBubble(val);
      state.answers.tipo = val;
      addChip(val);
      saveState();
      if (val === 'Auto') runStep2A();
      else runStep2B();
    });
  }

  async function runStep2A() {
    updateProgress(2);
    await addBubble('Che tipo di auto?', 'system', 600);
    renderOptions(['Berlina', 'SUV', 'Station Wagon', 'City Car', 'Coupé', 'Indifferente'], function(val) {
      addUserBubble(val);
      state.answers.sottotipo = val;
      if (val !== 'Indifferente') addChip(val);
      saveState();
      runStep3();
    });
  }

  async function runStep2B() {
    updateProgress(2);
    await addBubble('Che tipo di furgone?', 'system', 600);
    renderOptions(['Furgonato', 'Cassonato', 'Gemellato con sponda', 'Pianalato', 'Coibentato', 'Indifferente'], function(val) {
      addUserBubble(val);
      state.answers.sottotipo = val;
      if (val !== 'Indifferente') addChip(val);
      saveState();
      runStep3();
    });
  }

  async function runStep3() {
    updateProgress(3);
    await addBubble('Alimentazione preferita?', 'system', 600);
    renderOptions(['Benzina', 'Diesel', 'Ibrida', 'Elettrica', 'Indifferente'], function(val) {
      addUserBubble(val);
      state.answers.alimentazione = val;
      if (val !== 'Indifferente') addChip(val);
      saveState();
      runStep4();
    });
  }

  async function runStep4() {
    updateProgress(4);
    await addBubble('Cambio?', 'system', 600);
    renderOptions(['Manuale', 'Automatico', 'Indifferente'], function(val) {
      addUserBubble(val);
      state.answers.cambio = val;
      if (val !== 'Indifferente') addChip(val);
      saveState();
      runStep5();
    });
  }

  async function runStep5() {
    updateProgress(5);
    await addBubble('Budget?', 'system', 600);
    renderOptions(['Fino a 10k', '10-20k', '20-30k', 'Oltre 30k'], function(val) {
      addUserBubble(val);
      state.answers.budget = val;
      addChip(val);
      saveState();
      runStep6();
    });
  }

  async function runStep6() {
    updateProgress(6);
    await addBubble('Km massimi?', 'system', 600);
    renderOptions(['Fino a 50.000', '50-100.000', '100-150.000', 'Indifferente'], function(val) {
      addUserBubble(val);
      state.answers.km = val;
      if (val !== 'Indifferente') addChip(val);
      saveState();
      runStep7();
    });
  }

  async function runStep7() {
    updateProgress(7);
    await addBubble('Quando vorresti l\'auto?', 'system', 600);
    renderOptions(['Subito', 'Entro 1 mese', 'Entro 3 mesi', 'Sto solo guardando'], function(val) {
      addUserBubble(val);
      state.answers.tempistica = val;
      addChip(val);
      saveState();
      runStep8();
    });
  }

  async function runStep8() {
    updateProgress(8);
    await addBubble('Come ti chiami?', 'system', 600);
    renderInput('text', 'Il tuo nome...', function(val) {
      if (!val) { return false; }
      addUserBubble(val);
      state.answers.nome = val;
      saveState();
      runStep9();
      return true;
    });
  }

  async function runStep9() {
    updateProgress(9);
    await addBubble('Numero WhatsApp?', 'system', 600);
    renderInput('tel', 'Es. 333 1234567', function(val) {
      const clean = val.replace(/\s/g, '');
      if (!/^\+?[0-9]{10,13}$/.test(clean)) {
        return false;
      }
      addUserBubble(val);
      state.answers.telefono = clean;
      saveState();
      runStep10();
      return true;
    });
  }

  async function runStep10() {
    updateProgress(9);
    await addBubble('Email? (opzionale)', 'system', 600);
    renderInput('email', 'La tua email...', function(val) {
      if (val && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val)) {
        return false;
      }
      if (val) addUserBubble(val);
      state.answers.email = val;
      saveState();
      runPrivacy();
      return true;
    }, true);
  }

  async function runPrivacy() {
    await addBubble('Quasi fatto! Prima di inviarti le offerte, ho bisogno del tuo consenso.', 'system', 700);
    renderPrivacy(function() {
      runFinale();
    });
  }

  async function runFinale() {
    submitCRM();
    state.done = true;
    saveState();

    updateProgress(9);
    await addBubble('Ricevuto! 🔍 Sto elaborando la tua ricerca...', 'system', 600);
    await addBubble(
      'Perfetto, ' + (state.answers.nome || 'amico') + '! 🎉 Abbiamo ricevuto la tua richiesta. Un nostro consulente ti contatterà su WhatsApp al numero che ci hai lasciato entro 30 minuti per mostrarti le auto perfette per te.',
      'system',
      1200
    );

    const subMsg = document.createElement('p');
    subMsg.className = 'ai-final-msg';
    subMsg.textContent = 'Nel frattempo controlla che WhatsApp sia attivo sul tuo telefono.';
    chatEl.appendChild(subMsg);
    scrollChat();

    localStorage.removeItem(LS_KEY);
  }

  // ─── INIT ────────────────────────────────────────────────────
  function init() {
    renderChips();
    updateProgress(state.step);

    if (state.done) {
      runFinale();
      return;
    }

    // fresh start
    runIntro();
  }

  init();

})();
</script>
</body>

<!-- ===== SCHEMA MARKUP AutoDealer (JSON-LD) =====
     Attiva rimuovendo i commenti <!-- e --> intorno al tag <script>
     Aggiorna i campi: name, url, telephone, address, areaServed
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AutoDealer",
  "name": "Autoideale",
  "url": "https://TUODOMINIO.it",
  "telephone": "+39-000-0000000",
  "image": "https://TUODOMINIO.it/images/og-autoideale.jpg",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Via Esempio 1",
    "addressLocality": "Milano",
    "postalCode": "20100",
    "addressCountry": "IT"
  },
  "areaServed": "IT",
  "priceRange": "€€",
  "description": "Consulente AI per trovare auto e furgoni usati. Ricevi le migliori offerte su WhatsApp in 30 minuti."
}
</script>
===== FINE SCHEMA AutoDealer ===== -->

</html>
