<?php
$pageTitle = 'Contact & Case Studies | Fort Energy';
$activePage   = 'contact';
$metaDesc     = 'Start a conversation about your project. Submit an enquiry, request a feasibility review or upload plans. Real projects, measurable outcomes across commercial, residential, agricultural and BIPV sectors.';
$canonicalUrl = 'https://fortenergy.co.uk/contact';
$pageCSS      = 'contact.css';
$schemaJson   = null; // no schema needed on contact page
ob_start();

?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<!-- BREADCRUMB -->
<div class="breadcrumb">
    <a href="<?= BASE_URL ?>" class="bc-item">Home</a>
    <span class="bc-sep">/</span>
    <span class="bc-current">Contact</span>
</div>


<!-- HERO -->
<section class="hero">
    <div class="hero-left">
        <div class="hero-eyebrow">Start the conversation</div>
        <h1 class="hero-h1">Tell us about<br>your <em>project</em></h1>
        <p class="hero-sub">Whether you are scoping a commercial site, designing a development's energy strategy, or specifying BIPV for an architectural project — start here. We respond to all enquiries within one working day.</p>
    </div>
    <div class="hero-right">
        <div class="hero-contact-chips">
            <div class="contact-info-row">
                <span class="ci-label">Email</span>
                <div>
                    <div class="ci-value"><a href="mailto:<?= CONTACT_EMAIL ?>"><?= CONTACT_EMAIL ?></a></div>
                    <div class="ci-sub">All enquiries — responses within 1 working day</div>
                </div>
            </div>
            <div class="contact-info-row">
                <span class="ci-label">Phone</span>
                <div>
                    <div class="ci-value"><a href="tel:<?= CONTACT_PHONE_TEL ?>"><?= CONTACT_PHONE ?></a></div>
                    <div class="ci-sub">Mon–Fri, 8am–6pm</div>
                </div>
            </div>
            <div class="contact-info-row">
                <span class="ci-label">Service area</span>
                <div>
                    <div class="ci-value">United Kingdom</div>
                    <div class="ci-sub">Commercial, residential, agricultural and BIPV across England and Wales</div>
                </div>
            </div>
            <div class="contact-info-row">
                <span class="ci-label">Registered</span>
                <div>
                    <div class="ci-value">Fort Energy Ltd</div>
                    <div class="ci-sub">Registered in England &amp; Wales</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MAIN: Form + Case Studies -->
