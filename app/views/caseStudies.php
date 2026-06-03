<?php
$pageTitle = "Case Studies — Fort Energy";
$activePage = 'case-studies';
$pageCanonical = BASE_URL . 'case-studies';
$metaDesc = 'Real case studies of solar, storage and EMS installations across commercial, residential, development and agricultural sites. Actual system specifications, payback periods and energy outcomes.';
$pageCss = 'allCaseStudies';
ob_start();
?>

<!--breadcrumb-->
<div class="breadcrumb">
    <a href="<?= BASE_URL ?>" class="bc-item">Home</a>
    <span class="bc-sep">/</span>
    <span class="bc-current">Case Studies</span>
</div>

<!--hero-->
<section class="hero">
  <div>
    <div class="hero-eyebrow">Real projects. Measurable outcomes.</div>
    <h1 class="hero-h1">What we've<br><em>delivered</em></h1>
    <p class="hero-sub">Every case study here is a real project — real site, real constraints, real outcome. Across five sectors and a range of system types, from 50 kWp commercial roof arrays to fully integrated residential systems.</p>
  </div>
  <div class="hero-stats">
    <div class="hero-stat">
      <span class="hs-val">6<em>MW</em></span>
      <span class="hs-label">Capacity delivered</span>
    </div>
    <div class="hero-stat">
      <span class="hs-val">5</span>
      <span class="hs-label">Sectors covered</span>
    </div>
    <div class="hero-stat">
      <span class="hs-val">4.6<em>yr</em></span>
      <span class="hs-label">Best payback achieved</span>
    </div>
  </div>
</section>
 
<!-- FILTER BAR -->
<div class="filter-bar" role="group" aria-label="Filter case studies by sector">
  <span class="filter-label">Filter by sector</span>
  <button class="filter-btn active" data-filter="all">All projects</button>
  <button class="filter-btn" data-filter="commercial">Commercial</button>
  <button class="filter-btn" data-filter="developers">Developers</button>
  <button class="filter-btn" data-filter="residential">Residential</button>
  <button class="filter-btn" data-filter="agricultural">Agricultural</button>
  <button class="filter-btn" data-filter="bipv">BIPV</button>
</div>
 
