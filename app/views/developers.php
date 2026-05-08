<?php
$pageTitle = 'Developers & Housebuilders - Fort Energy';
$pageCss = 'Developers';
ob_start();
?>


<!-- BREADCRUMB -->
<div class="breadcrumb">
    <a href="/" class="bc-item">Home</a>
    <span class="bc-sep">/</span>
    <span class="bc-current">Developers &amp; Housebuilders</span>
</div>

<!-- HERO -->
<section class="hero">
    <div class="hero-left">
        <div class="hero-eyebrow">Sector 02 — Developers &amp; Housebuilders</div>
        <h1 class="hero-h1">Energy strategy<br>for <em>developments</em></h1>
        <p class="hero-sub">Integrated energy system design for residential and mixed-use developments facing grid constraints, planning requirements and increasing electrical demand. Get involved at feasibility — not after planning consent.</p>
        <div class="hero-ctas">
            <a href="/contact" class="btn-primary">Discuss your project →</a>
            <a href="/contact" class="btn-secondary">Book a technical call</a>
        </div>
    </div>

    <!-- Hero infographic: development site energy diagram -->
    <div class="hero-diagram">
        <svg width="340" height="420" viewBox="0 0 340 420" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="dgrid" width="20" height="20" patternUnits="userSpaceOnUse">
                    <path d="M 20 0 L 0 0 0 20" fill="none" stroke="rgba(255,255,255,0.04)" stroke-width="0.5" />
                </pattern>
                <radialGradient id="dglow" cx="50%" cy="40%" r="50%">
                    <stop offset="0%" stop-color="#0A6B52" stop-opacity="0.2" />
                    <stop offset="100%" stop-color="#0A6B52" stop-opacity="0" />
                </radialGradient>
            </defs>
            <rect width="340" height="420" fill="url(#dgrid)" />
            <circle cx="170" cy="170" r="150" fill="url(#dglow)" />

            <!-- DNO / grid connection (top) -->
            <rect x="120" y="12" width="100" height="36" rx="2" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.15)" stroke-width="1" />
            <text x="170" y="27" text-anchor="middle" font-family="'DM Mono',monospace" font-size="8" fill="rgba(255,255,255,0.4)" letter-spacing="1">DNO CONNECTION</text>
            <text x="170" y="40" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.2)">G99 / G100 managed</text>

            <!-- Grid line down to site substation -->
            <line x1="170" y1="48" x2="170" y2="86" stroke="rgba(255,255,255,0.15)" stroke-width="1.2" class="flow-line" />

            <!-- Site substation / energy centre -->
            <rect x="110" y="88" width="120" height="48" rx="2" fill="rgba(10,107,82,0.15)" stroke="#0A6B52" stroke-width="1.5" />
            <text x="170" y="106" text-anchor="middle" font-family="'DM Mono',monospace" font-size="8" fill="#0D8A6A" letter-spacing="1">ENERGY CENTRE</text>
            <text x="170" y="120" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.3)">plant room · BESS · controls</text>

            <!-- Fan out to three building types -->
            <!-- Left: residential -->
            <path d="M 130 136 L 68 200" stroke="#0D8A6A" stroke-width="1.2" class="flow-line" style="animation-delay:0.2s" />
            <!-- Centre: mixed use -->
            <line x1="170" y1="136" x2="170" y2="200" stroke="#0D8A6A" stroke-width="1.2" class="flow-line" style="animation-delay:0.5s" />
            <!-- Right: HMO / apartment -->
            <path d="M 210 136 L 272 200" stroke="#0D8A6A" stroke-width="1.2" class="flow-line" style="animation-delay:0.8s" />

            <!-- House (left) -->
            <g transform="translate(28,200)">
                <rect x="6" y="20" width="48" height="38" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.12)" stroke-width="1" />
                <polygon points="0,20 30,2 60,20" fill="rgba(10,107,82,0.08)" stroke="rgba(255,255,255,0.12)" stroke-width="1" />
                <!-- in-roof solar indication -->
                <rect x="8" y="8" width="44" height="10" fill="rgba(10,107,82,0.3)" stroke="#0A6B52" stroke-width="0.8" />
                <rect x="16" y="30" width="12" height="14" fill="rgba(255,255,255,0.06)" stroke="rgba(255,255,255,0.1)" stroke-width="0.5" />
                <rect x="32" y="30" width="12" height="14" fill="rgba(255,255,255,0.06)" stroke="rgba(255,255,255,0.1)" stroke-width="0.5" />
                <text x="30" y="252" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.3)" transform="translate(0,-195)">RESIDENTIAL</text>
            </g>

            <!-- Mixed-use block (centre) -->
            <g transform="translate(130,200)">
                <rect x="4" y="0" width="72" height="72" fill="rgba(255,255,255,0.03)" stroke="rgba(255,255,255,0.12)" stroke-width="1" />
                <!-- floor lines -->
                <line x1="4" y1="18" x2="76" y2="18" stroke="rgba(255,255,255,0.06)" stroke-width="0.5" />
                <line x1="4" y1="36" x2="76" y2="36" stroke="rgba(255,255,255,0.06)" stroke-width="0.5" />
                <line x1="4" y1="54" x2="76" y2="54" stroke="rgba(255,255,255,0.06)" stroke-width="0.5" />
                <!-- windows -->
                <rect x="10" y="6" width="10" height="8" fill="rgba(10,107,82,0.2)" stroke="#0A6B52" stroke-width="0.5" />
                <rect x="26" y="6" width="10" height="8" fill="rgba(10,107,82,0.2)" stroke="#0A6B52" stroke-width="0.5" />
                <rect x="42" y="6" width="10" height="8" fill="rgba(10,107,82,0.2)" stroke="#0A6B52" stroke-width="0.5" />
                <rect x="58" y="6" width="10" height="8" fill="rgba(10,107,82,0.2)" stroke="#0A6B52" stroke-width="0.5" />
                <!-- roof solar -->
                <rect x="6" y="-8" width="68" height="7" fill="rgba(10,107,82,0.4)" stroke="#0A6B52" stroke-width="0.8" />
                <text x="40" y="84" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.3)">MIXED-USE</text>
            </g>

            <!-- Apartment block (right) -->
            <g transform="translate(246,200)">
                <rect x="2" y="10" width="52" height="62" fill="rgba(255,255,255,0.03)" stroke="rgba(255,255,255,0.12)" stroke-width="1" />
                <line x1="2" y1="28" x2="54" y2="28" stroke="rgba(255,255,255,0.06)" stroke-width="0.5" />
                <line x1="2" y1="46" x2="54" y2="46" stroke="rgba(255,255,255,0.06)" stroke-width="0.5" />
                <rect x="8" y="15" width="8" height="8" fill="rgba(10,107,82,0.2)" stroke="#0A6B52" stroke-width="0.5" />
                <rect x="22" y="15" width="8" height="8" fill="rgba(10,107,82,0.2)" stroke="#0A6B52" stroke-width="0.5" />
                <rect x="36" y="15" width="8" height="8" fill="rgba(10,107,82,0.2)" stroke="#0A6B52" stroke-width="0.5" />
                <rect x="18" y="54" width="20" height="18" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.08)" stroke-width="0.5" />
                <text x="28" y="84" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.3)">HMO / APTS</text>
            </g>

            <!-- EV charging points strip -->
            <g transform="translate(40,308)">
                <rect x="0" y="0" width="260" height="28" fill="rgba(10,107,82,0.06)" stroke="rgba(10,107,82,0.2)" stroke-width="0.8" rx="2" />
                <!-- EV charger icons -->
                <g fill="none" stroke="#0D8A6A" stroke-width="0.8" opacity="0.7">
                    <rect x="8" y="5" width="12" height="18" rx="1" /><text x="14" y="17" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A">⚡</text>
                    <rect x="30" y="5" width="12" height="18" rx="1" /><text x="36" y="17" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A">⚡</text>
                    <rect x="52" y="5" width="12" height="18" rx="1" /><text x="58" y="17" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A">⚡</text>
                </g>
                <text x="80" y="10" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.3)" letter-spacing="1">EV CHARGING INFRASTRUCTURE</text>
                <text x="80" y="21" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.2)">capacity-managed · scheme-wide</text>
            </g>

            <!-- DHW / heat schematic strip -->
            <g transform="translate(40,348)">
                <rect x="0" y="0" width="260" height="28" fill="rgba(200,118,42,0.06)" stroke="rgba(200,118,42,0.2)" stroke-width="0.8" rx="2" />
                <text x="12" y="11" font-family="'DM Mono',monospace" font-size="7" fill="rgba(200,118,42,0.6)" letter-spacing="1">HEATING &amp; DHW — SCHEME-WIDE DESIGN</text>
                <text x="12" y="22" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.2)">heat networks · ASHP · plant room integration</text>
            </g>

            <!-- Site boundary -->
            <rect x="10" y="80" width="320" height="310" fill="none" stroke="rgba(10,107,82,0.1)" stroke-width="1" stroke-dasharray="6 10" rx="4" />
            <text x="18" y="92" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.3)" letter-spacing="2">DEVELOPMENT SITE</text>

            <!-- Peak shaving annotation -->
            <rect x="10" y="398" width="320" height="20" rx="2" fill="rgba(10,107,82,0.08)" stroke="rgba(10,107,82,0.2)" stroke-width="0.8" />
            <text x="170" y="411" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.6)" letter-spacing="1">PEAK SHAVING · CAPACITY-CONSTRAINED DESIGN ACTIVE</text>
        </svg>
    </div>
