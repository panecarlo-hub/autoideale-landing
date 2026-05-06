<?php
// landing-veicoli.php — Autoideale Chat Configurator v3
?><!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title>Trova la tua auto o furgone ideale in 60 secondi | Autoideale</title>
<meta name="description" content="Configura la tua auto o furgone ideale in 60 secondi con il nostro consulente AI. Berlina, SUV, furgonato, ibrida o elettrica: ricevi le migliori offerte su WhatsApp entro 30 minuti.">
<meta property="og:title" content="Trova la tua auto o furgone ideale in 60 secondi | Autoideale">
<meta property="og:description" content="Il consulente AI che trova l'auto giusta per te. Gratis, in 60 secondi.">
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

<!-- GOOGLE ADS TAG -->
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
  --bg:      #080810;
  --bg2:     #0E0E1A;
  --bub-sys: #131320;
  --bub-brd: #22223A;
  --green:   #25D366;
  --violet:  #7C3AED;
  --blue:    #3B82F6;
  --accent:  #6366F1;
  --sand:    #D4B996;
  --text:    #EFEFFA;
  --gray2:   #888;
  --gray3:   #505060;
  --border:  #1A1A2E;
}

html {
  height: 100%;
  height: 100dvh;
  overflow: hidden;
}

body {
  display: flex;
  flex-direction: column;
  height: 100%;
  height: 100dvh;
  overflow: hidden;
  background: var(--bg);
  color: var(--text);
  font-family: -apple-system, system-ui, 'Segoe UI', sans-serif;
  -webkit-font-smoothing: antialiased;
}

/* ── HEADER ─────────────────────────────────────────── */
#ai-header {
  flex-shrink: 0;
  background: var(--bg2);
  border-bottom: 1px solid var(--border);
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 14px;
  z-index: 10;
}

.ai-avatar {
  width: 38px;
  height: 38px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--violet), var(--blue));
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 12px;
  font-weight: 800;
  color: #fff;
  flex-shrink: 0;
}

.ai-header-left  { display: flex; align-items: center; }

.ai-header-info {
  display: flex;
  flex-direction: column;
  margin-left: 9px;
}

.ai-brand-name {
  font-size: 16px;
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
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: var(--green);
  animation: pulse-dot 1.8s ease-in-out infinite;
}

.ai-header-right { text-align: right; }
.ai-header-right .count { font-size: 12px; font-weight: 600; color: var(--text); display: block; }
.ai-header-right .label { font-size: 9px; color: var(--gray2); display: block; }

/* ── CHIPS STRIP ─────────────────────────────────────── */
#ai-chips-bar {
  flex-shrink: 0;
  background: var(--bg);
  border-bottom: 1px solid var(--border);
  padding: 6px 12px;
  display: flex;
  gap: 6px;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  scrollbar-width: none;
  min-height: 36px;
  align-items: center;
}
#ai-chips-bar::-webkit-scrollbar { display: none; }
#ai-chips-bar:empty              { display: none; min-height: 0; padding: 0; border: none; }

.ai-chip {
  display: inline-flex;
  align-items: center;
  background: linear-gradient(135deg, var(--violet), var(--blue));
  color: #fff;
  font-size: 10px;
  font-weight: 700;
  padding: 4px 10px;
  border-radius: 100px;
  white-space: nowrap;
  flex-shrink: 0;
  animation: fadein-pop 0.4s cubic-bezier(0.34,1.56,0.64,1) forwards;
}

/* ── CHAT AREA ───────────────────────────────────────── */
#ai-chat {
  flex: 1;
  overflow-y: auto;
  padding: 14px 14px 8px;
  display: flex;
  flex-direction: column;
  -webkit-overflow-scrolling: touch;
  scrollbar-width: thin;
  scrollbar-color: #2a2a3a transparent;
}
#ai-chat::-webkit-scrollbar       { width: 3px; }
#ai-chat::-webkit-scrollbar-thumb { background: #333; border-radius: 3px; }

