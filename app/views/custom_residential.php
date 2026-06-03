<?php
$pageTitle = 'Custom Residential - Fort Energy';
$activePage   = 'residential';
$metaDesc     = 'PLACEHOLDER — SEO to supply';
$canonicalUrl = 'https://fortenergy.co.uk/residential/custom';
$pageCSS      = 'customResidetials.css';
$schemaJson   = json_encode([
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',                'item' => 'https://fortenergy.co.uk'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Residential Systems', 'item' => 'https://fortenergy.co.uk/residential'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Custom Residential',  'item' => 'https://fortenergy.co.uk/residential/custom'],
    ],
]);
ob_start();

?>

<!-- BREADCRUMB -->
<div class="breadcrumb">
    <a href="/" class="bc-item">Home</a>
    <span class="bc-sep">/</span>
    <a href="/residential" class="bc-item">Residential Systems</a>
    <span class="bc-sep">/</span>
    <span class="bc-current">Custom residential</span>
</div>

<!-- HERO -->
<section class="hero">
    <div class="hero-left">
        <div class="hero-eyebrow">Sub-sector 03b — Custom Residential</div>
        <h1 class="hero-h1">Custom residential<br><em>energy systems</em></h1>
        <p class="hero-sub">Integrated energy and building services design for high-specification homes — generation, storage, ventilation, heating, hot water and air conditioning designed and delivered as a single engineered system.</p>
        <div class="hero-ctas">
            <a href="/contact" class="btn-primary">Book a consultation →</a>
            <a href="/residential" class="btn-secondary">← Residential systems</a>
        </div>
    </div>

    <!-- Hero diagram: fully integrated home system -->
    <div class="hero-diagram">
        <svg width="320" height="440" viewBox="0 0 320 440" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="crgrid" width="16" height="16" patternUnits="userSpaceOnUse">
                    <path d="M 16 0 L 0 0 0 16" fill="none" stroke="rgba(255,255,255,0.04)" stroke-width="0.5" />
                </pattern>
                <radialGradient id="crglow" cx="50%" cy="40%" r="50%">
                    <stop offset="0%" stop-color="#0A6B52" stop-opacity="0.18" />
                    <stop offset="100%" stop-color="#0A6B52" stop-opacity="0" />
                </radialGradient>
            </defs>
            <rect width="320" height="440" fill="url(#crgrid)" />
            <circle cx="160" cy="180" r="150" fill="url(#crglow)" />

            <!-- Sun -->
            <circle cx="160" cy="24" r="16" fill="#C8762A" opacity="0.8" />
            <circle cx="160" cy="24" r="23" fill="none" stroke="#C8762A" stroke-width="0.7" opacity="0.2" />
            <g stroke="#C8762A" stroke-width="0.8" opacity="0.35">
                <line x1="160" y1="3" x2="160" y2="7" />
                <line x1="160" y1="41" x2="160" y2="45" />
                <line x1="139" y1="24" x2="135" y2="24" />
                <line x1="181" y1="24" x2="185" y2="24" />
                <line x1="145" y1="9" x2="142" y2="6" />
                <line x1="175" y1="9" x2="178" y2="6" />
            </g>
            <line x1="160" y1="40" x2="160" y2="62" stroke="#C8762A" stroke-width="1.2" stroke-dasharray="3 3" class="flow-line" />

            <!-- House -->
            <g transform="translate(40,66)">
                <!-- Roof — solar reroof -->
                <polygon points="0,56 120,0 240,56" fill="rgba(10,107,82,0.1)" stroke="rgba(255,255,255,0.08)" stroke-width="1" />
                <polygon points="10,52 120,4 230,52" fill="rgba(10,107,82,0.38)" stroke="#0A6B52" stroke-width="0.8" />
                <!-- Panel lines -->
                <line x1="10" y1="36" x2="230" y2="36" stroke="rgba(255,255,255,0.15)" stroke-width="0.5" />
                <line x1="10" y1="20" x2="230" y2="20" stroke="rgba(255,255,255,0.1)" stroke-width="0.5" />
                <line x1="60" y1="4" x2="48" y2="52" stroke="rgba(255,255,255,0.12)" stroke-width="0.5" />
                <line x1="120" y1="4" x2="120" y2="52" stroke="rgba(255,255,255,0.12)" stroke-width="0.5" />
                <line x1="180" y1="4" x2="192" y2="52" stroke="rgba(255,255,255,0.12)" stroke-width="0.5" />
                <!-- Walls -->
                <rect x="14" y="56" width="212" height="130" fill="rgba(255,255,255,0.02)" stroke="rgba(255,255,255,0.1)" stroke-width="1" />
                <!-- High-spec windows -->
                <rect x="24" y="68" width="42" height="32" fill="rgba(10,107,82,0.18)" stroke="#0A6B52" stroke-width="0.8" />
                <rect x="88" y="68" width="64" height="32" fill="rgba(10,107,82,0.18)" stroke="#0A6B52" stroke-width="0.8" />
                <rect x="164" y="68" width="48" height="32" fill="rgba(10,107,82,0.18)" stroke="#0A6B52" stroke-width="0.8" />
                <!-- MVHR grille -->
                <rect x="24" y="108" width="32" height="14" fill="rgba(10,107,82,0.1)" stroke="rgba(10,107,82,0.3)" stroke-width="0.7" rx="1" />
                <text x="40" y="118" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(10,107,82,0.6)">MVHR</text>
                <!-- AC unit -->
                <rect x="170" y="108" width="42" height="14" fill="rgba(10,107,82,0.08)" stroke="rgba(10,107,82,0.25)" stroke-width="0.7" rx="1" />
                <text x="191" y="118" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(10,107,82,0.5)">A/C</text>
                <!-- Door -->
                <rect x="90" y="118" width="60" height="68" fill="rgba(255,255,255,0.03)" stroke="rgba(255,255,255,0.08)" stroke-width="0.7" />
                <!-- Pool extension -->
                <rect x="14" y="186" width="212" height="40" fill="rgba(10,107,82,0.06)" stroke="rgba(10,107,82,0.2)" stroke-width="0.8" stroke-dasharray="4 4" />
                <text x="120" y="210" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.4)" letter-spacing="1">POOL HALL</text>
            </g>

            <!-- Plant room (bottom left) -->
            <rect x="10" y="318" width="100" height="74" rx="2" fill="rgba(10,107,82,0.1)" stroke="#0A6B52" stroke-width="1.2" />
            <text x="60" y="336" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A" letter-spacing="1">PLANT ROOM</text>
            <!-- plant room contents -->
            <rect x="18" y="344" width="34" height="10" rx="1" fill="rgba(10,107,82,0.3)" stroke="#0A6B52" stroke-width="0.5" />
            <text x="35" y="352" text-anchor="middle" font-family="'DM Mono',monospace" font-size="5" fill="rgba(255,255,255,0.5)">BESS 64kWh</text>
            <rect x="58" y="344" width="44" height="10" rx="1" fill="rgba(200,118,42,0.2)" stroke="rgba(200,118,42,0.4)" stroke-width="0.5" />
            <text x="80" y="352" text-anchor="middle" font-family="'DM Mono',monospace" font-size="5" fill="rgba(200,118,42,0.7)">GSHP + DHW</text>
            <rect x="18" y="360" width="84" height="10" rx="1" fill="rgba(10,107,82,0.15)" stroke="rgba(10,107,82,0.3)" stroke-width="0.5" />
            <text x="60" y="368" text-anchor="middle" font-family="'DM Mono',monospace" font-size="5" fill="rgba(255,255,255,0.4)">INVERTER · EMS · CONTROLS</text>
            <rect x="18" y="376" width="84" height="10" rx="1" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.1)" stroke-width="0.5" />
            <text x="60" y="384" text-anchor="middle" font-family="'DM Mono',monospace" font-size="5" fill="rgba(255,255,255,0.3)">MVHR UNIT · POOL HX</text>

            <!-- EV charger -->
            <rect x="220" y="318" width="90" height="44" rx="2" fill="rgba(10,107,82,0.08)" stroke="rgba(10,107,82,0.25)" stroke-width="1" />
            <text x="265" y="334" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A" letter-spacing="1">EV CHARGING</text>
            <text x="265" y="348" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.25)">22 kW · solar-first</text>

            <!-- Grid -->
            <rect x="220" y="372" width="90" height="28" rx="2" fill="rgba(255,255,255,0.03)" stroke="rgba(255,255,255,0.1)" stroke-width="0.8" />
            <text x="265" y="389" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.25)" letter-spacing="1">GRID</text>

            <!-- Flow lines -->
            <!-- Roof → plant room -->
            <path d="M 160 318 L 60 392" stroke="#0D8A6A" stroke-width="1" class="flow-line" style="animation-delay:0.2s" />
            <!-- Plant room → EV -->
            <line x1="110" y1="355" x2="220" y2="340" stroke="#0D8A6A" stroke-width="0.8" stroke-dasharray="4 3" class="flow-line" style="animation-delay:0.5s" />
            <!-- Plant → grid -->
            <line x1="110" y1="375" x2="220" y2="385" stroke="rgba(255,255,255,0.12)" stroke-width="0.8" stroke-dasharray="3 4" />

            <!-- Coordinated control annotation -->
            <rect x="10" y="408" width="300" height="24" rx="2" fill="rgba(10,107,82,0.08)" stroke="rgba(10,107,82,0.2)" stroke-width="0.8" />
            <text x="160" y="422" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.6)" letter-spacing="1">ALL SYSTEMS UNDER COORDINATED EMS CONTROL</text>

            <!-- Site boundary -->
            <rect x="6" y="58" width="308" height="342" fill="none" stroke="rgba(10,107,82,0.1)" stroke-width="1" stroke-dasharray="6 10" rx="4" />
            <text x="14" y="70" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.3)" letter-spacing="2">HIGH-SPEC RESIDENTIAL</text>
        </svg>
    </div>
