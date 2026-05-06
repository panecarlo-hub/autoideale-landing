<?php
// landing-veicoli.php — Autoideale Chat v4
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

<!-- META PIXEL HERE -->

<!-- GOOGLE ADS TAG HERE -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

:root {
  --bg:      #080810;
  --bg2:     #0E0E1A;
  --bub-sys: #131320;
  --bub-brd: #22223A;
  --live:    #4ADE80;
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
  font-family: 'Inter', -apple-system, system-ui, 'Segoe UI', sans-serif;
  -webkit-font-smoothing: antialiased;
}

/* ── BACKGROUND BLOBS ────────────────────────────────── */
.blob {
  position: fixed;
  border-radius: 50%;
  filter: blur(90px);
  pointer-events: none;
  z-index: 0;
}

.blob-v {
  width: 340px;
  height: 340px;
  background: rgba(124, 58, 237, 0.30);
  top: 50px;
  left: -100px;
}

.blob-b {
  width: 280px;
  height: 280px;
  background: rgba(59, 130, 246, 0.24);
  bottom: 100px;
  right: -80px;
}

.blob-i {
  width: 220px;
  height: 220px;
  background: rgba(99, 102, 241, 0.18);
  top: 45%;
  left: 55%;
}

/* ── HEADER ─────────────────────────────────────────── */
#ai-header {
  flex-shrink: 0;
  background: rgba(14, 14, 26, 0.92);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border-bottom: 1px solid var(--border);
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 14px;
  position: relative;
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

.ai-header-left { display: flex; align-items: center; }

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
  color: var(--live);
  margin-top: 2px;
}

.ai-pulse-dot {
  width: 6px;
  height: 6px;
  border-radius: 50%;
  background: var(--live);
  animation: pulse-dot 1.8s ease-in-out infinite;
}

.ai-header-right { text-align: right; }
.ai-header-right .count { font-size: 12px; font-weight: 600; color: var(--text); display: block; }
.ai-header-right .label { font-size: 9px; color: var(--gray2); display: block; }

/* ── CHIPS STRIP ─────────────────────────────────────── */
#ai-chips-bar {
  flex-shrink: 0;
  background: rgba(8, 8, 16, 0.80);
  border-bottom: 1px solid var(--border);
  padding: 6px 12px;
  display: flex;
  gap: 6px;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  scrollbar-width: none;
  min-height: 36px;
  align-items: center;
  position: relative;
  z-index: 9;
}
#ai-chips-bar::-webkit-scrollbar { display: none; }

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
}

/* ── CHAT AREA ───────────────────────────────────────── */
#ai-chat {
  flex: 1;
  overflow-y: auto;
  padding: 16px 14px 10px;
  display: flex;
  flex-direction: column;
  -webkit-overflow-scrolling: touch;
  scrollbar-width: thin;
  scrollbar-color: #2a2a3a transparent;
  position: relative;
  z-index: 1;
  background: transparent;
}
#ai-chat::-webkit-scrollbar       { width: 3px; }
#ai-chat::-webkit-scrollbar-thumb { background: #333; border-radius: 3px; }

.ai-bubble {
  max-width: 82%;
  padding: 10px 13px;
  font-size: 14px;
  line-height: 1.55;
  color: var(--text);
  margin-bottom: 20px;
  position: relative;
  z-index: 2;
  animation: fadein-up 0.32s ease both;
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
  margin-bottom: 14px;
}

.ai-reaction {
  position: absolute;
  bottom: -12px;
  left: 10px;
  background: var(--bg2);
  border: 1px solid var(--border);
  border-radius: 100px;
  padding: 1px 6px;
  font-size: 11px;
  line-height: 1.6;
  pointer-events: none;
  animation: reaction-pop 0.45s cubic-bezier(0.34,1.56,0.64,1) both;
}

/* ── TYPING ──────────────────────────────────────────── */
.ai-typing {
  background: var(--bub-sys);
  border: 1px solid var(--bub-brd);
  border-radius: 4px 14px 14px 14px;
  padding: 11px 14px;
  display: inline-flex;
  align-items: center;
  gap: 5px;
  margin-bottom: 20px;
  align-self: flex-start;
  position: relative;
  z-index: 2;
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
  background: rgba(8, 8, 16, 0.90);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border-top: 1px solid var(--border);
  padding-bottom: env(safe-area-inset-bottom, 0);
  position: relative;
  z-index: 10;
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
  transition: width 0.4s ease;
}

