<?php

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * Include the Pantheon-specific settings file.
 *
 * n.b. The settings.pantheon.php file makes some changes
 *      that affect all environments that this site
 *      exists in.  Always include this file, even in
 *      a local development environment, to ensure that
 *      the site settings remain consistent.
 */
include __DIR__ . "/settings.pantheon.php";

/**
 * Skipping permissions hardening will make scaffolding
 * work better, but will also raise a warning when you
 * install Drupal.
 *
 * https://www.drupal.org/project/drupal/issues/3091285
 */
// $settings['skip_permissions_hardening'] = TRUE;

/**
 * If there is a local settings file, then include it.
 * This is useful for local development environments.
 */
// $local_settings = __DIR__ . "/settings.local.php";
if (file_exists($local_settings)) {
  include $local_settings;
}

/**
 * Database configuration.
 */
$databases['default']['default'] = array (
  'database' => 'specbee',
  'username' => 'drupaluser',
  'password' => 'N@veen1234',
  'prefix' => '',
  'host' => '127.0.0.1',
  'port' => '3306',
  'namespace' => 'Drupal\\mysql\\Driver\\Database\\mysql',
  'driver' => 'mysql',
  'autoload' => 'core/modules/mysql/src/Driver/Database/mysql/',
);

/**
 * Hash salt for secure hashing.
 */
$settings['hash_salt'] = 'ekY5I415s2q7fBOPZfj3khhm9sZe1skQsbxD3sdBNKQYgx0tgBVBj1D07dKeZV473HWkDwRIAQ';

/**
 * Configuration sync directory.
 */
$settings['config_sync_directory'] = '../config/sync';
$config['system.logging']['error_level'] = 'verbose';
