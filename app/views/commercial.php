<?php
$pageTitle = 'Commercial & Industrial - Fort Energy';
$pageCss = 'commercial';
$activePage   = 'commercial';
$metaDesc     = 'PLACEHOLDER — SEO to supply';
$canonicalUrl = 'https://fortenergy.co.uk/commercial/';
$schemaJson   = json_encode([
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',                    'item' => 'https://fortenergy.co.uk'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Commercial & Industrial',  'item' => 'https://fortenergy.co.uk/commercial'],
    ],
]);

ob_start();
?>

<!-- HERO -->
<section class="hero">
    <div class="hero-left">
        <div class="hero-eyebrow">Sector 01 — Commercial &amp; Industrial</div>
        <h1 class="hero-h1">Commercial &amp; industrial<br>energy <em>systems</em></h1>
        <p class="hero-sub">Engineered solutions to reduce energy costs, manage peak demand and improve operational resilience. Designed around real-world site constraints — not ideal conditions.</p>
        <div class="hero-ctas">
            <a href="<?= BASE_URL ?>contact" class="btn-primary">Request a feasibility review →</a>
            <a href="<?= BASE_URL ?>contact" class="btn-secondary">Book a technical call</a>
        </div>
    </div>

    <!-- Infographic: Commercial site energy diagram -->
    <div class="hero-diagram">
        <svg width="340" height="400" viewBox="0 0 340 400" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="hgrid" width="20" height="20" patternUnits="userSpaceOnUse">
                    <path d="M 20 0 L 0 0 0 20" fill="none" stroke="rgba(255,255,255,0.04)" stroke-width="0.5" />
                </pattern>
                <radialGradient id="hglow" cx="50%" cy="30%" r="50%">
                    <stop offset="0%" stop-color="#0A6B52" stop-opacity="0.25" />
                    <stop offset="100%" stop-color="#0A6B52" stop-opacity="0" />
                </radialGradient>
            </defs>
            <rect width="340" height="400" fill="url(#hgrid)" />
            <circle cx="170" cy="120" r="130" fill="url(#hglow)" />

            <!-- Sun -->
            <circle cx="170" cy="38" r="20" fill="#C8762A" opacity="0.85" />
            <circle cx="170" cy="38" r="28" fill="none" stroke="#C8762A" stroke-width="0.8" opacity="0.25" />
            <g stroke="#C8762A" stroke-width="1.2" opacity="0.4">
                <line x1="170" y1="8" x2="170" y2="14" />
                <line x1="170" y1="62" x2="170" y2="68" />
                <line x1="140" y1="38" x2="134" y2="38" />
                <line x1="200" y1="38" x2="206" y2="38" />
                <line x1="149" y1="17" x2="145" y2="13" />
                <line x1="191" y1="17" x2="195" y2="13" />
                <line x1="149" y1="59" x2="145" y2="63" />
                <line x1="191" y1="59" x2="195" y2="63" />
            </g>
            <text x="170" y="42" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#C8762A" letter-spacing="1">☀</text>

            <!-- Solar panels on roof (wider, commercial scale) -->
            <g transform="translate(30, 78)">
                <!-- Roof surface -->
                <rect x="0" y="0" width="280" height="6" fill="rgba(255,255,255,0.06)" rx="1" />
                <!-- Panel row 1 -->
                <rect x="2" y="1" width="84" height="4" fill="#0A6B52" opacity="0.9" rx="0.5" />
                <rect x="90" y="1" width="84" height="4" fill="#0A6B52" opacity="0.9" rx="0.5" />
                <rect x="178" y="1" width="84" height="4" fill="#0A6B52" opacity="0.9" rx="0.5" />
                <!-- cell lines -->
                <line x1="44" y1="1" x2="44" y2="5" stroke="rgba(255,255,255,0.2)" stroke-width="0.5" />
                <line x1="132" y1="1" x2="132" y2="5" stroke="rgba(255,255,255,0.2)" stroke-width="0.5" />
                <line x1="220" y1="1" x2="220" y2="5" stroke="rgba(255,255,255,0.2)" stroke-width="0.5" />
                <!-- Panel row 2 -->
                <rect x="2" y="9" width="84" height="4" fill="#0A6B52" opacity="0.7" rx="0.5" />
                <rect x="90" y="9" width="84" height="4" fill="#0A6B52" opacity="0.7" rx="0.5" />
                <rect x="178" y="9" width="84" height="4" fill="#0A6B52" opacity="0.7" rx="0.5" />
                <text x="140" y="22" text-anchor="middle" font-family="'DM Mono',monospace" font-size="8" fill="rgba(255,255,255,0.35)" letter-spacing="2">SOLAR ARRAY — 480 kWp</text>
            </g>

            <!-- Solar irradiance arrow -->
            <line x1="170" y1="58" x2="170" y2="76" stroke="#C8762A" stroke-width="1.5" stroke-dasharray="3 3" class="flow-line" />

            <!-- Inverter / distribution hub -->
            <rect x="120" y="114" width="100" height="40" fill="rgba(10,107,82,0.15)" stroke="#0A6B52" stroke-width="1.2" rx="2" />
            <text x="170" y="130" text-anchor="middle" font-family="'DM Mono',monospace" font-size="8" fill="#0D8A6A" letter-spacing="1">INVERTER / BMS</text>
            <text x="170" y="144" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.3)">DC → AC · monitoring</text>

            <!-- Flow lines from hub -->
            <!-- Left → BESS -->
            <path d="M 120 134 L 64 134 L 64 195" stroke="#0D8A6A" stroke-width="1.2" class="flow-line" style="animation-delay:0.2s" />
            <!-- Right → Grid meter -->
            <path d="M 220 134 L 276 134 L 276 195" stroke="#0D8A6A" stroke-width="1.2" class="flow-line" style="animation-delay:0.5s" />
            <!-- Down → Load -->
            <line x1="170" y1="154" x2="170" y2="220" stroke="#0D8A6A" stroke-width="1.2" class="flow-line" style="animation-delay:0.8s" />
            <!-- BESS → load -->
            <path d="M 64 247 L 64 310 L 120 310" stroke="rgba(10,107,82,0.5)" stroke-width="1" stroke-dasharray="3 4" style="animation: flow 2s linear infinite; animation-delay:1s" />

            <!-- BESS -->
            <rect x="30" y="195" width="68" height="52" fill="rgba(10,107,82,0.12)" stroke="#0A6B52" stroke-width="1.2" rx="2" />
            <!-- battery bars -->
            <rect x="38" y="203" width="52" height="7" fill="#0A6B52" opacity="0.7" rx="1" />
            <rect x="38" y="214" width="40" height="7" fill="#0A6B52" opacity="0.5" rx="1" />
            <rect x="38" y="225" width="24" height="7" fill="#0A6B52" opacity="0.3" rx="1" />
            <text x="64" y="258" text-anchor="middle" font-family="'DM Mono',monospace" font-size="8" fill="#0D8A6A" letter-spacing="1">BESS</text>
            <text x="64" y="268" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.25)">320 kWh</text>

            <!-- Grid meter -->
            <rect x="242" y="195" width="68" height="52" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.12)" stroke-width="1.2" rx="2" />
            <!-- meter face -->
            <circle cx="276" cy="218" r="14" fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="1" />
            <path d="M 276 218 L 276 208 M 276 218 L 284 214" stroke="#0D8A6A" stroke-width="1.2" stroke-linecap="round" />
            <text x="276" y="258" text-anchor="middle" font-family="'DM Mono',monospace" font-size="8" fill="rgba(255,255,255,0.35)" letter-spacing="1">GRID</text>
            <text x="276" y="268" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.2)">DNO metered</text>

            <!-- Building (industrial) -->
            <g transform="translate(100, 220)">
                <!-- Main structure -->
                <rect x="10" y="20" width="120" height="70" fill="rgba(255,255,255,0.03)" stroke="rgba(255,255,255,0.12)" stroke-width="1" />
                <!-- Roof ridge -->
                <polyline points="0,20 70,0 140,20" fill="none" stroke="rgba(255,255,255,0.12)" stroke-width="1" />
                <!-- Roof fill -->
                <polygon points="10,20 70,2 130,20" fill="rgba(10,107,82,0.08)" />
                <!-- Windows / openings -->
                <rect x="18" y="34" width="22" height="18" fill="rgba(10,107,82,0.2)" stroke="#0A6B52" stroke-width="0.5" />
                <rect x="48" y="34" width="22" height="18" fill="rgba(10,107,82,0.2)" stroke="#0A6B52" stroke-width="0.5" />
                <rect x="78" y="34" width="22" height="18" fill="rgba(10,107,82,0.2)" stroke="#0A6B52" stroke-width="0.5" />
                <rect x="108" y="34" width="22" height="18" fill="rgba(10,107,82,0.2)" stroke="#0A6B52" stroke-width="0.5" />
                <!-- Door -->
                <rect x="54" y="62" width="32" height="28" fill="rgba(255,255,255,0.05)" stroke="rgba(255,255,255,0.1)" stroke-width="0.5" />
                <!-- Loading bay indicator -->
                <rect x="18" y="62" width="28" height="28" fill="rgba(255,255,255,0.03)" stroke="rgba(255,255,255,0.08)" stroke-width="0.5" />
            </g>
            <text x="170" y="316" text-anchor="middle" font-family="'DM Mono',monospace" font-size="8" fill="rgba(255,255,255,0.3)" letter-spacing="2">INDUSTRIAL LOAD</text>

            <!-- Generator (standby) -->
            <rect x="262" y="300" width="58" height="34" fill="rgba(200,118,42,0.08)" stroke="rgba(200,118,42,0.25)" stroke-width="1" rx="2" />
            <text x="291" y="316" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(200,118,42,0.6)" letter-spacing="1">GEN</text>
            <text x="291" y="326" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.2)">standby</text>
            <line x1="276" y1="300" x2="260" y2="280" stroke="rgba(200,118,42,0.3)" stroke-width="1" stroke-dasharray="3 3" />

            <!-- PLC/BMS label -->
            <rect x="12" y="300" width="58" height="34" fill="rgba(10,107,82,0.08)" stroke="rgba(10,107,82,0.25)" stroke-width="1" rx="2" />
            <text x="41" y="316" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.7)" letter-spacing="1">PLC/BMS</text>
            <text x="41" y="326" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.2)">control</text>

            <!-- kW label on main flow -->
            <text x="178" y="190" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.2)">AC load</text>

            <!-- System boundary -->
            <rect x="8" y="60" width="324" height="300" fill="none" stroke="rgba(10,107,82,0.12)" stroke-width="1" stroke-dasharray="6 10" rx="4" />
            <text x="16" y="74" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.35)" letter-spacing="2">SITE BOUNDARY</text>

            <!-- Peak shaving annotation -->
            <rect x="232" y="350" width="100" height="40" fill="rgba(10,107,82,0.1)" stroke="rgba(10,107,82,0.3)" stroke-width="0.8" rx="2" />
            <text x="282" y="366" text-anchor="middle" font-family="'DM Mono',monospace" font-size="8" fill="#0D8A6A">PEAK SHAVING</text>
            <text x="282" y="378" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.25)">demand mgmt active</text>
            <line x1="276" y1="350" x2="276" y2="334" stroke="rgba(10,107,82,0.3)" stroke-width="1" stroke-dasharray="3 3" />
        </svg>
    </div>
