<?php
$pageTitle = 'Agricultural - Fort Energy';
$activePage   = 'agricultural';
$metaDesc     = 'PLACEHOLDER — SEO to supply';
$canonicalUrl = 'https://fortenergy.co.uk/agricultural';
$pageCSS      = 'agricultural.css';
$schemaJson   = json_encode([
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',         'item' => 'https://fortenergy.co.uk'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Agricultural', 'item' => 'https://fortenergy.co.uk/agricultural'],
    ],
]);
ob_start();

?>

<!-- BREADCRUMB -->
<div class="breadcrumb">
    <a href="/" class="bc-item">Home</a>
    <span class="bc-sep">/</span>
    <span class="bc-current">Agricultural</span>
</div>

<!-- HERO -->
<section class="hero">
    <div class="hero-left">
        <div class="hero-eyebrow">Sector 04 — Agricultural</div>
        <h1 class="hero-h1">Energy systems for farms<br><em> and agricultural sites</em></h1>
        <p class="hero-sub">Solar PV, ground-mount arrays and battery storage for working farms, agricultural buildings and processing facilities.</p>
        <div class="hero-ctas">
            <a href="/contact" class="btn-primary">Request a site assessment →</a>
            <a href="/contact" class="btn-secondary">Talk to an engineer</a>
        </div>
    </div>

    <!-- Hero infographic: farm site energy diagram -->
    <div class="hero-diagram">
        <svg width="340" height="400" viewBox="0 0 340 400" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="agrid" width="18" height="18" patternUnits="userSpaceOnUse">
                    <path d="M 18 0 L 0 0 0 18" fill="none" stroke="rgba(255,255,255,0.04)" stroke-width="0.5" />
                </pattern>
                <radialGradient id="aglow" cx="50%" cy="35%" r="55%">
                    <stop offset="0%" stop-color="#0A6B52" stop-opacity="0.2" />
                    <stop offset="100%" stop-color="#0A6B52" stop-opacity="0" />
                </radialGradient>
            </defs>
            <rect width="340" height="400" fill="url(#agrid)" />
            <circle cx="170" cy="140" r="160" fill="url(#aglow)" />

            <!-- Sun -->
            <circle cx="170" cy="28" r="18" fill="#C8762A" opacity="0.85" />
            <circle cx="170" cy="28" r="26" fill="none" stroke="#C8762A" stroke-width="0.8" opacity="0.2" />
            <g stroke="#C8762A" stroke-width="1" opacity="0.4">
                <line x1="170" y1="4" x2="170" y2="9" />
                <line x1="170" y1="47" x2="170" y2="52" />
                <line x1="146" y1="28" x2="141" y2="28" />
                <line x1="194" y1="28" x2="199" y2="28" />
                <line x1="153" y1="11" x2="149" y2="7" />
                <line x1="187" y1="11" x2="191" y2="7" />
            </g>
            <line x1="170" y1="46" x2="170" y2="68" stroke="#C8762A" stroke-width="1.5" stroke-dasharray="3 3" class="flow-line" />

            <!-- Agricultural barn with large roof solar array -->
            <g transform="translate(30, 72)">
                <!-- Barn roof — wide span -->
                <polygon points="0,48 140,0 280,48" fill="rgba(10,107,82,0.08)" stroke="rgba(255,255,255,0.1)" stroke-width="1" />
                <!-- Solar panels on south pitch -->
                <polygon points="10,44 140,2 200,28" fill="rgba(10,107,82,0.4)" stroke="#0A6B52" stroke-width="0.8" />
                <!-- Panel grid lines -->
                <line x1="58" y1="26" x2="46" y2="44" stroke="rgba(255,255,255,0.2)" stroke-width="0.5" />
                <line x1="105" y1="9" x2="95" y2="44" stroke="rgba(255,255,255,0.2)" stroke-width="0.5" />
                <line x1="152" y1="8" x2="148" y2="36" stroke="rgba(255,255,255,0.2)" stroke-width="0.5" />
                <line x1="25" y1="34" x2="200" y2="16" stroke="rgba(255,255,255,0.12)" stroke-width="0.5" />
                <line x1="15" y1="42" x2="200" y2="22" stroke="rgba(255,255,255,0.12)" stroke-width="0.5" />
                <!-- Barn walls -->
                <rect x="14" y="48" width="252" height="90" fill="rgba(255,255,255,0.02)" stroke="rgba(255,255,255,0.1)" stroke-width="1" />
                <!-- Large barn doors -->
                <rect x="30" y="60" width="60" height="78" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.08)" stroke-width="0.8" />
                <rect x="100" y="60" width="60" height="78" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.08)" stroke-width="0.8" />
                <!-- Ventilation strip -->
                <rect x="180" y="62" width="72" height="14" fill="rgba(255,255,255,0.03)" stroke="rgba(255,255,255,0.06)" stroke-width="0.5" />
                <!-- Milking/equipment indicator -->
                <rect x="180" y="82" width="72" height="42" fill="rgba(10,107,82,0.08)" stroke="rgba(10,107,82,0.2)" stroke-width="0.8" />
                <text x="216" y="103" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.5)" letter-spacing="0.5">DAIRY / PROCESS</text>
            </g>

            <!-- Solar label -->
            <text x="170" y="104" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.35)" letter-spacing="1">ROOF ARRAY — UP TO 500 kWp</text>

            <!-- Flow line down to energy hub -->
            <line x1="170" y1="234" x2="170" y2="268" stroke="#0D8A6A" stroke-width="1.2" class="flow-line" style="animation-delay:0.3s" />

            <!-- Energy hub / inverter -->
            <rect x="120" y="268" width="100" height="36" rx="2" fill="rgba(10,107,82,0.15)" stroke="#0A6B52" stroke-width="1.2" />
            <text x="170" y="282" text-anchor="middle" font-family="'DM Mono',monospace" font-size="8" fill="#0D8A6A" letter-spacing="1">INVERTER / EMS</text>
            <text x="170" y="295" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.25)">export + self-consumption</text>

            <!-- Left: Battery -->
            <path d="M 130 286 L 72 286 L 72 328" stroke="#0D8A6A" stroke-width="1" class="flow-line" style="animation-delay:0.6s" />
            <rect x="34" y="328" width="76" height="44" rx="2" fill="rgba(10,107,82,0.12)" stroke="#0A6B52" stroke-width="1" />
            <rect x="42" y="336" width="60" height="7" fill="#0A6B52" opacity="0.6" rx="1" />
            <rect x="42" y="347" width="44" height="7" fill="#0A6B52" opacity="0.4" rx="1" />
            <text x="72" y="384" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A" letter-spacing="1">BESS</text>

            <!-- Right: Grid export -->
            <path d="M 210 286 L 268 286 L 268 328" stroke="rgba(255,255,255,0.15)" stroke-width="1" class="flow-line" style="animation-delay:0.9s" />
            <rect x="230" y="328" width="76" height="44" rx="2" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.12)" stroke-width="1" />
            <text x="268" y="348" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.3)" letter-spacing="1">GRID</text>
            <text x="268" y="361" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.2)">SEG export</text>
            <text x="268" y="373" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.15)">G99 / G100</text>

            <!-- Ground mount indication (bottom) -->
            <g transform="translate(24,380)">
                <rect x="0" y="0" width="292" height="18" rx="2" fill="rgba(10,107,82,0.06)" stroke="rgba(10,107,82,0.2)" stroke-width="0.8" />
                <text x="146" y="12" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.5)" letter-spacing="1">GROUND-MOUNT — FIELD / PADDOCK — AGRI-VOLTAIC</text>
            </g>

            <!-- Site boundary -->
            <rect x="8" y="62" width="324" height="312" fill="none" stroke="rgba(10,107,82,0.1)" stroke-width="1" stroke-dasharray="6 10" rx="4" />
            <text x="16" y="74" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.3)" letter-spacing="2">FARM SITE BOUNDARY</text>
        </svg>
    </div>