#ai-interact {
  padding: 6px 12px 12px;
}

/* ── OPTIONS GRID — glassmorphism ────────────────────── */
.ai-options-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 8px;
}

.ai-option-btn {
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  border: 1px solid rgba(255, 255, 255, 0.12);
  color: var(--text);
  padding: 14px 8px;
  border-radius: 14px;
  font-size: 15px;
  font-weight: 600;
  min-height: 54px;
  cursor: pointer;
  transition: background 0.18s, border-color 0.18s, transform 0.12s;
  font-family: 'Inter', inherit;
  line-height: 1.2;
  text-align: center;
  -webkit-tap-highlight-color: transparent;
  touch-action: manipulation;
  box-shadow: 0 4px 24px rgba(0, 0, 0, 0.28),
              inset 0 1px 0 rgba(255, 255, 255, 0.07);
}

.ai-option-btn:hover {
  background: rgba(99, 102, 241, 0.18);
  border-color: rgba(99, 102, 241, 0.45);
}

.ai-option-btn:active {
  background: linear-gradient(135deg, rgba(124, 58, 237, 0.45), rgba(59, 130, 246, 0.45));
  border-color: var(--accent);
  transform: scale(0.97);
}

.ai-option-btn.full-width {
  grid-column: 1 / -1;
}

/* ── INPUT ───────────────────────────────────────────── */
.ai-input-wrap { animation: fadein-up 0.28s ease both; }

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
  font-family: 'Inter', inherit;
  outline: none;
  transition: border-color 0.15s;
  -webkit-appearance: none;
}
.ai-input-field:focus       { border-color: var(--accent); }
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
  font-family: 'Inter', inherit;
  touch-action: manipulation;
}

/* ── PRIVACY ─────────────────────────────────────────── */
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
  font-family: 'Inter', inherit;
  transition: opacity 0.15s, transform 0.1s;
  touch-action: manipulation;
}
.ai-cta-btn:active { opacity: 0.9; transform: scale(0.99); }

.ai-final-msg {
  font-size: 12px;
  color: var(--gray2);
  text-align: center;
  padding: 4px 0 2px;
  position: relative;
  z-index: 2;
}

/* ── ANIMATIONS ──────────────────────────────────────── */
@keyframes pulse-dot {
  0%,100% { opacity:1; transform:scale(1); }
  50%      { opacity:.3; transform:scale(.7); }
}

@keyframes fadein-up {
  0%   { opacity:0; transform:translateY(10px); }
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

<div class="blob blob-v" aria-hidden="true"></div>
<div class="blob blob-b" aria-hidden="true"></div>
<div class="blob blob-i" aria-hidden="true"></div>

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

<div id="ai-chips-bar">
  <span class="ai-chip">Auto</span>
</div>

<div id="ai-chat">
  <div class="ai-bubble system" style="animation-delay:.10s">
    Ciao! 👋 Sono il consulente auto virtuale di <strong>Autoideale</strong>.
    <div class="ai-reaction" style="animation-delay:.60s">🚗</div>
  </div>
  <div class="ai-bubble system" style="animation-delay:.40s">
    Ti trovo la soluzione ideale in meno di 60 secondi — gratis! ✨
    <div class="ai-reaction" style="animation-delay:.90s">🔥</div>
  </div>
  <div class="ai-bubble user" style="animation-delay:.70s">🚗 Auto</div>
  <div class="ai-bubble system" style="animation-delay:1.00s">Che tipo di auto stai cercando?</div>
</div>

<div id="ai-bottom">
  <div id="ai-progress">
    <div class="ai-progress-row">
      <span class="ai-progress-label">Step 1 di 9</span>
      <span class="ai-progress-pct">11%</span>
    </div>
    <div class="ai-progress-track">
      <div class="ai-progress-fill" style="width:11%"></div>
    </div>
  </div>
  <div id="ai-interact">
    <div class="ai-options-grid">
      <button class="ai-option-btn">🚗 Auto</button>
      <button class="ai-option-btn">🚐 Furgone</button>
    </div>
  </div>
</div>

<!--
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
-->

</body>
</html>
