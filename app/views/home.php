<?php
$pageTitle = 'Home - Fort Energy';
$pageCss = 'home';
ob_start();
?>
<!-- HERO -->
<section class="hero">
  <div class="hero-left">
    <div class="hero-eyebrow">Engineering-led energy systems</div>
    <h1 class="hero-h1">Energy systems<br>designed for<br><em>performance</em></h1>
    <p class="hero-sub">Solar PV, battery storage, EV charging and building-integrated systems for commercial sites, residential projects, farms and developments. Designed precisely. Delivered completely.</p>
    <div class="hero-ctas">
      <a href="<?= BASE_URL ?>contact" class="btn-primary">Get a project quote →</a>
      <a href="<?= BASE_URL ?>contact" class="btn-secondary">Book a technical call</a>
    </div>
  </div>

  <div class="hero-right">
    <!-- Infographic SVG diagram -->
    <svg class="infographic-svg" viewBox="0 0 480 480" fill="none" xmlns="http://www.w3.org/2000/svg">
      <!-- Background grid -->
      <defs>
        <pattern id="grid" width="24" height="24" patternUnits="userSpaceOnUse">
          <path d="M 24 0 L 0 0 0 24" fill="none" stroke="rgba(255,255,255,0.04)" stroke-width="0.5"/>
        </pattern>
        <radialGradient id="glow" cx="50%" cy="45%" r="40%">
          <stop offset="0%" stop-color="#0A6B52" stop-opacity="0.3"/>
          <stop offset="100%" stop-color="#0A6B52" stop-opacity="0"/>
        </radialGradient>
      </defs>
      <rect width="480" height="480" fill="url(#grid)"/>
      <circle cx="240" cy="210" r="120" fill="url(#glow)"/>

      <!-- Sun -->
      <circle cx="240" cy="80" r="28" fill="#C8762A" opacity="0.9"/>
      <circle cx="240" cy="80" r="36" fill="none" stroke="#C8762A" stroke-width="1" opacity="0.3"/>
      <circle cx="240" cy="80" r="48" fill="none" stroke="#C8762A" stroke-width="0.5" opacity="0.15"/>
      <!-- Sun rays -->
      <g stroke="#C8762A" stroke-width="1.5" opacity="0.5">
        <line x1="240" y1="20" x2="240" y2="30"/>
        <line x1="240" y1="130" x2="240" y2="140"/>
        <line x1="180" y1="80" x2="170" y2="80"/>
        <line x1="300" y1="80" x2="310" y2="80"/>
        <line x1="198" y1="38" x2="191" y2="31"/>
        <line x1="282" y1="38" x2="289" y2="31"/>
        <line x1="198" y1="122" x2="191" y2="129"/>
        <line x1="282" y1="122" x2="289" y2="129"/>
      </g>
      <text x="240" y="84" text-anchor="middle" dominant-baseline="central" font-family="'DM Mono', monospace" font-size="9" fill="#C8762A" letter-spacing="1">SUN</text>

      <!-- Solar array (roof) -->
      <g transform="translate(150, 155)">
        <rect x="0" y="0" width="180" height="8" fill="#0A6B52" opacity="0.8" rx="1"/>
        <!-- Panel cells -->
        <g fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="0.5">
          <rect x="2" y="1" width="56" height="6" rx="0.5"/>
          <rect x="62" y="1" width="56" height="6" rx="0.5"/>
          <rect x="122" y="1" width="56" height="6" rx="0.5"/>
          <line x1="30" y1="1" x2="30" y2="7"/>
          <line x1="90" y1="1" x2="90" y2="7"/>
          <line x1="150" y1="1" x2="150" y2="7"/>
        </g>
        <rect x="0" y="12" width="180" height="8" fill="#0A6B52" opacity="0.8" rx="1"/>
        <g fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="0.5">
          <rect x="2" y="13" width="56" height="6" rx="0.5"/>
          <rect x="62" y="13" width="56" height="6" rx="0.5"/>
          <rect x="122" y="13" width="56" height="6" rx="0.5"/>
        </g>
        <text x="90" y="32" text-anchor="middle" font-family="'DM Mono', monospace" font-size="8" fill="rgba(255,255,255,0.4)" letter-spacing="1">SOLAR ARRAY</text>
      </g>

      <!-- Flow: sun → panels -->
      <line x1="240" y1="108" x2="240" y2="155" stroke="#C8762A" stroke-width="1.5" stroke-dasharray="4 4" class="flow-line" style="animation-delay:0s"/>
      <text x="248" y="135" font-family="'DM Mono', monospace" font-size="8" fill="#C8762A" opacity="0.6">kWh</text>

      <!-- Inverter -->
      <rect x="204" y="195" width="72" height="36" fill="rgba(10,107,82,0.2)" stroke="#0A6B52" stroke-width="1.2" rx="2"/>
      <text x="240" y="210" text-anchor="middle" dominant-baseline="central" font-family="'DM Mono', monospace" font-size="8" fill="#0D8A6A" letter-spacing="1">INVERTER</text>
      <text x="240" y="223" text-anchor="middle" font-family="'DM Mono', monospace" font-size="7" fill="rgba(255,255,255,0.3)">DC → AC</text>

      <!-- Distribution lines from inverter -->
      <!-- Left: Battery -->
      <path d="M 204 213 L 130 213 L 130 270" stroke="#0D8A6A" stroke-width="1.2" class="flow-line" style="animation-delay:0.3s"/>
      <!-- Right: Grid/Load -->
      <path d="M 276 213 L 350 213 L 350 270" stroke="#0D8A6A" stroke-width="1.2" class="flow-line" style="animation-delay:0.6s"/>
      <!-- Down: Load -->
      <line x1="240" y1="231" x2="240" y2="310" stroke="#0D8A6A" stroke-width="1.2" class="flow-line" style="animation-delay:0.9s"/>

      <!-- Battery storage -->
      <rect x="90" y="270" width="80" height="52" fill="rgba(10,107,82,0.15)" stroke="#0A6B52" stroke-width="1.2" rx="2"/>
      <rect x="100" y="278" width="60" height="8" fill="#0A6B52" opacity="0.6" rx="1"/>
      <rect x="100" y="290" width="44" height="8" fill="#0A6B52" opacity="0.4" rx="1"/>
      <rect x="100" y="302" width="26" height="8" fill="#0A6B52" opacity="0.25" rx="1"/>
      <text x="130" y="334" text-anchor="middle" font-family="'DM Mono', monospace" font-size="8" fill="#0D8A6A" letter-spacing="1">BATTERY</text>
      <text x="130" y="344" text-anchor="middle" font-family="'DM Mono', monospace" font-size="7" fill="rgba(255,255,255,0.3)">BESS</text>

      <!-- Grid connection -->
      <rect x="310" y="270" width="80" height="52" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.15)" stroke-width="1.2" rx="2"/>
      <g stroke="rgba(255,255,255,0.3)" stroke-width="1" transform="translate(336, 285)">
        <path d="M14 0 L14 10 M14 10 Q8 10 8 16 M14 10 Q20 10 20 16 M8 16 L20 16 M14 16 L14 22"/>
        <circle cx="14" cy="11" r="0" fill="rgba(255,255,255,0.15)"/>
      </g>
      <text x="350" y="334" text-anchor="middle" font-family="'DM Mono', monospace" font-size="8" fill="rgba(255,255,255,0.4)" letter-spacing="1">GRID</text>

      <!-- Building / load -->
      <g transform="translate(200, 310)">
        <rect x="10" y="10" width="60" height="44" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.15)" stroke-width="1.2"/>
        <polygon points="0,10 40,-10 80,10" fill="rgba(255,255,255,0.06)" stroke="rgba(255,255,255,0.15)" stroke-width="1.2"/>
        <!-- windows -->
        <rect x="16" y="20" width="14" height="12" fill="rgba(10,107,82,0.25)" stroke="#0A6B52" stroke-width="0.5"/>
        <rect x="50" y="20" width="14" height="12" fill="rgba(10,107,82,0.25)" stroke="#0A6B52" stroke-width="0.5"/>
        <rect x="30" y="32" width="18" height="22" fill="rgba(255,255,255,0.05)" stroke="rgba(255,255,255,0.1)" stroke-width="0.5"/>
      </g>
      <text x="240" y="373" text-anchor="middle" font-family="'DM Mono', monospace" font-size="8" fill="rgba(255,255,255,0.4)" letter-spacing="1">BUILDING LOAD</text>

      <!-- EV charger -->
      <g transform="translate(190, 388)">
        <rect x="0" y="0" width="28" height="36" fill="rgba(10,107,82,0.15)" stroke="#0A6B52" stroke-width="1" rx="2"/>
        <text x="14" y="14" text-anchor="middle" font-family="'DM Mono', monospace" font-size="10" fill="#0D8A6A">⚡</text>
        <rect x="4" y="20" width="20" height="4" fill="#0A6B52" opacity="0.5" rx="1"/>
        <rect x="4" y="27" width="12" height="4" fill="#0A6B52" opacity="0.3" rx="1"/>
      </g>
      <text x="204" y="432" text-anchor="middle" font-family="'DM Mono', monospace" font-size="7" fill="rgba(255,255,255,0.3)" letter-spacing="1">EV</text>

      <!-- Labels on flow lines -->
      <text x="166" y="208" font-family="'DM Mono', monospace" font-size="7" fill="rgba(255,255,255,0.25)">store</text>
      <text x="290" y="208" font-family="'DM Mono', monospace" font-size="7" fill="rgba(255,255,255,0.25)">export</text>

      <!-- System boundary -->
      <rect x="16" y="136" width="448" height="312" fill="none" stroke="rgba(10,107,82,0.15)" stroke-width="1" stroke-dasharray="4 8" rx="4"/>
      <text x="24" y="150" font-family="'DM Mono', monospace" font-size="8" fill="rgba(10,107,82,0.4)" letter-spacing="2">SYSTEM BOUNDARY</text>
    </svg>

    <!-- Stats strip -->
    <div class="hero-stats">
      <div class="hero-stat">
        <span class="hero-stat-num">500<span>+</span></span>
        <span class="hero-stat-label">Systems installed</span>
      </div>
      <div class="hero-stat">
        <span class="hero-stat-num">25<span>yr</span></span>
        <span class="hero-stat-label">Design life</span>
      </div>
      <div class="hero-stat">
        <span class="hero-stat-num">5</span>
        <span class="hero-stat-label">Market sectors</span>
      </div>
    </div>
  </div>
