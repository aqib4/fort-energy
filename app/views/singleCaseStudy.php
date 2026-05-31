<?php
// ── Load case study data based on URL slug ──
$allCaseStudies = require __DIR__ . '/../data/caseStudiesData.php';

// $slug is set by Router::renderView()
if (!isset($slug) || !isset($allCaseStudies[$slug])) {
    // Fallback: extract slug from the URL
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $segments = explode('/', trim($uri, '/'));
    $slug = end($segments);
}

if (!isset($allCaseStudies[$slug])) {
    require __DIR__ . '/404.php';
    return;
}

$cs = $allCaseStudies[$slug];

$pageTitle    = $cs['title'] . ' — Fort Energy Case Study';
$activePage   = 'case-studies';
$metaDesc     = $cs['meta_description'];
$canonicalUrl = BASE_URL . 'case-studies/' . $slug;
$pageCss      = 'singleCaseStudy';

// Build related studies (exclude current, pick up to 3)
$related = [];
foreach ($allCaseStudies as $rSlug => $rData) {
    if ($rSlug !== $slug && count($related) < 3) {
        $related[$rSlug] = $rData;
    }
}

ob_start();
?>
<!-- BREADCRUMB -->
<div class="breadcrumb">
    <a href="<?= BASE_URL ?>" class="bc-item">Home</a>
    <span class="bc-sep">/</span>
    <a href="<?= BASE_URL ?>case-studies" class="bc-item">Case Studies</a>
    <span class="bc-sep">/</span>
    <span class="bc-current"><?= htmlspecialchars($cs['sector']) ?></span>
</div>


<!-- HERO IMAGE -->
<div class="hero-image">
  <img
    src="<?= htmlspecialchars($cs['hero_img']) ?>"
    alt="<?= htmlspecialchars($cs['hero_alt']) ?>"
    width="1400" height="700"
    loading="eager"
  />
  <div class="hero-image-overlay"></div>
  <div class="hero-image-content">
    <div class="hero-meta">
      <span class="hero-sector-badge"><?= htmlspecialchars($cs['sector']) ?></span>
      <h1 class="hero-title"><?= htmlspecialchars($cs['title']) ?></h1>
      <div class="hero-location-date">
        <span><?= htmlspecialchars($cs['location']) ?></span>
        <span><?= htmlspecialchars($cs['building_type']) ?></span>
        <span>Completed <?= htmlspecialchars($cs['completed']) ?></span>
      </div>
    </div>
  </div>
</div>

<!-- METRICS STRIP -->
<div class="metrics-strip">
  <?php foreach ($cs['metrics'] as $m): ?>
  <div class="met">
    <span class="met-val"><?= $m['val'] ?><?php if ($m['unit']): ?><em><?= $m['unit'] ?></em><?php endif; ?></span>
    <span class="met-key"><?= htmlspecialchars($m['key']) ?></span>
  </div>
  <?php endforeach; ?>
</div>

