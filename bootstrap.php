<?php
// System Start Time
define('START_TIME', microtime(true));

// System Start Memory
define('START_MEMORY_USAGE', memory_get_usage());

// Extension of all PHP files
define('EXT', '.php');

// Directory separator (Unix-Style works on all OS)
define('DS', '/');

// Absolute path to the system folder
define('SP', realpath(__DIR__) . DS);

// Absolute path to the core folder
define('CP', SP . 'core' . DS);

// Is this an AJAX request?
define('AJAX_REQUEST', strtolower(getenv('HTTP_X_REQUESTED_WITH')) === 'xmlhttprequest');

// The current site path
define('PATH', parse_url(getenv('REQUEST_URI'), PHP_URL_PATH));

// Load core. 
require(CP . 'Common'     . EXT);
require(CP . 'Controller' . EXT);
require(CP . 'Dispatch'   . EXT);
require(CP . 'Error'      . EXT);
require(CP . 'Model'      . EXT);
require(CP . 'Router'     . EXT);

// Default timezone of server
date_default_timezone_set('UTC');

// multibyte encoding
mb_internal_encoding('UTF-8');

// Enable global error handling
set_error_handler(array('Error', 'handler'));
register_shutdown_function(array('Error', 'fatal'));