</section>

<!-- CONSTRAINTS: 4 equal cards -->
<section class="constraints reveal">
    <div class="section-header-row">
        <div>
            <div class="section-label">Development realities</div>
            <h2 class="section-title">Development constraints<br>are <em>changing</em></h2>
        </div>
        <div class="section-count">04</div>
    </div>

    <div class="constraints-grid">

        <div class="constraint-card">
            <span class="cc-num">01</span>
            <div class="cc-icon">
                <svg viewBox="0 0 18 18" fill="none" stroke="currentColor" stroke-width="1.4">
                    <circle cx="9" cy="9" r="7" />
                    <path d="M9 5v4l3 2" />
                    <path d="M5 14l1.5-1.5M13 14l-1.5-1.5" />
                </svg>
            </div>
            <div class="cc-title">Grid capacity</div>
            <div class="cc-sub">DNO capacity constraints are limiting consented site sizes and adding cost to new connections. Sites that model their energy demand early can design around the grid — not be blocked by it.</div>
            <span class="cc-tag">Grid constraint</span>
        </div>

        <div class="constraint-card">
            <span class="cc-num">02</span>
            <div class="cc-icon">
                <svg viewBox="0 0 18 18" fill="none" stroke="currentColor" stroke-width="1.4">
                    <path d="M9 2l2.5 5H16l-4 3.5 1.5 5.5L9 13l-4.5 3 1.5-5.5L2 7h4.5L9 2z" />
                </svg>
            </div>
            <div class="cc-title">Infrastructure cost</div>
            <div class="cc-sub">Grid reinforcement, substation upgrades and off-site works are rising rapidly in both cost and programme. On-site generation and storage can eliminate or substantially reduce these requirements.</div>
            <span class="cc-tag">Rising rapidly</span>
        </div>

        <div class="constraint-card">
            <span class="cc-num">03</span>
            <div class="cc-icon">
                <svg viewBox="0 0 18 18" fill="none" stroke="currentColor" stroke-width="1.4">
                    <path d="M3 6h12M3 9h12M3 12h7" />
                    <rect x="2" y="3" width="14" height="12" rx="1" />
                </svg>
            </div>
            <div class="cc-title">Electrification</div>
            <div class="cc-sub">EV charging, heat pumps and induction cooking are increasing peak electrical demand per dwelling significantly. Energy strategy needs to account for the full electrified load — not just lighting and sockets.</div>
            <span class="cc-tag">Heat &amp; hot water</span>
        </div>

        <div class="constraint-card">
            <span class="cc-num">04</span>
            <div class="cc-icon">
                <svg viewBox="0 0 18 18" fill="none" stroke="currentColor" stroke-width="1.4">
                    <path d="M4 14V8l5-5 5 5v6" />
                    <rect x="6" y="10" width="6" height="4" />
                    <path d="M9 10v4" />
                </svg>
            </div>
            <div class="cc-title">Planning</div>
            <div class="cc-sub">Low-carbon energy strategies, solar-ready design and renewable targets are increasingly embedded in planning conditions. Early engagement means compliance becomes a design asset rather than a retrofit obligation.</div>
            <span class="cc-tag">Low-carbon focus</span>
        </div>

    </div>