</section>

<!-- INTRO: Designed as a single system -->
<section class="intro reveal">
    <div>
        <div class="section-label">Designed as a single system</div>
        <h2 class="section-title">Every system<br>coordinated as<br><em>one installation</em></h2>
    </div>
    <div>
        <div class="intro-body">
            <p>High-specification homes require multiple building services systems operating simultaneously — solar generation, battery storage, heat pump, MVHR, hot water, air conditioning, pool plant and EV charging. When these are designed and installed independently they operate independently, and the results are compromised.</p>
            <p>Custom residential projects are designed from the outset as coordinated installations. The plant room is laid out for all systems together. The electrical design accounts for every load and every generation source. The EMS controls everything from a single platform — optimising self-consumption, scheduling loads, prioritising battery and responding to tariff signals.</p>
        </div>
        <div class="intro-pillars">
            <div class="intro-pillar">
                <div class="intro-pillar-dot"></div>Single project, single design team, single point of accountability
            </div>
            <div class="intro-pillar">
                <div class="intro-pillar-dot"></div>Plant room coordinated for all systems before construction begins
            </div>
            <div class="intro-pillar">
                <div class="intro-pillar-dot"></div>Electrical design accounts for every load and generation source
            </div>
            <div class="intro-pillar">
                <div class="intro-pillar-dot"></div>Centralised EMS control — one interface for everything
            </div>
            <div class="intro-pillar">
                <div class="intro-pillar-dot"></div>Full O&amp;M documentation and monitoring from day one
            </div>
        </div>
    </div>
