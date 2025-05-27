<?php

// Detect if running locally by checking if .env exists
$isLocal = file_exists(__DIR__ . '/.env');

if ($isLocal) {
    // Load environment variables manually from .env
    $envPath = __DIR__ . '/.env';
    $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue; // Skip comments
        list($key, $value) = explode('=', $line, 2);
        putenv("$key=$value");
        $_ENV[$key] = $value;
        $_SERVER[$key] = $value;
    }
}
// Define database constants from environment variables (works both locally and remotely)
define('DB_NAME', $_SERVER['DB_NAME'] ?? getenv('DB_NAME') ?? 'default_db_name');
define('DB_USER', $_SERVER['DB_USER'] ?? getenv('DB_USER') ?? 'default_db_user');
define('DB_PASSWORD', $_SERVER['DB_PASSWORD'] ?? getenv('DB_PASSWORD') ?? 'default_db_password');
define('DB_HOST', $_SERVER['DB_HOST'] ?? getenv('DB_HOST') ?? 'default_db_host');

define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define('AUTH_KEY', getenv('AUTH_KEY') );
define('SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY') );
define('LOGGED_IN_KEY', getenv('LOGGED_IN_KEY') );
define('NONCE_KEY', getenv('NONCE_KEY') );
define('AUTH_SALT', getenv('AUTH_SALT') );
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT') );
define('LOGGED_IN_SALT', getenv('LOGGED_IN_SALT') );
define('NONCE_SALT', getenv('NONCE_SALT') );

$table_prefix = 'wp_';
define( 'WP_DEBUG', true );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';