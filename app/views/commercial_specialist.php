<?php
$pageTitle = 'Commercial Specialist Services - Fort Energy';
$pageCss = 'commercial-specialist';
ob_start();
?>
<!-- BREADCRUMB -->
<div class="breadcrumb">
    <a href="/" class="bc-item">Home</a>
    <span class="bc-sep">/</span>
    <a href="/commercial" class="bc-item">Commercial &amp; Industrial</a>
    <span class="bc-sep">/</span>
    <span class="bc-current">Specialist services</span>
</div>

<!-- HERO -->
<section class="hero">
    <div class="hero-left">
        <div class="hero-eyebrow">Sub-sector 01a — Specialist commercial</div>
        <h1 class="hero-h1">Specialist<br>commercial<br><em>services</em></h1>
        <p class="hero-sub">Five capabilities deployed where standard commercial solutions are not appropriate. Each project is scoped individually — design and delivery matched precisely to site conditions, operational requirements and regulatory context.</p>
        <div class="hero-ctas">
            <a href="/contact" class="btn-primary">Request a specialist consultation →</a>
            <a href="/commercial" class="btn-secondary">← Back to commercial</a>
        </div>
    </div>

    <!-- Hero diagram: specialist site types infographic -->
    <div class="hero-diagram">
        <svg width="320" height="420" viewBox="0 0 320 420" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="sgrid" width="18" height="18" patternUnits="userSpaceOnUse">
                    <path d="M 18 0 L 0 0 0 18" fill="none" stroke="rgba(255,255,255,0.04)" stroke-width="0.5" />
                </pattern>
                <radialGradient id="sglow" cx="50%" cy="40%" r="50%">
                    <stop offset="0%" stop-color="#0A6B52" stop-opacity="0.2" />
                    <stop offset="100%" stop-color="#0A6B52" stop-opacity="0" />
                </radialGradient>
            </defs>
            <rect width="320" height="420" fill="url(#sgrid)" />
            <circle cx="160" cy="160" r="140" fill="url(#sglow)" />

            <!-- Central hub: SPECIALIST SERVICES -->
            <circle cx="160" cy="160" r="44" fill="rgba(10,107,82,0.15)" stroke="#0A6B52" stroke-width="1.5" />
            <circle cx="160" cy="160" r="52" fill="none" stroke="rgba(10,107,82,0.2)" stroke-width="0.8" stroke-dasharray="4 6" />
            <text x="160" y="154" text-anchor="middle" font-family="'DM Mono',monospace" font-size="8" fill="#0D8A6A" letter-spacing="1">SPECIALIST</text>
            <text x="160" y="167" text-anchor="middle" font-family="'DM Mono',monospace" font-size="8" fill="#0D8A6A" letter-spacing="1">SERVICES</text>

            <!-- Spoke 1: Power Quality (top) -->
            <line x1="160" y1="108" x2="160" y2="60" stroke="rgba(10,107,82,0.5)" stroke-width="1" class="flow-line" />
            <rect x="108" y="20" width="104" height="40" rx="2" fill="rgba(10,107,82,0.12)" stroke="#0A6B52" stroke-width="1" />
            <text x="160" y="36" text-anchor="middle" font-family="'DM Mono',monospace" font-size="8" fill="#0D8A6A" letter-spacing="1">POWER QUALITY</text>
            <text x="160" y="50" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.3)">harmonics · PFC · analysis</text>

            <!-- Spoke 2: Off-grid (top right) -->
            <line x1="197" y1="127" x2="248" y2="72" stroke="rgba(10,107,82,0.5)" stroke-width="1" class="flow-line" style="animation-delay:0.3s" />
            <rect x="222" y="34" width="92" height="40" rx="2" fill="rgba(10,107,82,0.12)" stroke="#0A6B52" stroke-width="1" />
            <text x="268" y="50" text-anchor="middle" font-family="'DM Mono',monospace" font-size="8" fill="#0D8A6A" letter-spacing="1">OFF-GRID</text>
            <text x="268" y="63" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.3)">remote · island mode</text>

            <!-- Spoke 3: Temporary (right) -->
            <line x1="204" y1="160" x2="258" y2="160" stroke="rgba(10,107,82,0.5)" stroke-width="1" class="flow-line" style="animation-delay:0.6s" />
            <rect x="262" y="138" width="52" height="44" rx="2" fill="rgba(10,107,82,0.12)" stroke="#0A6B52" stroke-width="1" />
            <text x="288" y="155" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="#0D8A6A" letter-spacing="0.5">TEMP</text>
            <text x="288" y="168" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.25)">site supply</text>

            <!-- Spoke 4: Harsh environment (bottom right) -->
            <line x1="197" y1="193" x2="244" y2="244" stroke="rgba(200,118,42,0.5)" stroke-width="1" class="flow-line" style="animation-delay:0.9s" />
            <rect x="218" y="248" width="96" height="40" rx="2" fill="rgba(200,118,42,0.08)" stroke="rgba(200,118,42,0.35)" stroke-width="1" />
            <text x="266" y="264" text-anchor="middle" font-family="'DM Mono',monospace" font-size="8" fill="rgba(200,118,42,0.7)" letter-spacing="1">HARSH ENV</text>
            <text x="266" y="278" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.25)">ATEX · IP · mobile</text>

            <!-- Spoke 5: Control panels (bottom left) -->
            <line x1="120" y1="193" x2="72" y2="244" stroke="rgba(10,107,82,0.5)" stroke-width="1" class="flow-line" style="animation-delay:1.2s" />
            <rect x="6" y="248" width="120" height="40" rx="2" fill="rgba(10,107,82,0.12)" stroke="#0A6B52" stroke-width="1" />
            <text x="66" y="264" text-anchor="middle" font-family="'DM Mono',monospace" font-size="8" fill="#0D8A6A" letter-spacing="1">CTRL PANELS</text>
            <text x="66" y="278" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.25)">design · build · maintain</text>

            <!-- Boundary annotation -->
            <rect x="6" y="6" width="308" height="308" rx="4" fill="none" stroke="rgba(10,107,82,0.1)" stroke-width="1" stroke-dasharray="6 10" />
            <text x="14" y="18" font-family="'DM Mono',monospace" font-size="7" fill="rgba(10,107,82,0.3)" letter-spacing="2">NON-STANDARD SCOPE</text>

            <!-- Key: -->
            <text x="16" y="340" font-family="'DM Mono',monospace" font-size="9" fill="rgba(255,255,255,0.3)" letter-spacing="1">WHEN STANDARD SOLUTIONS DON'T APPLY</text>
            <!-- Divider -->
            <line x1="16" y1="350" x2="304" y2="350" stroke="rgba(255,255,255,0.07)" stroke-width="0.5" />

            <!-- Mini icons row -->
            <!-- Power quality waveform -->
            <path d="M 20 375 Q 28 360 36 375 Q 44 390 52 375 Q 60 360 68 375" fill="none" stroke="#0D8A6A" stroke-width="1.5" stroke-linecap="round" />
            <text x="44" y="395" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.25)">PQ</text>

            <!-- Off-grid sun+battery -->
            <circle cx="108" cy="372" r="8" fill="none" stroke="rgba(200,118,42,0.5)" stroke-width="1.2" />
            <rect x="102" y="382" width="12" height="8" rx="1" fill="none" stroke="#0D8A6A" stroke-width="1" />
            <line x1="108" y1="362" x2="108" y2="364" stroke="rgba(200,118,42,0.4)" stroke-width="1" />
            <line x1="108" y1="392" x2="108" y2="395" stroke="#0D8A6A" stroke-width="1" />
            <text x="108" y="405" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.25)">OFF-GRID</text>

            <!-- Harsh: diamond warning -->
            <polygon points="160,362 168,372 160,382 152,372" fill="none" stroke="rgba(200,118,42,0.5)" stroke-width="1.2" />
            <text x="160" y="376" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(200,118,42,0.5)">!</text>
            <text x="160" y="395" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.25)">ATEX</text>

            <!-- Control panel grid -->
            <rect x="206" y="362" width="20" height="20" rx="1" fill="none" stroke="#0D8A6A" stroke-width="1" />
            <rect x="209" y="365" width="6" height="6" rx="0.5" fill="rgba(10,107,82,0.4)" />
            <rect x="217" y="365" width="6" height="6" rx="0.5" fill="rgba(10,107,82,0.2)" />
            <rect x="209" y="373" width="6" height="6" rx="0.5" fill="rgba(10,107,82,0.2)" />
            <rect x="217" y="373" width="6" height="6" rx="0.5" fill="rgba(10,107,82,0.4)" />
            <text x="216" y="395" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.25)">PANELS</text>

            <!-- Temp supply plug -->
            <rect x="262" y="363" width="22" height="18" rx="2" fill="none" stroke="rgba(255,255,255,0.2)" stroke-width="1" />
            <circle cx="268" cy="370" r="2" fill="rgba(255,255,255,0.2)" />
            <circle cx="278" cy="370" r="2" fill="rgba(255,255,255,0.2)" />
            <line x1="273" y1="381" x2="273" y2="387" stroke="rgba(255,255,255,0.2)" stroke-width="1.2" />
            <text x="273" y="400" text-anchor="middle" font-family="'DM Mono',monospace" font-size="7" fill="rgba(255,255,255,0.25)">TEMP</text>
        </svg>
    </div>
