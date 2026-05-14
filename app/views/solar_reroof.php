<?php
$pageTitle = 'Solar Reroof | In-Roof Solar Installation | Fort Energy';
$activePage   = 'residential';
$metaDesc     = 'Replace an aging roof with a full in-roof solar system. Generation, weather protection and long-term return from a single project. 10–16 kWp, £1.8–3.5k annual saving. Book a free assessment.';
$canonicalUrl = 'https://fortenergy.co.uk/residential/solar-reroof';
$pageCSS      = 'solarReroof.css';
$schemaJson   = json_encode([
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',                'item' => 'https://fortenergy.co.uk'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Residential Systems', 'item' => 'https://fortenergy.co.uk/residential'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Solar Reroof',        'item' => 'https://fortenergy.co.uk/residential/solar-reroof'],
    ],
]);
ob_start();
?>




<!-- HERO -->
<section class="hero">
    <div class="hero-left">
        <div class="hero-eyebrow">Sub-sector 03a — Solar Reroof</div>
        <h1 class="hero-h1">A roof that<br><em>pays for itself</em></h1>
        <p class="hero-sub">Full roof solar installation — generation, weather protection and long-term financial return from a single project. For properties due for reroofing, the combined cost is lower than a conventional reroof followed by solar later.</p>
        <div class="hero-ctas">
            <a href="/contact" class="btn-primary">Book a roof assessment →</a>
            <a href="/residential" class="btn-secondary">← Residential systems</a>
        </div>
    </div>

    <!-- Hero: ROI comparison diagram -->
    <div class="hero-diagram">
        <svg width="320" height="380" viewBox="0 0 320 380" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="rrgrid" width="16" height="16" patternUnits="userSpaceOnUse">
                    <path d="M 16 0 L 0 0 0 16" fill="none" stroke="rgba(255,255,255,0.04)" stroke-width="0.5" />
                </pattern>
            </defs>
            <rect width="320" height="380" fill="url(#rrgrid)" />

            <!-- Axes -->
            <line x1="48" y1="20" x2="48" y2="280" stroke="rgba(255,255,255,0.1)" stroke-width="1" />
            <line x1="48" y1="280" x2="304" y2="280" stroke="rgba(255,255,255,0.06)" stroke-width="1" />

            <!-- Y axis label -->
            <text x="20" y="24" font-family="'DM Mono',monospace" font-size="8" fill="rgba(255,255,255,0.2)">£ return</text>

            <!-- Zero line -->
            <line x1="48" y1="170" x2="304" y2="170" stroke="rgba(255,255,255,0.08)" stroke-width="1" stroke-dasharray="4 4" />
            <text x="38" y="173" text-anchor="end" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.2)">0</text>

            <!-- X axis time labels -->
            <text x="48" y="296" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.2)">Now</text>
            <text x="100" y="296" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.2)">5yr</text>
            <text x="152" y="296" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.2)">10yr</text>
            <text x="204" y="296" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.2)">15yr</text>
            <text x="256" y="296" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.2)">20yr</text>
            <text x="300" y="296" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.2)">25yr</text>

            <!-- Conventional reroof: drops at start, flat line of no return -->
            <path d="M 48 170 L 48 210 L 304 210" fill="none" stroke="rgba(255,255,255,0.3)" stroke-width="2" />
            <!-- Shade the cost zone -->
            <path d="M 48 170 L 48 210 L 304 210 L 304 170 Z" fill="rgba(255,255,255,0.03)" />
            <text x="176" y="225" text-anchor="middle" font-family="'DM Mono',monospace" font-size="8" fill="rgba(255,255,255,0.2)">No return — cost only</text>

            <!-- Conventional cost drop label -->
            <text x="54" y="194" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.3)">Reroof cost</text>

            <!-- Solar reroof: drops more at start, crosses zero ~yr 10, rises to strong return -->
            <path d="M 48 170 L 48 240 L 152 170 L 304 68" fill="none" stroke="#0D8A6A" stroke-width="2.5" />
            <!-- Shade gain zone above zero -->
            <path d="M 152 170 L 304 68 L 304 170 Z" fill="rgba(10,107,82,0.12)" />

            <!-- Payback marker -->
            <circle cx="152" cy="170" r="5" fill="#0D8A6A" />
            <line x1="152" y1="170" x2="152" y2="260" stroke="rgba(10,107,82,0.4)" stroke-width="1" stroke-dasharray="4 4" />
            <text x="156" y="252" font-family="'DM Mono',monospace" font-size="8" fill="#0D8A6A">~8–14yr</text>
            <text x="156" y="263" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.6)">payback</text>

            <!-- Solar combined cost drop label -->
            <text x="54" y="250" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.6)">Combined</text>
            <text x="54" y="262" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.5)">project cost</text>

            <!-- 25yr return badge -->
            <rect x="214" y="44" width="82" height="32" rx="2" fill="rgba(10,107,82,0.15)" stroke="rgba(10,107,82,0.4)" stroke-width="0.8" />
            <text x="255" y="57" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A">£50–80k</text>
            <text x="255" y="69" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.35)">25yr return</text>

            <!-- Legend -->
            <line x1="52" y1="318" x2="72" y2="318" stroke="rgba(255,255,255,0.3)" stroke-width="2" />
            <text x="78" y="321" font-family="'DM Mono',monospace" font-size="8" fill="rgba(255,255,255,0.4)">Conventional reroof</text>
            <line x1="52" y1="336" x2="72" y2="336" stroke="#0D8A6A" stroke-width="2.5" />
            <text x="78" y="339" font-family="'DM Mono',monospace" font-size="8" fill="rgba(255,255,255,0.4)">Solar reroof — 25yr return</text>
            <text x="52" y="360" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.15)" letter-spacing="1">INDICATIVE 25-YEAR FINANCIAL COMPARISON</text>
        </svg>
    </div>