<!-- MAIN: Article + Sidebar -->
<div class="main">

  <!-- ARTICLE BODY -->
  <article class="article reveal">

    <div class="article-section-label">The challenge</div>
    <h2><?= htmlspecialchars($cs['challenge_title']) ?></h2>
    <?= $cs['challenge_text'] ?>

    <div class="pull-quote">
      <p>"<?= htmlspecialchars($cs['quote']) ?>"</p>
    </div>

    <div class="article-section-label" style="margin-top:52px;">The system</div>
    <h2><?= $cs['system_title'] ?></h2>
    <?= $cs['system_text'] ?>

    <!-- System specification table -->
    <div class="article-section-label">System specification</div>
    <h2>Technical detail</h2>
    <table class="spec-table">
      <?php foreach ($cs['specs'] as $label => $value): ?>
      <tr><td><?= htmlspecialchars($label) ?></td><td><?= htmlspecialchars($value) ?></td></tr>
      <?php endforeach; ?>
    </table>

    <div class="article-section-label" style="margin-top:52px;">The outcome</div>
    <h2><?= $cs['outcome_title'] ?></h2>
    <p><?= htmlspecialchars($cs['outcome_intro']) ?></p>

    <div class="outcomes-list">
      <?php foreach ($cs['outcomes'] as $o): ?>
      <div class="outcome-item">
        <div class="outcome-dot"></div>
        <div class="outcome-text">
          <strong><?= htmlspecialchars($o['strong']) ?></strong>
          <?= htmlspecialchars($o['text']) ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </article>

  <!-- SIDEBAR -->
  <aside class="sidebar reveal">

    <div class="sidebar-back">
      <a href="<?= BASE_URL ?>case-studies" class="sb-back-link">← All case studies</a>
    </div>

    <div class="sidebar-details">
      <div class="sd-title">Project details</div>
      <div class="sd-rows">
        <div class="sd-row">
          <div class="sd-label">Sector</div>
          <div class="sd-value"><?= htmlspecialchars($cs['sector']) ?></div>
        </div>
        <div class="sd-row">
          <div class="sd-label">Location</div>
          <div class="sd-value"><?= htmlspecialchars($cs['location']) ?></div>
        </div>
        <div class="sd-row">
          <div class="sd-label">Building type</div>
          <div class="sd-value"><?= htmlspecialchars($cs['building_type']) ?></div>
        </div>
        <?php foreach ($cs['sidebar_details'] as $label => $value): ?>
        <div class="sd-row">
          <div class="sd-label"><?= htmlspecialchars($label) ?></div>
          <div class="sd-value"><?= htmlspecialchars($value) ?></div>
        </div>
        <?php endforeach; ?>
        <div class="sd-row">
          <div class="sd-label">Completed</div>
          <div class="sd-value"><?= htmlspecialchars($cs['completed']) ?></div>
        </div>
      </div>
    </div>

    <!-- Sector link -->
    <a href="<?= BASE_URL . htmlspecialchars($cs['sector_slug']) ?>" class="sidebar-sector">
      <div class="ss-label">Related sector</div>
      <div class="ss-title"><?= htmlspecialchars($cs['sector_link_title']) ?></div>
      <div class="ss-sub"><?= htmlspecialchars($cs['sector_link_desc']) ?></div>
      <div class="ss-link">View sector services →</div>
    </a>

    <!-- Enquiry CTA -->
    <a href="<?= BASE_URL ?>contact" class="sidebar-cta">
      <div class="sc-label">Similar project?</div>
      <div class="sc-title">Request a feasibility review for your site</div>
      <div class="sc-link">Start an enquiry →</div>
    </a>

  </aside>
</div>

<!-- RELATED CASE STUDIES -->
<section class="related reveal">
  <div class="related-header">
    <h2 class="related-title">More <em>case studies</em></h2>
    <a href="<?= BASE_URL ?>case-studies" class="related-all">All case studies →</a>
  </div>
  <div class="related-grid">
    <?php foreach ($related as $rSlug => $r): ?>
    <a href="<?= BASE_URL ?>case-studies/<?= htmlspecialchars($rSlug) ?>" class="related-card">
      <div class="rc-img">
        <img src="<?= htmlspecialchars(str_replace('w=1400', 'w=600', $r['hero_img'])) ?>" alt="<?= htmlspecialchars($r['hero_alt']) ?>" loading="lazy" width="600" height="320"/>
        <div class="rc-img-overlay"></div>
        <span class="rc-sector"><?= htmlspecialchars($r['sector']) ?></span>
      </div>
      <div class="rc-body">
        <div class="rc-title"><?= htmlspecialchars($r['title']) ?></div>
        <div class="rc-size"><?= htmlspecialchars($r['location']) ?></div>
      </div>
    </a>
    <?php endforeach; ?>
  </div>
</section>

<!-- CTA BAND -->
<section class="cta-band">
  <div>
    <h2 class="cta-band-title">Similar site?<br><em>Start with a feasibility review</em></h2>
    <p class="cta-band-sub">We model your system against actual half-hourly consumption data before recommending anything. A clear picture of what is achievable and what it returns — before you commit.</p>
  </div>
  <div class="cta-group">
        <a href="<?= BASE_URL ?>contact" class="btn-primary-dark">Discuss your project →</a>
        <a href="<?= BASE_URL ?>contact" class="btn-outline-dark">Book a technical call</a>
    </div>
</section>

<?php
$content = ob_get_clean();
require __DIR__ . '/layouts/main.php';
?>
