<?php
$pageTitle = 'Building Integrated Solar - Fort Energy';
$activePage   = 'bipv';
$metaDesc     = 'PLACEHOLDER — SEO to supply';
$canonicalUrl = 'https://fortenergy.co.uk/bipv';
$pageCSS      = 'bipv.css';
$schemaJson   = json_encode([
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://fortenergy.co.uk'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Building Integrated Solar', 'item' => 'https://fortenergy.co.uk/bipv'],
    ],
]);
ob_start();


?>

<!-- BREADCRUMB -->
<div class="breadcrumb">
    <a href="<?= BASE_URL ?>" class="bc-item">Home</a>
    <span class="bc-sep">/</span>
    <span class="bc-current">Building Integrated Solar</span>
</div>

<!-- HERO -->
<section class="hero">
    <div class="hero-left">
        <div class="hero-eyebrow">Sector 05 — Building Integrated Solar</div>
        <h1 class="hero-h1">Solar as<br><em>architecture</em></h1>
        <p class="hero-sub">In-roof systems, cladding and facades, curtain walls and glazing. BIPV specified for architects, developers and contractors where the solar installation is also the building envelope — not an addition to it.</p>
        <div class="hero-ctas">
            <a href="<?= BASE_URL ?>contact" class="btn-primary">Book a specifier consultation →</a>
            <a href="<?= BASE_URL ?>contact" class="btn-secondary">Request product information</a>
        </div>
    </div>

    <!-- Hero infographic: BIPV building cross-section diagram -->
    <div class="hero-diagram">
        <svg width="340" height="400" viewBox="0 0 340 400" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="bgrid" width="18" height="18" patternUnits="userSpaceOnUse">
                    <path d="M 18 0 L 0 0 0 18" fill="none" stroke="rgba(255,255,255,0.04)" stroke-width="0.5" />
                </pattern>
                <radialGradient id="bglow" cx="50%" cy="35%" r="55%">
                    <stop offset="0%" stop-color="#0A6B52" stop-opacity="0.18" />
                    <stop offset="100%" stop-color="#0A6B52" stop-opacity="0" />
                </radialGradient>
            </defs>
            <rect width="340" height="400" fill="url(#bgrid)" />
            <circle cx="170" cy="160" r="160" fill="url(#bglow)" />

            <!-- Sun -->
            <circle cx="60" cy="36" r="16" fill="#C8762A" opacity="0.8" />
            <g stroke="#C8762A" stroke-width="1" opacity="0.4">
                <line x1="60" y1="14" x2="60" y2="19" />
                <line x1="60" y1="53" x2="60" y2="58" />
                <line x1="38" y1="36" x2="33" y2="36" />
                <line x1="82" y1="36" x2="87" y2="36" />
                <line x1="44" y1="20" x2="40" y2="16" />
                <line x1="76" y1="20" x2="80" y2="16" />
            </g>
            <!-- Irradiance arrows hitting building -->
            <line x1="78" y1="46" x2="120" y2="82" stroke="#C8762A" stroke-width="1" stroke-dasharray="3 3" class="flow-line" />
            <line x1="68" y1="50" x2="100" y2="130" stroke="#C8762A" stroke-width="1" stroke-dasharray="3 3" class="flow-line" style="animation-delay:0.4s" />
            <line x1="72" y1="48" x2="108" y2="200" stroke="#C8762A" stroke-width="0.8" stroke-dasharray="3 4" class="flow-line" style="animation-delay:0.8s" opacity="0.5" />

            <!-- Building facade — tall mixed use -->
            <g transform="translate(100, 56)">
                <!-- Main structure -->
                <rect x="0" y="0" width="180" height="300" fill="rgba(255,255,255,0.02)" stroke="rgba(255,255,255,0.1)" stroke-width="1" />

                <!-- IN-ROOF SOLAR (top) — distinct green tint -->
                <rect x="0" y="0" width="180" height="36" fill="rgba(10,107,82,0.35)" stroke="#0A6B52" stroke-width="1" />
                <!-- panel cells -->
                <line x1="0" y1="12" x2="180" y2="12" stroke="rgba(255,255,255,0.15)" stroke-width="0.5" />
                <line x1="0" y1="24" x2="180" y2="24" stroke="rgba(255,255,255,0.15)" stroke-width="0.5" />
                <line x1="36" y1="0" x2="36" y2="36" stroke="rgba(255,255,255,0.15)" stroke-width="0.5" />
                <line x1="72" y1="0" x2="72" y2="36" stroke="rgba(255,255,255,0.15)" stroke-width="0.5" />
                <line x1="108" y1="0" x2="108" y2="36" stroke="rgba(255,255,255,0.15)" stroke-width="0.5" />
                <line x1="144" y1="0" x2="144" y2="36" stroke="rgba(255,255,255,0.15)" stroke-width="0.5" />

                <!-- BIPV FACADE — left strip -->
                <rect x="0" y="38" width="22" height="262" fill="rgba(10,107,82,0.25)" stroke="#0A6B52" stroke-width="0.8" />
                <line x1="0" y1="70" x2="22" y2="70" stroke="rgba(255,255,255,0.12)" stroke-width="0.5" />
                <line x1="0" y1="102" x2="22" y2="102" stroke="rgba(255,255,255,0.12)" stroke-width="0.5" />
                <line x1="0" y1="134" x2="22" y2="134" stroke="rgba(255,255,255,0.12)" stroke-width="0.5" />
                <line x1="0" y1="166" x2="22" y2="166" stroke="rgba(255,255,255,0.12)" stroke-width="0.5" />
                <line x1="0" y1="198" x2="22" y2="198" stroke="rgba(255,255,255,0.12)" stroke-width="0.5" />
                <line x1="0" y1="230" x2="22" y2="230" stroke="rgba(255,255,255,0.12)" stroke-width="0.5" />
                <line x1="0" y1="262" x2="22" y2="262" stroke="rgba(255,255,255,0.12)" stroke-width="0.5" />

                <!-- BIPV FACADE — right strip -->
                <rect x="158" y="38" width="22" height="262" fill="rgba(10,107,82,0.2)" stroke="#0A6B52" stroke-width="0.8" />
                <line x1="158" y1="70" x2="180" y2="70" stroke="rgba(255,255,255,0.1)" stroke-width="0.5" />
                <line x1="158" y1="102" x2="180" y2="102" stroke="rgba(255,255,255,0.1)" stroke-width="0.5" />
                <line x1="158" y1="134" x2="180" y2="134" stroke="rgba(255,255,255,0.1)" stroke-width="0.5" />
                <line x1="158" y1="166" x2="180" y2="166" stroke="rgba(255,255,255,0.1)" stroke-width="0.5" />
                <line x1="158" y1="198" x2="180" y2="198" stroke="rgba(255,255,255,0.1)" stroke-width="0.5" />
                <line x1="158" y1="230" x2="180" y2="230" stroke="rgba(255,255,255,0.1)" stroke-width="0.5" />
                <line x1="158" y1="262" x2="180" y2="262" stroke="rgba(255,255,255,0.1)" stroke-width="0.5" />

                <!-- CURTAIN WALL GLAZING (middle section) -->
                <rect x="24" y="38" width="132" height="100" fill="rgba(10,107,82,0.08)" stroke="rgba(10,107,82,0.3)" stroke-width="0.8" />
                <!-- glazing grid -->
                <line x1="24" y1="72" x2="156" y2="72" stroke="rgba(10,107,82,0.25)" stroke-width="0.5" />
                <line x1="24" y1="106" x2="156" y2="106" stroke="rgba(10,107,82,0.25)" stroke-width="0.5" />
                <line x1="57" y1="38" x2="57" y2="138" stroke="rgba(10,107,82,0.2)" stroke-width="0.5" />
                <line x1="90" y1="38" x2="90" y2="138" stroke="rgba(10,107,82,0.2)" stroke-width="0.5" />
                <line x1="123" y1="38" x2="123" y2="138" stroke="rgba(10,107,82,0.2)" stroke-width="0.5" />

                <!-- Floor line -->
                <line x1="24" y1="140" x2="156" y2="140" stroke="rgba(255,255,255,0.06)" stroke-width="0.5" />

                <!-- Standard windows mid-section -->
                <g fill="rgba(10,107,82,0.15)" stroke="rgba(10,107,82,0.3)" stroke-width="0.5">
                    <rect x="30" y="148" width="28" height="20" />
                    <rect x="66" y="148" width="28" height="20" />
                    <rect x="102" y="148" width="28" height="20" />
                    <rect x="30" y="176" width="28" height="20" />
                    <rect x="66" y="176" width="28" height="20" />
                    <rect x="102" y="176" width="28" height="20" />
                    <rect x="30" y="204" width="28" height="20" />
                    <rect x="66" y="204" width="28" height="20" />
                    <rect x="102" y="204" width="28" height="20" />
                </g>

                <!-- Ground floor -->
                <rect x="24" y="262" width="132" height="38" fill="rgba(255,255,255,0.02)" stroke="rgba(255,255,255,0.08)" stroke-width="0.5" />
                <rect x="60" y="270" width="60" height="30" fill="rgba(255,255,255,0.03)" stroke="rgba(255,255,255,0.07)" stroke-width="0.5" />
            </g>

            <!-- Labels pointing to BIPV elements -->
            <!-- In-roof label -->
            <line x1="96" y1="74" x2="72" y2="74" stroke="rgba(10,107,82,0.4)" stroke-width="0.8" />
            <text x="68" y="70" text-anchor="end" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.6)" letter-spacing="0.5">IN-ROOF</text>
            <text x="68" y="80" text-anchor="end" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.25)">BIPV roof</text>

            <!-- Facade label -->
            <line x1="96" y1="160" x2="72" y2="160" stroke="rgba(10,107,82,0.4)" stroke-width="0.8" />
            <text x="68" y="156" text-anchor="end" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.6)" letter-spacing="0.5">FACADE</text>
            <text x="68" y="166" text-anchor="end" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.25)">cladding</text>

            <!-- Curtain wall label -->
            <line x1="286" y1="100" x2="296" y2="100" stroke="rgba(10,107,82,0.4)" stroke-width="0.8" />
            <text x="300" y="96" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.6)" letter-spacing="0.5">CURTAIN</text>
            <text x="300" y="106" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.25)">glazed PV</text>

            <!-- Energy flow down to inverter -->
            <line x1="190" y1="356" x2="190" y2="340" stroke="#0D8A6A" stroke-width="1.2" class="flow-line" style="animation-delay:0.5s" />

            <!-- Inverter block at base -->
            <rect x="100" y="364" width="180" height="30" rx="2" fill="rgba(10,107,82,0.12)" stroke="#0A6B52" stroke-width="1" />
            <text x="190" y="376" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A" letter-spacing="1">INVERTER · STORAGE · GRID</text>
            <text x="190" y="388" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.25)">integrated energy management</text>

            <!-- Generation annotation -->
            <rect x="10" y="360" width="82" height="28" rx="2" fill="rgba(10,107,82,0.08)" stroke="rgba(10,107,82,0.2)" stroke-width="0.8" />
            <text x="51" y="371" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.6)">GENERATION</text>
            <text x="51" y="381" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.2)">all surfaces</text>

            <!-- Site boundary -->
            <rect x="8" y="48" width="324" height="318" fill="none" stroke="rgba(10,107,82,0.1)" stroke-width="1" stroke-dasharray="6 10" rx="4" />
            <text x="16" y="60" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.3)" letter-spacing="2">BUILDING ENVELOPE = GENERATION SURFACE</text>
        </svg>
    </div>