.ai-bubble {
  max-width: 82%;
  padding: 10px 13px;
  font-size: 14px;
  line-height: 1.55;
  color: var(--text);
  margin-bottom: 14px;
  position: relative;
  animation: fadein-up 0.28s ease forwards;
}

.ai-bubble.system {
  background: var(--bub-sys);
  border: 1px solid var(--bub-brd);
  border-radius: 4px 14px 14px 14px;
  align-self: flex-start;
}

.ai-bubble.user {
  background: linear-gradient(135deg, var(--violet), var(--blue));
  color: #fff;
  font-weight: 600;
  border-radius: 14px 4px 14px 14px;
  align-self: flex-end;
}

/* micro-reaction badge */
.ai-reaction {
  position: absolute;
  bottom: -11px;
  left: 10px;
  background: var(--bg2);
  border: 1px solid var(--border);
  border-radius: 100px;
  padding: 1px 6px;
  font-size: 11px;
  line-height: 1.6;
  animation: reaction-pop 0.5s cubic-bezier(0.34,1.56,0.64,1) 0.7s both;
  pointer-events: none;
}

/* typing indicator */
.ai-typing {
  background: var(--bub-sys);
  border: 1px solid var(--bub-brd);
  border-radius: 4px 14px 14px 14px;
  padding: 11px 14px;
  display: inline-flex;
  align-items: center;
  gap: 5px;
  margin-bottom: 14px;
  align-self: flex-start;
  animation: fadein-up 0.22s ease forwards;
}

.ai-typing span {
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: var(--gray2);
  display: inline-block;
  animation: typing-bounce 1.2s ease-in-out infinite;
}
.ai-typing span:nth-child(2) { animation-delay: 0.18s; }
.ai-typing span:nth-child(3) { animation-delay: 0.36s; }

/* ── BOTTOM ZONE ─────────────────────────────────────── */
#ai-bottom {
  flex-shrink: 0;
  background: var(--bg);
  border-top: 1px solid var(--border);
  padding-bottom: env(safe-area-inset-bottom, 0);
}

#ai-progress {
  padding: 7px 14px 5px;
}

.ai-progress-row {
  display: flex;
  justify-content: space-between;
  margin-bottom: 5px;
}

.ai-progress-label,
.ai-progress-pct {
  font-size: 9px;
  color: var(--gray3);
}

.ai-progress-track {
  height: 2px;
  background: #1A1A2E;
  border-radius: 100px;
  overflow: hidden;
}

.ai-progress-fill {
  height: 100%;
  background: linear-gradient(90deg, var(--violet), var(--blue));
  border-radius: 100px;
  width: 0%;
  transition: width 0.4s ease;
}

/* interact zone */
#ai-interact {
  padding: 6px 12px 12px;
}

/* ── OPTIONS GRID ────────────────────────────────────── */
.ai-options-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 7px;
  animation: fadein-up 0.28s ease forwards;
}

.ai-option-btn {
  background: transparent;
  border: 1.5px solid var(--accent);
  color: var(--accent);
  padding: 13px 8px;
  border-radius: 12px;
  font-size: 13.5px;
  font-weight: 600;
  min-height: 48px;
  cursor: pointer;
  transition: background 0.12s, color 0.12s, transform 0.1s;
  font-family: inherit;
  line-height: 1.2;
  text-align: center;
  -webkit-tap-highlight-color: transparent;
  touch-action: manipulation;
}

.ai-option-btn:active {
  background: linear-gradient(135deg, var(--violet), var(--blue));
  border-color: transparent;
  color: #fff;
  transform: scale(0.97);
}

.ai-option-btn.full-width {
  grid-column: 1 / -1;
}

/* ── INPUT ───────────────────────────────────────────── */
.ai-input-wrap {
  animation: fadein-up 0.28s ease forwards;
}