</section>

<!-- SERVICES: checklist left, images right -->
<section class="services">
    <div class="section-header-row reveal">
        <div>
            <div class="section-label">Integrated design &amp; delivery</div>
            <h2 class="section-title">Seven service<br>capabilities</h2>
        </div>
        <div class="section-count">07</div>
    </div>

    <div class="services-inner">
        <!-- Checklist -->
        <div class="checklist reveal">
            <div class="check-item">
                <div class="check-box"><svg viewBox="0 0 10 10" fill="none">
                        <path d="M2 5l2.5 2.5L8 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></div>
                <div class="check-content">
                    <div class="check-title">Energy strategy &amp; modelling</div>
                    <div class="check-sub">Whole-site energy demand modelling at feasibility stage. Load forecasting across all dwelling types, communal areas and EV infrastructure. Strategy report suitable for planning submission.</div>
                </div>
            </div>
            <div class="check-item">
                <div class="check-box"><svg viewBox="0 0 10 10" fill="none">
                        <path d="M2 5l2.5 2.5L8 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></div>
                <div class="check-content">
                    <div class="check-title">HMO &amp; community renewable strategy</div>
                    <div class="check-sub">Energy system design for houses in multiple occupation and community-scale sites. Shared generation assets, split metering strategies and virtual net metering where applicable.</div>
                </div>
            </div>
            <div class="check-item">
                <div class="check-box"><svg viewBox="0 0 10 10" fill="none">
                        <path d="M2 5l2.5 2.5L8 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></div>
                <div class="check-content">
                    <div class="check-title">Plant room design</div>
                    <div class="check-sub">Spatial coordination and technical design of centralised plant rooms including substation, battery storage, inverter arrays, EV infrastructure and heat generation equipment.</div>
                </div>
            </div>
            <div class="check-item">
                <div class="check-box"><svg viewBox="0 0 10 10" fill="none">
                        <path d="M2 5l2.5 2.5L8 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></div>
                <div class="check-content">
                    <div class="check-title">Heating &amp; DHW scheme-wide design</div>
                    <div class="check-sub">Coordinated heating and domestic hot water strategy across the full development. Heat network design, ASHP integration, cylinder sizing and solar thermal or surplus PV diversion to hot water.</div>
                </div>
            </div>
            <div class="check-item">
                <div class="check-box"><svg viewBox="0 0 10 10" fill="none">
                        <path d="M2 5l2.5 2.5L8 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></div>
                <div class="check-content">
                    <div class="check-title">Peak shaving &amp; capacity-constrained design</div>
                    <div class="check-sub">Energy system design that stays within agreed supply capacity. Battery storage, demand management and load prioritisation used to avoid grid reinforcement cost and programme delay.</div>
                </div>
            </div>
            <div class="check-item">
                <div class="check-box"><svg viewBox="0 0 10 10" fill="none">
                        <path d="M2 5l2.5 2.5L8 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></div>
                <div class="check-content">
                    <div class="check-title">G99 / G100 application management</div>
                    <div class="check-sub">End-to-end management of DNO grid applications for embedded generation. Protection relay settings, export limitation, technical submissions and liaison with network operators throughout.</div>
                </div>
            </div>
            <div class="check-item">
                <div class="check-box"><svg viewBox="0 0 10 10" fill="none">
                        <path d="M2 5l2.5 2.5L8 3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg></div>
                <div class="check-content">
                    <div class="check-title">Solar &amp; renewables design and installation</div>
                    <div class="check-sub">In-roof, roof-mounted and BIPV solar across all development typologies. System design, MCS certification, inverter and storage specification, and full installation management.</div>
                </div>
            </div>
        </div>

        <!-- Image stack: real project photography placeholders -->
        <div class="services-image-stack reveal rd1">
            <div class="svc-img-card">
                <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?w=700&q=80&fit=crop" alt="Residential development rooftop solar installation" loading="lazy" />
                <div class="svc-img-overlay"></div>
                <div class="svc-img-caption">
                    <div class="svc-img-caption-label">Energy strategy &amp; plant room</div>
                    <div class="svc-img-caption-title">Whole-site energy modelled at feasibility</div>
                </div>
            </div>
            <div class="svc-img-card">
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=700&q=80&fit=crop" alt="Development plant room with battery storage and electrical infrastructure" loading="lazy" />
                <div class="svc-img-overlay"></div>
                <div class="svc-img-caption">
                    <div class="svc-img-caption-label">Plant room &amp; BESS</div>
                    <div class="svc-img-caption-title">Centralised storage within agreed grid capacity</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TRAINING CALLOUT -->