</section>

<!-- SOLAR AS ARCHITECTURE INTRO -->
<section class="intro reveal">
    <div>
        <div class="section-label">Solar as architecture</div>
        <h2 class="section-title">The building envelope<br>as a <em>generation surface</em></h2>
    </div>
    <div class="intro-body">
        <p>Building integrated photovoltaics replace conventional building materials — roof tiles, cladding panels, curtain wall elements, glazing — with photovoltaic equivalents that generate electricity while fulfilling their primary architectural function.</p>
        <p>Unlike roof-mounted solar, BIPV is specified at design stage. It is coordinated with the architect, structural engineer and envelope contractor, and installed as part of the building rather than added to it afterwards. The result is a building that generates energy without compromising the architectural intent.</p>
        <p>Fort Energy works with architects, developers and main contractors from RIBA Stage 2 onwards. Early involvement ensures BIPV is integrated into the structural, electrical and planning strategy — not retrofitted at practical completion.</p>
    </div>
</section>

<!-- FOUR PRODUCT TYPES -->
<section class="products">
    <div class="section-header-row reveal">
        <div>
            <div class="section-label">Product types</div>
            <h2 class="section-title">Four product<br>categories</h2>
        </div>
        <div class="section-count">04</div>
    </div>

    <div class="products-grid">

        <!-- In-roof -->
        <div class="product-card reveal">
            <div class="prod-img">
                <img src="<?= BASE_URL ?>assets/img/bipv/1.png" alt="In-roof BIPV solar tiles integrated into building roofline" loading="lazy" />
                <div class="prod-img-overlay"></div>
                <span class="prod-img-ref">PT-01</span>
            </div>
            <div class="prod-body">
                <div class="prod-title">In-roof systems</div>
                <div class="prod-desc">Solar modules installed within the roof plane, replacing conventional tiles or slates. Flush with the roofline — no visible mounting system. Suitable for pitched roofs on residential, commercial and mixed-use schemes where appearance is a priority or where conservation area restrictions apply. MCS-certified, weathertight to BS 5534.</div>
                <div class="prod-tags">
                    <span class="prod-tag">FLUSH PROFILE</span>
                    <span class="prod-tag">CONSERVATION AREAS</span>
                    <span class="prod-tag">BS 5534</span>
                    <span class="prod-tag">MCS CERTIFIED</span>
                </div>
            </div>
        </div>

        <!-- Cladding & facades -->
        <div class="product-card reveal rd1">
            <div class="prod-img">
                <img src="<?= BASE_URL ?>assets/img/bipv/4.png" alt="BIPV solar cladding panels integrated into commercial building facade" loading="lazy" />
                <div class="prod-img-overlay"></div>
                <span class="prod-img-ref">PT-02</span>
            </div>
            <div class="prod-body">
                <div class="prod-title">Cladding &amp; facades</div>
                <div class="prod-desc">Photovoltaic modules replacing rainscreen cladding panels on commercial and residential facades. Monocrystalline, thin-film and coloured PV options allow architectural flexibility. East and west-facing facades are viable — generation profile spread across the day suits buildings with consistent daytime demand.</div>
                <div class="prod-tags">
                    <span class="prod-tag">RAINSCREEN</span>
                    <span class="prod-tag">COLOURED PV</span>
                    <span class="prod-tag">E/W VIABLE</span>
                    <span class="prod-tag">THIN-FILM</span>
                </div>
            </div>
        </div>

        <!-- Curtain walls & glazing -->
        <div class="product-card reveal">
            <div class="prod-img">
                <img src="<?= BASE_URL ?>assets/img/bipv/2.png" alt="BIPV solar glazing curtain wall on commercial office building" loading="lazy" />
                <div class="prod-img-overlay"></div>
                <span class="prod-img-ref">PT-03</span>
            </div>
            <div class="prod-body">
                <div class="prod-title">Curtain walls &amp; glazing</div>
                <div class="prod-desc">Semi-transparent PV laminated into curtain wall and atrium glazing. Provides solar control and daylighting management whilst generating electricity. Spandrel panel replacement in existing curtain wall systems. Custom cell density and transparency levels — specified to meet both energy performance and daylight factor targets.</div>
                <div class="prod-tags">
                    <span class="prod-tag">SEMI-TRANSPARENT</span>
                    <span class="prod-tag">SPANDREL</span>
                    <span class="prod-tag">SOLAR CONTROL</span>
                    <span class="prod-tag">CUSTOM DENSITY</span>
                </div>
            </div>
        </div>

        <!-- Architectural specials -->
        <div class="product-card reveal rd1">
            <div class="prod-img">
                <img src="<?= BASE_URL ?>assets/img/bipv/6.png" alt="Bespoke architectural BIPV solar installation on feature building" loading="lazy" />
                <div class="prod-img-overlay"></div>
                <span class="prod-img-ref">PT-04</span>
            </div>
            <div class="prod-body">
                <div class="prod-title">Architectural specials</div>
                <div class="prod-desc">Bespoke BIPV elements for signature projects — canopies, sunshading louvres, feature canopies and non-standard building geometries. Custom module sizing and framing. Designed from first principles to achieve the architectural intent whilst maximising generation from available surfaces. Each project individually engineered.</div>
                <div class="prod-tags">
                    <span class="prod-tag">BESPOKE</span>
                    <span class="prod-tag">CANOPIES</span>
                    <span class="prod-tag">LOUVRES</span>
                    <span class="prod-tag">CUSTOM MODULE</span>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- WHY SPECIFY BIPV -->
