<?php

/**
 * Fort Energy — Production Header
 * File: templates/layout/header.php
 *
 * HOW TO USE IN EVERY PAGE FILE:
 * ─────────────────────────────────────────────────────────────
 * Set these variables BEFORE the include, then include this file.
 *
 * Required:
 *   $activePage   — nav slug: 'commercial' | 'developers' | 'residential' | 'agricultural' | 'bipv' | 'contact' | ''
 *   $pageTitle    — full <title> string (SEO guy supplies this)
 *   $metaDesc     — 150–160 char description (SEO guy supplies this)
 *   $canonicalUrl — full URL e.g. 'https://fortenergy.co.uk/residential'
 *
 * Optional:
 *   $pageCSS      — filename of page-specific CSS e.g. 'home.css' | 'commercial.css'
 *   $schemaJson   — JSON-LD string for page-specific schema (breadcrumb, FAQ etc.)
 *
 * Example (sector page):
 *   $activePage   = 'residential';
 *   $pageTitle    = 'PLACEHOLDER — SEO to supply';
 *   $metaDesc     = 'PLACEHOLDER — SEO to supply';
 *   $canonicalUrl = 'https://fortenergy.co.uk/residential';
 *   $pageCSS      = 'residentials.css';
 *   include __DIR__ . '/../layout/header.php';
 *
 * Example (sub-page — parent nav stays highlighted):
 *   $activePage   = 'residential';   ← parent slug
 *   $canonicalUrl = 'https://fortenergy.co.uk/residential/solar-reroof';
 *   $pageCSS      = 'residentials.css';
 *   include __DIR__ . '/../../layout/header.php';
 * ─────────────────────────────────────────────────────────────
 */

// Safe defaults — SEO guy overwrites these
$pageTitle    = $pageTitle    ?? 'Fort Energy — Engineering-Led Energy Systems';
$metaDesc     = $metaDesc     ?? 'Solar PV, battery storage, EV charging and integrated energy systems for commercial, residential, development and agricultural sites across the UK.';
$canonicalUrl = $canonicalUrl ?? 'https://fortenergy.co.uk';
$activePage   = $activePage   ?? '';
$pageCSS      = $pageCSS      ?? null;
$schemaJson   = $schemaJson   ?? null;

$navItems = [
  'commercial'   => ['label' => 'Commercial',   'href' => BASE_URL . 'commercial'],
  'developers'   => ['label' => 'Developers',   'href' => BASE_URL . 'developers'],
  'residential'  => ['label' => 'Residential',  'href' => BASE_URL . 'residential'],
  'agricultural' => ['label' => 'Agricultural', 'href' => BASE_URL . 'agricultural'],
  'bipv'         => ['label' => 'BIPV',         'href' => BASE_URL . 'bipv'],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- ── PRIMARY SEO META ───────────────────────────── -->
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($metaDesc) ?>">
  <link rel="canonical" href="<?= htmlspecialchars($canonicalUrl) ?>">
  <meta name="robots" content="index, follow">

  <!-- ── OPEN GRAPH ────────────────────────────────── -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($metaDesc) ?>">
  <meta property="og:url" content="<?= htmlspecialchars($canonicalUrl) ?>">
  <meta property="og:image" content="https://fortenergy.co.uk/assets/img/og-image.jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:site_name" content="Fort Energy">
  <meta property="og:locale" content="en_GB">

  <!-- ── TWITTER CARD ──────────────────────────────── -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($metaDesc) ?>">
  <meta name="twitter:image" content="https://fortenergy.co.uk/assets/img/og-image.jpg">

  <!-- ── FONTS ─────────────────────────────────────── -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="style"
    href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Fraunces:ital,opsz,wght@0,9..144,700;1,9..144,300&family=Syne:wght@400;600;700;800&display=swap">
  <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Fraunces:ital,opsz,wght@0,9..144,700;1,9..144,300&family=Syne:wght@400;600;700;800&display=swap"
    rel="stylesheet">

  <!-- ── GLOBAL CSS (variables, nav, footer, shared) ── -->
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/index.css">

  <!-- ── PAGE-SPECIFIC CSS ─────────────────────────── -->
  <?php if ($pageCSS): ?>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/<?= htmlspecialchars($pageCSS) ?>">
  <?php endif; ?>

  <!-- ── FAVICON ───────────────────────────────────── -->
  <link rel="icon" type="image/svg+xml" href="<?= BASE_URL ?>assets/img/favicon.svg">
  <link rel="icon" type="image/png" href="<?= BASE_URL ?>assets/img/favicon.png">

  <!-- ── ORGANISATION SCHEMA (on every page) ───────── -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Fort Energy",
      "url": "https://fortenergy.co.uk",
      "logo": "https://fortenergy.co.uk/assets/img/logo.svg",
      "description": "Engineering-led solar PV, battery storage and integrated energy systems for commercial, residential, development and agricultural sites.",
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "customer service",
        "email": "<?= CONTACT_EMAIL ?>",
        "areaServed": "GB"
      }
    }
  </script>

  <?php if ($schemaJson): ?>
    <!-- ── PAGE-SPECIFIC SCHEMA (breadcrumb, FAQ etc.) ── -->
    <script type="application/ld+json">
      <?= $schemaJson ?>
    </script>
  <?php endif; ?>

