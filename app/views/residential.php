<?php
$pageTitle = 'Residential Systems - Fort Energy';
$activePage   = 'residential';
$metaDesc     = 'PLACEHOLDER — SEO to supply';
$canonicalUrl = 'https://fortenergy.co.uk/residential';
$pageCss      = 'residentials';
$schemaJson   = json_encode([
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',                'item' => 'https://fortenergy.co.uk'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Residential Systems', 'item' => 'https://fortenergy.co.uk/residential'],
    ],
]);
ob_start();
?>
<!-- BREADCRUMB -->
<div class="breadcrumb">
    <a href="<?= BASE_URL ?>" class="bc-item">Home</a>
    <span class="bc-sep">/</span>
    <span class="bc-current">Residential Systems</span>
</div>

<!-- HERO -->
<section class="hero">
    <div class="hero-left">
        <div class="hero-eyebrow">Sector 03 — Residential Systems</div>
        <h1 class="hero-h1">Structured energy<br>systems for<br><em>every home</em></h1>
        <p class="hero-sub">Solar, battery storage, EV charging and ventilation systems for high-performance homes. Designed on real energy usage patterns — not theoretical outputs. Three tiers, one engineering standard.</p>
        <div class="hero-ctas">
            <a href="<?= BASE_URL ?>contact" class="btn-primary">Get a system designed for your home →</a>
            <a href="<?= BASE_URL ?>contact" class="btn-secondary">Talk to an engineer</a>
        </div>
    </div>

    <!-- Hero: residential system infographic -->
    <div class="hero-diagram">
        <svg width="320" height="420" viewBox="0 0 320 420" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="rgrid" width="18" height="18" patternUnits="userSpaceOnUse">
                    <path d="M 18 0 L 0 0 0 18" fill="none" stroke="rgba(255,255,255,0.04)" stroke-width="0.5" />
                </pattern>
                <radialGradient id="rglow" cx="50%" cy="40%" r="50%">
                    <stop offset="0%" stop-color="#0A6B52" stop-opacity="0.2" />
                    <stop offset="100%" stop-color="#0A6B52" stop-opacity="0" />
                </radialGradient>
            </defs>
            <rect width="320" height="420" fill="url(#rgrid)" />
            <circle cx="160" cy="170" r="140" fill="url(#rglow)" />

            <!-- Sun -->
            <circle cx="160" cy="32" r="18" fill="#C8762A" opacity="0.85" />
            <circle cx="160" cy="32" r="26" fill="none" stroke="#C8762A" stroke-width="0.8" opacity="0.25" />
            <g stroke="#C8762A" stroke-width="1" opacity="0.4">
                <line x1="160" y1="6" x2="160" y2="11" />
                <line x1="160" y1="53" x2="160" y2="58" />
                <line x1="134" y1="32" x2="129" y2="32" />
                <line x1="186" y1="32" x2="191" y2="32" />
                <line x1="142" y1="14" x2="138" y2="10" />
                <line x1="178" y1="14" x2="182" y2="10" />
                <line x1="142" y1="50" x2="138" y2="54" />
                <line x1="178" y1="50" x2="182" y2="54" />
            </g>

            <!-- Irradiance arrow -->
            <line x1="160" y1="50" x2="160" y2="78" stroke="#C8762A" stroke-width="1.5" stroke-dasharray="3 3" class="flow-line" />

            <!-- House structure -->
            <g transform="translate(60,88)">
                <!-- Roof with in-roof solar -->
                <polygon points="0,60 100,0 200,60" fill="rgba(10,107,82,0.08)" stroke="rgba(255,255,255,0.1)" stroke-width="1" />
                <!-- In-roof solar panels -->
                <polygon points="30,45 100,4 170,45" fill="rgba(10,107,82,0.35)" stroke="#0A6B52" stroke-width="0.8" />
                <!-- Panel grid lines -->
                <line x1="65" y1="24" x2="53" y2="45" stroke="rgba(255,255,255,0.15)" stroke-width="0.5" />
                <line x1="100" y1="4" x2="100" y2="45" stroke="rgba(255,255,255,0.15)" stroke-width="0.5" />
                <line x1="135" y1="24" x2="147" y2="45" stroke="rgba(255,255,255,0.15)" stroke-width="0.5" />
                <line x1="40" y1="34" x2="160" y2="34" stroke="rgba(255,255,255,0.15)" stroke-width="0.5" />
                <!-- Walls -->
                <rect x="14" y="60" width="172" height="110" fill="rgba(255,255,255,0.03)" stroke="rgba(255,255,255,0.12)" stroke-width="1" />
                <!-- Windows -->
                <rect x="26" y="74" width="36" height="28" fill="rgba(10,107,82,0.2)" stroke="#0A6B52" stroke-width="0.8" />
                <rect x="138" y="74" width="36" height="28" fill="rgba(10,107,82,0.2)" stroke="#0A6B52" stroke-width="0.8" />
                <!-- Door -->
                <rect x="78" y="108" width="44" height="62" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.1)" stroke-width="0.8" />
                <circle cx="114" cy="139" r="2" fill="rgba(255,255,255,0.2)" />
                <!-- MVHR vent indication -->
                <rect x="26" y="112" width="36" height="16" fill="rgba(10,107,82,0.08)" stroke="rgba(10,107,82,0.25)" stroke-width="0.8" rx="2" />
                <text x="44" y="122" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(10,107,82,0.6)">MVHR</text>
            </g>

            <!-- Solar label on roof -->
            <text x="160" y="122" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.35)" letter-spacing="1">IN-ROOF SOLAR</text>

            <!-- Flow from roof to inverter -->
            <line x1="160" y1="148" x2="160" y2="270" stroke="#0D8A6A" stroke-width="1.2" class="flow-line" style="animation-delay:0.3s" />

            <!-- Battery (left of house) -->
            <g transform="translate(10,260)">
                <rect x="0" y="0" width="58" height="52" rx="2" fill="rgba(10,107,82,0.12)" stroke="#0A6B52" stroke-width="1.2" />
                <rect x="8" y="8" width="42" height="8" fill="#0A6B52" opacity="0.7" rx="1" />
                <rect x="8" y="20" width="32" height="8" fill="#0A6B52" opacity="0.45" rx="1" />
                <rect x="8" y="32" width="18" height="8" fill="#0A6B52" opacity="0.25" rx="1" />
                <text x="29" y="58" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A" letter-spacing="1">BATTERY</text>
                <text x="29" y="68" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.25)">16 kWh</text>
            </g>
            <path d="M 160 280 L 68 286" stroke="#0D8A6A" stroke-width="1" stroke-dasharray="4 3" class="flow-line" style="animation-delay:0.6s" />

            <!-- Inverter node -->
            <rect x="126" y="270" width="68" height="32" rx="2" fill="rgba(10,107,82,0.15)" stroke="#0A6B52" stroke-width="1.2" />
            <text x="160" y="284" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A" letter-spacing="1">INVERTER</text>
            <text x="160" y="295" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.25)">EMS control</text>

            <!-- EV charger (right) -->
            <g transform="translate(256,260)">
                <rect x="0" y="0" width="52" height="52" rx="2" fill="rgba(10,107,82,0.12)" stroke="#0A6B52" stroke-width="1.2" />
                <text x="26" y="24" text-anchor="middle" font-family="'DM Mono',monospace" font-size="14" fill="#0D8A6A">⚡</text>
                <rect x="8" y="30" width="36" height="5" fill="#0A6B52" opacity="0.4" rx="1" />
                <rect x="8" y="38" width="22" height="5" fill="#0A6B52" opacity="0.25" rx="1" />
                <text x="26" y="60" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A" letter-spacing="1">EV CHARGE</text>
            </g>
            <path d="M 194" y1="286" x2="256" y2="286" stroke="#0D8A6A" stroke-width="1" stroke-dasharray="4 3" class="flow-line" style="animation-delay:0.9s" />
            <line x1="194" y1="286" x2="256" y2="286" stroke="#0D8A6A" stroke-width="1" stroke-dasharray="4 3" class="flow-line" style="animation-delay:0.9s" />

            <!-- Hot water (bottom) -->
            <g transform="translate(110,330)">
                <rect x="0" y="0" width="100" height="40" rx="2" fill="rgba(200,118,42,0.08)" stroke="rgba(200,118,42,0.3)" stroke-width="1" />
                <text x="50" y="16" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(200,118,42,0.7)" letter-spacing="1">HOT WATER</text>
                <text x="50" y="28" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.25)">surplus solar diversion</text>
            </g>
            <line x1="160" y1="302" x2="160" y2="330" stroke="rgba(200,118,42,0.4)" stroke-width="1" stroke-dasharray="3 4" />

            <!-- Grid connection -->
            <rect x="116" y="380" width="88" height="32" rx="2" fill="rgba(255,255,255,0.04)" stroke="rgba(255,255,255,0.1)" stroke-width="1" />
            <text x="160" y="399" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.25)" letter-spacing="1">GRID EXPORT / IMPORT</text>

            <!-- Site boundary -->
            <rect x="6" y="80" width="308" height="280" fill="none" stroke="rgba(10,107,82,0.1)" stroke-width="1" stroke-dasharray="6 10" rx="4" />
            <text x="14" y="92" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.3)" letter-spacing="2">HOME SYSTEM BOUNDARY</text>
        </svg>
    </div>