<section class="why-bipv reveal">
    <div>
        <div class="section-label">The case for BIPV</div>
        <h2 class="section-title">Why specify<br><em>BIPV</em></h2>
    </div>
    <div class="why-list">
        <div class="why-item">
            <div class="why-num">01</div>
            <div class="why-content">
                <div class="why-title">Replaces conventional materials at marginal additional cost</div>
                <div class="why-desc">When BIPV replaces the cladding or roofing material that would have been specified anyway, the net additional cost is substantially lower than a retrofit solar installation. The comparison is BIPV vs conventional material — not BIPV vs nothing.</div>
            </div>
        </div>
        <div class="why-item">
            <div class="why-num">02</div>
            <div class="why-content">
                <div class="why-title">Satisfies planning and sustainability conditions</div>
                <div class="why-desc">On-site renewable generation requirements in planning conditions, EPC targets and Part L compliance are addressed without visible bolt-on technology. BIPV contributes to SAP/SBEM calculations and BREEAM credits.</div>
            </div>
        </div>
        <div class="why-item">
            <div class="why-num">03</div>
            <div class="why-content">
                <div class="why-title">Maintains architectural integrity</div>
                <div class="why-desc">No visible mounting rails or racking. Module format, colour and transparency are controlled. Conservation areas, listed building settings and design-led schemes can incorporate generation without visual compromise.</div>
            </div>
        </div>
        <div class="why-item">
            <div class="why-num">04</div>
            <div class="why-content">
                <div class="why-title">Generates from all building surfaces — not just the roof</div>
                <div class="why-desc">A south-facing facade generates approximately 70% of equivalent roof yield. Combined with roof and east/west surfaces, BIPV can generate significantly more than a roof-only installation on a constrained urban footprint.</div>
            </div>
        </div>
        <div class="why-item">
            <div class="why-num">05</div>
            <div class="why-content">
                <div class="why-title">25-year generation from building fabric installed once</div>
                <div class="why-desc">BIPV modules are specified to match the design life of the building envelope. Generation income and cost reduction begin on day one of occupation and continue for the life of the building.</div>
            </div>
        </div>
    </div>