<!-- CASE STUDIES GRID -->
<section class="cs-section reveal">
  <div class="cs-grid" id="csGrid">
 
    <!-- FEATURED: Commercial -->
    <a href="<?= BASE_URL ?>case-studies/commercial-office-west-midlands" class="cs-card featured" data-sector="commercial">
      <div class="cs-img">
        <img src="<?php BASE_URL ?>assets/img/case-studies/commercial-&-Industrial-placeholder-case-study.png" alt="245 kWp commercial rooftop solar array on West Midlands office building" loading="eager" width="900" height="600"/>
        <div class="cs-img-overlay"></div>
        <div class="cs-img-meta">
          <span class="cs-sector-badge">Commercial &amp; Industrial</span>
          <span class="cs-location">West Midlands</span>
        </div>
      </div>
      <div class="cs-body">
        <div class="cs-title">Commercial office — solar, storage and generator integration within DNO import limits</div>
        <div class="cs-summary">245 kWp rooftop array with 180 kWh BESS and a 150 kVA standby generator configured as a hybrid system under PLC control. DNO export set to zero. Grid import reduced by 61% during working hours. Generator runtime reduced from 180 to 12 hours per year.</div>
        <div class="cs-metrics">
          <div class="cs-met"><span class="cs-met-val">245<em> kWp</em></span><span class="cs-met-key">Solar array</span></div>
          <div class="cs-met"><span class="cs-met-val">180<em> kWh</em></span><span class="cs-met-key">Storage</span></div>
          <div class="cs-met"><span class="cs-met-val">61<em>%</em></span><span class="cs-met-key">Import reduction</span></div>
          <div class="cs-met"><span class="cs-met-val">5.2<em> yr</em></span><span class="cs-met-key">Payback</span></div>
        </div>
        <div class="cs-read-more">Read case study →</div>
      </div>
    </a>
 
    <!-- Commercial Specialist -->
    <a href="<?= BASE_URL ?>case-studies/off-grid-remote-site" class="cs-card" data-sector="commercial">
      <div class="cs-img">
        <img src="<?php BASE_URL ?>assets/img/case-studies/commercial-specialist-placeholder-case-study.png" alt="Off-grid solar installation remote commercial site" loading="lazy" width="700" height="300"/>
        <div class="cs-img-overlay"></div>
        <div class="cs-img-meta">
          <span class="cs-sector-badge">Commercial Specialist</span>
          <span class="cs-location">Scottish Highlands</span>
        </div>
      </div>
      <div class="cs-body">
        <div class="cs-title">Remote site — off-grid solar, storage and hybrid generation</div>
        <div class="cs-summary">Off-grid system for a remote telecoms relay site. Solar, BESS and hybrid diesel under EMS control. Grid connection cost was £380k — system delivered for £140k.</div>
        <div class="cs-metrics">
          <div class="cs-met"><span class="cs-met-val">48<em> kWp</em></span><span class="cs-met-key">Solar</span></div>
          <div class="cs-met"><span class="cs-met-val">80<em> kWh</em></span><span class="cs-met-key">Storage</span></div>
          <div class="cs-met"><span class="cs-met-val">£240k</span><span class="cs-met-key">Grid cost avoided</span></div>
        </div>
        <div class="cs-read-more">Read case study →</div>
      </div>
    </a>
 
    <!-- Developers -->
    <a href="<?= BASE_URL ?>case-studies/student-accommodation-north-west" class="cs-card" data-sector="developers">
      <div class="cs-img">
        <img src="<?php BASE_URL ?>assets/img/case-studies/developers-placeholder-case-study.png" alt="Student accommodation development with in-roof solar installation" loading="lazy" width="700" height="460"/>
        <div class="cs-img-overlay"></div>
        <div class="cs-img-meta">
          <span class="cs-sector-badge">Developers</span>
          <span class="cs-location">North West England</span>
        </div>
      </div>
      <div class="cs-body">
        <div class="cs-title">Student accommodation — capacity-constrained site, £1.2M infra upgrade avoided</div>
        <div class="cs-summary">360 kWp in-roof solar and 200 kWh BESS designed to stay within existing grid capacity. Substation upgrade avoided. Planning renewable condition satisfied.</div>
        <div class="cs-metrics">
          <div class="cs-met"><span class="cs-met-val">360<em> kWp</em></span><span class="cs-met-key">Solar</span></div>
          <div class="cs-met"><span class="cs-met-val">200<em> kWh</em></span><span class="cs-met-key">Storage</span></div>
          <div class="cs-met"><span class="cs-met-val">£1.2<em>M</em></span><span class="cs-met-key">Upgrade avoided</span></div>
        </div>
        <div class="cs-read-more">Read case study →</div>
      </div>
    </a>
 
    <!-- Residential -->
    <a href="<?= BASE_URL ?>case-studies/4-bed-performance-system" class="cs-card" data-sector="residential">
      <div class="cs-img">
        <img src="<?php BASE_URL ?>assets/img/case-studies/residentials-placeholder-case-study.png" alt="4-bed residential performance solar and battery installation" loading="lazy" width="700" height="460"/>
        <div class="cs-img-overlay"></div>
        <div class="cs-img-meta">
          <span class="cs-sector-badge">Residential</span>
          <span class="cs-location">South East England</span>
        </div>
      </div>
      <div class="cs-body">
        <div class="cs-title">4-bed Performance — solar, storage, MVHR and EV charging integrated</div>
        <div class="cs-summary">9.2 kWp in-roof solar, 16 kWh storage, MVHR retrofit and 7 kW EV charger. System sized on 14 months of smart meter data. £1,800+ saving year one.</div>
        <div class="cs-metrics">
          <div class="cs-met"><span class="cs-met-val">9.2<em> kWp</em></span><span class="cs-met-key">Solar</span></div>
          <div class="cs-met"><span class="cs-met-val">16<em> kWh</em></span><span class="cs-met-key">Storage</span></div>
          <div class="cs-met"><span class="cs-met-val">£1.8<em>k+</em></span><span class="cs-met-key">Year 1 saving</span></div>
        </div>
        <div class="cs-read-more">Read case study →</div>
      </div>
    </a>
 
    <!-- Solar Reroof -->
    <a href="<?= BASE_URL ?>case-studies/period-property-solar-reroof" class="cs-card" data-sector="residential">
      <div class="cs-img">
        <img src="<?php BASE_URL ?>assets/img/case-studies/solar-reroof-placeholder-case-study.png" alt="Period property Victorian semi solar reroof conservation area" loading="lazy" width="700" height="460"/>
        <div class="cs-img-overlay"></div>
        <div class="cs-img-meta">
          <span class="cs-sector-badge">Residential — Solar Reroof</span>
          <span class="cs-location">West Yorkshire</span>
        </div>
      </div>
      <div class="cs-body">
        <div class="cs-title">Period property — full solar reroof, 14 kWp across four pitches, conservation area</div>
        <div class="cs-summary">Slate-effect in-roof modules across all four pitches of a Victorian semi. Conservation area accepted. Combined cost lower than two separate projects.</div>
        <div class="cs-metrics">
          <div class="cs-met"><span class="cs-met-val">14<em> kWp</em></span><span class="cs-met-key">System size</span></div>
          <div class="cs-met"><span class="cs-met-val">24<em> kWh</em></span><span class="cs-met-key">Storage</span></div>
          <div class="cs-met"><span class="cs-met-val">9.4<em> yr</em></span><span class="cs-met-key">Payback</span></div>
        </div>
        <div class="cs-read-more">Read case study →</div>
      </div>
    </a>
 
    <!-- Agricultural -->
    <a href="<?= BASE_URL ?>case-studies/dairy-farm-shropshire" class="cs-card" data-sector="agricultural">
      <div class="cs-img">
        <img src="<?php BASE_URL ?>assets/img/case-studies/agriculture-placeholder-case-study.png" alt="280 kWp roof solar array on Shropshire dairy farm" loading="lazy" width="700" height="460"/>
        <div class="cs-img-overlay"></div>
        <div class="cs-img-meta">
          <span class="cs-sector-badge">Agricultural</span>
          <span class="cs-location">Shropshire</span>
        </div>
      </div>
      <div class="cs-body">
        <div class="cs-title">Dairy farm — 280 kWp roof array, 120 kWh storage and diesel hybrid</div>
        <div class="cs-summary">Three portal-frame barns, 280 kWp combined. 120 kWh BESS covers evening milking. Diesel generator runtime reduced from 400 to 18 hours per year.</div>
        <div class="cs-metrics">
          <div class="cs-met"><span class="cs-met-val">280<em> kWp</em></span><span class="cs-met-key">Solar</span></div>
          <div class="cs-met"><span class="cs-met-val">£52<em>k</em></span><span class="cs-met-key">Year 1 saving</span></div>
          <div class="cs-met"><span class="cs-met-val">4.6<em> yr</em></span><span class="cs-met-key">Payback</span></div>
        </div>
        <div class="cs-read-more">Read case study →</div>
      </div>
    </a>
 
    <!-- BIPV -->
    <a href="<?= BASE_URL ?>case-studies/mixed-use-bipv-bristol" class="cs-card" data-sector="bipv">
      <div class="cs-img">
        <img src="<?php BASE_URL ?>assets/img/case-studies/bipv-reroof-placeholder-case-study.png" alt="275 kWp BIPV mixed-use development Bristol facade and in-roof" loading="lazy" width="700" height="460"/>
        <div class="cs-img-overlay"></div>
        <div class="cs-img-meta">
          <span class="cs-sector-badge">BIPV</span>
          <span class="cs-location">Bristol</span>
        </div>
      </div>
      <div class="cs-body">
        <div class="cs-title">Mixed-use development — 275 kWp in-roof and facade BIPV</div>
        <div class="cs-summary">180 kWp in-roof and 95 kWp facade cladding. Planning condition satisfied. BREEAM Excellent achieved. 58% of total building demand offset from generation.</div>
        <div class="cs-metrics">
          <div class="cs-met"><span class="cs-met-val">275<em> kWp</em></span><span class="cs-met-key">Total BIPV</span></div>
          <div class="cs-met"><span class="cs-met-val">58<em>%</em></span><span class="cs-met-key">Demand offset</span></div>
          <div class="cs-met"><span class="cs-met-val">BREEAM</span><span class="cs-met-key">Excellent</span></div>
        </div>
        <div class="cs-read-more">Read case study →</div>
      </div>
    </a>
 
    <!-- Custom Residential -->
    <a href="<?= BASE_URL ?>case-studies/high-spec-new-build-surrey" class="cs-card" data-sector="residential">
      <div class="cs-img">
        <img src="<?php BASE_URL ?>assets/img/case-studies/custom-residentials-placeholder-case-study.png" alt="High specification custom residential integrated energy system Surrey" loading="lazy" width="700" height="460"/>
        <div class="cs-img-overlay"></div>
        <div class="cs-img-meta">
          <span class="cs-sector-badge">Custom Residential</span>
          <span class="cs-location">Surrey</span>
        </div>
      </div>
      <div class="cs-body">
        <div class="cs-title">High-specification new build — 6 integrated systems under coordinated EMS control</div>
        <div class="cs-summary">18 kWp solar reroof, 64 kWh storage, GSHP, MVHR, pool systems and 22 kW EV charging. Single plant room. All systems under coordinated EMS control.</div>
        <div class="cs-metrics">
          <div class="cs-met"><span class="cs-met-val">18<em> kWp</em></span><span class="cs-met-key">Solar reroof</span></div>
          <div class="cs-met"><span class="cs-met-val">64<em> kWh</em></span><span class="cs-met-key">Storage</span></div>
          <div class="cs-met"><span class="cs-met-val">6</span><span class="cs-met-key">Systems integrated</span></div>
        </div>
        <div class="cs-read-more">Read case study →</div>
      </div>
    </a>
 
    <!-- No results message -->
    <div class="no-results" id="noResults" style="display:none;">
      <div class="no-results-title">No case studies in this sector yet</div>
      <div class="no-results-sub">We are adding new case studies regularly. <a href="<?= BASE_URL ?>contact" style="color:var(--teal);">Contact us</a> to discuss projects in this area.</div>
    </div>
 
  </div>
