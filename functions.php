<?php
// Defines
define('FL_CHILD_THEME_DIR', get_stylesheet_directory());
define('FL_CHILD_THEME_URL', get_stylesheet_directory_uri());
define('WPCOM_API_KEY', '58f965870121'); // Mizner's Account

// Classes
require_once 'classes/Enqueues.php';
require_once 'classes/BodyClass.php';

// Actions
add_action('wp_enqueue_scripts', 'Enqueues::sitewide', 1000);

// Filters
add_filter('body_class', 'BodyClass::add', 99);