</section>

<!-- INTRO: beyond standard installations -->
<section class="intro reveal">
    <div>
        <div class="section-label">Beyond standard installations</div>
        <h2 class="section-title">When standard<br>solutions are<br><em>not appropriate</em></h2>
    </div>
    <div>
        <div class="intro-body">
            <p>The majority of commercial energy projects follow a recognisable pattern — roof or ground array, grid-connected inverter, battery storage, DNO application. Fort Energy's core commercial service handles this well.</p>
            <p>Specialist services exist for the projects that sit outside that pattern. Sites where the grid is absent, unreliable or restricted. Environments where standard electrical equipment cannot be specified. Supply requirements that are temporary, mobile or subject to unusual regulatory constraints. Power quality problems that affect equipment reliability and operational efficiency.</p>
            <p>These services are not packaged. Every project is scoped individually and designed from first principles against the specific conditions of the site.</p>
        </div>
    </div>
</section>

<!-- WHEN LIST — full width -->
<section style="padding: 0 56px 80px; background: var(--paper);" class="reveal">
    <div class="when-list" style="max-width: 860px;">
        <div class="when-item">
            <div class="when-dot"></div>
            <div class="when-text"><strong>The grid is unavailable or capacity is severely constrained</strong>Off-grid or edge-of-grid sites where grid connection cost is prohibitive or connection timescales are unacceptable. Island-mode systems that operate independently.</div>
        </div>
        <div class="when-item">
            <div class="when-dot"></div>
            <div class="when-text"><strong>The installation environment is classified or hazardous</strong>ATEX-rated zones, marine environments, outdoor industrial installations subject to extreme temperature, humidity, vibration or ingress. Mobile equipment and vehicle-mounted systems.</div>
        </div>
        <div class="when-item">
            <div class="when-dot"></div>
            <div class="when-text"><strong>The supply requirement is temporary or project-based</strong>Construction sites, events, temporary operational facilities. Systems that need to be deployed, operated and decommissioned without permanent infrastructure.</div>
        </div>
        <div class="when-item">
            <div class="when-dot"></div>
            <div class="when-text"><strong>Power quality is affecting equipment performance or reliability</strong>Harmonics, reactive power, voltage instability or flicker causing equipment failures, inefficiency or regulatory non-compliance. Problems that require measurement before they can be solved.</div>
        </div>
        <div class="when-item">
            <div class="when-dot"></div>
            <div class="when-text"><strong>Control and automation requirements are non-standard</strong>Bespoke panel builds, PLC integration outside standard product ranges, legacy system retrofits, or multi-source control architectures that do not suit off-the-shelf EMS products.</div>
        </div>
    </div>