</section>
 
<!-- CTA BAND -->
<section class="cta-band">
  <div>
    <h2 class="cta-band-title">Start your<br><em>project conversation</em></h2>
    <p class="cta-band-sub">Every project on this page started with a conversation. Tell us about your site, your sector and your constraints — we will tell you what is achievable and what it returns.</p>
  </div>
  <div class="cta-group">
    <a href="<?= BASE_URL ?>contact" class="btn-primary-dark">Submit an enquiry →</a>
    <a href="<?= BASE_URL ?>contact" class="btn-outline-dark">Book a technical call</a>
  </div>
</section>
 
<script>
  // Stagger card reveal
  const cards = document.querySelectorAll('.cs-card');
  const cardObserver = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        const allCards = document.querySelectorAll('.cs-card:not(.hidden)');
        allCards.forEach((card, i) => {
          setTimeout(() => card.classList.add('visible'), i * 80);
        });
        cardObserver.disconnect();
      }
    });
  }, { threshold: 0.05 });
  if (cards[0]) cardObserver.observe(cards[0]);
 
  // Filter functionality
  const filterBtns = document.querySelectorAll('.filter-btn');
  const noResults = document.getElementById('noResults');
 
  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const filter = btn.dataset.filter;
 
      // Update active state
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
 
      // Filter cards
      let visibleCount = 0;
      cards.forEach(card => {
        const sector = card.dataset.sector;
        const show = filter === 'all' || sector === filter;
        card.classList.toggle('hidden', !show);
        if (show) {
          visibleCount++;
          setTimeout(() => card.classList.add('visible'), 0);
        }
      });
 
      noResults.style.display = visibleCount === 0 ? 'block' : 'none';
 
      // Update URL without reload (for bookmarkable filter state)
      const url = new URL(window.location);
      if (filter === 'all') {
        url.searchParams.delete('sector');
      } else {
        url.searchParams.set('sector', filter);
      }
      window.history.replaceState({}, '', url);
    });
  });
 
  // Apply filter from URL on load
  const urlSector = new URLSearchParams(window.location.search).get('sector');
  if (urlSector) {
    const btn = document.querySelector(`[data-filter="${urlSector}"]`);
    if (btn) btn.click();
  }
</script>

<?php
$content = ob_get_clean();
require __DIR__ . '/layouts/main.php';
?>