</section>

<!-- CONSTRAINTS -->
<section class="constraints reveal">
    <div class="constraints-left">
        <div class="section-label">Site realities</div>
        <h2 class="section-title">Designed around real-world constraints</h2>
    </div>
    <div class="constraints-right">
        <div class="constraint-row">
            <div class="constraint-num">01</div>
            <div class="constraint-body">
                <div class="constraint-title">High electricity costs &amp; demand charges</div>
                <div class="constraint-sub">Half-hourly metering, TOU tariffs and capacity charges mean energy cost structure is multi-layered. Systems are modelled against actual billing data.</div>
            </div>
            <span class="constraint-tag">COST</span>
        </div>
        <div class="constraint-row">
            <div class="constraint-num">02</div>
            <div class="constraint-body">
                <div class="constraint-title">Grid import &amp; export limitations</div>
                <div class="constraint-sub">DNO capacity constraints, G99/G100 thresholds and agreed supply capacity restrict what can be installed without grid reinforcement.</div>
            </div>
            <span class="constraint-tag">GRID</span>
        </div>
        <div class="constraint-row">
            <div class="constraint-num">03</div>
            <div class="constraint-body">
                <div class="constraint-title">Peak demand cost spikes</div>
                <div class="constraint-sub">Triad charges and demand-side levies can represent 30–40% of a commercial electricity bill. Battery-backed peak shaving targets these directly.</div>
            </div>
            <span class="constraint-tag">DEMAND</span>
        </div>
        <div class="constraint-row">
            <div class="constraint-num">04</div>
            <div class="constraint-body">
                <div class="constraint-title">Standby generator inefficiencies</div>
                <div class="constraint-sub">Diesel standby generation is expensive to run and maintain. Hybrid integration with battery storage reduces running hours and fuel cost.</div>
            </div>
            <span class="constraint-tag">RESILIENCE</span>
        </div>
        <div class="constraint-row">
            <div class="constraint-num">05</div>
            <div class="constraint-body">
                <div class="constraint-title">Power quality issues</div>
                <div class="constraint-sub">Harmonics, reactive power and voltage instability affect equipment reliability and efficiency. Power factor correction and filtering address these at source.</div>
            </div>
            <span class="constraint-tag">POWER QUALITY</span>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section class="services">
    <div class="services-header reveal">
        <div>
            <div class="section-label">Integrated energy systems</div>
            <h2 class="section-title" style="font-family:var(--display);font-size:clamp(26px,2.5vw,36px);font-weight:700;color:var(--ink);line-height:1.1;">Six core services</h2>
        </div>
        <div class="services-count">06</div>
    </div>

    <div class="services-grid">

        <!-- 1: Solar PV -->
        <div class="service-card reveal">
            <div class="service-img">
                <img src="https://images.unsplash.com/photo-1509391366360-2e959784a276?w=600&q=80&fit=crop" alt="Commercial rooftop solar PV array" loading="lazy" />
                <div class="service-img-overlay"></div>
                <span class="service-img-ref">S-01</span>
            </div>
            <div class="service-body">
                <div class="service-title">Solar PV arrays</div>
                <div class="service-desc">Roof-mounted and ground-mount commercial PV arrays from 50 kWp to multi-MW. Yield modelled against half-hourly site consumption data and DNO export limits.</div>
                <div class="service-specs">
                    <span class="service-spec">50kWp–2MW+</span>
                    <span class="service-spec">ROOF / GROUND</span>
                    <span class="service-spec">G99 / G100</span>
                </div>
            </div>
        </div>

        <!-- 2: BESS -->
        <div class="service-card reveal reveal-delay-1">
            <div class="service-img">
                <img src="https://images.unsplash.com/photo-1593941707882-a5bba14938c7?w=600&q=80&fit=crop" alt="Industrial battery energy storage system" loading="lazy" />
                <div class="service-img-overlay"></div>
                <span class="service-img-ref">S-02</span>
            </div>
            <div class="service-body">
                <div class="service-title">Battery energy storage (BESS)</div>
                <div class="service-desc">Containerised and rack-mounted BESS for peak shaving, self-consumption maximisation and resilience. Scheduled via AI-assisted energy management systems.</div>
                <div class="service-specs">
                    <span class="service-spec">10kWh–MWh</span>
                    <span class="service-spec">PEAK SHAVING</span>
                    <span class="service-spec">EMS CONTROL</span>
                </div>
            </div>
        </div>

        <!-- 3: Load balancing / PFC -->
        <div class="service-card reveal reveal-delay-2">
            <div class="service-img">
                <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?w=600&q=80&fit=crop" alt="Electrical switchgear and power factor correction" loading="lazy" />
                <div class="service-img-overlay"></div>
                <span class="service-img-ref">S-03</span>
            </div>
            <div class="service-body">
                <div class="service-title">Load balancing &amp; PFC</div>
                <div class="service-desc">Power factor correction reduces reactive power charges. Active load balancing prevents demand spikes that trigger higher tariff bands and capacity penalties.</div>
                <div class="service-specs">
                    <span class="service-spec">PFC BANKS</span>
                    <span class="service-spec">ACTIVE FILTERS</span>
                    <span class="service-spec">DEMAND MGMT</span>
                </div>
            </div>
        </div>

        <!-- 4: Hybrid / microgrids -->
        <div class="service-card reveal">
            <div class="service-img">
                <img src="https://images.unsplash.com/photo-1466611653911-95081537e5b7?w=600&q=80&fit=crop" alt="Ground-mount solar microgrid installation" loading="lazy" />
                <div class="service-img-overlay"></div>
                <span class="service-img-ref">S-04</span>
            </div>
            <div class="service-body">
                <div class="service-title">Hybrid &amp; microgrids</div>
                <div class="service-desc">Multi-source energy systems combining solar, storage and generation under a single control architecture. Designed for capacity-constrained or grid-remote sites.</div>
                <div class="service-specs">
                    <span class="service-spec">MULTI-SOURCE</span>
                    <span class="service-spec">ISLANDING</span>
                    <span class="service-spec">SCADA</span>
                </div>
            </div>
        </div>

        <!-- 5: Standby generation -->
        <div class="service-card reveal reveal-delay-1">
            <div class="service-img">
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&q=80&fit=crop" alt="Industrial standby generator installation" loading="lazy" />
                <div class="service-img-overlay"></div>
                <span class="service-img-ref">S-05</span>
            </div>
            <div class="service-body">
                <div class="service-title">Standby generation</div>
                <div class="service-desc">Integration of existing diesel or gas generators into hybrid energy systems. Automated transfer switching, runtime minimisation and hybrid control reduce fuel spend.</div>
                <div class="service-specs">
                    <span class="service-spec">DIESEL / GAS</span>
                    <span class="service-spec">ATS</span>
                    <span class="service-spec">HYBRID CTRL</span>
                </div>
            </div>
        </div>

        <!-- 6: PLC / BMS -->
        <div class="service-card reveal reveal-delay-2">
            <div class="service-img">
                <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?w=600&q=80&fit=crop" alt="PLC and BMS control panel electronics" loading="lazy" />
                <div class="service-img-overlay"></div>
                <span class="service-img-ref">S-06</span>
            </div>
            <div class="service-body">
                <div class="service-title">PLC &amp; BMS control</div>
                <div class="service-desc">Custom PLC programming and building management system integration. Automated demand response, generation scheduling and load prioritisation under a single interface.</div>
                <div class="service-specs">
                    <span class="service-spec">SIEMENS / ABB</span>
                    <span class="service-spec">MODBUS / BACnet</span>
                    <span class="service-spec">SCADA</span>
                </div>
            </div>
        </div>

    </div>

    <!-- Specialist callout -->
    <div class="specialist-callout reveal">
        <div class="sc-left">
            <div class="sc-label">Beyond standard installations</div>
            <div class="sc-title">Specialist commercial services</div>
            <div class="sc-desc">Power quality analysis, off-grid solutions, temporary site supplies, harsh environment systems and custom control panel design, build and maintenance. Where standard solutions don't apply.</div>
        </div>
        <a href="<?= BASE_URL ?>commercial/specialist" class="sc-link">View specialist services →</a>
    </div>