</section>

<!-- FIVE SERVICES GRID (3+2) -->
<section class="services">
    <div class="services-header reveal">
        <div>
            <div class="section-label">Five specialist capabilities</div>
            <h2 style="font-family:var(--display);font-size:clamp(26px,2.5vw,36px);font-weight:700;color:var(--ink);line-height:1.1;">Designed for the<br>non-standard project</h2>
        </div>
        <div class="services-count">05</div>
    </div>

    <!-- Row of 3 -->
    <div class="grid-3">

        <!-- 1: Power quality -->
        <div class="svc-card reveal">
            <div class="svc-img">
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=700&q=80&fit=crop" alt="Power quality analysis equipment and oscilloscope" loading="lazy" />
                <div class="svc-img-overlay"></div>
                <span class="svc-img-ref">SS-01</span>
            </div>
            <div class="svc-body">
                <div class="svc-title">Power quality analysis</div>
                <div class="svc-desc">Site measurement of harmonics, reactive power, voltage instability and flicker. Detailed power quality report identifying root causes, regulatory exposure and recommended corrective measures — active filters, PFC banks, or supply reconfiguration.</div>
                <div class="svc-tags">
                    <span class="svc-tag">HARMONIC ANALYSIS</span>
                    <span class="svc-tag">EN 50160</span>
                    <span class="svc-tag">PFC</span>
                    <span class="svc-tag">ACTIVE FILTERS</span>
                </div>
            </div>
        </div>

        <!-- 2: Off-grid -->
        <div class="svc-card reveal reveal-d1">
            <div class="svc-img">
                <img src="https://images.unsplash.com/photo-1466611653911-95081537e5b7?w=700&q=80&fit=crop" alt="Off-grid solar installation in remote location" loading="lazy" />
                <div class="svc-img-overlay"></div>
                <span class="svc-img-ref">SS-02</span>
            </div>
            <div class="svc-body">
                <div class="svc-title">Off-grid solutions</div>
                <div class="svc-desc">Complete off-grid energy systems for remote or grid-constrained sites. Solar generation, battery storage and backup generation designed and sized against actual load profiles. Island-mode operation with automatic source switching and load management.</div>
                <div class="svc-tags">
                    <span class="svc-tag">ISLAND MODE</span>
                    <span class="svc-tag">SOLAR + BESS</span>
                    <span class="svc-tag">AUTO-SWITCHING</span>
                    <span class="svc-tag">LOAD MGMT</span>
                </div>
            </div>
        </div>

        <!-- 3: Temporary site supplies -->
        <div class="svc-card reveal reveal-d2">
            <div class="svc-img">
                <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=700&q=80&fit=crop" alt="Temporary power supply on construction site" loading="lazy" />
                <div class="svc-img-overlay"></div>
                <span class="svc-img-ref">SS-03</span>
            </div>
            <div class="svc-body">
                <div class="svc-title">Temporary site supplies</div>
                <div class="svc-desc">Engineered temporary power solutions for construction sites, events and interim operational facilities. Hybrid solar-battery-generator systems reduce fuel consumption and noise. Full electrical design, distribution boards and temporary metering included.</div>
                <div class="svc-tags">
                    <span class="svc-tag">CONSTRUCTION</span>
                    <span class="svc-tag">HYBRID GEN</span>
                    <span class="svc-tag">TEMP METERING</span>
                    <span class="svc-tag">BS 7671</span>
                </div>
            </div>
        </div>

    </div>

    <!-- Row of 2 — centred per brief spec -->
    <div class="grid-2">

        <!-- 4: Harsh environment -->
        <div class="svc-card reveal">
            <div class="svc-img">
                <img src="https://images.unsplash.com/photo-1605732562742-3023a888e56e?w=700&q=80&fit=crop" alt="Industrial equipment in harsh outdoor environment" loading="lazy" />
                <div class="svc-img-overlay"></div>
                <span class="svc-img-ref">SS-04</span>
            </div>
            <div class="svc-body">
                <div class="svc-title">Harsh environment &amp; mobile equipment</div>
                <div class="svc-desc">Electrical systems and energy equipment specified for classified, marine, outdoor industrial and mobile environments. ATEX-rated components where required. IP65 and above enclosures, corrosion-resistant materials, vibration-rated installations. Vehicle-mounted and trailer-based power systems.</div>
                <div class="svc-tags">
                    <span class="svc-tag">ATEX ZONE 1/2</span>
                    <span class="svc-tag">IP65+</span>
                    <span class="svc-tag">MARINE GRADE</span>
                    <span class="svc-tag">VEHICLE MOUNT</span>
                </div>
            </div>
        </div>

        <!-- 5: Control panels -->
        <div class="svc-card reveal reveal-d1">
            <div class="svc-img">
                <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?w=700&q=80&fit=crop" alt="Custom electrical control panel design and build" loading="lazy" />
                <div class="svc-img-overlay"></div>
                <span class="svc-img-ref">SS-05</span>
            </div>
            <div class="svc-body">
                <div class="svc-title">Control panel design, build &amp; maintenance</div>
                <div class="svc-desc">Bespoke LV control and distribution panels designed, built and tested in-house. PLC integration, motor control centres, protection relays and metering panels. Legacy panel refurbishment, fault diagnosis and planned maintenance programmes for existing installations.</div>
                <div class="svc-tags">
                    <span class="svc-tag">LV PANELS</span>
                    <span class="svc-tag">PLC INTEGRATION</span>
                    <span class="svc-tag">MCC</span>
                    <span class="svc-tag">MAINTENANCE</span>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- CLOSING: Engineering-led, project by project -->
