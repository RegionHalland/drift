<?php


/**
 * Require the child themes autoloader
 */
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
}

use Roots\Sage\Container;
use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

// ACF Fields
new \App\Drift\Acf\Import();

// Custom Post Types
new \App\Drift\CustomPostTypes\Outage();

// Custom Taxonomies
new \App\Drift\CustomTaxonomies\Department();