</section>

<!-- THE ARGUMENT: SIDE BY SIDE -->
<section class="argument reveal">
    <div class="arg-header">
        <div class="section-label">The argument</div>
        <h2 class="section-title">Necessary expenditure<br>vs <em>investment with return</em></h2>
    </div>
    <div class="comparison">
        <div class="compare-col conventional">
            <span class="comp-tag conv-tag">Conventional reroof</span>
            <h3 class="comp-title">Necessary expenditure</h3>
            <div class="comp-subtitle">Replaces aging roof. No return.</div>
            <p class="comp-body">A conventional reroof is a maintenance obligation. The cost is significant — typically £8,000 to £20,000 depending on property size and material — and once spent it generates no financial return. The roof protects the building. That is all it does.</p>
            <div class="comp-items">
                <div class="comp-item">
                    <div class="dot-bad"></div>Cost spent once — no ongoing return
                </div>
                <div class="comp-item">
                    <div class="dot-bad"></div>No impact on energy bills
                </div>
                <div class="comp-item">
                    <div class="dot-bad"></div>No generation income
                </div>
                <div class="comp-item">
                    <div class="dot-bad"></div>Solar added later means a second project and second cost
                </div>
                <div class="comp-item">
                    <div class="dot-bad"></div>New roof disturbed for a retrofit solar installation
                </div>
            </div>
        </div>
        <div class="compare-col solar-col">
            <span class="comp-tag solar-tag">Solar reroof</span>
            <h3 class="comp-title">Investment with return</h3>
            <div class="comp-subtitle">Roof becomes generation surface. Long-term return.</div>
            <p class="comp-body">A solar reroof replaces conventional tiles or slates with in-roof solar modules. The roof is weathertight, insured and fully compliant — and it generates electricity from the day it is commissioned. The combined cost is lower than two separate projects.</p>
            <div class="comp-items">
                <div class="comp-item">
                    <div class="dot-good"></div>£1,800–3,500 annual saving from year one
                </div>
                <div class="comp-item">
                    <div class="dot-good"></div>Combined cost lower than reroof plus retrofit
                </div>
                <div class="comp-item">
                    <div class="dot-good"></div>No second project — no second disruption
                </div>
                <div class="comp-item">
                    <div class="dot-good"></div>25-year performance warranty on modules
                </div>
                <div class="comp-item">
                    <div class="dot-good"></div>Payback modelled at 8–14 years
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHERE IT MAKES SENSE -->
<section class="where reveal">
    <div class="where-header">
        <div>
            <div class="section-label">Where solar reroofing makes sense</div>
            <h2 class="section-title">Four scenarios where<br>it is the <em>right decision</em></h2>
        </div>
        <div class="where-count">04</div>
    </div>
    <div class="where-grid">
        <div class="where-card">
            <span class="where-num">01</span>
            <h3 class="where-title">Properties due for reroofing</h3>
            <p class="where-desc">If a property needs reroofing within the next five years — aging slates, failing felt, leaking valleys — a solar reroof is worth assessing now. The alternative is spending on a conventional reroof and spending again on solar later. Combining them is almost always more cost-effective.</p>
        </div>
        <div class="where-card">
            <span class="where-num">02</span>
            <h3 class="where-title">Conservation areas and listed building settings</h3>
            <p class="where-desc">In-roof solar tiles sit flush with the roofline and are available in slate-effect and tile-effect finishes. They are widely accepted in conservation areas where conventional solar panels would not receive planning permission. We advise on planning requirements as part of the initial assessment.</p>
        </div>
        <div class="where-card">
            <span class="where-num">03</span>
            <h3 class="where-title">Appearance-priority projects</h3>
            <p class="where-desc">Properties where standard roof-mount solar is visually unacceptable — period properties, architect-designed homes, or owners who prefer a flush finish. In-roof solar achieves identical generation without visible mounting hardware or panel framing above the roofline.</p>
        </div>
        <div class="where-card">
            <span class="where-num">04</span>
            <h3 class="where-title">Properties with full roof area available</h3>
            <p class="where-desc">Detached and semi-detached properties with unobstructed roof area across multiple pitches achieve the highest system yields. A four-pitch Victorian property with 10–16 kWp across all elevations generates significantly more than a restricted south-facing roof-mount system.</p>
        </div>
    </div>