<section class="closing reveal">
    <div class="closing-left">
        <div class="closing-label">How specialist work is delivered</div>
        <h2 class="closing-title">Engineering-led,<br><em>project by project</em></h2>
        <div class="closing-body">
            <p>Specialist services are not packaged products. There is no standard system size, no default specification and no fixed price list — because the projects that require specialist input are, by definition, non-standard.</p>
            <p>Each project begins with a detailed technical conversation to establish what the site requires, what constraints apply, and what the correct approach is. Design and delivery are then matched precisely to those conditions.</p>
        </div>
        <a href="/contact" class="closing-cta">Request a specialist consultation →</a>
    </div>

    <div class="closing-right">
        <div class="diff-list">
            <div class="diff-item">
                <div class="diff-num">01</div>
                <div class="diff-content">
                    <div class="diff-title">Site-specific scoping</div>
                    <div class="diff-desc">Every project opens with a technical assessment of the actual site conditions — not a questionnaire. Constraints are understood before a solution is proposed.</div>
                </div>
            </div>
            <div class="diff-item">
                <div class="diff-num">02</div>
                <div class="diff-content">
                    <div class="diff-title">First-principles design</div>
                    <div class="diff-desc">No product is specified before the design is complete. Equipment selection follows the engineering requirement — not the other way around.</div>
                </div>
            </div>
            <div class="diff-item">
                <div class="diff-num">03</div>
                <div class="diff-content">
                    <div class="diff-title">Regulatory compliance by default</div>
                    <div class="diff-desc">ATEX classification, BS 7671, DNO requirements, EN 50160 — compliance is built into the design from the start, not checked at the end.</div>
                </div>
            </div>
            <div class="diff-item">
                <div class="diff-num">04</div>
                <div class="diff-content">
                    <div class="diff-title">Single point of accountability</div>
                    <div class="diff-desc">Design, procurement, installation and commissioning managed by one team. No contractor handoff points where specialist knowledge is lost.</div>
                </div>
            </div>
            <div class="diff-item">
                <div class="diff-num">05</div>
                <div class="diff-content">
                    <div class="diff-title">Documentation to industry standard</div>
                    <div class="diff-desc">Full as-built drawings, operation and maintenance manuals, commissioning records and test certificates delivered as part of every project.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA BAND -->
<section class="cta-band reveal">
    <div>
        <h2 class="cta-band-title">Tell us about your<br><em>specialist project</em></h2>
        <p class="cta-band-sub">If your project sits outside the standard commercial scope — unusual environment, off-grid requirement, power quality problem or bespoke control need — start with a technical conversation. No obligation. No generic proposal.</p>
    </div>
    <div class="cta-group">
        <a href="/contact" class="btn-primary" style="white-space:nowrap;">Request a specialist consultation →</a>
        <a href="/contact" class="btn-secondary" style="white-space:nowrap;">Book a technical call</a>
    </div>
</section>

<!-- BACK TO COMMERCIAL STRIP -->
<div class="back-strip">
    <a href="/commercial" class="back-link">← Commercial &amp; Industrial</a>
    <span class="back-sep">|</span>
    <span class="back-text">Also in commercial: Solar PV · BESS · Load balancing · Hybrid microgrids · Standby generation · PLC &amp; BMS control</span>
</div>


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