<div class="training">
    <div class="training-inner reveal">
        <div class="training-left">
            <div class="training-badge">Specialist offering</div>
            <h2 class="training-title">On-site training for<br>in-roof &amp; <em>BIPV installation</em></h2>
            <p class="training-body">Project-team training for developers and contractors bringing in-roof solar and building integrated solar work in-house. Most development teams do not currently have in-house BIPV or in-roof installation capability. This offering addresses that directly — positioning Fort Energy as a capability partner, not just a contractor.</p>
            <div class="training-covers">
                <div class="training-cover-item">
                    <div class="training-cover-dot"></div>In-roof solar installation methods and sequencing
                </div>
                <div class="training-cover-item">
                    <div class="training-cover-dot"></div>Weathertightness detailing and warranty compliance
                </div>
                <div class="training-cover-item">
                    <div class="training-cover-dot"></div>BIPV product types and specification requirements
                </div>
                <div class="training-cover-item">
                    <div class="training-cover-dot"></div>Commissioning procedure and DNO sign-off
                </div>
                <div class="training-cover-item">
                    <div class="training-cover-dot"></div>Handover documentation and O&amp;M pack
                </div>
            </div>
            <a href="/contact" class="training-cta">Enquire about training →</a>
        </div>

        <!-- Training diagram: capability transfer infographic -->
        <div class="training-right">
            <svg width="280" height="300" viewBox="0 0 280 300" fill="none" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="tgrid" width="16" height="16" patternUnits="userSpaceOnUse">
                        <path d="M 16 0 L 0 0 0 16" fill="none" stroke="rgba(255,255,255,0.04)" stroke-width="0.5" />
                    </pattern>
                </defs>
                <rect width="280" height="300" fill="url(#tgrid)" />

                <!-- Fort Energy (knowledge source) -->
                <rect x="80" y="12" width="120" height="44" rx="2" fill="rgba(10,107,82,0.15)" stroke="#0A6B52" stroke-width="1.5" />
                <text x="140" y="30" text-anchor="middle" font-family="'DM Mono',monospace" font-size="8" fill="#0D8A6A" letter-spacing="1">FORT ENERGY</text>
                <text x="140" y="44" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.35)">specialist knowledge</text>

                <!-- Transfer arrows -->
                <line x1="140" y1="56" x2="140" y2="88" stroke="rgba(10,107,82,0.6)" stroke-width="1.5" class="flow-line" />

                <!-- Training hub -->
                <circle cx="140" cy="112" r="28" fill="rgba(10,107,82,0.12)" stroke="#0A6B52" stroke-width="1.2" />
                <circle cx="140" cy="112" r="20" fill="rgba(10,107,82,0.1)" />
                <text x="140" y="108" text-anchor="middle" font-family="'DM Mono',monospace" font-size="8" fill="#0D8A6A" letter-spacing="1">ON-SITE</text>
                <text x="140" y="120" text-anchor="middle" font-family="'DM Mono',monospace" font-size="8" fill="#0D8A6A" letter-spacing="1">TRAINING</text>

                <!-- Outputs fan out -->
                <path d="M 120 136 L 60 182" stroke="#0D8A6A" stroke-width="1" class="flow-line" style="animation-delay:0.3s" />
                <line x1="140" y1="140" x2="140" y2="182" stroke="#0D8A6A" stroke-width="1" class="flow-line" style="animation-delay:0.6s" />
                <path d="M 160 136 L 220 182" stroke="#0D8A6A" stroke-width="1" class="flow-line" style="animation-delay:0.9s" />

                <!-- Output 1 -->
                <rect x="16" y="184" width="88" height="40" rx="2" fill="rgba(10,107,82,0.1)" stroke="rgba(10,107,82,0.3)" stroke-width="1" />
                <text x="60" y="200" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.5)" letter-spacing="1">INSTALLATION</text>
                <text x="60" y="213" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.3)">in-house capability</text>

                <!-- Output 2 -->
                <rect x="96" y="184" width="88" height="40" rx="2" fill="rgba(10,107,82,0.1)" stroke="rgba(10,107,82,0.3)" stroke-width="1" />
                <text x="140" y="200" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.5)" letter-spacing="1">COMPLIANCE</text>
                <text x="140" y="213" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.3)">MCS · weathertight</text>

                <!-- Output 3 -->
                <rect x="176" y="184" width="88" height="40" rx="2" fill="rgba(10,107,82,0.1)" stroke="rgba(10,107,82,0.3)" stroke-width="1" />
                <text x="220" y="200" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.5)" letter-spacing="1">HANDOVER</text>
                <text x="220" y="213" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.3)">docs · O&amp;M · DNO</text>

                <!-- Result -->
                <rect x="60" y="244" width="160" height="40" rx="2" fill="rgba(200,118,42,0.08)" stroke="rgba(200,118,42,0.3)" stroke-width="1" />
                <line x1="60" y1="236" x2="80" y2="244" stroke="rgba(200,118,42,0.3)" stroke-width="0.8" />
                <line x1="140" y1="224" x2="140" y2="244" stroke="rgba(200,118,42,0.3)" stroke-width="0.8" />
                <line x1="220" y1="236" x2="200" y2="244" stroke="rgba(200,118,42,0.3)" stroke-width="0.8" />
                <text x="140" y="260" text-anchor="middle" font-family="'DM Mono',monospace" font-size="8" fill="rgba(200,118,42,0.7)" letter-spacing="1">DEVELOPER</text>
                <text x="140" y="274" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.3)">in-house BIPV capability</text>
            </svg>
        </div>
    </div>