</section>

<!-- DESIGNED FOR SPECIFIERS — 5-step -->
<section class="specifier">
    <div class="specifier-inner reveal">
        <div>
            <div class="spec-label">Designed for specifiers</div>
            <h2 class="spec-title">How we work<br>with <em>design teams</em></h2>
            <p class="spec-body">BIPV requires early involvement to be effective. We work alongside architects, structural engineers and envelope contractors from feasibility through to practical completion — providing technical input at each RIBA stage rather than arriving at construction with a product to retrofit.</p>
            <a href="<?= BASE_URL ?>contact" class="spec-cta">Book a specifier consultation →</a>
        </div>
        <div class="spec-steps">
            <div class="spec-step">
                <div class="spec-num-wrap">
                    <div class="spec-num">1</div>
                    <div class="spec-connector"></div>
                </div>
                <div>
                    <div class="spec-step-title">Feasibility &amp; concept (RIBA 1–2)</div>
                    <div class="spec-step-desc">Generation potential assessment, product type recommendation, indicative yield modelling and early-stage cost input. Output: feasibility report for planning and client.</div>
                </div>
            </div>
            <div class="spec-step">
                <div class="spec-num-wrap">
                    <div class="spec-num">2</div>
                    <div class="spec-connector"></div>
                </div>
                <div>
                    <div class="spec-step-title">Developed design (RIBA 3)</div>
                    <div class="spec-step-desc">Detailed module specification, structural interface design, electrical single-line diagrams and DNO pre-application advice. NBS specification clauses provided.</div>
                </div>
            </div>
            <div class="spec-step">
                <div class="spec-num-wrap">
                    <div class="spec-num">3</div>
                    <div class="spec-connector"></div>
                </div>
                <div>
                    <div class="spec-step-title">Technical design (RIBA 4)</div>
                    <div class="spec-step-desc">Full electrical design, inverter and storage specification, detailed structural drawings and coordination with envelope contractor programme.</div>
                </div>
            </div>
            <div class="spec-step">
                <div class="spec-num-wrap">
                    <div class="spec-num">4</div>
                    <div class="spec-connector"></div>
                </div>
                <div>
                    <div class="spec-step-title">Construction (RIBA 5)</div>
                    <div class="spec-step-desc">Installation management, site supervision, DNO application management, protection relay commissioning and MCS certification.</div>
                </div>
            </div>
            <div class="spec-step">
                <div class="spec-num-wrap">
                    <div class="spec-num">5</div>
                </div>
                <div>
                    <div class="spec-step-title">Handover &amp; in-use (RIBA 6–7)</div>
                    <div class="spec-step-desc">O&amp;M documentation, monitoring platform setup, generation reporting and post-occupancy review against modelled yield.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CASE STUDY -->