</section>

<!-- TIERS -->
<section class="tiers">
    <div class="tiers-header reveal">
        <div>
            <div class="section-label">System tiers — performance is recommended</div>
            <h2 class="section-title">Three tiers.<br><em>One standard.</em></h2>
        </div>
        <div style="font-family:var(--mono);font-size:64px;font-weight:500;color:var(--rule);line-height:1;">03</div>
    </div>

    <div class="tiers-grid reveal">

        <!-- Tier 01: Essential -->
        <div class="tier-card essential">
            <span class="tier-badge essential-badge">Tier 01 — Essential</span>
            <div class="tier-num">ESSENTIAL</div>
            <div class="tier-name">Essential</div>
            <div class="tier-tagline">Cost-conscious entry point</div>
            <div class="tier-specs">
                <div class="tier-spec">
                    <div class="tier-spec-dot"></div>
                    <span class="tier-spec-label">Solar array</span>
                    <span class="tier-spec-val">2.5–5 kWp</span>
                </div>
                <div class="tier-spec">
                    <div class="tier-spec-dot"></div>
                    <span class="tier-spec-label">Battery storage</span>
                    <span class="tier-spec-val">5–16 kWh</span>
                </div>
                <div class="tier-spec">
                    <div class="tier-spec-dot"></div>
                    <span class="tier-spec-label">Smart export</span>
                    <span class="tier-spec-val">Included</span>
                </div>
                <div class="tier-spec">
                    <div class="tier-spec-dot"></div>
                    <span class="tier-spec-label">EV charging</span>
                    <span class="tier-spec-val">Optional</span>
                </div>
                <div class="tier-spec">
                    <div class="tier-spec-dot"></div>
                    <span class="tier-spec-label">Monitoring</span>
                    <span class="tier-spec-val">Basic app</span>
                </div>
            </div>
            <a href="<?= BASE_URL ?>contact" class="tier-cta essential-cta">Get a quote →</a>
        </div>

        <!-- Tier 02: Performance — RECOMMENDED -->
        <div class="tier-card performance">
            <span class="tier-badge performance-badge">Most specified</span>
            <div class="tier-num">PERFORMANCE</div>
            <div class="tier-name" style="color:var(--white);">Performance</div>
            <div class="tier-tagline">Balanced cost vs savings</div>
            <div class="tier-specs">
                <div class="tier-spec">
                    <div class="tier-spec-dot"></div>
                    <span class="tier-spec-label">Solar array</span>
                    <span class="tier-spec-val">5–12 kWp</span>
                </div>
                <div class="tier-spec">
                    <div class="tier-spec-dot"></div>
                    <span class="tier-spec-label">Battery storage</span>
                    <span class="tier-spec-val">10–32 kWh</span>
                </div>
                <div class="tier-spec">
                    <div class="tier-spec-dot"></div>
                    <span class="tier-spec-label">EV charging</span>
                    <span class="tier-spec-val">Integrated</span>
                </div>
                <div class="tier-spec">
                    <div class="tier-spec-dot"></div>
                    <span class="tier-spec-label">Hot water diversion</span>
                    <span class="tier-spec-val">Included</span>
                </div>
                <div class="tier-spec">
                    <div class="tier-spec-dot"></div>
                    <span class="tier-spec-label">Monitoring</span>
                    <span class="tier-spec-val">Full dashboard</span>
                </div>
            </div>
            <a href="<?= BASE_URL ?>contact" class="tier-cta performance-cta">Get a quote →</a>
        </div>

        <!-- Tier 03: Premium -->
        <div class="tier-card premium">
            <span class="tier-badge premium-badge">Tier 03 — Premium</span>
            <div class="tier-num">PREMIUM</div>
            <div class="tier-name">Premium</div>
            <div class="tier-tagline">High demand &amp; backup</div>
            <div class="tier-specs">
                <div class="tier-spec">
                    <div class="tier-spec-dot"></div>
                    <span class="tier-spec-label">Solar array</span>
                    <span class="tier-spec-val">13+ kWp</span>
                </div>
                <div class="tier-spec">
                    <div class="tier-spec-dot"></div>
                    <span class="tier-spec-label">Battery storage</span>
                    <span class="tier-spec-val">Up to 64 kWh</span>
                </div>
                <div class="tier-spec">
                    <div class="tier-spec-dot"></div>
                    <span class="tier-spec-label">EV charging</span>
                    <span class="tier-spec-val">Integrated</span>
                </div>
                <div class="tier-spec">
                    <div class="tier-spec-dot"></div>
                    <span class="tier-spec-label">MVHR</span>
                    <span class="tier-spec-val">Included</span>
                </div>
                <div class="tier-spec">
                    <div class="tier-spec-dot"></div>
                    <span class="tier-spec-label">Full backup</span>
                    <span class="tier-spec-val">Whole-home</span>
                </div>
            </div>
            <a href="<?= BASE_URL ?>contact" class="tier-cta premium-cta">Get a quote →</a>
        </div>

    </div>

    <!-- Sub-page links -->
    <div class="reveal" style="display:flex;gap:12px;flex-wrap:wrap;">
        <a href="<?= BASE_URL ?>residential/solar-reroof" style="display:inline-flex;align-items:center;gap:8px;font-family:var(--mono);font-size:11px;letter-spacing:0.08em;color:var(--teal);text-transform:uppercase;text-decoration:none;border:1px solid rgba(10,107,82,0.3);padding:10px 16px;background:var(--teal-bg);transition:background 0.2s;" onmouseover="this.style.background='rgba(10,107,82,0.2)'" onmouseout="this.style.background='var(--teal-bg)'">Solar reroof →</a>
        <a href="<?= BASE_URL ?>residential/custom" style="display:inline-flex;align-items:center;gap:8px;font-family:var(--mono);font-size:11px;letter-spacing:0.08em;color:var(--teal);text-transform:uppercase;text-decoration:none;border:1px solid rgba(10,107,82,0.3);padding:10px 16px;background:var(--teal-bg);transition:background 0.2s;" onmouseover="this.style.background='rgba(10,107,82,0.2)'" onmouseout="this.style.background='var(--teal-bg)'">Custom residential systems →</a>
    </div>