</head>

<body>

  <!-- ═══════════════════════════════════════════
     NAVIGATION
     Active state: $activePage matches nav slug
     Sub-pages: set $activePage = parent slug
═══════════════════════════════════════════ -->
  <nav id="nav" role="navigation" aria-label="Main navigation">

    <a href="<?= BASE_URL ?>" class="nav-logo" aria-label="Fort Energy — home">
      <img src="<?= BASE_URL ?>assets/img/logo-1.png" alt="Fort Energy logo">
    </a>

    <ul class="nav-links" id="navLinks" role="list">
      <li role="listitem" class="nav-item-dropdown">
        <div class="nav-link-wrap">
          <a href="#">
            Commercial &amp; Industrial
          </a>
          <button class="dropdown-toggle" aria-expanded="false" aria-label="Toggle submenu"><span class="dropdown-arrow">▼</span></button>
        </div>
        <ul class="nav-dropdown">
          <li><a href="<?= BASE_URL ?>commercial">Commercial &amp; Industrial</a></li>
          <li><a href="<?= BASE_URL ?>commercial/specialist">Specialist Services</a></li>
        </ul>
      </li>

      <li role="listitem">
        <a href="<?= BASE_URL ?>developers" <?php if ($activePage === 'developers'): ?>class="active"<?php endif; ?>>
          Developers
        </a>
      </li>

      <li role="listitem" class="nav-item-dropdown">
        <div class="nav-link-wrap">
          <a href="#" >
            Residential
          </a>
          <button class="dropdown-toggle" aria-expanded="false" aria-label="Toggle submenu"><span class="dropdown-arrow">▼</span></button>
        </div>
        <ul class="nav-dropdown">
          <li><a href="<?= BASE_URL ?>residential">Residential Systems</a></li>
          <li><a href="<?= BASE_URL ?>residential/solar-reroof">Solar Reroof</a></li>
          <li><a href="<?= BASE_URL ?>residential/custom">Custom Residential</a></li>
        </ul>
      </li>

      <li role="listitem">
        <a href="<?= BASE_URL ?>agricultural" <?php if ($activePage === 'agricultural'): ?>class="active"<?php endif; ?>>
          Agricultural
        </a>
      </li>

      <li role="listitem">
        <a href="<?= BASE_URL ?>bipv" <?php if ($activePage === 'bipv'): ?>class="active"<?php endif; ?>>
          BIPV
        </a>
      </li>

      <li role="listitem">
        <a href="<?= BASE_URL ?>case-studies" <?php if ($activePage === 'case-studies'): ?>class="active"<?php endif; ?>>
          Case Studies
        </a>
      </li>

      <li role="listitem">
        <a href="<?= BASE_URL ?>contact"
          class="nav-cta<?= $activePage === 'contact' ? ' active' : '' ?>"
          <?= $activePage === 'contact' ? 'aria-current="page"' : '' ?>>
          Contact
        </a>
      </li>
    </ul>

    <button
      class="nav-burger"
      id="burger"
      aria-label="Open navigation menu"
      aria-expanded="false"
      aria-controls="navLinks">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </nav>
  <div class="nav-overlay" id="navOverlay"></div>
  <!-- /nav — page content starts immediately below -->