</section>

<!-- SIX CAPABILITIES -->
<section class="capabilities">
    <div class="cap-header reveal">
        <div>
            <div class="section-label">Six integrated capabilities</div>
            <h2 class="section-title">Every system<br>in the package</h2>
        </div>
        <div class="cap-count">06</div>
    </div>

    <!-- Row 1 of 3 -->
    <div class="cap-grid">

        <div class="cap-card reveal">
            <div class="cap-img">
                <img src="<?= BASE_URL ?>assets/img/custom-residential/4.png" alt="Building integrated solar in-roof BIPV system on high specification home" loading="lazy" />
                <div class="cap-img-overlay"></div>
                <span class="cap-ref">C-01</span>
            </div>
            <div class="cap-body">
                <div class="cap-title">Building integrated solar</div>
                <div class="cap-desc">In-roof solar tiles, solar curtain walling and facade cladding. Generation integrated into the building envelope — no visible mounting system. Coordinated with architect from design stage.</div>
            </div>
        </div>

        <div class="cap-card reveal rd1">
            <div class="cap-img">
                <img src="<?= BASE_URL ?>assets/img/custom-residential/7.png" alt="High capacity battery energy storage system for residential installation" loading="lazy" />
                <div class="cap-img-overlay"></div>
                <span class="cap-ref">C-02</span>
            </div>
            <div class="cap-body">
                <div class="cap-title">Battery energy storage</div>
                <div class="cap-desc">High-capacity storage from 20 kWh to 64 kWh and above. Self-consumption maximisation, time-of-use optimisation, whole-home backup capability and EV charging integration. Installed in the plant room as part of the coordinated layout.</div>
            </div>
        </div>

        <div class="cap-card reveal rd2">
            <div class="cap-img">
                <img src="<?= BASE_URL ?>assets/img/custom-residential/5.png" alt="Plant room design with coordinated building services equipment" loading="lazy" />
                <div class="cap-img-overlay"></div>
                <span class="cap-ref">C-03</span>
            </div>
            <div class="cap-body">
                <div class="cap-title">Plant room design</div>
                <div class="cap-desc">Spatial coordination and technical design of the plant room as a single layout — inverters, battery, heat pump, MVHR, cylinder, buffer tanks and electrical distribution designed together. No conflicting installations, no access problems.</div>
            </div>
        </div>

    </div>

    <!-- Row 2 of 3 -->
    <div class="cap-grid" style="margin-top:2px;">

        <div class="cap-card reveal">
            <div class="cap-img">
                <img src="<?= BASE_URL ?>assets/img/custom-residential/2.png" alt="Heat pump and domestic hot water cylinder in plant room" loading="lazy" />
                <div class="cap-img-overlay"></div>
                <span class="cap-ref">C-04</span>
            </div>
            <div class="cap-body">
                <div class="cap-title">Heating &amp; DHW</div>
                <div class="cap-desc">Ground-source or air-source heat pump with buffer tank, cylinder, immersion integration and MVHR heat recovery. Surplus solar diverted to immersion. Heating and hot water scheduled around generation and tariff via EMS.</div>
            </div>
        </div>

        <div class="cap-card reveal rd1">
            <div class="cap-img">
                <img src="<?= BASE_URL ?>assets/img/custom-residential/8.png" alt="High specification residential air conditioning installation" loading="lazy" />
                <div class="cap-img-overlay"></div>
                <span class="cap-ref">C-05</span>
            </div>
            <div class="cap-body">
                <div class="cap-title">Air conditioning</div>
                <div class="cap-desc">Air-to-air cooling and supplementary heating, electrically integrated with the generation and storage system. Multi-split and VRF systems coordinated with the wider building services design. Load scheduled against battery state and solar forecast.</div>
            </div>
        </div>

        <div class="cap-card reveal rd2">
            <div class="cap-img">
                <img src="<?= BASE_URL ?>assets/img/custom-residential/3.png" alt="Indoor swimming pool with integrated heating and ventilation system" loading="lazy" />
                <div class="cap-img-overlay"></div>
                <span class="cap-ref">C-06</span>
            </div>
            <div class="cap-body">
                <div class="cap-title">Swimming pool systems</div>
                <div class="cap-desc">Heating, ventilation and dehumidification for indoor pools. Heat recovery from pool evaporation. Filtration and chemical dosing load integration into the EMS schedule. Pool heating is one of the largest electrical loads in a high-specification home — scheduling it against solar surplus has a significant impact on system payback.</div>
            </div>
        </div>

    </div>