.ai-input-row {
  display: flex;
  gap: 8px;
  align-items: center;
}

.ai-input-field {
  flex: 1;
  font-size: 16px;
  padding: 13px 14px;
  background: var(--bub-sys);
  color: var(--text);
  border: 1px solid var(--bub-brd);
  border-radius: 12px;
  font-family: inherit;
  outline: none;
  transition: border-color 0.15s;
  -webkit-appearance: none;
}

.ai-input-field:focus { border-color: var(--accent); }
.ai-input-field::placeholder { color: var(--gray3); }

.ai-send-btn-icon {
  width: 48px;
  height: 48px;
  border-radius: 12px;
  background: linear-gradient(135deg, var(--violet), var(--blue));
  border: none;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  font-size: 20px;
  color: #fff;
  transition: opacity 0.15s, transform 0.1s;
  touch-action: manipulation;
}
.ai-send-btn-icon:active { opacity: 0.8; transform: scale(0.95); }

.ai-skip-btn {
  width: 100%;
  margin-top: 7px;
  background: transparent;
  color: var(--gray2);
  font-size: 12px;
  font-weight: 500;
  padding: 9px;
  border-radius: 10px;
  border: 1px solid #1E1E2E;
  cursor: pointer;
  font-family: inherit;
  touch-action: manipulation;
}

/* ── PRIVACY ─────────────────────────────────────────── */
.ai-privacy-wrap {
  animation: fadein-up 0.28s ease forwards;
}

.ai-checkbox-label {
  display: flex;
  align-items: flex-start;
  gap: 10px;
  font-size: 12px;
  color: var(--gray2);
  line-height: 1.5;
  cursor: pointer;
  margin-bottom: 10px;
}

.ai-checkbox-label input[type="checkbox"] {
  width: 18px;
  height: 18px;
  accent-color: var(--accent);
  flex-shrink: 0;
  margin-top: 1px;
  cursor: pointer;
}

.ai-checkbox-label a { color: var(--sand); text-decoration: underline; }

/* ── CTA ─────────────────────────────────────────────── */
.ai-cta-btn {
  width: 100%;
  padding: 15px;
  background: linear-gradient(135deg, var(--violet), var(--blue));
  color: #fff;
  font-size: 16px;
  font-weight: 700;
  border: none;
  border-radius: 13px;
  cursor: pointer;
  font-family: inherit;
  animation: fadein-up 0.28s ease forwards;
  transition: opacity 0.15s, transform 0.1s;
  touch-action: manipulation;
}
.ai-cta-btn:active { opacity: 0.9; transform: scale(0.99); }

.ai-final-msg {
  font-size: 12px;
  color: var(--gray2);
  text-align: center;
  padding: 4px 0 2px;
  animation: fadein-up 0.28s ease forwards;
}

/* ── ANIMATIONS ──────────────────────────────────────── */
@keyframes pulse-dot {
  0%,100% { opacity:1; transform:scale(1); }
  50%      { opacity:.3; transform:scale(.7); }
}

@keyframes fadein-pop {
  0%   { opacity:0; transform:scale(.5); }
  100% { opacity:1; transform:scale(1); }
}

@keyframes fadein-up {
  0%   { opacity:0; transform:translateY(8px); }
  100% { opacity:1; transform:translateY(0); }
}

@keyframes typing-bounce {
  0%,60%,100% { transform:translateY(0); }
  30%         { transform:translateY(-5px); }
}

@keyframes reaction-pop {
  0%   { transform:scale(0) translateY(4px); opacity:0; }
  100% { transform:scale(1) translateY(0);   opacity:1; }
}
</style>
</head>
<body>

