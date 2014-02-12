<?php
/**
 * @file
 * Define drush aliases for the current project.
 */

// Define home directory.
$home_directory = __DIR__ . '/../../../';

// Create aliases.
$aliases['myproject.loc'] = array(
  'uri' => 'loc.__site__.com',
  'root' => $home_directory . '/Sites/__vendor__/__site__',
  'db-url' => 'mysql://__site___loc:__site___loc@localhost/__site___loc',
  'path-aliases' => array(
    '%drush' => $home_directory . '/pear/bin',
    '%drush-script' => $home_directory . '/pear/bin/drush',
    '%dump-dir' => $home_directory . '/Sites/__vendor__/__site__/dumps',
    '%files' => 'sites/default/files',
  ),
  'target-command-specific' => array(
    'sql-sync' => array(
      'no-cache' => TRUE,
    ),
  ),
  'command-specific' => array(
    'site-install' => array(
      'site-name' => 'My Site',
      'site-mail' => 'info@loc.__site__.com',
      'db-url'    => 'mysql://__site___loc:__site___loc@127.0.0.1/__site__',
      'account-mail' => 'info@loc.__site__.com',
      'account-name' => 'admin',
      'account-pass' => 'admin',
    ),
  ),
);

$aliases['myproject.dev'] = array(
  'uri' => 'dev.__site__.__vendor__.com',
  'root' => '/var/www/dev.__site__.__vendor__.com',
  'remote-host' => 'dev.__site__.__vendor__.com',
  'remote-user' => 'root',
  'command-specific' => array(
    'sql-sync' => array(
      'no-cache' => TRUE,
    ),
  ),
);

$aliases['myproject.stage'] = array(
  'uri' => 'stage.__site__.__vendor__.com',
  'root' => '/var/www/stage.__site__.__vendor__.com',
  'remote-host' => 'stage.__site__.__vendor__.com',
  'remote-user' => 'root',
  'command-specific' => array(
    'sql-sync' => array(
      'no-cache' => TRUE,
    ),
  ),
);