</section>

<!-- INTRO -->
<section class="intro reveal">
    <div class="intro-inner">
        <div>
            <div class="section-label">TWO INSTALL TYPES — SPLIT FEATURE BLOCKS</div>
            <h2 class="section-title">Built around how<br>a farm <em>actually works</em></h2>
        </div>
        <div class="intro-body">
            <p>Agricultural sites present a combination of energy characteristics that makes them particularly well-suited to solar: large roof areas, high daytime electricity consumption from dairy, refrigeration and processing equipment, significant grid connection capacity in rural areas, and available land for ground-mount where roofs are constrained.</p>
            <p>System design accounts for seasonal load variation, the intermittent nature of agricultural operations, and the practical realities of installation on working farm buildings — phased installation, minimal disruption to operations, and systems that can be maintained without specialist attendance on site.</p>
        </div>
    </div>
</section>

<!-- TWO-UP SPLIT: Roof / Ground -->
<div class="installation-types reveal">
    <div class="types-grid">
        <!-- Roof mounted -->
        <div class="type-card">
            <div class="type-img">
                <img src="<?= BASE_URL ?>assets/img/agricultural/placeholder.png" alt="Large roof-mounted solar array on agricultural barn" loading="lazy" />
                <div class="type-img-overlay"></div>
                <div class="type-img-label">
                    <div class="type-img-tag">Installation type 01</div>
                    <div class="type-img-title">Roof-mounted</div>
                </div>
            </div>
            <div class="type-body">
                <p class="type-desc">Portal frame barns, grain stores, dairy units and machinery sheds offer large unobstructed roof spans well-suited to commercial-scale PV. Roof-mount avoids land use and planning complexity. Systems from 50 kWp on a single span to 500 kWp+ across multiple buildings.</p>
                <div class="type-specs">
                    <span class="type-spec">50 kWp–500 kWp+</span>
                    <span class="type-spec">PORTAL FRAME</span>
                    <span class="type-spec">MULTI-BUILDING</span>
                    <span class="type-spec">MCS CERTIFIED</span>
                </div>
            </div>
        </div>

        <!-- Ground mounted -->
        <div class="type-card">
            <div class="type-img">
                <img src="<?= BASE_URL ?>assets/img/agricultural/placeholder.png" alt="Ground-mount solar array in agricultural field setting" loading="lazy" />
                <div class="type-img-overlay"></div>
                <div class="type-img-label">
                    <div class="type-img-tag">Installation type 02</div>
                    <div class="type-img-title">Ground-mounted</div>
                </div>
            </div>
            <div class="type-body">
                <p class="type-desc">Field and paddock installations where roof area is limited, poorly orientated or structurally constrained. Ground-mount allows optimal orientation and tilt independent of building geometry. Agri-voltaic configurations maintain grazing or crop production beneath arrays.</p>
                <div class="type-specs">
                    <span class="type-spec">FIELD / PADDOCK</span>
                    <span class="type-spec">AGRI-VOLTAIC</span>
                    <span class="type-spec">OPTIMAL TILT</span>
                    <span class="type-spec">PLANNING SUPPORT</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SYSTEM TYPES 2×2 -->