</section>

<!-- PROOF: Case study + Engineering process -->
<section class="proof">

    <!-- Case study -->
    <div class="reveal">
        <div class="section-label" style="margin-bottom:24px;">Case study</div>
        <div class="cs-card">
            <div class="cs-panel">
                <div class="cs-bg"></div>
                <span class="cs-badge">Commercial — Office</span>
                <!-- Inline mini infographic -->
                <svg width="100%" viewBox="0 0 320 100" fill="none" style="position:relative;z-index:1;margin-top:16px;" xmlns="http://www.w3.org/2000/svg">
                    <!-- Solar → Inv → Bat / Grid / Load flow strip -->
                    <defs>
                        <marker id="arr" viewBox="0 0 8 8" refX="6" refY="4" markerWidth="5" markerHeight="5" orient="auto">
                            <path d="M1 1l5 3-5 3" fill="none" stroke="#0D8A6A" stroke-width="1.2" stroke-linecap="round" />
                        </marker>
                    </defs>
                    <!-- Nodes -->
                    <rect x="4" y="35" width="56" height="30" rx="2" fill="rgba(10,107,82,0.15)" stroke="#0A6B52" stroke-width="1" />
                    <text x="32" y="48" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A" letter-spacing="1">SOLAR</text>
                    <text x="32" y="59" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.3)">245 kWp</text>

                    <rect x="132" y="35" width="56" height="30" rx="2" fill="rgba(10,107,82,0.15)" stroke="#0A6B52" stroke-width="1" />
                    <text x="160" y="48" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A" letter-spacing="1">INVERTER</text>
                    <text x="160" y="59" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.3)">AC coupled</text>

                    <!-- BESS -->
                    <rect x="4" y="2" width="56" height="22" rx="2" fill="rgba(10,107,82,0.1)" stroke="rgba(10,107,82,0.4)" stroke-width="0.8" />
                    <text x="32" y="15" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A">BESS 180kWh</text>

                    <!-- Grid -->
                    <rect x="260" y="2" width="56" height="22" rx="2" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.12)" stroke-width="0.8" />
                    <text x="288" y="15" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.35)">GRID DNO</text>

                    <!-- Load -->
                    <rect x="260" y="70" width="56" height="22" rx="2" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.12)" stroke-width="0.8" />
                    <text x="288" y="83" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.35)">LOAD</text>

                    <!-- GEN -->
                    <rect x="132" y="70" width="56" height="22" rx="2" fill="rgba(200,118,42,0.1)" stroke="rgba(200,118,42,0.3)" stroke-width="0.8" />
                    <text x="160" y="83" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(200,118,42,0.7)">GEN 150kVA</text>

                    <!-- Lines -->
                    <line x1="60" y1="50" x2="132" y2="50" stroke="#0D8A6A" stroke-width="1" stroke-dasharray="4 3" class="flow-line" />
                    <line x1="188" y1="50" x2="260" y2="81" stroke="#0D8A6A" stroke-width="1" stroke-dasharray="4 3" class="flow-line" style="animation-delay:0.3s" />
                    <line x1="188" y1="50" x2="260" y2="13" stroke="rgba(255,255,255,0.15)" stroke-width="1" stroke-dasharray="4 3" class="flow-line" style="animation-delay:0.6s" />
                    <line x1="160" y1="35" x2="32" y2="24" stroke="rgba(10,107,82,0.5)" stroke-width="1" stroke-dasharray="3 4" class="flow-line-rev" style="animation-delay:0.9s" />
                    <line x1="160" y1="65" x2="160" y2="70" stroke="rgba(200,118,42,0.4)" stroke-width="1" stroke-dasharray="3 4" />
                </svg>
                <div class="cs-metrics-strip">
                    <div class="csm"><span class="csm-val">245<em> kWp</em></span><span class="csm-key">Array size</span></div>
                    <div class="csm"><span class="csm-val">180<em> kWh</em></span><span class="csm-key">Storage</span></div>
                    <div class="csm"><span class="csm-val">61<em>%</em></span><span class="csm-key">Import reduction</span></div>
                </div>
            </div>
            <div class="cs-body">
                <div class="cs-loc">West Midlands · Commercial Office</div>
                <h3 class="cs-title">Solar, storage and generator integration within DNO import limits</h3>
                <p class="cs-summary">245 kWp rooftop array with 180 kWh BESS and a 150 kVA standby generator configured as a hybrid system under PLC control. DNO export set to zero. Grid import reduced by 61% during working hours. Generator runtime reduced from 180 to 12 hours per year. Payback modelled at 5.2 years against current tariff.</p>
                <a href="<?= BASE_URL ?>case-studies" class="cs-link">Read full case study →</a>
            </div>
        </div>
    </div>

    <!-- Engineering process -->
    <div class="reveal reveal-delay-1">
        <div class="section-label" style="margin-bottom:24px;">Engineering process</div>
        <div class="process-card">
            <div class="proc-label">How commercial projects are delivered</div>
            <h3 class="proc-title">From feasibility<br>to <em style="font-style:italic;color:var(--teal-lt)">optimisation</em></h3>
            <div class="proc-steps">
                <div class="proc-step">
                    <div class="proc-num-wrap">
                        <div class="proc-num">1</div>
                        <div class="proc-connector"></div>
                    </div>
                    <div class="proc-content">
                        <div class="proc-step-title">Design &amp; modelling</div>
                        <div class="proc-step-desc">Yield modelling against half-hourly consumption data. System sizing, single-line diagrams, financial model with sensitivity analysis.</div>
                    </div>
                </div>
                <div class="proc-step">
                    <div class="proc-num-wrap">
                        <div class="proc-num">2</div>
                        <div class="proc-connector"></div>
                    </div>
                    <div class="proc-content">
                        <div class="proc-step-title">Grid compliance</div>
                        <div class="proc-step-desc">G59/G99/G100 application management. DNO liaison, protection relay settings and export limitation configuration.</div>
                    </div>
                </div>
                <div class="proc-step">
                    <div class="proc-num-wrap">
                        <div class="proc-num">3</div>
                        <div class="proc-connector"></div>
                    </div>
                    <div class="proc-content">
                        <div class="proc-step-title">Installation</div>
                        <div class="proc-step-desc">Managed installation programme with structural coordination, electrical containment, inverter and BESS commissioning preparation.</div>
                    </div>
                </div>
                <div class="proc-step">
                    <div class="proc-num-wrap">
                        <div class="proc-num">4</div>
                        <div class="proc-connector"></div>
                    </div>
                    <div class="proc-content">
                        <div class="proc-step-title">Commissioning</div>
                        <div class="proc-step-desc">Witness testing, protection relay verification, EMS configuration, DNO sign-off and full commissioning documentation pack.</div>
                    </div>
                </div>
                <div class="proc-step">
                    <div class="proc-num-wrap">
                        <div class="proc-num">5</div>
                    </div>
                    <div class="proc-content">
                        <div class="proc-step-title">Optimisation</div>
                        <div class="proc-step-desc">Live monitoring, generation vs modelled yield review, battery scheduling refinement and demand response programme enrolment.</div>
                    </div>
                </div>
            </div>
            <a href="<?= BASE_URL ?>contact" class="proc-cta">Start with a feasibility review →</a>
        </div>
    </div>