<section class="proof reveal">
    <div class="section-label" style="margin-bottom:24px;">Case study</div>
    <div class="cs-card">
        <div class="cs-panel">
            <div class="cs-bg"></div>
            <span class="cs-badge">BIPV — Mixed-Use Development</span>
            <div class="prod-img">
                <img src="<?= BASE_URL ?>assets/img/bipv/Bipv-placeholder-case-study.png" style="object-fit:fit;" alt="Large roof-mounted solar array on agricultural barn" loading="lazy" />
                <div class="prod-img-overlay"></div>
            </div>
            <div class="cs-metrics-strip">
                <div class="csm"><span class="csm-val">275<em> kWp</em></span><span class="csm-key">Total BIPV</span></div>
                <div class="csm"><span class="csm-val">180<em> kWp</em></span><span class="csm-key">In-roof</span></div>
                <div class="csm"><span class="csm-val">95<em> kWp</em></span><span class="csm-key">Facade</span></div>
                <div class="csm"><span class="csm-val">58<em>%</em></span><span class="csm-key">Demand offset</span></div>
            </div>
        </div>
        <div class="cs-body">
            <div class="cs-loc">Bristol · Mixed-Use Development — Retail + Residential</div>
            <h3 class="cs-title">275 kWp combined in-roof and facade BIPV — mixed-use development</h3>
            <p class="cs-summary">180 kWp in-roof system across pitched residential floors combined with 95 kWp of south and west-facing facade cladding panels on the commercial base. Coordinated from RIBA Stage 2 alongside the envelope contractor. Planning condition requiring on-site renewable generation satisfied. BREEAM Excellent achieved. Combined system offsets 58% of total building demand.</p>
            <div class="cs-outcomes">
                <div class="cs-outcome">
                    <div class="cs-outcome-dot"></div>Facade PV replaced conventional rainscreen at £18/m² premium
                </div>
                <div class="cs-outcome">
                    <div class="cs-outcome-dot"></div>Planning renewable condition satisfied — no separate roof array required
                </div>
                <div class="cs-outcome">
                    <div class="cs-outcome-dot"></div>BREEAM Excellent energy credits fully achieved
                </div>
                <div class="cs-outcome">
                    <div class="cs-outcome-dot"></div>EV charging infrastructure powered from facade generation
                </div>
            </div>
            <a href="<?= BASE_URL ?>case-studies/mixed-use-bipv-bristol" class="cs-link">Read full case study →</a>
        </div>
    </div>
</section>

<!-- CTA BAND -->
<section class="cta-band reveal">
    <div>
        <h2 class="cta-band-title">Book a<br><em>specifier consultation</em></h2>
        <p class="cta-band-sub">BIPV works best when it is part of the design from the start. If you have a project at feasibility or concept stage, talk to us now — we'll provide product options, indicative yield modelling and early cost input without charge.</p>
    </div>
    <div class="cta-group">
        <a href="<?= BASE_URL ?>contact" class="btn-primary">Book a specifier consultation →</a>
        <a href="<?= BASE_URL ?>contact" class="btn-secondary">Request product information</a>
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