<section class="system-types">
    <div class="section-header-row reveal">
        <div>
            <div class="section-label">System configurations</div>
            <h2 class="section-title">Four system types</h2>
        </div>
        <div class="section-count">04</div>
    </div>

    <div class="systems-grid">
        <div class="sys-card reveal">
            <div class="cap-img">
                <img src="<?= BASE_URL ?>assets/img/agricultural/placeholder.png" alt="Roof-mounted solar PV panels on agricultural barn optimized for self-consumption" loading="lazy" />
                <div class="cap-img-overlay"></div>
            </div>
            <div class="sys-title">Solar PV — self-consumption</div>
            <div class="sys-desc">Array sized to match daytime operational load. Generation directly offsets grid import during peak consumption periods — dairy milking, refrigeration, grain drying and irrigation pumping. Smart export where surplus is available.</div>
            <div class="sys-tags"><span class="sys-tag">SELF-CONSUMPTION</span><span class="sys-tag">SMART EXPORT</span><span class="sys-tag">DNO MANAGED</span></div>
        </div>
        <div class="sys-card reveal rd1">
            <div class="cap-img">
                <img src="<?= BASE_URL ?>assets/img/agricultural/placeholder.png" alt="Solar panels integrated with modular commercial battery storage systems on a dairy farm" loading="lazy" />
                <div class="cap-img-overlay"></div>
            </div>
            <div class="sys-title">Solar + battery storage</div>
            <div class="sys-desc">Battery storage captures surplus generation for use during evening milking sessions, overnight refrigeration and early morning operations. Peak demand reduction and time-of-use tariff optimisation. Resilience against grid outages on remote rural connections.</div>
            <div class="sys-tags"><span class="sys-tag">SOLAR + BESS</span><span class="sys-tag">EVENING LOAD</span><span class="sys-tag">GRID RESILIENCE</span></div>
        </div>
        <div class="sys-card reveal">
            <div class="cap-img">
                <img src="<?= BASE_URL ?>assets/img/agricultural/placeholder.png" alt="Large-scale ground-mounted solar array configured for maximum export capacity on agricultural land" loading="lazy" />
                <div class="cap-img-overlay"></div>
            </div>
            <div class="sys-title">Export-optimised system</div>
            <div class="sys-desc">Large ground-mount or multi-building roof array sized for maximum generation and export. G99/G100 application managed end-to-end. Smart Export Guarantee income modelled over 25-year system life. Suitable for farms with available land and strong grid connection.</div>
            <div class="sys-tags"><span class="sys-tag">MAX EXPORT</span><span class="sys-tag">SEG INCOME</span><span class="sys-tag">G99 / G100</span></div>
        </div>
        <div class="sys-card reveal rd1">
            <div class="cap-img">
                <img src="<?= BASE_URL ?>assets/img/agricultural/placeholder.png" alt="Hybrid energy control panel connecting solar arrays, battery storage, and a standby diesel generator" loading="lazy" />
                <div class="cap-img-overlay"></div>
            </div> 
            <div class="sys-title">Hybrid with standby generation</div>
            <div class="sys-desc">Integration of existing diesel standby generation with solar and battery. Hybrid control minimises generator runtime and fuel consumption whilst maintaining supply security. Critical for dairy sites where power interruption directly affects animal welfare and milk quality.</div>
            <div class="sys-tags"><span class="sys-tag">HYBRID</span><span class="sys-tag">DIESEL INTEGRATION</span><span class="sys-tag">SUPPLY SECURITY</span></div>
        </div>
    </div>