</section>

<!-- METRICS BAND -->
<div class="metrics-band reveal">
  <div class="metric-item">
    <span class="metric-num">12<span class="metric-unit">MW</span></span>
    <span class="metric-label">Generation capacity deployed</span>
  </div>
  <div class="metric-item" style="padding:0 40px;">
    <span class="metric-num">64<span class="metric-unit">kWh</span></span>
    <span class="metric-label">Largest residential storage</span>
  </div>
  <div class="metric-item" style="padding:0 40px;">
    <span class="metric-num">G99<span class="metric-unit" style="font-size:18px">/G100</span></span>
    <span class="metric-label">Grid application managed</span>
  </div>
  <div class="metric-item" style="padding-left:40px;padding-right:0;">
    <span class="metric-num">2<span class="metric-unit">wk</span></span>
    <span class="metric-label">Typical design turnaround</span>
  </div>
</div>

<!-- SECTORS -->
<section class="sectors reveal">
  <div class="section-header">
    <div>
      <div class="section-label">Select your sector</div>
      <h2 class="section-title">Five sectors.<br>One engineering standard.</h2>
    </div>
    <div class="section-count">05</div>
  </div>

  <div class="sectors-grid">
    <!-- Commercial -->
    <a href="<?= BASE_URL ?>commercial" class="sector-card">
      <div class="sector-img">
        <img src="<?= BASE_URL ?>assets/img/home/solar-pv.png" alt="Commercial solar PV installation" loading="lazy" />
        <div class="sector-img-overlay"></div>
        <span class="sector-img-ref">01</span>
      </div>
      <div class="sector-body">
        <div class="sector-title">Commercial &amp; Industrial</div>
        <div class="sector-desc">Solar PV arrays, battery storage, load balancing, hybrid microgrids, standby generation and PLC/BMS control for commercial sites.</div>
        <div class="sector-tags">
          <span class="sector-tag">SOLAR PV</span>
          <span class="sector-tag">BESS</span>
          <span class="sector-tag">MICROGRIDS</span>
          <span class="sector-tag">PLC/BMS</span>
        </div>
        <div class="sector-arrow">Enter sector →</div>
      </div>
    </a>

    <!-- Developers -->
    <a href="<?= BASE_URL ?>developers" class="sector-card">
      <div class="sector-img">
        <img src="<?= BASE_URL ?>assets/img/home/home-placeholder-developers.png" alt="Developers energy strategy" loading="lazy" />
        <div class="sector-img-overlay"></div>
        <span class="sector-img-ref">02</span>
      </div>
      <div class="sector-body">
        <div class="sector-title">Developers &amp; Housebuilders</div>
        <div class="sector-desc">Energy strategy, plant room design, G99/G100 applications and on-site BIPV installation training for development projects.</div>
        <div class="sector-tags">
          <span class="sector-tag">ENERGY STRATEGY</span>
          <span class="sector-tag">G99/G100</span>
          <span class="sector-tag">TRAINING</span>
        </div>
        <div class="sector-arrow">Enter sector →</div>
      </div>
    </a>

    <!-- Residential -->
    <a href="<?= BASE_URL ?>residential" class="sector-card">
      <div class="sector-img">
        <img src="<?= BASE_URL ?>assets/img/home/6.png" alt="Residential solar system" loading="lazy" />
        <div class="sector-img-overlay"></div>
        <span class="sector-img-ref">03</span>
      </div>
      <div class="sector-body">
        <div class="sector-title">Residential Systems</div>
        <div class="sector-desc">Tier-based solar and storage systems with EV charging, MVHR ventilation and hot water integration for high-performance homes.</div>
        <div class="sector-tags">
          <span class="sector-tag">SOLAR + STORAGE</span>
          <span class="sector-tag">EV CHARGING</span>
          <span class="sector-tag">MVHR</span>
        </div>
        <div class="sector-arrow">Enter sector →</div>
      </div>
    </a>
  </div>

  <div class="sectors-row2">
    <!-- Agricultural -->
    <a href="<?= BASE_URL ?>agricultural" class="sector-card">
      <div class="sector-img">
        <img src="<?= BASE_URL ?>assets/img/home/home-placeholder-agriculture.png" alt="Agricultural solar installation" loading="lazy" />
        <div class="sector-img-overlay"></div>
        <span class="sector-img-ref">04</span>
      </div>
      <div class="sector-body">
        <div class="sector-title">Agricultural</div>
        <div class="sector-desc">Roof-mounted and ground-mount solar for working farms. Sized around operational loads, export potential and site constraints.</div>
        <div class="sector-tags">
          <span class="sector-tag">ROOF-MOUNT</span>
          <span class="sector-tag">GROUND-MOUNT</span>
          <span class="sector-tag">AGRI TARIFFS</span>
        </div>
        <div class="sector-arrow">Enter sector →</div>
      </div>
    </a>

    <!-- BIPV -->
    <a href="<?= BASE_URL ?>bipv" class="sector-card">
      <div class="sector-img">
        <img src="<?= BASE_URL ?>assets/img/bipv/1.png" alt="Building integrated solar BIPV" loading="lazy" />
        <div class="sector-img-overlay"></div>
        <span class="sector-img-ref">05</span>
      </div>
      <div class="sector-body">
        <div class="sector-title">Building Integrated Solar</div>
        <div class="sector-desc">In-roof systems, cladding and facades, curtain walls and glazing. Specifier-oriented BIPV across product types and building typologies.</div>
        <div class="sector-tags">
          <span class="sector-tag">IN-ROOF</span>
          <span class="sector-tag">FACADES</span>
          <span class="sector-tag">GLAZING</span>
          <span class="sector-tag">BIPV</span>
        </div>
        <div class="sector-arrow">Enter sector →</div>
      </div>
    </a>
  </div>