</section>

<!-- INDICATIVE SYSTEM & RETURN -->
<section class="metrics-section reveal">
    <div>
        <div class="met-label">Indicative system &amp; return</div>
        <h2 class="met-title">4-bed property<br><em>typical configuration</em></h2>
        <p class="met-body">Figures based on a four-bedroom detached property with good roof orientation across multiple pitches. System sized against 12 months of actual consumption data. Annual saving accounts for current export tariff, avoided import and battery optimisation. A roof assessment produces your property-specific numbers.</p>
    </div>
    <div>
        <span class="met-property-tag">4-bed detached — indicative figures</span>
        <div class="metrics-grid">
            <div class="met-tile">
                <span class="met-val">10–16<em> kWp</em></span>
                <span class="met-key">Solar system size</span>
            </div>
            <div class="met-tile">
                <span class="met-val">16–32<em> kWh</em></span>
                <span class="met-key">Battery storage</span>
            </div>
            <div class="met-tile">
                <span class="met-val">£1.8–3.5<em>k</em></span>
                <span class="met-key">Annual saving</span>
            </div>
            <div class="met-tile">
                <span class="met-val">8–14<em> yr</em></span>
                <span class="met-key">Payback period</span>
            </div>
        </div>
    </div>
</section>

<!-- CASE STUDY + ASSESSMENT SIDEBAR -->
<section class="proof">
    <div class="reveal">
        <div class="section-label" style="margin-bottom:24px;">Case study</div>
        <div class="cs-card">
            <div class="cs-panel">
                <div class="cs-bg"></div>
                <span class="cs-badge">Solar Reroof — Period Property</span>
                <!-- 4-pitch system diagram -->
                <svg width="100%" viewBox="0 0 320 72" fill="none" style="position:relative;z-index:1;margin-top:16px;">
                    <rect x="4" y="4" width="50" height="26" rx="2" fill="rgba(10,107,82,0.15)" stroke="#0A6B52" stroke-width="0.8" />
                    <text x="29" y="14" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A">SOUTH</text>
                    <text x="29" y="24" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.3)">5.2 kWp</text>
                    <rect x="4" y="42" width="50" height="26" rx="2" fill="rgba(10,107,82,0.1)" stroke="rgba(10,107,82,0.35)" stroke-width="0.8" />
                    <text x="29" y="52" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A">NORTH</text>
                    <text x="29" y="62" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.25)">3.1 kWp</text>
                    <rect x="64" y="4" width="50" height="26" rx="2" fill="rgba(10,107,82,0.12)" stroke="rgba(10,107,82,0.3)" stroke-width="0.8" />
                    <text x="89" y="14" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A">EAST</text>
                    <text x="89" y="24" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.25)">2.8 kWp</text>
                    <rect x="64" y="42" width="50" height="26" rx="2" fill="rgba(10,107,82,0.1)" stroke="rgba(10,107,82,0.25)" stroke-width="0.8" />
                    <text x="89" y="52" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A">WEST</text>
                    <text x="89" y="62" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.2)">2.9 kWp</text>
                    <line x1="54" y1="17" x2="136" y2="35" stroke="#0D8A6A" stroke-width="0.8" stroke-dasharray="3 2" class="flow-line" />
                    <line x1="54" y1="55" x2="136" y2="40" stroke="#0D8A6A" stroke-width="0.8" stroke-dasharray="3 2" class="flow-line" style="animation-delay:0.3s" />
                    <line x1="114" y1="17" x2="136" y2="35" stroke="#0D8A6A" stroke-width="0.8" stroke-dasharray="3 2" class="flow-line" style="animation-delay:0.5s" />
                    <line x1="114" y1="55" x2="136" y2="42" stroke="#0D8A6A" stroke-width="0.8" stroke-dasharray="3 2" class="flow-line" style="animation-delay:0.7s" />
                    <rect x="136" y="24" width="60" height="24" rx="2" fill="rgba(10,107,82,0.15)" stroke="#0A6B52" stroke-width="1" />
                    <text x="166" y="35" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A">INVERTER</text>
                    <text x="166" y="44" text-anchor="middle" font-family="'DM Mono',monospace" font-size="5" fill="rgba(255,255,255,0.25)">14 kWp total</text>
                    <line x1="196" y1="36" x2="212" y2="36" stroke="#0D8A6A" stroke-width="0.8" stroke-dasharray="3 2" class="flow-line" style="animation-delay:0.9s" />
                    <rect x="212" y="24" width="48" height="24" rx="2" fill="rgba(10,107,82,0.12)" stroke="#0A6B52" stroke-width="0.8" />
                    <text x="236" y="35" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A">BESS</text>
                    <text x="236" y="44" text-anchor="middle" font-family="'DM Mono',monospace" font-size="5" fill="rgba(255,255,255,0.25)">24 kWh</text>
                    <line x1="260" y1="36" x2="276" y2="36" stroke="#0D8A6A" stroke-width="0.8" stroke-dasharray="3 2" class="flow-line" style="animation-delay:1.1s" />
                    <rect x="276" y="22" width="40" height="28" rx="2" fill="rgba(255,255,255,0.03)" stroke="rgba(255,255,255,0.1)" stroke-width="0.8" />
                    <text x="296" y="34" text-anchor="middle" font-family="'DM Mono',monospace" font-size="6" fill="rgba(255,255,255,0.3)">HOME</text>
                    <text x="296" y="44" text-anchor="middle" font-family="'DM Mono',monospace" font-size="5" fill="rgba(255,255,255,0.15)">+ export</text>
                </svg>
                <div class="cs-metrics-strip">
                    <div class="csm"><span class="csm-val">14<em> kWp</em></span><span class="csm-key">Total system</span></div>
                    <div class="csm"><span class="csm-val">24<em> kWh</em></span><span class="csm-key">Storage</span></div>
                    <div class="csm"><span class="csm-val">4</span><span class="csm-key">Roof pitches</span></div>
                </div>
            </div>
            <div class="cs-body">
                <div class="cs-loc">West Yorkshire · Victorian Semi-Detached — Conservation Area</div>
                <h3 class="cs-title">Period property — full solar reroof across all four pitches</h3>
                <p class="cs-summary">14 kWp in-roof solar system across all four pitches of a Victorian semi-detached in a conservation area. Slate-effect modules specified to satisfy conservation area requirements. 24 kWh battery storage. Combined project cost lower than a conventional slate reroof plus a standard roof-mount solar installation would have been as two separate projects.</p>
                <div class="cs-outcomes">
                    <div class="cs-outcome">
                        <div class="cs-outcome-dot"></div>Conservation area approval — flush slate-effect modules accepted
                    </div>
                    <div class="cs-outcome">
                        <div class="cs-outcome-dot"></div>Combined cost lower than two separate projects
                    </div>
                    <div class="cs-outcome">
                        <div class="cs-outcome-dot"></div>£2,400 annual saving — year one at current tariff
                    </div>
                    <div class="cs-outcome">
                        <div class="cs-outcome-dot"></div>Payback modelled at 9.4 years on combined project cost
                    </div>
                </div>
                <a href="/case-studies" class="cs-link">Read full case study →</a>
            </div>
        </div>
    </div>

    <!-- Assessment sidebar -->
    <div class="reveal rd1">
        <div class="section-label" style="margin-bottom:24px;">What a roof assessment covers</div>
        <div class="assessment-card">
            <div class="asc-label">Free — no obligation</div>
            <h3 class="asc-title">Everything decided<br>before you <em>commit</em></h3>
            <div class="asc-steps">
                <div class="asc-step">
                    <div class="asc-num">1</div>
                    <div>
                        <div class="asc-step-title">Roof condition survey</div>
                        <div class="asc-step-desc">Structural assessment, tile or slate condition, felt, battens and valley condition.</div>
                    </div>
                </div>
                <div class="asc-step">
                    <div class="asc-num">2</div>
                    <div>
                        <div class="asc-step-title">Orientation &amp; shading</div>
                        <div class="asc-step-desc">All pitches modelled for yield. Shading from trees, chimneys and neighbouring buildings assessed.</div>
                    </div>
                </div>
                <div class="asc-step">
                    <div class="asc-num">3</div>
                    <div>
                        <div class="asc-step-title">System specification</div>
                        <div class="asc-step-desc">Module type, inverter sizing, battery specification and EV integration options.</div>
                    </div>
                </div>
                <div class="asc-step">
                    <div class="asc-num">4</div>
                    <div>
                        <div class="asc-step-title">Financial model</div>
                        <div class="asc-step-desc">Annual saving, payback period and 25-year projection with tariff sensitivity analysis.</div>
                    </div>
                </div>
                <div class="asc-step">
                    <div class="asc-num">5</div>
                    <div>
                        <div class="asc-step-title">Planning assessment</div>
                        <div class="asc-step-desc">Conservation area advice, permitted development confirmation or planning support where required.</div>
                    </div>
                </div>
            </div>
            <a href="/contact" class="asc-cta">Book a free roof assessment →</a>
        </div>
    </div>
