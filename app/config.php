<?php
/**
 * Configuration file for Fort Energy
 */

// Define the base path for URL rewriting and asset loading
$uri = $_SERVER['REQUEST_URI'];
if ($_SERVER['HTTP_HOST'] === 'localhost' || $_SERVER['SERVER_ADDR'] === '127.0.0.1') {
    define('BASE_PATH', '/fort-energy/public');
} elseif (strpos($uri, '/staging/public') === 0) {
    define('BASE_PATH', '/staging/public');
} elseif (strpos($uri, '/staging') === 0) {
    define('BASE_PATH', '/staging');
} else {
    define('BASE_PATH', '');
}

// Full base URL (including trailing slash)
define('BASE_URL', BASE_PATH . '/');