</section>

<!-- PLANT ROOM SECTION -->
<section class="plant-room reveal">
    <div class="pr-inner">
        <div>
            <div class="pr-label">Plant room design</div>
            <h2 class="pr-title">Everything in one<br><em>coordinated space</em></h2>
            <p class="pr-body">The plant room is the physical heart of a custom residential system. Every piece of equipment — inverter, battery, heat pump, MVHR, cylinder, buffer tank, EV distribution board — is coordinated in a single spatial layout before construction begins. No conflicts. No access problems. No equipment added after the fact.</p>
            <div class="pr-items">
                <div class="pr-item">
                    <div class="pr-item-num">01</div>
                    <div>
                        <div class="pr-item-title">Spatial layout before construction</div>
                        <div class="pr-item-desc">Plant room dimensions, service routes and access requirements agreed with architect and structural engineer at design stage.</div>
                    </div>
                </div>
                <div class="pr-item">
                    <div class="pr-item-num">02</div>
                    <div>
                        <div class="pr-item-title">All services coordinated together</div>
                        <div class="pr-item-desc">Electrical, plumbing, MVHR ductwork and controls wiring designed as a single coordinated installation — not separate trades working sequentially.</div>
                    </div>
                </div>
                <div class="pr-item">
                    <div class="pr-item-num">03</div>
                    <div>
                        <div class="pr-item-title">Centralised EMS control</div>
                        <div class="pr-item-desc">Single energy management system controlling all loads and generation sources. One interface, full visibility, automated optimisation.</div>
                    </div>
                </div>
                <div class="pr-item">
                    <div class="pr-item-num">04</div>
                    <div>
                        <div class="pr-item-title">Full documentation</div>
                        <div class="pr-item-desc">As-built drawings, O&amp;M manuals, commissioning records and monitoring platform configured at handover.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Plant room infographic -->
        <svg width="100%" viewBox="0 0 300 360" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="prgrid" width="14" height="14" patternUnits="userSpaceOnUse">
                    <path d="M 14 0 L 0 0 0 14" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="0.5" />
                </pattern>
            </defs>
            <rect width="300" height="360" fill="url(#prgrid)" />

            <!-- Plant room outline -->
            <rect x="16" y="16" width="268" height="328" rx="4" fill="rgba(10,107,82,0.05)" stroke="#0A6B52" stroke-width="1.5" />
            <text x="150" y="32" text-anchor="middle" font-family="'DM Mono',monospace" font-size="8" fill="rgba(10,107,82,0.5)" letter-spacing="2">PLANT ROOM</text>

            <!-- BESS rack -->
            <rect x="28" y="44" width="72" height="52" rx="2" fill="rgba(10,107,82,0.15)" stroke="#0A6B52" stroke-width="1" />
            <rect x="32" y="50" width="64" height="8" fill="#0A6B52" opacity="0.6" rx="1" />
            <rect x="32" y="62" width="64" height="8" fill="#0A6B52" opacity="0.45" rx="1" />
            <rect x="32" y="74" width="64" height="8" fill="#0A6B52" opacity="0.3" rx="1" />
            <text x="64" y="106" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A" letter-spacing="1">BESS</text>
            <text x="64" y="116" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.25)">64 kWh</text>

            <!-- Inverter + EMS -->
            <rect x="112" y="44" width="72" height="52" rx="2" fill="rgba(10,107,82,0.12)" stroke="#0A6B52" stroke-width="1" />
            <text x="148" y="68" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A" letter-spacing="1">INVERTER</text>
            <text x="148" y="80" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A" letter-spacing="1">+ EMS</text>
            <text x="148" y="106" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.25)">control hub</text>

            <!-- Distribution board -->
            <rect x="196" y="44" width="72" height="52" rx="2" fill="rgba(255,255,255,0.05)" stroke="rgba(255,255,255,0.15)" stroke-width="1" />
            <text x="232" y="68" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.4)" letter-spacing="1">DIST.</text>
            <text x="232" y="80" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.4)" letter-spacing="1">BOARD</text>
            <text x="232" y="106" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.2)">all circuits</text>

            <!-- Flow lines between top row -->
            <line x1="100" y1="70" x2="112" y2="70" stroke="#0D8A6A" stroke-width="1" class="flow-line" />
            <line x1="184" y1="70" x2="196" y2="70" stroke="#0D8A6A" stroke-width="1" class="flow-line" style="animation-delay:0.3s" />

            <!-- GSHP -->
            <rect x="28" y="142" width="100" height="64" rx="2" fill="rgba(200,118,42,0.1)" stroke="rgba(200,118,42,0.35)" stroke-width="1" />
            <text x="78" y="164" text-anchor="middle" font-family="'DM Mono',monospace" font-size="8" fill="rgba(200,118,42,0.7)" letter-spacing="1">GSHP</text>
            <text x="78" y="178" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(200,118,42,0.5)">ground-source</text>
            <text x="78" y="196" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.2)">heat pump</text>

            <!-- Cylinder + buffer -->
            <rect x="140" y="142" width="56" height="64" rx="2" fill="rgba(200,118,42,0.08)" stroke="rgba(200,118,42,0.25)" stroke-width="1" />
            <!-- cylinder shape -->
            <ellipse cx="168" cy="152" rx="18" ry="6" fill="rgba(200,118,42,0.15)" stroke="rgba(200,118,42,0.3)" stroke-width="0.8" />
            <rect x="150" y="152" width="36" height="44" fill="rgba(200,118,42,0.08)" />
            <ellipse cx="168" cy="196" rx="18" ry="6" fill="rgba(200,118,42,0.15)" stroke="rgba(200,118,42,0.3)" stroke-width="0.8" />
            <text x="168" y="215" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(200,118,42,0.5)">DHW CYL</text>

            <!-- MVHR unit -->
            <rect x="208" y="142" width="60" height="40" rx="2" fill="rgba(10,107,82,0.1)" stroke="rgba(10,107,82,0.3)" stroke-width="1" />
            <!-- intake/exhaust arrows -->
            <path d="M 218 152 L 218 162 L 226 162" fill="none" stroke="#0D8A6A" stroke-width="1" stroke-linecap="round" />
            <path d="M 258 162 L 258 162 L 250 162" fill="none" stroke="rgba(255,255,255,0.2)" stroke-width="1" />
            <text x="238" y="175" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.6)" letter-spacing="1">MVHR</text>
            <text x="238" y="188" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.2)">heat recovery</text>

            <!-- Pool heat exchanger -->
            <rect x="208" y="192" width="60" height="28" rx="2" fill="rgba(10,107,82,0.08)" stroke="rgba(10,107,82,0.2)" stroke-width="1" />
            <text x="238" y="204" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.5)" letter-spacing="1">POOL HX</text>
            <text x="238" y="214" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.2)">dehumid.</text>

            <!-- Flow lines mid section -->
            <line x1="128" y1="174" x2="140" y2="174" stroke="rgba(200,118,42,0.4)" stroke-width="0.8" stroke-dasharray="3 3" class="flow-line" style="animation-delay:0.7s" />
            <line x1="196" y1="174" x2="208" y2="162" stroke="rgba(10,107,82,0.3)" stroke-width="0.8" stroke-dasharray="3 3" />

            <!-- EV distribution -->
            <rect x="28" y="226" width="100" height="36" rx="2" fill="rgba(10,107,82,0.08)" stroke="rgba(10,107,82,0.2)" stroke-width="1" />
            <text x="78" y="241" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.5)" letter-spacing="1">EV DISTRIBUTION</text>
            <text x="78" y="253" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.2)">22 kW · solar-first · scheduled</text>

            <!-- Pool pump -->
            <rect x="140" y="226" width="128" height="36" rx="2" fill="rgba(10,107,82,0.06)" stroke="rgba(10,107,82,0.18)" stroke-width="1" />
            <text x="204" y="241" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.45)" letter-spacing="1">POOL PUMP + FILTRATION</text>
            <text x="204" y="253" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.18)">scheduled against generation</text>

            <!-- EMS control lines (dashed) -->
            <line x1="148" y1="96" x2="148" y2="142" stroke="rgba(10,107,82,0.25)" stroke-width="0.8" stroke-dasharray="3 4" />
            <line x1="148" y1="206" x2="148" y2="226" stroke="rgba(10,107,82,0.2)" stroke-width="0.8" stroke-dasharray="3 4" />

            <!-- Legend -->
            <rect x="28" y="282" width="244" height="48" rx="2" fill="rgba(10,107,82,0.06)" stroke="rgba(10,107,82,0.15)" stroke-width="0.8" />
            <line x1="38" y1="296" x2="58" y2="296" stroke="#0D8A6A" stroke-width="1.2" />
            <text x="64" y="299" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.4)">Power</text>
            <line x1="38" y1="316" x2="58" y2="316" stroke="rgba(200,118,42,0.6)" stroke-width="1.2" stroke-dasharray="4 3" />
            <text x="64" y="319" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.4)">Heat / fluid</text>
            <line x1="148" y1="296" x2="168" y2="296" stroke="rgba(10,107,82,0.5)" stroke-width="1" stroke-dasharray="3 4" />
            <text x="174" y="299" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.4)">EMS control</text>
            <text x="148" y="319" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.5)">All systems coordinated</text>
        </svg>
    </div>
