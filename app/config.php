<?php
/**
 * Configuration file for Fort Energy
 */

// Define the base path for URL rewriting and asset loading
if ($_SERVER['HTTP_HOST'] === 'localhost' || $_SERVER['SERVER_ADDR'] === '127.0.0.1') {
    // Local development (XAMPP)
    define('BASE_PATH', '/fort-energy/public');
} else {
    // Production (adjust if your live site is in a subdirectory)
    define('BASE_PATH', '');
}

// Full base URL (including trailing slash)
define('BASE_URL', BASE_PATH . '/');