</section>

<!-- WORKED EXAMPLE -->
<div class="worked-example reveal">
    <div>
        <div class="we-label">Worked example — typical configuration</div>
        <h2 class="we-title">4-bed <em>Performance</em><br>system</h2>
        <p class="we-desc">A four-bedroom detached home on the Performance tier. System sized against 12 months of actual consumption data. South-facing roof at 35° pitch. One EV on site. Annual saving accounts for current export tariff, avoided import and EV running cost reduction.</p>
    </div>
    <div class="we-metrics">
        <div class="we-metric">
            <span class="we-metric-val">9.2<em> kWp</em></span>
            <span class="we-metric-label">Solar array</span>
        </div>
        <div class="we-metric">
            <span class="we-metric-val">16<em> kWh</em></span>
            <span class="we-metric-label">Battery storage</span>
        </div>
        <div class="we-metric">
            <span class="we-metric-val">£1.2–2.2<em>k</em></span>
            <span class="we-metric-label">Annual saving</span>
        </div>
        <div class="we-metric">
            <span class="we-metric-val">5–9<em> yr</em></span>
            <span class="we-metric-label">Payback</span>
        </div>
    </div>
</div>

<!-- INTEGRATED SERVICES -->
<section class="integrated">
    <div class="integrated-header reveal">
        <div>
            <div class="section-label">Beyond solar</div>
            <h2 class="section-title">Integrated<br>home systems</h2>
        </div>
        <div class="services-count">03</div>
    </div>

    <div class="integrated-grid">

        <!-- EV Charging -->
        <div class="int-card reveal">
            <div class="int-img">
                <img src="https://images.unsplash.com/photo-1593941707882-a5bba14938c7?w=700&q=80&fit=crop" alt="EV charger integrated with home solar system" loading="lazy" />
                <div class="int-img-overlay"></div>
                <span class="int-img-ref">INT-01</span>
            </div>
            <div class="int-body">
                <div class="int-title">EV charging</div>
                <div class="int-desc">Tariff-aware charging integrated with solar generation and battery state. Charges from solar surplus first, grid off-peak second. No manual management required. Whole-day running cost effectively eliminated on Performance and Premium tiers.</div>
                <div class="int-tags">
                    <span class="int-tag">SOLAR-FIRST</span>
                    <span class="int-tag">TARIFF-AWARE</span>
                    <span class="int-tag">7kW / 22kW</span>
                </div>
            </div>
        </div>

        <!-- MVHR -->
        <div class="int-card reveal rd1">
            <div class="int-img">
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=700&q=80&fit=crop" alt="MVHR mechanical ventilation heat recovery unit installation" loading="lazy" />
                <div class="int-img-overlay"></div>
                <span class="int-img-ref">INT-02</span>
            </div>
            <div class="int-body">
                <div class="int-title">MVHR</div>
                <div class="int-desc">Mechanical ventilation with heat recovery. Recovers up to 90% of heat from outgoing air, maintains fresh air quality throughout and eliminates condensation. Increasingly standard on high-performance retrofits and new builds.</div>
                <div class="int-tags">
                    <span class="int-tag">UP TO 90% RECOVERY</span>
                    <span class="int-tag">RETROFIT</span>
                    <span class="int-tag">NEW BUILD</span>
                </div>
            </div>
        </div>

        <!-- Hot water -->
        <div class="int-card reveal rd2">
            <div class="int-img">
                <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=700&q=80&fit=crop" alt="Hot water cylinder and plumbing in plant room" loading="lazy" />
                <div class="int-img-overlay"></div>
                <span class="int-img-ref">INT-03</span>
            </div>
            <div class="int-body">
                <div class="int-title">Hot water &amp; heating</div>
                <div class="int-desc">Surplus solar diverted to immersion heater or heat pump pre-heat instead of exporting at low tariff rates. One of the highest-value uses of excess generation. Integrated with battery scheduling so storage is prioritised correctly.</div>
                <div class="int-tags">
                    <span class="int-tag">SOLAR DIVERSION</span>
                    <span class="int-tag">HEAT PUMP READY</span>
                    <span class="int-tag">IMMERSION</span>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ENHANCE PILLS -->