</section>

<!-- CASE STUDY -->
<section class="proof reveal">
    <div class="section-label" style="margin-bottom:24px;">Case study</div>
    <div class="cs-card">
        <div class="cs-panel">
            <div class="cs-bg"></div>
            <span class="cs-badge">Custom Residential — High-Specification New Build</span>
             <div class="cap-img">
                <img src="<?= BASE_URL ?>assets/img/custom-residential/custom-residentials-placeholder-case-study.png" style="object-fit:fit" alt="Building integrated solar in-roof BIPV system on high specification home" loading="lazy" />
                <div class="cap-img-overlay"></div>
            </div>
            <div class="cs-metrics-strip">
                <div class="csm"><span class="csm-val">18<em> kWp</em></span><span class="csm-key">Solar reroof</span></div>
                <div class="csm"><span class="csm-val">64<em> kWh</em></span><span class="csm-key">Storage</span></div>
                <div class="csm"><span class="csm-val">6</span><span class="csm-key">Systems integrated</span></div>
                <div class="csm"><span class="csm-val">1</span><span class="csm-key">Control platform</span></div>
            </div>
        </div>
        <div class="cs-body">
            <div class="cs-loc">Surrey · High-Specification New Build — 6-bed</div>
            <h3 class="cs-title">High-specification new build — fully integrated system under coordinated control</h3>
            <p class="cs-summary">18 kWp solar reroof, 64 kWh battery storage, ground-source heat pump, MVHR throughout, swimming pool heating and dehumidification, and 22 kW EV charging — all under coordinated EMS control via a centralised plant room. Every system designed together from RIBA Stage 2. Plant room laid out for all equipment before groundworks began.</p>
            <div class="cs-systems">
                <div class="cs-system">
                    <div class="cs-system-title">Solar reroof</div>
                    <div class="cs-system-spec">18 kWp — all four pitches</div>
                </div>
                <div class="cs-system">
                    <div class="cs-system-title">Battery storage</div>
                    <div class="cs-system-spec">64 kWh — whole-home backup</div>
                </div>
                <div class="cs-system">
                    <div class="cs-system-title">Ground-source HP</div>
                    <div class="cs-system-spec">16 kW — underfloor + DHW</div>
                </div>
                <div class="cs-system">
                    <div class="cs-system-title">MVHR</div>
                    <div class="cs-system-spec">Whole-house — 89% recovery</div>
                </div>
                <div class="cs-system">
                    <div class="cs-system-title">Pool systems</div>
                    <div class="cs-system-spec">Heat, ventilation, dehumid.</div>
                </div>
                <div class="cs-system">
                    <div class="cs-system-title">EV charging</div>
                    <div class="cs-system-spec">22 kW — solar-first scheduled</div>
                </div>
            </div>
            <a href="<?= BASE_URL ?>case-studies/high-spec-new-build-surrey" class="cs-link">Read full case study →</a>
        </div>
    </div>
</section>

<!-- CTA BAND -->
<section class="cta-band reveal">
    <div>
        <h2 class="cta-band-title">Book a<br><em>consultation</em></h2>
        <p class="cta-band-sub">Custom residential projects are most effectively delivered when we are involved from design stage. If you have a new build or major renovation at planning or pre-planning, talk to us now — early involvement costs nothing and shapes everything.</p>
    </div>
    <div class="cta-group">
        <a href="/contact" class="btn-primary" style="white-space:nowrap;">Book a consultation →</a>
        <a href="/residential" class="btn-secondary" style="white-space:nowrap;">← Residential systems</a>
    </div>
</section>



<script>
    const io = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('visible');
                io.unobserve(e.target);
            }
        });
    }, {
        threshold: 0.08,
        rootMargin: '0px 0px -30px 0px'
    });
    document.querySelectorAll('.reveal').forEach(r => io.observe(r));
</script>

<?php
$content = ob_get_clean();
require __DIR__ . '/layouts/main.php';
?>