</section>

<!-- FAQ — content mirrors schema above, must be visible on page for Google -->
<section class="faq reveal" aria-label="Frequently asked questions about solar reroofing">
    <div class="faq-header">
        <div class="section-label">Common questions</div>
        <h2 class="section-title">Frequently asked<br>about solar <em>reroofing</em></h2>
    </div>
    <div class="faq-list">
        <div class="faq-item">
            <div class="faq-q" role="button" tabindex="0">
                <span class="faq-q-text">Is a solar reroof cheaper than a normal reroof plus solar panels?</span>
                <span class="faq-toggle" aria-hidden="true">+</span>
            </div>
            <p class="faq-a">On properties that require reroofing, a combined solar reroof is typically more cost-effective than a conventional reroof followed by a solar installation later. The combined cost is lower than two separate projects, and the solar element delivers a long-term financial return that a conventional reroof does not provide.</p>
        </div>
        <div class="faq-item">
            <div class="faq-q" role="button" tabindex="0">
                <span class="faq-q-text">How much does a solar reroof cost?</span>
                <span class="faq-toggle" aria-hidden="true">+</span>
            </div>
            <p class="faq-a">Solar reroof costs depend on roof size, system specification and property type. For a typical 4-bedroom property, a combined solar reroof and battery storage system delivers annual savings of £1,800 to £3,500 with a payback period of 8 to 14 years. A free roof assessment gives you property-specific figures before you commit to anything.</p>
        </div>
        <div class="faq-item">
            <div class="faq-q" role="button" tabindex="0">
                <span class="faq-q-text">Can I get a solar reroof in a conservation area or on a listed building?</span>
                <span class="faq-toggle" aria-hidden="true">+</span>
            </div>
            <p class="faq-a">In-roof solar tiles sit flush with the roofline and are available in slate-effect and tile-effect finishes. They are widely accepted in conservation areas where standard solar panels would not receive planning permission. Listed building consent requirements vary by property — we advise on planning requirements as part of the free roof assessment at no charge.</p>
        </div>
        <div class="faq-item">
            <div class="faq-q" role="button" tabindex="0">
                <span class="faq-q-text">How long does a solar roof last?</span>
                <span class="faq-toggle" aria-hidden="true">+</span>
            </div>
            <p class="faq-a">In-roof solar systems are designed to the same service life as a conventional roof — typically 25 to 40 years. Modules carry a 25-year performance warranty. The installation is weathertight to BS 5534 and MCS certified, with the same guarantee structure as a conventional roofing installation.</p>
        </div>
    </div>