</section>

<!-- ENERGY FLOW INFOGRAPHIC (full width) -->
<section class="energy-flow reveal">
    <div class="ef-header">
        <div class="section-label">System performance</div>
        <h2 style="font-family:var(--display);font-size:clamp(24px,2.5vw,34px);font-weight:700;color:var(--ink);line-height:1.1;">How your site energy flows</h2>
    </div>

    <!-- Wide infographic: 24-hour energy profile concept -->
    <div style="background:var(--ink);padding:40px;overflow:hidden;position:relative;">
        <div style="position:absolute;inset:0;background:repeating-linear-gradient(90deg,transparent,transparent 39px,rgba(255,255,255,0.02) 39px,rgba(255,255,255,0.02) 40px);"></div>
        <svg width="100%" viewBox="0 0 900 260" fill="none" xmlns="http://www.w3.org/2000/svg" style="position:relative;z-index:1;">
            <defs>
                <linearGradient id="solar-grad" x1="0" y1="0" x2="1" y2="0">
                    <stop offset="0%" stop-color="#C8762A" stop-opacity="0" />
                    <stop offset="20%" stop-color="#C8762A" stop-opacity="0.7" />
                    <stop offset="50%" stop-color="#C8762A" stop-opacity="0.9" />
                    <stop offset="80%" stop-color="#C8762A" stop-opacity="0.7" />
                    <stop offset="100%" stop-color="#C8762A" stop-opacity="0" />
                </linearGradient>
                <linearGradient id="bess-grad" x1="0" y1="0" x2="1" y2="0">
                    <stop offset="0%" stop-color="#0A6B52" stop-opacity="0" />
                    <stop offset="35%" stop-color="#0A6B52" stop-opacity="0.6" />
                    <stop offset="65%" stop-color="#0A6B52" stop-opacity="0.8" />
                    <stop offset="100%" stop-color="#0A6B52" stop-opacity="0.5" />
                </linearGradient>
                <linearGradient id="load-grad" x1="0" y1="0" x2="1" y2="0">
                    <stop offset="0%" stop-color="rgba(255,255,255,0.15)" />
                    <stop offset="50%" stop-color="rgba(255,255,255,0.25)" />
                    <stop offset="100%" stop-color="rgba(255,255,255,0.1)" />
                </linearGradient>
            </defs>

            <!-- Y axis labels -->
            <text x="16" y="30" font-family="'DM Mono',monospace" font-size="8" fill="rgba(255,255,255,0.2)" letter-spacing="1">kW</text>
            <text x="16" y="55" font-family="'DM Mono',monospace" font-size="8" fill="rgba(255,255,255,0.15)">500</text>
            <text x="16" y="105" font-family="'DM Mono',monospace" font-size="8" fill="rgba(255,255,255,0.15)">250</text>
            <text x="16" y="155" font-family="'DM Mono',monospace" font-size="8" fill="rgba(255,255,255,0.15)">0</text>

            <!-- Horizontal grid -->
            <line x1="50" y1="50" x2="890" y2="50" stroke="rgba(255,255,255,0.04)" stroke-width="1" />
            <line x1="50" y1="100" x2="890" y2="100" stroke="rgba(255,255,255,0.04)" stroke-width="1" />
            <line x1="50" y1="150" x2="890" y2="150" stroke="rgba(255,255,255,0.06)" stroke-width="1" />

            <!-- Time labels -->
            <g font-family="'DM Mono',monospace" font-size="8" fill="rgba(255,255,255,0.2)">
                <text x="50" y="170">00:00</text>
                <text x="162" y="170">04:00</text>
                <text x="274" y="170">08:00</text>
                <text x="386" y="170">12:00</text>
                <text x="498" y="170">16:00</text>
                <text x="610" y="170">20:00</text>
                <text x="848" y="170">24:00</text>
            </g>

            <!-- Solar generation curve (bell curve, daytime) -->
            <path d="M50,150 Q100,150 150,150 Q200,148 230,140 Q260,120 290,90 Q320,65 350,52 Q380,44 420,42 Q460,40 490,44 Q530,50 560,65 Q590,82 620,105 Q650,128 670,140 Q700,148 730,150 Q800,150 890,150"
                fill="url(#solar-grad)" opacity="0.25" />
            <path d="M50,150 Q100,150 150,150 Q200,148 230,140 Q260,120 290,90 Q320,65 350,52 Q380,44 420,42 Q460,40 490,44 Q530,50 560,65 Q590,82 620,105 Q650,128 670,140 Q700,148 730,150 Q800,150 890,150"
                fill="none" stroke="#C8762A" stroke-width="2" opacity="0.8" />

            <!-- BESS discharge (afternoon peak) -->
            <path d="M50,150 Q130,150 190,150 Q220,150 240,145 Q280,130 320,120 Q360,112 400,108 Q440,106 480,108 Q520,112 550,118 Q580,126 610,138 Q640,148 690,150 Q800,150 890,150"
                fill="url(#bess-grad)" opacity="0.2" />
            <path d="M50,150 Q130,150 190,150 Q220,150 240,145 Q280,130 320,120 Q360,112 400,108 Q440,106 480,108 Q520,112 550,118 Q580,126 610,138 Q640,148 690,150 Q800,150 890,150"
                fill="none" stroke="#0A6B52" stroke-width="2" opacity="0.7" stroke-dasharray="6 3" />

            <!-- Site load (relatively flat with morning ramp and evening drop) -->
            <path d="M50,130 Q100,128 150,125 Q180,110 220,90 Q240,82 280,80 Q400,78 520,80 Q560,82 590,88 Q620,98 660,118 Q690,132 730,136 Q800,140 890,142"
                fill="url(#load-grad)" opacity="0.08" />
            <path d="M50,130 Q100,128 150,125 Q180,110 220,90 Q240,82 280,80 Q400,78 520,80 Q560,82 590,88 Q620,98 660,118 Q690,132 730,136 Q800,140 890,142"
                fill="none" stroke="rgba(255,255,255,0.3)" stroke-width="1.5" />

            <!-- Peak shaving band annotation -->
            <rect x="280" y="72" width="280" height="16" fill="rgba(10,107,82,0.08)" stroke="rgba(10,107,82,0.2)" stroke-width="0.8" stroke-dasharray="4 4" />
            <text x="420" y="83" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.6)" letter-spacing="1">PEAK SHAVING ACTIVE</text>

            <!-- Grid import zone (shaded early morning) -->
            <rect x="50" y="50" width="180" height="100" fill="rgba(255,255,255,0.02)" />
            <text x="82" y="190" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.15)" letter-spacing="1">GRID IMPORT</text>

            <!-- Legend -->
            <g transform="translate(50, 215)">
                <line x1="0" y1="6" x2="28" y2="6" stroke="#C8762A" stroke-width="2" />
                <text x="34" y="10" font-family="'DM Mono',monospace" font-size="8" fill="rgba(255,255,255,0.5)">Solar generation</text>
                <line x1="160" y1="6" x2="188" y2="6" stroke="#0A6B52" stroke-width="2" stroke-dasharray="6 3" />
                <text x="194" y="10" font-family="'DM Mono',monospace" font-size="8" fill="rgba(255,255,255,0.5)">BESS output</text>
                <line x1="310" y1="6" x2="338" y2="6" stroke="rgba(255,255,255,0.4)" stroke-width="1.5" />
                <text x="344" y="10" font-family="'DM Mono',monospace" font-size="8" fill="rgba(255,255,255,0.5)">Site load</text>
                <rect x="450" y="0" width="12" height="12" fill="rgba(10,107,82,0.15)" stroke="rgba(10,107,82,0.3)" stroke-width="0.8" />
                <text x="468" y="10" font-family="'DM Mono',monospace" font-size="8" fill="rgba(255,255,255,0.5)">Peak shaving zone</text>
            </g>
        </svg>
    </div>
</section>

<!-- CTA BAND -->
<section class="cta-band reveal">
    <div>
        <h2 class="cta-band-title">Start with a<br><em>feasibility review</em></h2>
        <p class="cta-band-sub">We model your system against actual half-hourly consumption data before recommending anything. No generic sizing. No overselling. A clear picture of what works for your site.</p>
    </div>
    <div class="cta-group">
        <a href="<?= BASE_URL ?>contact" class="btn-primary-dark">Request a feasibility review →</a>
        <a href="<?= BASE_URL ?>contact" class="btn-outline-dark">Book a technical call</a>
    </div>
</section>

<?php
$content = ob_get_clean();
require __DIR__ . '/layouts/main.php';
?>