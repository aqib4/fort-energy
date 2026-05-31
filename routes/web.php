<?php

/** @var Router $router */

$router->get('/', 'home.php');
$router->get('/commercial', 'commercial.php');
$router->get('/commercial/specialist', 'commercial_specialist.php');
$router->get('/developers', 'developers.php');
$router->get('/residential', 'residential.php');
$router->get('/residential/solar-reroof', 'solar_reroof.php');
$router->get('/residential/custom', 'custom_residential.php');
$router->get('/agricultural', 'agricultural.php');
$router->get('/bipv', 'bipv.php');
$router->get('/contact', 'contact.php');
$router->get('/privacy', 'privacy.php');
$router->post('/submit-enquiry', 'submit_enquiry.php');

$router->get('/case-studies', 'caseStudies.php');

// Explicitly register case study URLs to work with the current exact-match Router
$caseStudies = [
    'commercial-warehouse-peak-shaving',
    'commercial-office-west-midlands',
    'off-grid-remote-site',
    'student-accommodation-north-west',
    '4-bed-performance-system',
    'period-property-solar-reroof',
    'dairy-farm-shropshire',
    'mixed-use-bipv-bristol',
    'high-spec-new-build-surrey'
];
foreach($caseStudies as $slug) {
    $router->get('/case-studies/' . $slug, 'singleCaseStudy.php');
}

