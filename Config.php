<?php
// cms/app/core/Config.php

// Database configuration
define('DB_HOST', 'db5012310004.hosting-data.io');
define('DB_PORT', 3306);
define('DB_NAME', 'bellkuhlo.admin'); // Replace with your database name
define('DB_USER', 'dbu1331351');
define('DB_PASSWORD', 'B.m.22.3015dp22!!'); // Replace with your new password

// Site settings
define('SITE_TITLE', 'bellkuhlo.Admin');
define('ADMIN_EMAIL', 'bellkuhlo@gmail.com');

// Paths
define('BASE_PATH', __DIR__ . '/../..'); // Base path of the CMS
define('APP_PATH', BASE_PATH . '/app');
define('PUBLIC_PATH', BASE_PATH . '/public');
define('RESOURCES_PATH', BASE_PATH . '/resources');
define('TEMPLATES_PATH', RESOURCES_PATH . '/templates');

// Admin and frontend templates
define('ADMIN_TEMPLATE_PATH', TEMPLATES_PATH . '/admin');
define('FRONTEND_TEMPLATE_PATH', TEMPLATES_PATH . '/frontend');