</section>

<!-- PROCESS -->
<section class="process reveal">
  <div class="section-label">How we work</div>
  <h2 class="section-title" style="color:var(--white)">Designed. Delivered.<br><span style="font-style:italic;color:var(--teal-lt)">Optimised.</span></h2>

  <div class="process-steps">
    <div class="process-step">
      <span class="step-num">Step 01 — Assess</span>
      <div class="step-title">Site &amp; load analysis</div>
      <p class="step-body">Consumption profiling, grid capacity review, structural survey and export assessment. Every design begins with measured data, not assumptions.</p>
      <div class="step-connector">
        <svg viewBox="0 0 10 10" fill="none"><path d="M3 5h4M5 3l2 2-2 2" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>
      </div>
    </div>
    <div class="process-step">
      <span class="step-num">Step 02 — Design</span>
      <div class="step-title">System design &amp; modelling</div>
      <p class="step-body">Yield modelling, system sizing, single-line diagrams, G59/G99/G100 documentation and financial modelling with sensitivity analysis.</p>
      <div class="step-connector">
        <svg viewBox="0 0 10 10" fill="none"><path d="M3 5h4M5 3l2 2-2 2" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>
      </div>
    </div>
    <div class="process-step">
      <span class="step-num">Step 03 — Install</span>
      <div class="step-title">Installation &amp; commissioning</div>
      <p class="step-body">Managed installation with electrical sign-off, DNO liaison, MCS certification where applicable, and full commissioning documentation.</p>
      <div class="step-connector">
        <svg viewBox="0 0 10 10" fill="none"><path d="M3 5h4M5 3l2 2-2 2" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/></svg>
      </div>
    </div>
    <div class="process-step">
      <span class="step-num">Step 04 — Optimise</span>
      <div class="step-title">Monitoring &amp; optimisation</div>
      <p class="step-body">Live system monitoring, export and self-consumption reporting, battery scheduling and generation performance versus modelled yield.</p>
    </div>
  </div>
