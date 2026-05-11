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
  'commercial'   => ['label' => 'Commercial',   'href' => '/commercial'],
  'developers'   => ['label' => 'Developers',   'href' => '/developers'],
  'residential'  => ['label' => 'Residential',  'href' => '/residential'],
  'agricultural' => ['label' => 'Agricultural', 'href' => '/agricultural'],
  'bipv'         => ['label' => 'BIPV',          'href' => '/bipv'],
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
  <link rel="stylesheet" href="/assets/css/index.css">

  <!-- ── PAGE-SPECIFIC CSS ─────────────────────────── -->
  <?php if ($pageCSS): ?>
    <link rel="stylesheet" href="/assets/css/<?= htmlspecialchars($pageCSS) ?>">
  <?php endif; ?>

  <!-- ── FAVICON ───────────────────────────────────── -->
  <link rel="icon" type="image/svg+xml" href="/assets/img/favicon.svg">
  <link rel="icon" type="image/png" href="/assets/img/favicon.png">

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
        "email": "info@fortenergy.co.uk",
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

    <a href="/" class="nav-logo" aria-label="Fort Energy — home">
      <div class="nav-logo-mark" aria-hidden="true">
        <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" width="14" height="14">
          <path d="M7 1L12 4V10L7 13L2 10V4L7 1Z" stroke="white" stroke-width="1.2" fill="none" />
          <path d="M7 4L9.5 7L7 10L4.5 7L7 4Z" fill="white" opacity="0.8" />
        </svg>
      </div>
      FORT ENERGY
    </a>

    <ul class="nav-links" id="navLinks" role="list">
      <?php foreach ($navItems as $slug => $item): ?>
        <li role="listitem">
          <a href="<?= $item['href'] ?>"
            <?php if ($activePage === $slug): ?>
            class="active" aria-current="page"
            <?php endif; ?>>
            <?= $item['label'] ?>
          </a>
        </li>
      <?php endforeach; ?>
      <li role="listitem">
        <a href="/contact"
          class="nav-cta<?= $activePage === 'contact' ? ' active' : '' ?>"
          <?= $activePage === 'contact' ? 'aria-current="page"' : '' ?>>
          Get a Quote
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
  <!-- /nav — page content starts immediately below -->