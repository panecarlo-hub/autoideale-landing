<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Veicoli Disponibili — AutoIdeale.it</title>
  <meta name="description" content="Scopri la nostra selezione di veicoli usati e km0 su AutoIdeale.it. Qualità garantita, prezzi trasparenti.">

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
    .badge-km0    { background: #dcfce7; color: #166534; }
    .badge-usato  { background: #fef9c3; color: #854d0e; }
    .badge-promo  { background: #fee2e2; color: #991b1b; }
    .card-hover   { transition: transform .2s, box-shadow .2s; }
    .card-hover:hover { transform: translateY(-3px); box-shadow: 0 8px 30px rgba(0,36,68,.12); }
    html { scroll-behavior: smooth; }
  </style>
</head>

<body class="bg-background text-[#0b1c30]">

<!-- ───────────────── NAVBAR ───────────────── -->
<header class="bg-primary shadow-md sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-16">
    <a href="/" class="flex items-center gap-3">
      <img src="images/Logo.png" alt="AutoIdeale.it" class="h-10 w-10 rounded-lg object-contain bg-white p-1">
      <span class="text-white font-bold text-lg leading-tight">AutoIdeale<span class="text-accent">.it</span></span>
    </a>

    <nav class="hidden md:flex items-center gap-6 text-sm text-white/80 font-medium">
      <a href="#veicoli" class="hover:text-accent transition-colors">Veicoli</a>
      <a href="#servizi"  class="hover:text-accent transition-colors">Servizi</a>
      <a href="#contatti" class="hover:text-accent transition-colors">Contatti</a>
    </nav>

    <a href="#contatti"
       class="bg-accent hover:bg-[#d18e19] text-white text-sm font-semibold px-4 py-2 rounded-lg transition-colors flex items-center gap-1.5 shadow">
      <span class="material-symbols-outlined text-[17px]">phone</span>
      Contattaci
    </a>
  </div>
</header>

<!-- ───────────────── HERO ───────────────── -->
<section class="relative bg-primary overflow-hidden">
  <div class="absolute inset-0 opacity-20">
    <img src="images/hero.png" alt="" class="w-full h-full object-cover object-center">
  </div>
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
    <span class="inline-block bg-accent/20 text-accent text-xs font-bold px-3 py-1 rounded-full uppercase tracking-widest mb-4">
      Selezione curata
    </span>
    <h1 class="text-white text-4xl sm:text-5xl font-extrabold leading-tight mb-4">
      Trova il tuo<br>veicolo ideale
    </h1>
    <p class="text-white/70 text-lg max-w-xl mx-auto mb-8">
      Ogni auto della nostra flotta è certificata, controllata e pronta per la strada. Prezzi chiari, zero sorprese.
    </p>
    <a href="#veicoli"
       class="inline-flex items-center gap-2 bg-accent hover:bg-[#d18e19] text-white font-bold px-7 py-3 rounded-xl shadow-lg transition-colors text-base">
      <span class="material-symbols-outlined text-[20px]">directions_car</span>
      Sfoglia i veicoli
    </a>
  </div>
</section>

<!-- ───────────────── FILTRI ───────────────── -->
<section id="veicoli" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-4">
  <div class="bg-white rounded-2xl border border-border shadow-sm p-5">
    <p class="text-xs font-bold uppercase tracking-widest text-muted mb-4 flex items-center gap-1.5">
      <span class="material-symbols-outlined text-[16px]">tune</span>
      Filtra la ricerca
    </p>
    <form method="GET" class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3">
      <select name="marca" class="col-span-1 border border-border rounded-lg px-3 py-2 text-sm focus:border-container focus:ring-1 focus:ring-container outline-none bg-slate-50">
        <option value="">Tutte le marche</option>
        <option value="Alfa Romeo"  <?= (($_GET['marca']??'')==='Alfa Romeo'  ?'selected':'') ?>>Alfa Romeo</option>
        <option value="Audi"        <?= (($_GET['marca']??'')==='Audi'        ?'selected':'') ?>>Audi</option>
        <option value="BMW"         <?= (($_GET['marca']??'')==='BMW'         ?'selected':'') ?>>BMW</option>
        <option value="Fiat"        <?= (($_GET['marca']??'')==='Fiat'        ?'selected':'') ?>>Fiat</option>
        <option value="Ford"        <?= (($_GET['marca']??'')==='Ford'        ?'selected':'') ?>>Ford</option>
        <option value="Mercedes"    <?= (($_GET['marca']??'')==='Mercedes'    ?'selected':'') ?>>Mercedes-Benz</option>
        <option value="Volkswagen"  <?= (($_GET['marca']??'')==='Volkswagen'  ?'selected':'') ?>>Volkswagen</option>
      </select>

      <select name="tipo" class="col-span-1 border border-border rounded-lg px-3 py-2 text-sm focus:border-container focus:ring-1 focus:ring-container outline-none bg-slate-50">
        <option value="">Tutte le tipologie</option>
        <option value="km0"   <?= (($_GET['tipo']??'')==='km0'   ?'selected':'') ?>>KM 0</option>
        <option value="usato" <?= (($_GET['tipo']??'')==='usato' ?'selected':'') ?>>Usato</option>
        <option value="nuovo" <?= (($_GET['tipo']??'')==='nuovo' ?'selected':'') ?>>Nuovo</option>
      </select>

      <select name="prezzo" class="col-span-1 border border-border rounded-lg px-3 py-2 text-sm focus:border-container focus:ring-1 focus:ring-container outline-none bg-slate-50">
        <option value="">Qualsiasi prezzo</option>
        <option value="0-10000"  <?= (($_GET['prezzo']??'')==='0-10000'  ?'selected':'') ?>>Fino a € 10.000</option>
        <option value="10-20000" <?= (($_GET['prezzo']??'')==='10-20000' ?'selected':'') ?>>€ 10.000 – 20.000</option>
        <option value="20-35000" <?= (($_GET['prezzo']??'')==='20-35000' ?'selected':'') ?>>€ 20.000 – 35.000</option>
        <option value="35+"      <?= (($_GET['prezzo']??'')==='35+'      ?'selected':'') ?>>Oltre € 35.000</option>
      </select>

      <select name="anno" class="col-span-1 border border-border rounded-lg px-3 py-2 text-sm focus:border-container focus:ring-1 focus:ring-container outline-none bg-slate-50">
        <option value="">Qualsiasi anno</option>
        <?php for ($y = date('Y'); $y >= 2015; $y--): ?>
        <option value="<?= $y ?>" <?= (($_GET['anno']??'')===$y?'selected':'') ?>><?= $y ?></option>
        <?php endfor; ?>
      </select>

      <button type="submit"
              class="col-span-2 sm:col-span-1 bg-container hover:bg-primary text-white font-semibold py-2 px-4 rounded-lg text-sm transition-colors flex items-center justify-center gap-1.5">
        <span class="material-symbols-outlined text-[17px]">search</span>
        Cerca
      </button>
    </form>
  </div>
</section>

<!-- ───────────────── GRIGLIA VEICOLI ───────────────── -->
<?php
$veicoli = [
  [
    'id'       => 1,
    'marca'    => 'Alfa Romeo',
    'modello'  => 'Giulia 2.2 Diesel 160cv',
    'anno'     => 2022,
    'km'       => 18500,
    'prezzo'   => 29900,
    'tipo'     => 'usato',
    'cambio'   => 'Automatico',
    'carb'     => 'Diesel',
    'colore'   => 'Bianco Alfa',
    'promo'    => false,
    'img'      => 'https://images.unsplash.com/photo-1555215695-3004980ad54e?w=600&q=80',
  ],
  [
    'id'       => 2,
    'marca'    => 'BMW',
    'modello'  => '320d xDrive Touring',
    'anno'     => 2023,
    'km'       => 4200,
    'prezzo'   => 42500,
    'tipo'     => 'km0',
    'cambio'   => 'Automatico',
    'carb'     => 'Diesel',
    'colore'   => 'Grigio Mineralgrau',
    'promo'    => true,
    'img'      => 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=600&q=80',
  ],
  [
    'id'       => 3,
    'marca'    => 'Volkswagen',
    'modello'  => 'Golf 1.5 TSI Life',
    'anno'     => 2022,
    'km'       => 32000,
    'prezzo'   => 22900,
    'tipo'     => 'usato',
    'cambio'   => 'Manuale',
    'carb'     => 'Benzina',
    'colore'   => 'Nero Perla',
    'promo'    => false,
    'img'      => 'https://images.unsplash.com/photo-1541899481282-d53bffe3c35d?w=600&q=80',
  ],
  [
    'id'       => 4,
    'marca'    => 'Audi',
    'modello'  => 'A3 Sportback 35 TFSI',
    'anno'     => 2023,
    'km'       => 1200,
    'prezzo'   => 34700,
    'tipo'     => 'km0',
    'cambio'   => 'Automatico',
    'carb'     => 'Benzina',
    'colore'   => 'Bianco Ibis',
    'promo'    => false,
    'img'      => 'https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?w=600&q=80',
  ],
  [
    'id'       => 5,
    'marca'    => 'Fiat',
    'modello'  => '500X 1.3 Mjet City Cross',
    'anno'     => 2021,
    'km'       => 41000,
    'prezzo'   => 16800,
    'tipo'     => 'usato',
    'cambio'   => 'Manuale',
    'carb'     => 'Diesel',
    'colore'   => 'Rosso Passione',
    'promo'    => true,
    'img'      => 'https://images.unsplash.com/photo-1616788494707-ec28f08d05a1?w=600&q=80',
  ],
  [
    'id'       => 6,
    'marca'    => 'Mercedes',
    'modello'  => 'Classe A 180d Automatic',
    'anno'     => 2023,
    'km'       => 7800,
    'prezzo'   => 38200,
    'tipo'     => 'km0',
    'cambio'   => 'Automatico',
    'carb'     => 'Diesel',
    'colore'   => 'Argento',
    'promo'    => false,
    'img'      => 'https://images.unsplash.com/photo-1616422285623-13ff0162193c?w=600&q=80',
  ],
];

// Filtra
$filtrati = array_filter($veicoli, function($v) {
  if (!empty($_GET['marca'])  && $v['marca'] !== $_GET['marca'])   return false;
  if (!empty($_GET['tipo'])   && $v['tipo']  !== $_GET['tipo'])    return false;
  if (!empty($_GET['anno'])   && $v['anno']  != $_GET['anno'])     return false;
  if (!empty($_GET['prezzo'])) {
    [$min,$max] = explode('-', str_replace('+','-999999',$_GET['prezzo']));
    if ($v['prezzo'] < (int)$min*1000 || $v['prezzo'] > (int)$max) return false;
  }
  return true;
});
?>

<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
  <div class="flex items-center justify-between mb-6">
    <h2 class="text-xl font-bold text-primary">
      <?= count($filtrati) ?> veicol<?= count($filtrati) === 1 ? 'o' : 'i' ?> disponibil<?= count($filtrati) === 1 ? 'e' : 'i' ?>
    </h2>
    <?php if (!empty($_GET['marca']) || !empty($_GET['tipo']) || !empty($_GET['prezzo']) || !empty($_GET['anno'])): ?>
    <a href="landing-veicoli.php" class="text-sm text-muted hover:text-primary flex items-center gap-1 transition-colors">
      <span class="material-symbols-outlined text-[16px]">close</span>
      Rimuovi filtri
    </a>
    <?php endif; ?>
  </div>

  <?php if (empty($filtrati)): ?>
  <div class="text-center py-20 text-muted">
    <span class="material-symbols-outlined text-[48px] block mb-3">search_off</span>
    <p class="font-semibold text-lg">Nessun veicolo corrisponde ai filtri selezionati.</p>
    <p class="text-sm mt-1">Prova a modificare i criteri di ricerca.</p>
  </div>
  <?php else: ?>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php foreach ($filtrati as $v): ?>
    <article class="bg-white rounded-2xl border border-border overflow-hidden card-hover shadow-sm">
      <div class="relative">
        <img src="<?= htmlspecialchars($v['img']) ?>"
             alt="<?= htmlspecialchars($v['marca'].' '.$v['modello']) ?>"
             class="w-full h-48 object-cover">
        <div class="absolute top-3 left-3 flex gap-2 flex-wrap">
          <?php if ($v['tipo'] === 'km0'): ?>
          <span class="badge-km0 text-xs font-bold px-2.5 py-0.5 rounded-full">KM 0</span>
          <?php elseif ($v['tipo'] === 'usato'): ?>
          <span class="badge-usato text-xs font-bold px-2.5 py-0.5 rounded-full">Usato</span>
          <?php endif; ?>
          <?php if ($v['promo']): ?>
          <span class="badge-promo text-xs font-bold px-2.5 py-0.5 rounded-full">Promo</span>
          <?php endif; ?>
        </div>
      </div>

      <div class="p-5">
        <p class="text-xs font-bold text-muted uppercase tracking-wide mb-0.5"><?= htmlspecialchars($v['marca']) ?></p>
        <h3 class="font-bold text-base text-primary leading-snug mb-3"><?= htmlspecialchars($v['modello']) ?></h3>

        <div class="grid grid-cols-2 gap-x-4 gap-y-1.5 text-xs text-muted mb-4">
          <span class="flex items-center gap-1.5">
            <span class="material-symbols-outlined text-[15px]">calendar_today</span>
            <?= $v['anno'] ?>
          </span>
          <span class="flex items-center gap-1.5">
            <span class="material-symbols-outlined text-[15px]">speed</span>
            <?= number_format($v['km'], 0, ',', '.') ?> km
          </span>
          <span class="flex items-center gap-1.5">
            <span class="material-symbols-outlined text-[15px]">local_gas_station</span>
            <?= htmlspecialchars($v['carb']) ?>
          </span>
          <span class="flex items-center gap-1.5">
            <span class="material-symbols-outlined text-[15px]">settings</span>
            <?= htmlspecialchars($v['cambio']) ?>
          </span>
        </div>

        <div class="flex items-center justify-between border-t border-border pt-4">
          <div>
            <p class="text-xs text-muted">Prezzo</p>
            <p class="text-xl font-extrabold text-primary">
              € <?= number_format($v['prezzo'], 0, ',', '.') ?>
            </p>
          </div>
          <a href="#contatti?veicolo=<?= urlencode($v['marca'].' '.$v['modello']) ?>"
             class="bg-accent hover:bg-[#d18e19] text-white text-xs font-bold px-4 py-2.5 rounded-lg transition-colors flex items-center gap-1.5 shadow-sm">
            <span class="material-symbols-outlined text-[15px]">send</span>
            Richiedi info
          </a>
        </div>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
</section>

<!-- ───────────────── SERVIZI ───────────────── -->
<section id="servizi" class="bg-white border-t border-border py-16 mt-8">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <span class="text-xs font-bold uppercase tracking-widest text-accent">I nostri servizi</span>
      <h2 class="text-3xl font-extrabold text-primary mt-2">Tutto quello di cui hai bisogno</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <?php $servizi = [
        ['icon'=>'verified','title'=>'Garanzia Certificata','desc'=>'Ogni veicolo supera 120 punti di controllo. Garanzia inclusa su tutti i modelli km0 e usati selezionati.'],
        ['icon'=>'payments','title'=>'Finanziamento Facile','desc'=>'Soluzioni di finanziamento su misura, anche online. Risposta in 24 ore senza impegno.'],
        ['icon'=>'autorenew','title'=>'Permuta & Ritiro','desc'=>'Valutiamo il tuo veicolo gratuitamente. Ritiro a domicilio disponibile in tutta Italia.'],
      ]; foreach ($servizi as $s): ?>
      <div class="bg-background rounded-2xl p-6 flex flex-col items-start gap-3 border border-border hover:border-accent/40 transition-colors">
        <span class="material-symbols-outlined text-accent text-[36px]"><?= $s['icon'] ?></span>
        <h3 class="font-bold text-primary text-lg"><?= $s['title'] ?></h3>
        <p class="text-sm text-muted leading-relaxed"><?= $s['desc'] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ───────────────── FORM CONTATTI ───────────────── -->
<section id="contatti" class="py-16 bg-background">
  <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white rounded-2xl border border-border shadow-sm p-8">
      <div class="text-center mb-8">
        <span class="text-xs font-bold uppercase tracking-widest text-accent">Contattaci</span>
        <h2 class="text-2xl font-extrabold text-primary mt-2">Siamo qui per aiutarti</h2>
        <p class="text-sm text-muted mt-1">Compila il modulo e ti ricontatteremo entro 24 ore.</p>
      </div>

      <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['nome'])): ?>
      <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-xl p-4 mb-6 flex items-start gap-3">
        <span class="material-symbols-outlined text-emerald-600 text-[20px] mt-0.5">check_circle</span>
        <div>
          <p class="font-semibold text-sm">Messaggio inviato con successo!</p>
          <p class="text-xs mt-0.5">Ti risponderemo al più presto. Grazie, <?= htmlspecialchars($_POST['nome']) ?>!</p>
        </div>
      </div>
      <?php endif; ?>

      <form method="POST" class="space-y-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label class="block text-xs font-semibold text-[#0b1c30] mb-1.5">Nome *</label>
            <input type="text" name="nome" required placeholder="Mario"
                   class="w-full border border-border rounded-lg px-3 py-2.5 text-sm focus:border-container focus:ring-1 focus:ring-container outline-none bg-slate-50">
          </div>
          <div>
            <label class="block text-xs font-semibold text-[#0b1c30] mb-1.5">Cognome *</label>
            <input type="text" name="cognome" required placeholder="Rossi"
                   class="w-full border border-border rounded-lg px-3 py-2.5 text-sm focus:border-container focus:ring-1 focus:ring-container outline-none bg-slate-50">
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label class="block text-xs font-semibold text-[#0b1c30] mb-1.5">Email *</label>
            <input type="email" name="email" required placeholder="mario@email.it"
                   class="w-full border border-border rounded-lg px-3 py-2.5 text-sm focus:border-container focus:ring-1 focus:ring-container outline-none bg-slate-50">
          </div>
          <div>
            <label class="block text-xs font-semibold text-[#0b1c30] mb-1.5">Telefono</label>
            <input type="tel" name="telefono" placeholder="+39 333 000 0000"
                   class="w-full border border-border rounded-lg px-3 py-2.5 text-sm focus:border-container focus:ring-1 focus:ring-container outline-none bg-slate-50">
          </div>
        </div>

        <div>
          <label class="block text-xs font-semibold text-[#0b1c30] mb-1.5">Veicolo di interesse</label>
          <input type="text" name="veicolo"
                 value="<?= htmlspecialchars($_GET['veicolo'] ?? '') ?>"
                 placeholder="Es. BMW 320d, Fiat 500X…"
                 class="w-full border border-border rounded-lg px-3 py-2.5 text-sm focus:border-container focus:ring-1 focus:ring-container outline-none bg-slate-50">
        </div>

        <div>
          <label class="block text-xs font-semibold text-[#0b1c30] mb-1.5">Messaggio</label>
          <textarea name="messaggio" rows="4" placeholder="Scrivi la tua richiesta…"
                    class="w-full border border-border rounded-lg px-3 py-2.5 text-sm focus:border-container focus:ring-1 focus:ring-container outline-none bg-slate-50 resize-none"></textarea>
        </div>

        <div class="flex items-start gap-2">
          <input type="checkbox" id="privacy" name="privacy" required
                 class="mt-0.5 rounded border-border text-container focus:ring-container">
          <label for="privacy" class="text-xs text-muted leading-relaxed">
            Ho letto e accetto la
            <a href="privacy-policy.php" target="_blank" class="text-container hover:underline font-semibold">Privacy Policy</a>
            ai sensi del Regolamento UE 679/2016 (GDPR). *
          </label>
        </div>

        <button type="submit"
                class="w-full bg-accent hover:bg-[#d18e19] text-white font-bold py-3 rounded-xl transition-colors flex items-center justify-center gap-2 text-sm shadow">
          <span class="material-symbols-outlined text-[18px]">send</span>
          Invia richiesta
        </button>
      </form>
    </div>
  </div>
</section>

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
        <a href="#contatti"            class="hover:text-white transition-colors">Contatti</a>
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