<div class="main-content-contact">

    <!-- TWO-STEP FORM -->
    <div class="form-panel reveal">
        <div class="form-label">Submit an enquiry</div>
        <h2 class="form-title">Start with your<br><em>sector</em></h2>

        <!-- Step indicators -->
        <div class="step-indicators" aria-label="Form progress">
            <div class="step-ind active" id="ind1">
                <div class="step-ind-num">1</div>
                Select sector
            </div>
            <span class="step-arrow" aria-hidden="true">›</span>
            <div class="step-ind" id="ind2">
                <div class="step-ind-num">2</div>
                Project details
            </div>
        </div>

        <!-- Success message (hidden until submit) -->
        <div class="form-success" id="formSuccess">
            <div class="success-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M5 12l5 5L19 7" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="success-title">Enquiry received</div>
            <p class="success-body">We have received your enquiry and will respond within one working day. If your project is time-sensitive, call us directly on <a href="tel:<?= CONTACT_PHONE_TEL ?>" style="color:var(--teal);"><?= CONTACT_PHONE ?></a>.</p>
        </div>

        <form id="enquiryForm" novalidate>

            <!-- STEP 1: Sector selection -->
            <div class="form-step active" id="step1">
                <div class="sector-grid" role="group" aria-label="Select your sector">

                    <button type="button" class="sector-btn" data-sector="commercial">
                        <span class="sb-title">Commercial &amp; Industrial</span>
                        <span class="sb-sub">Solar, BESS, microgrids, PLC/BMS</span>
                    </button>

                    <button type="button" class="sector-btn" data-sector="commercial-specialist">
                        <span class="sb-title">Commercial Specialist</span>
                        <span class="sb-sub">Off-grid, power quality, harsh environment</span>
                    </button>

                    <button type="button" class="sector-btn" data-sector="development">
                        <span class="sb-title">Developers &amp; Housebuilders</span>
                        <span class="sb-sub">Energy strategy, G99/G100, BIPV training</span>
                    </button>

                    <button type="button" class="sector-btn" data-sector="residential">
                        <span class="sb-title">Residential Systems</span>
                        <span class="sb-sub">Solar, storage, EV, MVHR, solar reroof</span>
                    </button>

                    <button type="button" class="sector-btn" data-sector="custom-residential">
                        <span class="sb-title">Custom Residential</span>
                        <span class="sb-sub">Integrated systems, plant room, pool</span>
                    </button>

                    <button type="button" class="sector-btn" data-sector="agricultural">
                        <span class="sb-title">Agricultural</span>
                        <span class="sb-sub">Roof-mount, ground-mount, dairy</span>
                    </button>

                    <button type="button" class="sector-btn" data-sector="bipv" style="grid-column: 1 / -1;">
                        <span class="sb-title">Building Integrated Solar (BIPV)</span>
                        <span class="sb-sub">In-roof, facades, curtain wall, architectural specials</span>
                    </button>

                </div>
                <button type="button" class="step1-next" id="step1Next">
                    Continue — add project details →
                </button>
            </div>

            <!-- STEP 2: Project details -->
            <div class="form-step" id="step2">

                <!-- Selected sector badge — click to go back -->
                <button type="button" class="selected-sector-badge" id="changeSector">
                    <span id="selectedSectorLabel">Sector</span>
                    <span class="ssb-change">— change ↩</span>
                </button>

                <div class="form-fields">
                    <!-- Honeypot (bots fill this, humans don't see it) -->
                    <input type="text" name="website" class="honeypot" tabindex="-1" autocomplete="off">
                    <!-- Hidden sector value -->
                    <input type="hidden" name="sector" id="sectorInput">

                    <div class="field-row">
                        <div class="field">
                            <label for="name">Name *</label>
                            <input type="text" id="name" name="name" placeholder="Your full name" required autocomplete="name">
                        </div>
                        <div class="field">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" placeholder="your@email.com" required autocomplete="email">
                        </div>
                    </div>

                    <div class="field-row">
                        <div class="field">
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone" placeholder="07700 000 000" autocomplete="tel">
                        </div>
                        <div class="field">
                            <label for="company">Company / property</label>
                            <input type="text" id="company" name="company" placeholder="Company name or property address" autocomplete="organization">
                        </div>
                    </div>

                    <div class="field full">
                        <label for="project_details">Project details *</label>
                        <textarea id="project_details" name="project_details" placeholder="Tell us about your project — location, approximate size, timeline and any specific requirements or constraints." required></textarea>
                    </div>

                    <!-- File upload -->
                    <div class="field full">
                        <label>Plans or documents (optional)</label>
                        <label class="file-upload" for="fileUpload">
                            <input type="file" id="fileUpload" name="files[]" multiple accept=".pdf,.dwg,.jpg,.jpeg,.png,.xlsx">
                            <div class="fu-label">Upload plans, drawings or documents</div>
                            <div class="fu-sub" id="fileLabel">PDF, DWG, images — max 10 MB per file</div>
                        </label>
                    </div>
                    <!-- Google reCAPTCHA Widget -->
                    <div class="field full" style="margin-top: 20px; display: flex; justify-content: flex-start;">
                        <div class="g-recaptcha" data-sitekey="<?= RECAPTCHA_SITE_KEY ?>"></div>
                    </div>

                </div>

                <button type="submit" class="submit-btn" id="submitBtn" style="margin-top:20px;">
                    Submit enquiry →
                </button>
                <p class="form-note">We respond to all enquiries within one working day. Your information is used only to respond to your enquiry and is not shared with third parties.</p>
            </div>

        </form>
    </div>

    <!-- CASE STUDIES COLUMN -->
    <div class="case-studies-col reveal rd1">
        <div class="cs-col-label">Real projects</div>
        <h2 class="cs-col-title">Measurable<br><em>outcomes</em></h2>

        <div class="cs-list">

            <!-- 1: Commercial office -->
            <article class="cs-item">
                <div class="cs-item-inner">
                    <div class="cs-item-top">
                        <span class="cs-item-sector">Commercial</span>
                        <span class="cs-item-location">West Midlands</span>
                    </div>
                    <h3 class="cs-item-title">Commercial office — solar, storage and generator integration within DNO limits</h3>
                    <p class="cs-item-challenge">Grid import limit made standard solar unviable. Peak demand charges representing 35% of the electricity bill.</p>
                    <div class="cs-flow">
                        <div class="cs-flow-item">
                            <div class="cs-flow-label">Challenge</div>
                            <div class="cs-flow-val">DNO export limit · peak demand charges</div>
                        </div>
                        <div class="cs-flow-item">
                            <div class="cs-flow-label">System</div>
                            <div class="cs-flow-val">245 kWp solar + 180 kWh BESS + 150 kVA gen</div>
                        </div>
                        <div class="cs-flow-item">
                            <div class="cs-flow-label">Outcome</div>
                            <div class="cs-flow-val">61% import reduction · 5.2yr payback</div>
                        </div>
                    </div>
                </div>
            </article>

            <!-- 2: Student accommodation -->
            <article class="cs-item">
                <div class="cs-item-inner">
                    <div class="cs-item-top">
                        <span class="cs-item-sector">Developers</span>
                        <span class="cs-item-location">North West England</span>
                    </div>
                    <h3 class="cs-item-title">Student accommodation — capacity-constrained site avoided £1.2M infrastructure upgrade</h3>
                    <p class="cs-item-challenge">Grid connection insufficient for full electrification. Substation upgrade would have added 14 months to programme.</p>
                    <div class="cs-flow">
                        <div class="cs-flow-item">
                            <div class="cs-flow-label">Challenge</div>
                            <div class="cs-flow-val">Grid capacity · £1.2M upgrade · 14-month delay</div>
                        </div>
                        <div class="cs-flow-item">
                            <div class="cs-flow-label">System</div>
                            <div class="cs-flow-val">360 kWp in-roof + 200 kWh BESS + peak shaving</div>
                        </div>
                        <div class="cs-flow-item">
                            <div class="cs-flow-label">Outcome</div>
                            <div class="cs-flow-val">Infra upgrade avoided · planning condition met</div>
                        </div>
                    </div>
                </div>
            </article>

            <!-- 3: Dairy farm -->
            <article class="cs-item">
                <div class="cs-item-inner">
                    <div class="cs-item-top">
                        <span class="cs-item-sector">Agricultural</span>
                        <span class="cs-item-location">Shropshire</span>
                    </div>
                    <h3 class="cs-item-title">Dairy farm — roof array with battery and diesel hybrid integration</h3>
                    <p class="cs-item-challenge">High electricity cost on dairy operations. Diesel generator running 400 hours per year. Evening milking uncovered by solar generation.</p>
                    <div class="cs-flow">
                        <div class="cs-flow-item">
                            <div class="cs-flow-label">Challenge</div>
                            <div class="cs-flow-val">High tariff · 400hr diesel runtime · evening load</div>
                        </div>
                        <div class="cs-flow-item">
                            <div class="cs-flow-label">System</div>
                            <div class="cs-flow-val">280 kWp roof + 120 kWh BESS + hybrid gen control</div>
                        </div>
                        <div class="cs-flow-item">
                            <div class="cs-flow-label">Outcome</div>
                            <div class="cs-flow-val">£52k yr1 saving · 96% diesel reduction · 4.6yr PB</div>
                        </div>
                    </div>
                </div>
            </article>

            <!-- 4: Period property reroof -->
            <article class="cs-item">
                <div class="cs-item-inner">
                    <div class="cs-item-top">
                        <span class="cs-item-sector">Residential</span>
                        <span class="cs-item-location">West Yorkshire</span>
                    </div>
                    <h3 class="cs-item-title">Period property — full solar reroof, 14 kWp across all four pitches</h3>
                    <p class="cs-item-challenge">Conservation area restrictions ruled out standard solar panels. Property required reroofing within two years.</p>
                    <div class="cs-flow">
                        <div class="cs-flow-item">
                            <div class="cs-flow-label">Challenge</div>
                            <div class="cs-flow-val">Conservation area · roof due for replacement</div>
                        </div>
                        <div class="cs-flow-item">
                            <div class="cs-flow-label">System</div>
                            <div class="cs-flow-val">14 kWp solar reroof + 24 kWh BESS · 4 pitches</div>
                        </div>
                        <div class="cs-flow-item">
                            <div class="cs-flow-label">Outcome</div>
                            <div class="cs-flow-val">£2,400 yr1 saving · combined cost below two projects</div>
                        </div>
                    </div>
                </div>
            </article>

            <!-- 5: Mixed-use BIPV -->
            <article class="cs-item">
                <div class="cs-item-inner">
                    <div class="cs-item-top">
                        <span class="cs-item-sector">BIPV</span>
                        <span class="cs-item-location">Bristol</span>
                    </div>
                    <h3 class="cs-item-title">Mixed-use development — 275 kWp BIPV across in-roof and cladding facades</h3>
                    <p class="cs-item-challenge">Planning condition requiring on-site renewables. Design team needed solar integrated into the envelope without compromising architectural intent.</p>
                    <div class="cs-flow">
                        <div class="cs-flow-item">
                            <div class="cs-flow-label">Challenge</div>
                            <div class="cs-flow-val">Planning condition · architectural constraints</div>
                        </div>
                        <div class="cs-flow-item">
                            <div class="cs-flow-label">System</div>
                            <div class="cs-flow-val">180 kWp in-roof + 95 kWp facade cladding</div>
                        </div>
                        <div class="cs-flow-item">
                            <div class="cs-flow-label">Outcome</div>
                            <div class="cs-flow-val">58% demand offset · BREEAM Excellent · condition met</div>
                        </div>
                    </div>
                </div>
            </article>

        </div>

        <!-- All case studies link -->
        <div style="margin-top:2px;background:var(--white);padding:20px 24px;display:flex;align-items:center;justify-content:space-between;border-top:1px solid var(--rule);">
            <span style="font-family:var(--mono);font-size:11px;color:var(--ink-low);letter-spacing:0.06em;">ONE CASE STUDY PER SECTOR SHOWN</span>
            <a href="/case-studies" style="font-family:var(--mono);font-size:11px;letter-spacing:0.08em;color:var(--teal);text-transform:uppercase;text-decoration:none;display:inline-flex;align-items:center;gap:8px;border-bottom:1px solid var(--teal);padding-bottom:2px;transition:gap 0.2s;">View all case studies →</a>
        </div>
    </div>

</div>

<script>
    /* ── FORM STATE ── */
    let selectedSector = null;
    const sectorLabels = {
        'commercial': 'Commercial & Industrial',
        'commercial-specialist': 'Commercial Specialist',
        'development': 'Developers & Housebuilders',
        'residential': 'Residential Systems',
        'custom-residential': 'Custom Residential',
        'agricultural': 'Agricultural',
        'bipv': 'Building Integrated Solar (BIPV)',
    };

    /* Sector selection */
    document.querySelectorAll('.sector-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.sector-btn').forEach(b => b.classList.remove('selected'));
            btn.classList.add('selected');
            selectedSector = btn.dataset.sector;
            document.getElementById('step1Next').classList.add('enabled');
        });
    });

    /* Step 1 → Step 2 */
    document.getElementById('step1Next').addEventListener('click', () => {
        if (!selectedSector) return;
        document.getElementById('step1').classList.remove('active');
        document.getElementById('step2').classList.add('active');
        document.getElementById('ind1').classList.remove('active');
        document.getElementById('ind1').classList.add('done');
        document.getElementById('ind2').classList.add('active');
        document.getElementById('ind1').querySelector('.step-ind-num').textContent = '✓';
        document.getElementById('selectedSectorLabel').textContent = sectorLabels[selectedSector];
        document.getElementById('sectorInput').value = selectedSector;
    });

    /* Change sector */
    document.getElementById('changeSector').addEventListener('click', () => {
        document.getElementById('step2').classList.remove('active');
        document.getElementById('step1').classList.add('active');
        document.getElementById('ind1').classList.add('active');
        document.getElementById('ind1').classList.remove('done');
        document.getElementById('ind2').classList.remove('active');
        document.getElementById('ind1').querySelector('.step-ind-num').textContent = '1';
    });

    /* File upload label */
    document.getElementById('fileUpload').addEventListener('change', function() {
        const label = document.getElementById('fileLabel');
        if (this.files.length > 0) {
            label.textContent = Array.from(this.files).map(f => f.name).join(', ');
        } else {
            label.textContent = 'PDF, DWG, images — max 10 MB per file';
        }
    });

    /* Form submit */
    document.getElementById('enquiryForm').addEventListener('submit', async function(e) {
        e.preventDefault();

        /* Honeypot check */
        if (document.querySelector('[name="website"]').value) return;

        /* Basic validation */
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const detail = document.getElementById('project_details').value.trim();
        if (!name || !email || !detail || !selectedSector) {
            alert('Please complete all required fields.');
            return;
        }

        const btn = document.getElementById('submitBtn');
        btn.disabled = true;
        btn.textContent = 'Sending…';

        /* Client-side reCAPTCHA verification */
        const recaptchaResponse = grecaptcha.getResponse();
        if (!recaptchaResponse) {
            alert('Please verify that you are not a robot by checking the reCAPTCHA box.');
            btn.disabled = false;
            btn.textContent = 'Submit enquiry →';
            return;
        }

        const formData = new FormData(this);

        try {
            const response = await fetch('<?= BASE_URL ?>submit-enquiry', {
                method: 'POST',
                body: formData
            });

            if (!response.ok) {
                throw new Error('Network response was not ok');
            }

            const result = await response.json();

            if (result.success) {
                document.getElementById('enquiryForm').style.display = 'none';
                document.getElementById('formSuccess').classList.add('visible');
                document.querySelector('.step-indicators').style.display = 'none';
                document.querySelector('.form-title').textContent = 'Enquiry received';
            } else {
                alert('Error: ' + (result.error || 'There was a problem sending your enquiry. Please try again.'));
                btn.disabled = false;
                btn.textContent = 'Submit enquiry →';
                if (typeof grecaptcha !== 'undefined') {
                    grecaptcha.reset();
                }
            }
        } catch (error) {
            console.error('Submission error:', error);
            alert('There was a connection issue. Please check your internet connection or call us directly.');
            btn.disabled = false;
            btn.textContent = 'Submit enquiry →';
            if (typeof grecaptcha !== 'undefined') {
                grecaptcha.reset();
            }
        }
    });

    /* Scroll reveal */
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