</section>

<!-- CTA BAND -->
<section class="cta-band reveal">
    <div>
        <h2 class="cta-band-title">Book a free<br><em>roof assessment</em></h2>
        <p class="cta-band-sub">The assessment covers roof condition, orientation and shading analysis, system specification and a detailed financial model — before you commit to anything. If a solar reroof makes sense for your property, you will know exactly what it returns.</p>
    </div>
    <div class="cta-group">
        <a href="/contact" class="btn-primary-dark">Book a roof assessment →</a>
        <a href="/contact" class="btn-outline-dark">Talk to an engineer</a>
    </div>
</section>

<!-- BACK STRIP -->
<div class="back-strip">
    <a href="/residential" class="back-link">← Residential systems</a>
    <span class="back-sep">|</span>
    <span class="back-text">Also in residential: Custom systems → · Performance tier · EV charging · MVHR · Battery storage</span>
</div>

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

    document.querySelectorAll('.faq-item').forEach(item => {
        const q = item.querySelector('.faq-q');
        q.addEventListener('click', () => {
            const isOpen = item.classList.contains('open');
            document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
            if (!isOpen) item.classList.add('open');
        });
        q.addEventListener('keydown', e => {
            if (e.key === 'Enter' || e.key === ' ') q.click();
        });
    });
</script>


<?php
$content = ob_get_clean();
require __DIR__ . '/layouts/main.php';
?>