</section>

<!-- WHY AGRICULTURAL -->
<section class="why-agri reveal">
    <div>
        <div class="section-label">The case for solar</div>
        <h2 class="section-title">Why agricultural<br>sites are <em>well-suited</em><br>to solar</h2>
    </div>
    <div class="why-list">
        <div class="why-item">
            <div class="why-num">01</div>
            <div class="why-content">
                <div class="why-title">Large roof areas with no planning constraint</div>
                <div class="why-desc">Agricultural buildings are typically permitted development for roof-mount solar up to 1 MW. No planning application required in most cases — significantly faster to install than commercial equivalents.</div>
            </div>
        </div>
        <div class="why-item">
            <div class="why-num">02</div>
            <div class="why-content">
                <div class="why-title">High daytime electricity consumption</div>
                <div class="why-desc">Dairy milking, refrigeration, ventilation and grain drying run during daylight hours — directly aligned with solar generation. Self-consumption rates of 70–90% achievable on working dairy farms.</div>
            </div>
        </div>
        <div class="why-item">
            <div class="why-num">03</div>
            <div class="why-content">
                <div class="why-title">Electricity costs are a major operational overhead</div>
                <div class="why-desc">Energy is consistently one of the top three costs on dairy, poultry and horticultural operations. A well-designed solar system directly reduces that overhead with a 25-year generation lifespan.</div>
            </div>
        </div>
        <div class="why-item">
            <div class="why-num">04</div>
            <div class="why-content">
                <div class="why-title">Available land for ground-mount</div>
                <div class="why-desc">Where roofs are insufficient, paddocks and field margins can accommodate ground-mount arrays. Agri-voltaic configurations allow continued grazing — sheep and ground-mount are a proven combination.</div>
            </div>
        </div>
        <div class="why-item">
            <div class="why-num">05</div>
            <div class="why-content">
                <div class="why-title">Grid connection capacity in rural areas</div>
                <div class="why-desc">Many agricultural sites have existing three-phase connections with available headroom. Export-optimised systems can generate significant SEG income where connection capacity allows.</div>
            </div>
        </div>
    </div>
</section>