</div>

<!-- PROOF: Case study + Lifecycle -->
<section class="proof">
    <div class="reveal">
        <div class="section-label" style="margin-bottom:24px;">Case study</div>
        <div class="cs-card">
            <div class="cs-panel">
                <div class="cs-bg"></div>
                <span class="cs-badge">Developers — Student Accommodation</span>
                <!-- Mini site diagram inline -->
                <svg width="100%" viewBox="0 0 320 90" fill="none" style="position:relative;z-index:1;margin-top:16px;">
                    <defs>
                        <marker id="darr" viewBox="0 0 8 8" refX="6" refY="4" markerWidth="5" markerHeight="5" orient="auto">
                            <path d="M1 1l5 3-5 3" fill="none" stroke="#0D8A6A" stroke-width="1.2" stroke-linecap="round" />
                        </marker>
                    </defs>
                    <!-- Grid (constrained) -->
                    <rect x="4" y="25" width="60" height="36" rx="2" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.15)" stroke-width="1" />
                    <text x="34" y="39" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.35)">GRID</text>
                    <text x="34" y="51" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(200,118,42,0.6)">constrained</text>
                    <!-- Solar -->
                    <rect x="84" y="4" width="60" height="32" rx="2" fill="rgba(10,107,82,0.15)" stroke="#0A6B52" stroke-width="1" />
                    <text x="114" y="17" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A">SOLAR</text>
                    <text x="114" y="28" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.3)">360 kWp</text>
                    <!-- BESS -->
                    <rect x="84" y="52" width="60" height="32" rx="2" fill="rgba(10,107,82,0.15)" stroke="#0A6B52" stroke-width="1" />
                    <text x="114" y="65" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A">BESS</text>
                    <text x="114" y="76" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.3)">200 kWh</text>
                    <!-- Hub -->
                    <rect x="164" y="28" width="60" height="30" rx="2" fill="rgba(10,107,82,0.12)" stroke="#0A6B52" stroke-width="1" />
                    <text x="194" y="40" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A">ENERGY</text>
                    <text x="194" y="51" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.3)">centre</text>
                    <!-- Building -->
                    <rect x="244" y="20" width="68" height="46" rx="2" fill="rgba(255,255,255,0.03)" stroke="rgba(255,255,255,0.12)" stroke-width="1" />
                    <text x="278" y="40" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.35)">STUDENT</text>
                    <text x="278" y="52" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.35)">BLOCK</text>
                    <!-- Infra upgrade avoided label -->
                    <line x1="4" y1="43" x2="84" y2="68" stroke="rgba(200,118,42,0.3)" stroke-width="0.8" stroke-dasharray="3 3" />
                    <!-- Lines -->
                    <line x1="64" y1="43" x2="164" y2="43" stroke="rgba(255,255,255,0.12)" stroke-width="0.8" stroke-dasharray="3 4" />
                    <line x1="144" y1="20" x2="164" y2="38" stroke="#0D8A6A" stroke-width="1" stroke-dasharray="4 3" class="flow-line" />
                    <line x1="144" y1="68" x2="164" y2="52" stroke="#0D8A6A" stroke-width="1" stroke-dasharray="4 3" class="flow-line" style="animation-delay:0.4s" />
                    <line x1="224" y1="43" x2="244" y2="43" stroke="#0D8A6A" stroke-width="1" stroke-dasharray="4 3" class="flow-line" style="animation-delay:0.8s" />
                </svg>
                <div class="cs-metrics-strip">
                    <div class="csm"><span class="csm-val">360<em> kWp</em></span><span class="csm-key">Solar array</span></div>
                    <div class="csm"><span class="csm-val">200<em> kWh</em></span><span class="csm-key">Battery storage</span></div>
                    <div class="csm"><span class="csm-val">£1.2<em>M</em></span><span class="csm-key">Infra upgrade avoided</span></div>
                </div>
            </div>
            <div class="cs-body">
                <div class="cs-loc">North West England · Student Accommodation</div>
                <h3 class="cs-title">Capacity-constrained site — solar and storage avoided grid infrastructure upgrade</h3>
                <p class="cs-summary">360 kWp in-roof solar array with 200 kWh BESS across a 180-bed student accommodation block. Grid connection capacity was insufficient for full electrification without a substation upgrade costing £1.2M and adding 14 months to the programme. Peak shaving and demand management strategy designed to stay within the existing agreed supply capacity. Infrastructure upgrade avoided entirely. Planning authority satisfied renewable energy condition at detailed stage.</p>
                <a href="/case-studies" class="cs-link">Read full case study →</a>
            </div>
        </div>
    </div>

    <!-- Project lifecycle -->
    <div class="reveal rd1">
        <div class="section-label" style="margin-bottom:24px;">Project lifecycle</div>
        <div class="lifecycle-card">
            <div class="lifecycle-label">How development projects are structured</div>
            <h3 class="lifecycle-title">From feasibility<br>to <em>optimisation</em></h3>
            <div class="lifecycle-steps">
                <div class="lc-step">
                    <div class="lc-num-wrap">
                        <div class="lc-num">1</div>
                        <div class="lc-connector"></div>
                    </div>
                    <div class="lc-content">
                        <div class="lc-title">Feasibility</div>
                        <div class="lc-desc">Energy demand modelling, grid capacity review, renewable strategy and planning alignment. Output: strategy report and indicative cost plan.</div>
                    </div>
                </div>
                <div class="lc-step">
                    <div class="lc-num-wrap">
                        <div class="lc-num">2</div>
                        <div class="lc-connector"></div>
                    </div>
                    <div class="lc-content">
                        <div class="lc-title">Coordination</div>
                        <div class="lc-desc">Technical design developed alongside architect, structural and M&amp;E. Plant room spatial coordination, roof loading, penetrations and service routes agreed.</div>
                    </div>
                </div>
                <div class="lc-step">
                    <div class="lc-num-wrap">
                        <div class="lc-num">3</div>
                        <div class="lc-connector"></div>
                    </div>
                    <div class="lc-content">
                        <div class="lc-title">Integration</div>
                        <div class="lc-desc">DNO application submitted and managed. Installation programme agreed with main contractor. In-roof and BIPV elements coordinated with building envelope programme.</div>
                    </div>
                </div>
                <div class="lc-step">
                    <div class="lc-num-wrap">
                        <div class="lc-num">4</div>
                        <div class="lc-connector"></div>
                    </div>
                    <div class="lc-content">
                        <div class="lc-title">Commissioning</div>
                        <div class="lc-desc">System commissioning, DNO sign-off, EMS configuration and handover to building manager. Full O&amp;M documentation and MCS certification.</div>
                    </div>
                </div>
                <div class="lc-step">
                    <div class="lc-num-wrap">
                        <div class="lc-num">5</div>
                    </div>
                    <div class="lc-content">
                        <div class="lc-title">Optimisation</div>
                        <div class="lc-desc">Live monitoring against modelled yield. Battery scheduling review, demand response enrolment and generation performance reporting to site manager.</div>
                    </div>
                </div>
            </div>
            <a href="/contact" class="lifecycle-cta">Get involved early →</a>
        </div>
    </div>
</section>

<!-- CTA BAND -->
<section class="cta-band reveal">
    <div>
        <h2 class="cta-band-title">Get involved<br>at <em>feasibility</em></h2>
        <p class="cta-band-sub">The cost of late energy design is programme delay, planning conditions and infrastructure spend that could have been avoided. The earlier we are involved, the more options are available — and the lower the overall project cost.</p>
    </div>
    <div class="cta-group">
        <a href="/contact" class="btn-primary-dark">Discuss your project →</a>
        <a href="/contact" class="btn-outline-dark">Book a technical call</a>
    </div>
</section>



<script>
    const burger = document.getElementById('burger');
    const navLinks = document.getElementById('navLinks');
    burger.addEventListener('click', () => navLinks.classList.toggle('open'));
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