<div class="enhance reveal">
    <div class="enhance-inner">
        <span class="enhance-label">Enhance your system</span>
        <div class="enhance-divider"></div>
        <div class="pills">
            <span class="pill">Extra battery capacity</span>
            <span class="pill">Backup power capability</span>
            <span class="pill">Smart monitoring</span>
            <span class="pill">Power diverter</span>
            <span class="pill">Second EV charger</span>
        </div>
        <div class="enhance-divider"></div>
        <div class="pills">
            <a href="<?= BASE_URL ?>residential/solar-reroof" class="pill-link">Solar reroof →</a>
            <a href="<?= BASE_URL ?>residential/custom" class="pill-link">Custom systems →</a>
        </div>
    </div>
</div>

<!-- CASE STUDY + SYSTEM DIAGRAM -->
<section class="proof">
    <div class="reveal">
        <div class="section-label" style="margin-bottom:24px;">Case study</div>
        <div class="cs-card">
            <div class="cs-panel">
                <div class="cs-bg"></div>
                <span class="cs-badge">Residential — Performance tier</span>
                <!-- inline system flow diagram -->
                <svg width="100%" viewBox="0 0 320 80" fill="none" style="position:relative;z-index:1;margin-top:16px;">
                    <!-- Solar → Inverter -->
                    <rect x="4" y="24" width="56" height="28" rx="2" fill="rgba(10,107,82,0.15)" stroke="#0A6B52" stroke-width="1" />
                    <text x="32" y="35" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A">SOLAR</text>
                    <text x="32" y="46" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.3)">9.2 kWp</text>
                    <line x1="60" y1="38" x2="84" y2="38" stroke="#0D8A6A" stroke-width="1" stroke-dasharray="4 3" class="flow-line" />
                    <!-- Inverter/EMS -->
                    <rect x="84" y="24" width="64" height="28" rx="2" fill="rgba(10,107,82,0.12)" stroke="#0A6B52" stroke-width="1" />
                    <text x="116" y="35" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A">INVERTER</text>
                    <text x="116" y="46" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.25)">EMS</text>
                    <!-- Battery -->
                    <rect x="4" y="58" width="56" height="18" rx="2" fill="rgba(10,107,82,0.1)" stroke="rgba(10,107,82,0.35)" stroke-width="0.8" />
                    <text x="32" y="70" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="#0D8A6A">BATTERY 16kWh</text>
                    <path d="M 116 52 L 32 58" stroke="rgba(10,107,82,0.5)" stroke-width="0.8" stroke-dasharray="3 3" class="flow-line" style="animation-delay:0.5s" />
                    <!-- EV -->
                    <rect x="164" y="4" width="56" height="28" rx="2" fill="rgba(10,107,82,0.1)" stroke="rgba(10,107,82,0.3)" stroke-width="0.8" />
                    <text x="192" y="21" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A">EV ⚡</text>
                    <line x1="148" y1="30" x2="164" y2="18" stroke="#0D8A6A" stroke-width="0.8" stroke-dasharray="4 3" class="flow-line" style="animation-delay:0.3s" />
                    <!-- Hot water -->
                    <rect x="164" y="42" width="56" height="28" rx="2" fill="rgba(200,118,42,0.08)" stroke="rgba(200,118,42,0.25)" stroke-width="0.8" />
                    <text x="192" y="53" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(200,118,42,0.6)">HOT WATER</text>
                    <text x="192" y="63" text-anchor="middle" font-family="'DM Mono',monospace" font-size="5" fill="rgba(255,255,255,0.2)">solar divert</text>
                    <line x1="148" y1="46" x2="164" y2="56" stroke="rgba(200,118,42,0.4)" stroke-width="0.8" stroke-dasharray="3 3" class="flow-line" style="animation-delay:0.7s" />
                    <!-- MVHR -->
                    <rect x="236" y="4" width="80" height="28" rx="2" fill="rgba(10,107,82,0.08)" stroke="rgba(10,107,82,0.2)" stroke-width="0.8" />
                    <text x="276" y="21" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.6)">MVHR</text>
                    <!-- Grid -->
                    <rect x="236" y="42" width="80" height="28" rx="2" fill="rgba(255,255,255,0.03)" stroke="rgba(255,255,255,0.1)" stroke-width="0.8" />
                    <text x="276" y="59" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.25)">GRID EXPORT</text>
                    <line x1="220" y1="38" x2="236" y2="55" stroke="rgba(255,255,255,0.1)" stroke-width="0.8" stroke-dasharray="3 4" />
                </svg>
                <div class="cs-metrics-strip">
                    <div class="csm"><span class="csm-val">9.2<em> kWp</em></span><span class="csm-key">Solar</span></div>
                    <div class="csm"><span class="csm-val">16<em> kWh</em></span><span class="csm-key">Storage</span></div>
                    <div class="csm"><span class="csm-val">£1,800<em>+</em></span><span class="csm-key">Year 1 saving</span></div>
                </div>
            </div>
            <div class="cs-body">
                <div class="cs-loc">South East England · 4-bed detached</div>
                <h3 class="cs-title">4-bed Performance — full integrated system</h3>
                <p class="cs-summary">9.2 kWp in-roof solar, 16 kWh battery storage, MVHR retrofit and integrated 7 kW EV charger. System sized against 14 months of smart meter data. EMS schedules charging from solar surplus and off-peak tariff. MVHR recovers 87% of heat from extract air.</p>
                <div class="cs-outcomes">
                    <div class="cs-outcome">
                        <div class="cs-outcome-dot"></div>£1,800+ savings in year one at current tariff rates
                    </div>
                    <div class="cs-outcome">
                        <div class="cs-outcome-dot"></div>EV running cost effectively eliminated
                    </div>
                    <div class="cs-outcome">
                        <div class="cs-outcome-dot"></div>Gas boiler use reduced 40% via heat pump pre-heat
                    </div>
                    <div class="cs-outcome">
                        <div class="cs-outcome-dot"></div>Payback modelled at 6.8 years
                    </div>
                </div>
                <a href="<?= BASE_URL ?>case-studies" class="cs-link">Read full case study →</a>
            </div>
        </div>
    </div>

    <!-- System design card -->
    <div class="reveal rd1">
        <div class="section-label" style="margin-bottom:24px;">How it's designed</div>
        <div class="system-diagram-card">
            <div class="sdg-label">Design process</div>
            <h3 class="sdg-title" style="font-family:var(--display);font-size:22px;font-weight:700;color:var(--white);line-height:1.15;margin-bottom:24px;">Designed on your<br><em style="font-style:italic;color:var(--teal-lt);">real usage data</em></h3>
            <div style="display:flex;flex-direction:column;gap:0;">
                <!-- Step 1 -->
                <div style="display:grid;grid-template-columns:32px 1fr;gap:16px;padding:16px 0;border-bottom:1px solid rgba(255,255,255,0.06);">
                    <div style="width:32px;height:32px;background:rgba(10,107,82,0.15);border:1px solid rgba(10,107,82,0.35);display:flex;align-items:center;justify-content:center;font-family:var(--mono);font-size:11px;color:var(--teal-lt);flex-shrink:0;">1</div>
                    <div>
                        <div style="font-family:var(--sans);font-size:14px;font-weight:700;color:var(--white);margin-bottom:3px;">Consumption review</div>
                        <div style="font-size:12px;color:rgba(255,255,255,0.4);line-height:1.6;">Smart meter data or energy bills — 12 months minimum. Half-hourly where available.</div>
                    </div>
                </div>
                <!-- Step 2 -->
                <div style="display:grid;grid-template-columns:32px 1fr;gap:16px;padding:16px 0;border-bottom:1px solid rgba(255,255,255,0.06);">
                    <div style="width:32px;height:32px;background:rgba(10,107,82,0.15);border:1px solid rgba(10,107,82,0.35);display:flex;align-items:center;justify-content:center;font-family:var(--mono);font-size:11px;color:var(--teal-lt);flex-shrink:0;">2</div>
                    <div>
                        <div style="font-family:var(--sans);font-size:14px;font-weight:700;color:var(--white);margin-bottom:3px;">System sizing</div>
                        <div style="font-size:12px;color:rgba(255,255,255,0.4);line-height:1.6;">Array, battery and EV charger sized against your pattern. Modelled yield vs actual usage.</div>
                    </div>
                </div>
                <!-- Step 3 -->
                <div style="display:grid;grid-template-columns:32px 1fr;gap:16px;padding:16px 0;border-bottom:1px solid rgba(255,255,255,0.06);">
                    <div style="width:32px;height:32px;background:rgba(10,107,82,0.15);border:1px solid rgba(10,107,82,0.35);display:flex;align-items:center;justify-content:center;font-family:var(--mono);font-size:11px;color:var(--teal-lt);flex-shrink:0;">3</div>
                    <div>
                        <div style="font-family:var(--sans);font-size:14px;font-weight:700;color:var(--white);margin-bottom:3px;">Financial model</div>
                        <div style="font-size:12px;color:rgba(255,255,255,0.4);line-height:1.6;">Payback, annual saving and 25-year financial projection with tariff sensitivity.</div>
                    </div>
                </div>
                <!-- Step 4 -->
                <div style="display:grid;grid-template-columns:32px 1fr;gap:16px;padding:16px 0;">
                    <div style="width:32px;height:32px;background:rgba(10,107,82,0.15);border:1px solid rgba(10,107,82,0.35);display:flex;align-items:center;justify-content:center;font-family:var(--mono);font-size:11px;color:var(--teal-lt);flex-shrink:0;">4</div>
                    <div>
                        <div style="font-family:var(--sans);font-size:14px;font-weight:700;color:var(--white);margin-bottom:3px;">Installation &amp; handover</div>
                        <div style="font-size:12px;color:rgba(255,255,255,0.4);line-height:1.6;">MCS-certified installation, DNO notification, monitoring app setup and O&amp;M documentation.</div>
                    </div>
                </div>
            </div>
            <a href="<?= BASE_URL ?>contact" style="display:block;text-align:center;background:var(--teal);color:var(--white);font-family:var(--sans);font-weight:600;font-size:13px;letter-spacing:0.05em;padding:16px;text-decoration:none;margin-top:28px;transition:background 0.2s;" onmouseover="this.style.background='var(--teal-lt)'" onmouseout="this.style.background='var(--teal)'">Get a system designed for your home →</a>
        </div>
    </div>
</section>

<!-- CTA BAND -->
<section class="cta-band reveal">
    <div>
        <h2 class="cta-band-title">Get a system<br>designed for<br><em>your home</em></h2>
        <p class="cta-band-sub">Every system is sized against real consumption data — not a generic kWp figure. Tell us about your home, your usage and your goals. We'll send you a detailed design and financial model.</p>
    </div>
    <div class="cta-group">
        <a href="<?= BASE_URL ?>contact" class="btn-primary-dark">Start a system design →</a>
        <a href="<?= BASE_URL ?>contact" class="btn-outline-dark">Talk to an engineer</a>
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