<header id="ai-header">
  <div class="ai-header-left">
    <div class="ai-avatar">AI</div>
    <div class="ai-header-info">
      <span class="ai-brand-name">Autoideale</span>
      <span class="ai-online">
        <span class="ai-pulse-dot"></span>Online ora
      </span>
    </div>
  </div>
  <div class="ai-header-right">
    <span class="count">127 persone</span>
    <span class="label">trovata l'auto ideale</span>
  </div>
</header>

<div id="ai-chips-bar"></div>

<div id="ai-chat"></div>

<div id="ai-bottom">
  <div id="ai-progress">
    <div class="ai-progress-row">
      <span class="ai-progress-label" id="ai-step-label">Step 0 di 9</span>
      <span class="ai-progress-pct"   id="ai-step-pct">0%</span>
    </div>
    <div class="ai-progress-track">
      <div class="ai-progress-fill" id="ai-progress-fill"></div>
    </div>
  </div>
  <div id="ai-interact"></div>
</div>

<script>
(function(){

  var LS_KEY = 'ai_brief_v3';
  var state  = { step:0, answers:{}, chips:[], done:false };

  try {
    var saved = localStorage.getItem(LS_KEY);
    if (saved) { var p = JSON.parse(saved); if (!p.done) state = p; }
  } catch(e){}

  function saveState(){ try{ localStorage.setItem(LS_KEY, JSON.stringify(state)); }catch(e){} }

  var chatEl       = document.getElementById('ai-chat');
  var interactEl   = document.getElementById('ai-interact');
  var chipsEl      = document.getElementById('ai-chips-bar');
  var progressFill = document.getElementById('ai-progress-fill');
  var stepLabel    = document.getElementById('ai-step-label');
  var stepPct      = document.getElementById('ai-step-pct');

  var TOTAL = 9;

  // ── MICRO-REACTIONS (randomised) ────────────────────────────
  var REACT = [
    ['👍','❤️','😊','👌'],
    ['🚗','🚙','🏎️','🛞'],
    ['🔥','✨','💫','⚡'],
    ['💪','🙌','🎯','💯']
  ];

  function rndReaction(){
    var g = REACT[Math.floor(Math.random() * REACT.length)];
    return g[Math.floor(Math.random() * g.length)];
  }

  // ── PROGRESS ────────────────────────────────────────────────
  function updateProgress(step){
    var pct = Math.round((step / TOTAL) * 100);
    progressFill.style.width = pct + '%';
    stepLabel.textContent    = 'Step ' + step + ' di ' + TOTAL;
    stepPct.textContent      = pct + '%';
  }

  // ── CHIPS ────────────────────────────────────────────────────
  function addChip(text){
    state.chips.push(text);
    var chip = document.createElement('span');
    chip.className   = 'ai-chip';
    chip.textContent = text;
    chipsEl.appendChild(chip);
    chipsEl.scrollLeft = chipsEl.scrollWidth;
  }

  function renderChips(){
    chipsEl.innerHTML = '';
    state.chips.forEach(function(c){
      var chip = document.createElement('span');
      chip.className = 'ai-chip';
      chip.style.animationDuration = '0ms';
      chip.textContent = c;
      chipsEl.appendChild(chip);
    });
  }

  // ── TYPING + BUBBLES ─────────────────────────────────────────
  function showTyping(){
    var el = document.createElement('div');
    el.className = 'ai-typing';
    el.innerHTML  = '<span></span><span></span><span></span>';
    chatEl.appendChild(el);
    scrollChat();
    return el;
  }

  function addBubble(text, type, delay, withReact){
    return new Promise(function(resolve){
      var typing = showTyping();
      setTimeout(function(){
        typing.remove();
        var bub = document.createElement('div');
        bub.className = 'ai-bubble ' + (type || 'system');
        bub.innerHTML  = text;
        chatEl.appendChild(bub);
        // micro-reaction: 70% chance on system bubbles
        if ((type || 'system') === 'system' && withReact !== false && Math.random() > 0.3){
          var r = document.createElement('div');
          r.className   = 'ai-reaction';
          r.textContent = rndReaction();
          bub.appendChild(r);
        }
        scrollChat();
        resolve();
      }, delay || 800);
    });
  }

  function addUserBubble(text){
    var bub = document.createElement('div');
    bub.className   = 'ai-bubble user';
    bub.textContent = text;
    chatEl.appendChild(bub);
    scrollChat();
  }

  function scrollChat(){
    requestAnimationFrame(function(){
      chatEl.scrollTop = chatEl.scrollHeight;
    });
  }

  // ── OPTIONS GRID (in bottom zone) ────────────────────────────
  function renderOptions(options, onSelect){
    interactEl.innerHTML = '';
    var grid = document.createElement('div');
    grid.className = 'ai-options-grid';
    options.forEach(function(opt, i){
      var btn = document.createElement('button');
      btn.className   = 'ai-option-btn';
      btn.textContent = opt;
      if (options.length % 2 !== 0 && i === options.length - 1){
        btn.classList.add('full-width');
      }
      btn.addEventListener('click', function(){
        interactEl.innerHTML = '';
        onSelect(opt);
      });
      grid.appendChild(btn);
    });
    interactEl.appendChild(grid);
  }

  function renderInput(type, placeholder, onSubmit, skipLabel){
    interactEl.innerHTML = '';
    var wrap = document.createElement('div');
    wrap.className = 'ai-input-wrap';

    var row = document.createElement('div');
    row.className = 'ai-input-row';

    var input = document.createElement('input');
    input.type         = type || 'text';
    input.placeholder  = placeholder || '';
    input.className    = 'ai-input-field';
    input.autocomplete = type === 'tel' ? 'tel' : type === 'email' ? 'email' : 'name';

    var btn = document.createElement('button');
    btn.className = 'ai-send-btn-icon';
    btn.textContent = '→';

    btn.addEventListener('click', function(){
      var val = input.value.trim();
      if (onSubmit(val)) interactEl.innerHTML = '';
    });
    input.addEventListener('keydown', function(e){
      if (e.key === 'Enter') btn.click();
    });

    row.appendChild(input);
    row.appendChild(btn);
    wrap.appendChild(row);

    if (skipLabel){
      var skip = document.createElement('button');
      skip.className   = 'ai-skip-btn';
      skip.textContent = 'Salta →';
      skip.addEventListener('click', function(){
        interactEl.innerHTML = '';
        onSubmit('');
      });
      wrap.appendChild(skip);
    }

    interactEl.appendChild(wrap);
    setTimeout(function(){ input.focus(); }, 300);
  }

  function renderPrivacy(onConfirm){
    interactEl.innerHTML = '';
    var wrap = document.createElement('div');
    wrap.className = 'ai-privacy-wrap';

    var label = document.createElement('label');
    label.className = 'ai-checkbox-label';

    var cb = document.createElement('input');
    cb.type = 'checkbox';

    var txt = document.createElement('span');
    txt.innerHTML = 'Ho letto e accetto la <a href="privacy-policy.php" target="_blank">Privacy Policy</a>. Acconsento al trattamento dei miei dati personali.';

    label.appendChild(cb);
    label.appendChild(txt);
    wrap.appendChild(label);

    var btn = document.createElement('button');
    btn.className   = 'ai-cta-btn';
    btn.textContent = 'Invia richiesta ✓';
    btn.addEventListener('click', function(){
      if (!cb.checked){
        cb.style.outline = '2px solid #f55';
        setTimeout(function(){ cb.style.outline = ''; }, 1500);
        return;
      }
      interactEl.innerHTML = '';
      onConfirm();
    });
    wrap.appendChild(btn);
    interactEl.appendChild(wrap);
  }

  // ── CRM SUBMIT ───────────────────────────────────────────────
  function submitCRM(){
    var a = state.answers;
    var interesse = [
      'Tipo: '          + (a.tipo||'') + (a.sottotipo ? ' - '+a.sottotipo : ''),
      'Alimentazione: ' + (a.alimentazione||''),
      'Cambio: '        + (a.cambio||''),
      'Budget: '        + (a.budget||''),
      'Km: '            + (a.km||''),
      'Tempistica: '    + (a.tempistica||'')
    ].filter(function(s){ return !s.endsWith(': '); }).join(' | ');

    fetch('/crm/g83/api/lead.php',{
      method:'POST',
      headers:{ 'Content-Type':'application/json', 'X-G83-Token':'G83_SECRET_2026' },
      body: JSON.stringify({
        nome:           a.nome||'',
        telefono:       a.telefono||'',
        email:          a.email||'',
        interesse:      interesse,
        fonte:          'landing-chat-v3',
        id_concessionaria: 1,
        note:           ''
      })
    }).catch(function(){});
  }

  // ── HELPERS ──────────────────────────────────────────────────
  // Strips leading emoji+space from option labels before storing
  function stripEmoji(str){
    return str.replace(/^[\uD800-\uDFFF -㌀︀-️\s]+/, '').trim();
  }

  // ── STEPS ────────────────────────────────────────────────────
  async function runIntro(){
    await addBubble('Ciao! 👋 Sono il consulente auto virtuale di <strong>Autoideale</strong>.', 'system', 900, false);
    await addBubble('Ti trovo la soluzione ideale in meno di 60 secondi — gratis! 🚗', 'system', 700);
    runStep1();
  }

  async function runStep1(){
    updateProgress(1);
    await addBubble('Cosa stai cercando?', 'system', 600);
    renderOptions(['🚗 Auto', '🚐 Furgone'], function(val){
      addUserBubble(val);
      state.answers.tipo = stripEmoji(val);
      addChip(state.answers.tipo);
      saveState();
      if (state.answers.tipo === 'Auto') runStep2A(); else runStep2B();
    });
  }

  async function runStep2A(){
    updateProgress(2);
    await addBubble('Che tipo di auto?', 'system', 600);
    renderOptions(['Berlina','SUV','Station Wagon','City Car','Coupé','Indifferente'], function(val){
      addUserBubble(val);
      state.answers.sottotipo = val;
      if (val !== 'Indifferente') addChip(val);
      saveState();
      runStep3();
    });
  }

  async function runStep2B(){
    updateProgress(2);
    await addBubble('Che tipo di furgone?', 'system', 600);
    renderOptions(['Furgonato','Cassonato','Gemellato','Pianalato','Coibentato','Indifferente'], function(val){
      addUserBubble(val);
      state.answers.sottotipo = val;
      if (val !== 'Indifferente') addChip(val);
      saveState();
      runStep3();
    });
  }

  async function runStep3(){
    updateProgress(3);
    await addBubble('Alimentazione preferita?', 'system', 600);
    renderOptions(['⛽ Benzina','🛢️ Diesel','⚡ Ibrida','🔋 Elettrica','Indifferente'], function(val){
      addUserBubble(val);
      state.answers.alimentazione = stripEmoji(val);
      if (val !== 'Indifferente') addChip(state.answers.alimentazione);
      saveState();
      runStep4();
    });
  }

  async function runStep4(){
    updateProgress(4);
    await addBubble('Manuale o automatico?', 'system', 600);
    renderOptions(['⚙️ Manuale','🤖 Automatico','Indifferente'], function(val){
      addUserBubble(val);
      state.answers.cambio = stripEmoji(val);
      if (val !== 'Indifferente') addChip(state.answers.cambio);
      saveState();
      runStep5();
    });
  }

  async function runStep5(){
    updateProgress(5);
    await addBubble('Qual è il tuo budget?', 'system', 600);
    renderOptions(['Fino a 10k','10–20k','20–30k','Oltre 30k'], function(val){
      addUserBubble(val);
      state.answers.budget = val;
      addChip(val);
      saveState();
      runStep6();
    });
  }

  async function runStep6(){
    updateProgress(6);
    await addBubble('Km massimi accettati?', 'system', 600);
    renderOptions(['< 50.000 km','50–100k km','100–150k km','Indifferente'], function(val){
      addUserBubble(val);
      state.answers.km = val;
      if (val !== 'Indifferente') addChip(val);
      saveState();
      runStep7();
    });
  }

  async function runStep7(){
    updateProgress(7);
    await addBubble('Quando ti serve?', 'system', 600);
    renderOptions(['Subito 🔥','Entro 1 mese','Entro 3 mesi','Solo curiosità'], function(val){
      addUserBubble(val);
      state.answers.tempistica = val.replace(/ 🔥$/,'');
      addChip(state.answers.tempistica);
      saveState();
      runStep8();
    });
  }

  async function runStep8(){
    updateProgress(8);
    await addBubble('Come ti chiami?', 'system', 600);
    renderInput('text','Il tuo nome...', function(val){
      if (!val) return false;
      addUserBubble(val);
      state.answers.nome = val;
      saveState();
      runStep9();
      return true;
    });
  }

  async function runStep9(){
    updateProgress(9);
    await addBubble('Il tuo numero WhatsApp?', 'system', 600);
    renderInput('tel','Es. 333 1234567', function(val){
      var clean = val.replace(/\s/g,'');
      if (!/^\+?[0-9]{10,13}$/.test(clean)) return false;
      addUserBubble(val);
      state.answers.telefono = clean;
      saveState();
      runStep10();
      return true;
    });
  }

  async function runStep10(){
    updateProgress(9);
    await addBubble('Email? (facoltativa)', 'system', 600);
    renderInput('email','La tua email...', function(val){
      if (val && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val)) return false;
      if (val) addUserBubble(val);
      state.answers.email = val;
      saveState();
      runPrivacyStep();
      return true;
    }, true);
  }

  async function runPrivacyStep(){
    await addBubble(
      'Quasi fatto, <strong>' + (state.answers.nome||'') + '</strong>! Accetta la privacy per ricevere le offerte 👇',
      'system', 700, false
    );
    renderPrivacy(function(){ runFinale(); });
  }

  async function runFinale(){
    submitCRM();
    state.done = true;
    saveState();
    updateProgress(9);
    await addBubble('🔍 Ricevuto! Sto elaborando la tua ricerca...', 'system', 700, false);
    await addBubble(
      '🎉 Perfetto, <strong>'+(state.answers.nome||'amico')+'</strong>! Richiesta confermata.<br>Un nostro consulente ti contatta su WhatsApp entro <strong>30 minuti</strong> con le proposte migliori per te.',
      'system', 1200, false
    );
    var sub = document.createElement('p');
    sub.className   = 'ai-final-msg';
    sub.textContent = 'Controlla che WhatsApp sia attivo. A presto! 👋';
    chatEl.appendChild(sub);
    scrollChat();
    localStorage.removeItem(LS_KEY);
  }

  // ── INIT ─────────────────────────────────────────────────────
  function init(){
    renderChips();
    updateProgress(state.step);
    if (state.done){ runFinale(); return; }
    runIntro();
  }

  init();

})();
</script>
</body>

<!-- ===== SCHEMA AutoDealer (JSON-LD) — rimuovi commenti per attivare =====
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AutoDealer",
  "name": "Autoideale",
  "url": "https://TUODOMINIO.it",
  "telephone": "+39-000-0000000",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Via Esempio 1",
    "addressLocality": "Milano",
    "postalCode": "20100",
    "addressCountry": "IT"
  },
  "areaServed": "IT",
  "description": "Consulente AI per trovare auto e furgoni usati. Ricevi le migliori offerte su WhatsApp in 30 minuti."
}
</script>
===== FINE SCHEMA ===== -->

</html>