</section>

<!-- PROOF: Case study + tier teaser -->
<section class="proof">
  <div>
    <div class="section-label" style="margin-bottom:28px;">Featured case study</div>
    <div class="case-study-card reveal">
      <div class="cs-image-slot">
        <div class="cs-image-bg"></div>
        <span class="cs-sector-badge">Commercial &amp; Industrial</span>
        <div class="cs-metrics">
          <div class="cs-metric">
            <span class="cs-metric-val">245<em> kWp</em></span>
            <span class="cs-metric-key">System size</span>
          </div>
          <div class="cs-metric">
            <span class="cs-metric-val">180<em> kWh</em></span>
            <span class="cs-metric-key">Battery storage</span>
          </div>
          <div class="cs-metric">
            <span class="cs-metric-val">£68<em>k</em></span>
            <span class="cs-metric-key">Year one saving</span>
          </div>
        </div>
      </div>
      <div class="cs-body">
        <div class="cs-location">West Midlands · Manufacturing</div>
        <h3 class="cs-title">245 kWp roof array with 180 kWh BESS and peak shaving control</h3>
        <p class="cs-summary">Rooftop array across three warehouse spans, integrated with a 180 kWh battery system and a PLC-controlled peak shaving strategy. Grid import reduced by 61% during peak tariff periods. Payback modelled at 5.2 years.</p>
        <a href="<?= BASE_URL ?>case-studies/commercial-warehouse-peak-shaving" class="cs-link">View full case study →</a>
      </div>
    </div>
  </div>

  <div>
    <div class="section-label" style="margin-bottom:28px;">Residential systems</div>
    <div class="tier-teaser reveal">
      <div class="tier-label">System tiers</div>
      <h3 class="tier-title">Three tiers. One engineering standard.</h3>
      <p class="tier-sub">Every system is designed for your site. Tier sets the scope — not the quality.</p>
      <div class="tier-recommended">
        <span class="tier-rec-badge">Most specified</span>
        <span class="tier-rec-text">Performance tier — 8–12 kWp + 10 kWh storage</span>
      </div>
      <ul class="tier-list">
        <li><span class="tier-dot"></span>Essential — solar PV + smart export</li>
        <li><span class="tier-dot"></span>Performance — solar + storage + EV</li>
        <li><span class="tier-dot"></span>Premium — full integration incl. MVHR</li>
      </ul>
      <a href="<?= BASE_URL ?>residential" class="tier-cta">View residential systems →</a>
    </div>
  </div>
</section>

<!-- CTA BAND -->
<section class="cta-band reveal">
  <div>
    <h2 class="cta-band-title">Tell us about<br>your <em>project</em></h2>
    <p class="cta-band-sub">Whether you're scoping a 500 kWp commercial roof, designing energy for a development, or specifying BIPV for an architectural project — start with a conversation.</p>
  </div>
  <div class="cta-group">
    <a href="<?= BASE_URL ?>contact" class="btn-primary" style="white-space:nowrap;">Start an enquiry →</a>
    <a href="<?= BASE_URL ?>contact" class="btn-secondary" style="white-space:nowrap;">Book a technical call</a>
  </div>
</section>
<?php
$content = ob_get_clean();
require __DIR__ . '/layouts/main.php';
?>