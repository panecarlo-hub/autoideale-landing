<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Privacy Policy — AutoIdeale.it</title>
  <meta name="description" content="Informativa sul trattamento dei dati personali ai sensi del Regolamento UE 679/2016 (GDPR) — AutoIdeale.it">
  <meta name="robots" content="noindex, follow">

  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary:    '#002444',
            container:  '#1A3A5C',
            accent:     '#E8A020',
            background: '#f8f9ff',
            surface:    '#ffffff',
            muted:      '#73777f',
            border:     '#e2e8f0',
          },
          fontFamily: { sans: ['Manrope', 'sans-serif'] },
        }
      }
    }
  </script>

  <style>
    * { font-family: 'Manrope', sans-serif; }
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      vertical-align: middle;
    }
    .prose h2 { font-size: 1.125rem; font-weight: 700; color: #002444; margin-top: 2rem; margin-bottom: 0.75rem; padding-bottom: 0.5rem; border-bottom: 1px solid #e2e8f0; }
    .prose h3 { font-size: 0.9375rem; font-weight: 700; color: #1A3A5C; margin-top: 1.25rem; margin-bottom: 0.4rem; }
    .prose p  { font-size: 0.875rem; line-height: 1.75; color: #43474e; margin-bottom: 0.75rem; }
    .prose ul { list-style: disc; padding-left: 1.5rem; margin-bottom: 0.75rem; }
    .prose ul li { font-size: 0.875rem; line-height: 1.75; color: #43474e; margin-bottom: 0.2rem; }
    .prose a  { color: #1A3A5C; text-decoration: underline; }
    .prose a:hover { color: #E8A020; }
    html { scroll-behavior: smooth; }
  </style>
</head>

<body class="bg-background text-[#0b1c30]">

<!-- ───────────────── NAVBAR ───────────────── -->
<header class="bg-primary shadow-md sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16">
    <a href="landing-veicoli.php" class="flex items-center gap-3">
      <img src="images/Logo.png" alt="AutoIdeale.it" class="h-10 w-10 rounded-lg object-contain bg-white p-1">
      <span class="text-white font-bold text-lg leading-tight">AutoIdeale<span class="text-accent">.it</span></span>
    </a>
    <a href="landing-veicoli.php"
       class="text-white/80 hover:text-white text-sm font-medium flex items-center gap-1.5 transition-colors">
      <span class="material-symbols-outlined text-[18px]">arrow_back</span>
      Torna al sito
    </a>
  </div>
</header>

<!-- ───────────────── HERO MINIMO ───────────────── -->
<div class="bg-primary py-12 text-center">
  <div class="max-w-3xl mx-auto px-4">
    <span class="inline-flex items-center gap-1.5 bg-white/10 text-white/80 text-xs font-semibold px-3 py-1 rounded-full mb-4">
      <span class="material-symbols-outlined text-[14px]">gpp_good</span>
      Regolamento UE 679/2016 — GDPR
    </span>
    <h1 class="text-white text-3xl sm:text-4xl font-extrabold mb-3">Privacy Policy</h1>
    <p class="text-white/60 text-sm">Ultimo aggiornamento: <?= date('d/m/Y') ?></p>
  </div>
</div>

<!-- ───────────────── INDICE RAPIDO ───────────────── -->
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
  <div class="bg-white rounded-2xl border border-border shadow-sm p-6">
    <p class="text-xs font-bold uppercase tracking-widest text-muted mb-4 flex items-center gap-1.5">
      <span class="material-symbols-outlined text-[16px]">list</span>
      Indice
    </p>
    <ol class="space-y-1.5 text-sm text-container">
      <?php $sezioni = [
        '1. Titolare del Trattamento',
        '2. Tipologie di Dati Raccolti',
        '3. Finalità e Base Giuridica del Trattamento',
        '4. Modalità di Trattamento',
        '5. Conservazione dei Dati',
        '6. Comunicazione e Diffusione dei Dati',
        '7. Trasferimento dei Dati verso Paesi Terzi',
        '8. Diritti degli Interessati',
        '9. Cookie Policy',
        '10. Modifiche alla Privacy Policy',
        '11. Contatti DPO',
      ];
      foreach ($sezioni as $i => $s):
        $anchor = 'art' . ($i + 1);
      ?>
      <li>
        <a href="#<?= $anchor ?>"
           class="flex items-start gap-2 hover:text-accent transition-colors py-0.5">
          <span class="material-symbols-outlined text-[14px] mt-0.5 shrink-0">chevron_right</span>
          <?= $s ?>
        </a>
      </li>
      <?php endforeach; ?>
    </ol>
  </div>
</div>

<!-- ───────────────── CONTENUTO ───────────────── -->
<main class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-10 mb-8">
  <div class="bg-white rounded-2xl border border-border shadow-sm p-8 prose">

    <!-- ART 1 -->
    <h2 id="art1">1. Titolare del Trattamento</h2>
    <p>
      Il Titolare del trattamento dei dati personali raccolti tramite il sito web
      <strong>AutoIdeale.it</strong> è:
    </p>
    <ul>
      <li><strong>Ragione Sociale:</strong> G83 Solution S.r.l. (o persona fisica/giuridica proprietaria del sito)</li>
      <li><strong>Sede legale:</strong> [Inserire indirizzo completo], Italia</li>
      <li><strong>P.IVA:</strong> 00000000000</li>
      <li><strong>Email:</strong> <a href="mailto:privacy@autoideale.it">privacy@autoideale.it</a></li>
      <li><strong>PEC:</strong> [pec@dominio.it]</li>
      <li><strong>Telefono:</strong> [+39 000 000 0000]</li>
    </ul>

    <!-- ART 2 -->
    <h2 id="art2">2. Tipologie di Dati Raccolti</h2>
    <p>
      Il Titolare raccoglie le seguenti categorie di dati personali:
    </p>
    <h3>2.1 Dati forniti volontariamente dall'utente</h3>
    <ul>
      <li>Nome e cognome</li>
      <li>Indirizzo email</li>
      <li>Numero di telefono</li>
      <li>Contenuto dei messaggi inviati tramite il modulo di contatto</li>
      <li>Veicolo o servizio di interesse</li>
    </ul>
    <h3>2.2 Dati di navigazione</h3>
    <p>
      I sistemi informatici e le procedure software preposte al funzionamento di questo sito
      acquisiscono, nel corso del loro normale esercizio, alcuni dati personali la cui
      trasmissione è implicita nell'uso dei protocolli di comunicazione Internet. In questa
      categoria rientrano gli indirizzi IP, i tipi di browser, il sistema operativo, il nome
      a dominio e gli indirizzi dei siti web dai quali è stato effettuato l'accesso, nonché
      altri parametri relativi al sistema operativo e all'ambiente informatico dell'utente.
    </p>
    <h3>2.3 Cookie e tecnologie di tracciamento</h3>
    <p>
      Il sito utilizza cookie tecnici indispensabili al funzionamento. Per i dettagli si rinvia
      alla sezione <a href="#art9">Cookie Policy</a>.
    </p>

    <!-- ART 3 -->
    <h2 id="art3">3. Finalità e Base Giuridica del Trattamento</h2>
    <p>I dati personali sono trattati per le seguenti finalità:</p>
    <ul>
      <li>
        <strong>Gestione delle richieste di contatto</strong> — rispondere alle richieste
        inoltrate tramite il modulo online (base giuridica: esecuzione di misure precontrattuali
        su richiesta dell'interessato — art. 6, par. 1, lett. b GDPR).
      </li>
      <li>
        <strong>Adempimento di obblighi legali</strong> — rispettare disposizioni normative
        e fiscali applicabili (base giuridica: obbligo legale — art. 6, par. 1, lett. c GDPR).
      </li>
      <li>
        <strong>Marketing e comunicazioni commerciali</strong> — solo previo esplicito consenso
        dell'interessato, invio di offerte, promozioni e newsletter sui veicoli disponibili
        (base giuridica: consenso — art. 6, par. 1, lett. a GDPR).
      </li>
      <li>
        <strong>Statistiche anonimizzate</strong> — elaborazione di dati in forma aggregata
        e anonima per migliorare il sito (base giuridica: legittimo interesse — art. 6,
        par. 1, lett. f GDPR).
      </li>
    </ul>

    <!-- ART 4 -->
    <h2 id="art4">4. Modalità di Trattamento</h2>
    <p>
      Il trattamento dei dati personali avviene mediante strumenti informatici e telematici,
      con modalità organizzative e logiche strettamente correlate alle finalità indicate.
      Oltre al Titolare, in alcuni casi potrebbero avere accesso ai dati soggetti esterni
      (fornitori di servizi tecnici, hosting provider, agenzie di marketing) nominati, ove
      necessario, Responsabili del Trattamento.
    </p>
    <p>
      I dati non saranno diffusi né ceduti a terzi per finalità proprie senza il previo
      consenso dell'interessato, salvo obblighi di legge.
    </p>

    <!-- ART 5 -->
    <h2 id="art5">5. Conservazione dei Dati</h2>
    <p>
      I dati personali sono conservati per il tempo strettamente necessario al conseguimento
      delle finalità per le quali sono stati raccolti:
    </p>
    <ul>
      <li>
        <strong>Richieste di contatto:</strong> fino a 24 mesi dalla data dell'ultima
        comunicazione, salvo esigenze di difesa legale.
      </li>
      <li>
        <strong>Dati contabili e fiscali:</strong> 10 anni ai sensi degli obblighi di
        legge italiani.
      </li>
      <li>
        <strong>Dati di marketing (con consenso):</strong> fino alla revoca del consenso
        o per un massimo di 24 mesi dall'ultima interazione.
      </li>
      <li>
        <strong>Dati di navigazione e log:</strong> massimo 12 mesi.
      </li>
    </ul>
    <p>
      Alla scadenza del periodo di conservazione i dati saranno cancellati o resi anonimi
      in modo definitivo.
    </p>

    <!-- ART 6 -->
    <h2 id="art6">6. Comunicazione e Diffusione dei Dati</h2>
    <p>
      I dati personali potranno essere comunicati a:
    </p>
    <ul>
      <li>Soggetti ai quali la comunicazione è dovuta in forza di obblighi di legge.</li>
      <li>
        Fornitori di servizi tecnici e informatici (hosting, email, CRM) che agiscono
        in qualità di Responsabili del Trattamento ex art. 28 GDPR.
      </li>
      <li>Istituti di credito e intermediari finanziari, per finalità di finanziamento.</li>
    </ul>
    <p>
      I dati non saranno diffusi a soggetti indeterminati.
    </p>

    <!-- ART 7 -->
    <h2 id="art7">7. Trasferimento dei Dati verso Paesi Terzi</h2>
    <p>
      Alcuni fornitori di servizi (es. provider di infrastruttura cloud) potrebbero
      trattare dati personali al di fuori dello Spazio Economico Europeo (SEE). In tal
      caso, il Titolare adotta adeguate garanzie ai sensi degli artt. 44–49 GDPR, tra
      cui le Clausole Contrattuali Standard approvate dalla Commissione Europea.
    </p>

    <!-- ART 8 -->
    <h2 id="art8">8. Diritti degli Interessati</h2>
    <p>
      Ai sensi degli artt. 15–22 GDPR, l'interessato ha il diritto di:
    </p>
    <ul>
      <li><strong>Accesso</strong> — ottenere conferma del trattamento e copia dei dati.</li>
      <li><strong>Rettifica</strong> — correggere dati inesatti o incompleti.</li>
      <li><strong>Cancellazione</strong> ("diritto all'oblio") — richiedere la cancellazione dei dati, ove applicabile.</li>
      <li><strong>Limitazione</strong> — limitare il trattamento in determinate circostanze.</li>
      <li><strong>Portabilità</strong> — ricevere i dati in formato strutturato e leggibile.</li>
      <li><strong>Opposizione</strong> — opporsi al trattamento per motivi legittimi.</li>
      <li><strong>Revoca del consenso</strong> — revocare in qualsiasi momento il consenso prestato, senza pregiudicare la liceità del trattamento precedente.</li>
      <li><strong>Reclamo</strong> — proporre reclamo al Garante per la Protezione dei Dati Personali (<a href="https://www.garanteprivacy.it" target="_blank" rel="noopener">www.garanteprivacy.it</a>).</li>
    </ul>
    <p>
      Per esercitare tali diritti è possibile scrivere a:
      <a href="mailto:privacy@autoideale.it">privacy@autoideale.it</a>.
      Il Titolare risponde entro 30 giorni dalla ricezione della richiesta.
    </p>

    <!-- ART 9 -->
    <h2 id="art9">9. Cookie Policy</h2>
    <h3>9.1 Cosa sono i cookie</h3>
    <p>
      I cookie sono piccoli file di testo che i siti visitati dall'utente inviano al suo
      terminale (computer, tablet, smartphone), dove vengono memorizzati per essere
      ritrasmessi agli stessi siti alla visita successiva.
    </p>
    <h3>9.2 Cookie utilizzati da questo sito</h3>
    <ul>
      <li>
        <strong>Cookie tecnici (strettamente necessari):</strong> indispensabili per il
        corretto funzionamento del sito (es. sessione PHP, preferenze di lingua).
        Non richiedono il consenso.
      </li>
      <li>
        <strong>Cookie analitici:</strong> utilizzati in forma anonimizzata per comprendere
        come gli utenti interagiscono con il sito (es. Google Analytics con IP anonimizzato).
        Richiedono il consenso.
      </li>
      <li>
        <strong>Cookie di marketing:</strong> utilizzati per mostrare annunci pertinenti
        agli interessi dell'utente. Richiedono il consenso.
      </li>
    </ul>
    <h3>9.3 Gestione dei cookie</h3>
    <p>
      L'utente può gestire le preferenze sui cookie attraverso il banner mostrato al
      primo accesso o attraverso le impostazioni del proprio browser. La disattivazione
      dei cookie tecnici potrebbe compromettere il corretto funzionamento del sito.
    </p>

    <!-- ART 10 -->
    <h2 id="art10">10. Modifiche alla Privacy Policy</h2>
    <p>
      Il Titolare si riserva il diritto di apportare modifiche alla presente Privacy Policy
      in qualsiasi momento, dandone informazione agli utenti su questa pagina. Si prega
      di consultare questa pagina periodicamente, facendo riferimento alla data di ultimo
      aggiornamento indicata in cima. In caso di modifiche sostanziali, il Titolare potrà
      notificarle anche tramite email agli utenti registrati.
    </p>

    <!-- ART 11 -->
    <h2 id="art11">11. Contatti DPO</h2>
    <p>
      Questa organizzazione, ove obbligatorio ai sensi dell'art. 37 GDPR, ha nominato
      un Responsabile della Protezione dei Dati (DPO). Per qualsiasi questione relativa
      al trattamento dei dati personali e all'esercizio dei diritti, è possibile contattare:
    </p>
    <ul>
      <li><strong>DPO — AutoIdeale.it</strong></li>
      <li><strong>Email:</strong> <a href="mailto:dpo@autoideale.it">dpo@autoideale.it</a></li>
      <li><strong>Indirizzo:</strong> [Inserire indirizzo del DPO], Italia</li>
    </ul>

    <!-- BOX BOTTOM -->
    <div class="mt-10 bg-background rounded-xl border border-border p-5 flex items-start gap-3">
      <span class="material-symbols-outlined text-accent text-[24px] mt-0.5 shrink-0">info</span>
      <div>
        <p class="text-xs font-bold text-primary mb-1">Nota legale</p>
        <p class="text-xs text-muted leading-relaxed">
          La presente informativa è redatta in conformità al Regolamento (UE) 2016/679
          (GDPR) e al D.Lgs. 196/2003 come modificato dal D.Lgs. 101/2018. Questa
          pagina ha valore di informativa privacy ai sensi dell'art. 13 GDPR.
        </p>
      </div>
    </div>
  </div>

  <!-- Torna su -->
  <div class="text-center mt-8">
    <a href="#"
       class="inline-flex items-center gap-2 text-sm text-muted hover:text-primary transition-colors font-medium">
      <span class="material-symbols-outlined text-[17px]">arrow_upward</span>
      Torna all'inizio
    </a>
  </div>
</main>

<!-- ───────────────── FOOTER ───────────────── -->
<footer class="bg-primary text-white/70 py-10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col md:flex-row items-center justify-between gap-6">
      <div class="flex items-center gap-3">
        <img src="images/Logo.png" alt="AutoIdeale.it" class="h-10 w-10 rounded-lg object-contain bg-white p-1">
        <div>
          <p class="text-white font-bold text-base">AutoIdeale<span class="text-accent">.it</span></p>
          <p class="text-xs">Gestionale Automotive</p>
        </div>
      </div>
      <nav class="flex flex-wrap justify-center gap-5 text-sm">
        <a href="landing-veicoli.php" class="hover:text-white transition-colors">Veicoli</a>
        <a href="privacy-policy.php"  class="hover:text-white transition-colors">Privacy Policy</a>
      </nav>
    </div>
    <div class="border-t border-white/10 mt-8 pt-6 text-center text-xs">
      &copy; <?= date('Y') ?> AutoIdeale.it &mdash; Tutti i diritti riservati &mdash;
      P.IVA 00000000000
    </div>
  </div>
</footer>

</body>
</html>