<!-- METRICS BAND -->
<div class="metrics-band reveal">
    <div class="metric-item">
        <span class="metric-num">500<span class="metric-unit">+</span></span>
        <span class="metric-label">kWp single site</span>
    </div>
    <div class="metric-item">
        <span class="metric-num">25<span class="metric-unit">yr</span></span>
        <span class="metric-label">System design life</span>
    </div>
    <div class="metric-item">
        <span class="metric-num">90<span class="metric-unit">%</span></span>
        <span class="metric-label">Self-consumption achievable</span>
    </div>
    <div class="metric-item">
        <span class="metric-num">4–7<span class="metric-unit">yr</span></span>
        <span class="metric-label">Typical payback</span>
    </div>
</div>

<!-- CASE STUDY + PROCESS -->
<section class="proof">
    <div class="reveal">
        <div class="section-label" style="margin-bottom:24px;">Case study</div>
        <div class="cs-card">
            <div class="cs-panel">
                <div class="cs-bg"></div>
                <span class="cs-badge">Agricultural — Dairy Farm</span>
                <svg width="100%" viewBox="0 0 320 80" fill="none" style="position:relative;z-index:1;margin-top:16px;">
                    <rect x="4" y="24" width="60" height="28" rx="2" fill="rgba(10,107,82,0.15)" stroke="#0A6B52" stroke-width="1" />
                    <text x="34" y="35" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A">SOLAR</text>
                    <text x="34" y="47" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.3)">280 kWp</text>
                    <line x1="64" y1="38" x2="88" y2="38" stroke="#0D8A6A" stroke-width="1" stroke-dasharray="4 3" class="flow-line" />
                    <rect x="88" y="24" width="64" height="28" rx="2" fill="rgba(10,107,82,0.12)" stroke="#0A6B52" stroke-width="1" />
                    <text x="120" y="35" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A">INVERTER</text>
                    <text x="120" y="47" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.25)">EMS</text>
                    <rect x="4" y="58" width="60" height="18" rx="2" fill="rgba(10,107,82,0.1)" stroke="rgba(10,107,82,0.35)" stroke-width="0.8" />
                    <text x="34" y="70" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="#0D8A6A">BESS 120kWh</text>
                    <path d="M 120 52 L 34 58" stroke="rgba(10,107,82,0.5)" stroke-width="0.8" stroke-dasharray="3 3" class="flow-line" style="animation-delay:0.5s" />
                    <rect x="168" y="4" width="72" height="28" rx="2" fill="rgba(200,118,42,0.08)" stroke="rgba(200,118,42,0.25)" stroke-width="0.8" />
                    <text x="204" y="14" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(200,118,42,0.6)">DAIRY LOAD</text>
                    <text x="204" y="25" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.2)">milking + refrigeration</text>
                    <line x1="152" y1="30" x2="168" y2="18" stroke="#0D8A6A" stroke-width="0.8" stroke-dasharray="4 3" class="flow-line" style="animation-delay:0.3s" />
                    <rect x="168" y="44" width="72" height="28" rx="2" fill="rgba(255,255,255,0.03)" stroke="rgba(255,255,255,0.1)" stroke-width="0.8" />
                    <text x="204" y="55" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.25)">GRID EXPORT</text>
                    <text x="204" y="66" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.15)">SEG income</text>
                    <line x1="152" y1="46" x2="168" y2="58" stroke="rgba(255,255,255,0.12)" stroke-width="0.8" stroke-dasharray="3 4" />
                    <rect x="256" y="24" width="60" height="28" rx="2" fill="rgba(10,107,82,0.08)" stroke="rgba(10,107,82,0.2)" stroke-width="0.8" />
                    <text x="286" y="35" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.5)">DIESEL GEN</text>
                    <text x="286" y="47" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.2)">hybrid standby</text>
                    <line x1="240" y1="38" x2="256" y2="38" stroke="rgba(200,118,42,0.3)" stroke-width="0.8" stroke-dasharray="3 4" />
                </svg>
                <div class="cs-metrics-strip">
                    <div class="csm"><span class="csm-val">280<em> kWp</em></span><span class="csm-key">Array size</span></div>
                    <div class="csm"><span class="csm-val">120<em> kWh</em></span><span class="csm-key">Battery</span></div>
                    <div class="csm"><span class="csm-val">£52<em>k</em></span><span class="csm-key">Year 1 saving</span></div>
                </div>
            </div>
            <div class="cs-body">
                <div class="cs-loc">Shropshire · 350-head Dairy Farm</div>
                <h3 class="cs-title">280 kWp roof array with 120 kWh storage and diesel hybrid integration</h3>
                <p class="cs-summary">Three portal-frame buildings with a combined 280 kWp array. 120 kWh BESS covers evening milking and overnight refrigeration. Existing diesel standby generator integrated under hybrid control — runtime reduced from 400 to 18 hours annually. Smart Export Guarantee tariff maximised during spring and summer surplus periods.</p>
                <div class="cs-outcomes">
                    <div class="cs-outcome">
                        <div class="cs-outcome-dot"></div>£52,000 electricity cost reduction in year one
                    </div>
                    <div class="cs-outcome">
                        <div class="cs-outcome-dot"></div>Self-consumption rate 84% across the year
                    </div>
                    <div class="cs-outcome">
                        <div class="cs-outcome-dot"></div>Generator fuel cost reduced by 96%
                    </div>
                    <div class="cs-outcome">
                        <div class="cs-outcome-dot"></div>Payback modelled at 4.6 years
                    </div>
                </div>
                <a href="<?= BASE_URL ?>case-studies/dairy-farm-shropshire " class="cs-link">Read full case study →</a>
            </div>
        </div>
    </div>

    <!-- Process -->
    <div class="reveal rd1">
        <div class="section-label" style="margin-bottom:24px;">Site assessment process</div>
        <div class="process-card">
            <div class="proc-label">How agricultural projects are assessed</div>
            <h3 class="proc-title">From site visit<br>to <em>generation</em></h3>
            <div class="proc-steps">
                <div class="proc-step">
                    <div class="proc-num-wrap">
                        <div class="proc-num">1</div>
                        <div class="proc-connector"></div>
                    </div>
                    <div>
                        <div class="proc-step-title">Site assessment</div>
                        <div class="proc-step-desc">Roof and land survey, structural assessment, grid connection review, consumption data analysis and operational load profiling.</div>
                    </div>
                </div>
                <div class="proc-step">
                    <div class="proc-num-wrap">
                        <div class="proc-num">2</div>
                        <div class="proc-connector"></div>
                    </div>
                    <div>
                        <div class="proc-step-title">System design</div>
                        <div class="proc-step-desc">Array sizing, battery specification, yield modelling and 25-year financial projection with SEG income and tariff sensitivity analysis.</div>
                    </div>
                </div>
                <div class="proc-step">
                    <div class="proc-num-wrap">
                        <div class="proc-num">3</div>
                        <div class="proc-connector"></div>
                    </div>
                    <div>
                        <div class="proc-step-title">Planning &amp; grid</div>
                        <div class="proc-step-desc">Permitted development confirmation or full planning support. DNO application and G99/G100 management where export is included.</div>
                    </div>
                </div>
                <div class="proc-step">
                    <div class="proc-num-wrap">
                        <div class="proc-num">4</div>
                        <div class="proc-connector"></div>
                    </div>
                    <div>
                        <div class="proc-step-title">Installation</div>
                        <div class="proc-step-desc">Phased installation programme minimising disruption to farm operations. MCS-certified installation and commissioning.</div>
                    </div>
                </div>
                <div class="proc-step">
                    <div class="proc-num-wrap">
                        <div class="proc-num">5</div>
                    </div>
                    <div>
                        <div class="proc-step-title">Monitoring</div>
                        <div class="proc-step-desc">Live generation monitoring, yield vs modelled review, battery scheduling and SEG export reporting.</div>
                    </div>
                </div>
            </div>
            <a href="/contact" class="proc-cta">Request a site assessment →</a>
        </div>
    </div>
</section>

<!-- CTA BAND -->
<section class="cta-band reveal">
    <div>
        <h2 class="cta-band-title">Request a<br><em>site assessment</em></h2>
        <p class="cta-band-sub">Every agricultural site is different — roof orientation, structural condition, operational load pattern and grid capacity all vary. A site assessment gives you a clear picture of what's achievable and what it returns before you commit to anything.</p>
    </div>
    <div class="cta-group">
        <a href="/contact" class="btn-primary-dark">Request a site assessment →</a>
        <a href="/contact" class="btn-outline-dark">Talk to an engineer</a>
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