<?php

$baseDir = dirname(dirname(dirname(__DIR__)));

return array (
  'components' => 
  array (
    'config' => 
    array (
      'php-cs-fixer' => 
      array (
        'class' => 'hidev\\phpcsfixer\\console\\PhpCsFixerController',
      ),
      '.php_cs' => 
      array (
        'class' => 'hidev\\phpcsfixer\\console\\PhpCsController',
      ),
      'binaries' => 
      array (
        'php-cs-fixer' => 
        array (
          'package' => 'fabpot/php-cs-fixer',
          'version' => '*',
          'download' => 'http://get.sensiolabs.org/php-cs-fixer.phar',
        ),
      ),
      'views' => 
      array (
        0 => '@hidev/phpcsfixer/views',
        1 => '@hidev/hiqdev/views',
        2 => '@hidev/license/views',
        3 => '@hidev/readme/views',
      ),
      'vcsignore' => 
      array (
        '.php_cs.cache' => 'php-cs-fixer cache',
      ),
      'include' => 
      array (
        0 => '@hidev/hiqdev/config/goals.yml',
      ),
      'license' => 
      array (
        'class' => 'hidev\\license\\controllers\\LicenseController',
      ),
      'LICENSE' => 
      array (
        'class' => 'hidev\\license\\controllers\\LicenseController',
      ),
      'LICENSE.md' => 
      array (
        'class' => 'hidev\\license\\controllers\\LicenseController',
      ),
      'LICENSE.txt' => 
      array (
        'class' => 'hidev\\license\\controllers\\LicenseController',
      ),
      'LICENSE.markdown' => 
      array (
        'class' => 'hidev\\license\\controllers\\LicenseController',
      ),
      'readme' => 
      array (
        'class' => 'hidev\\readme\\controllers\\ReadmeController',
        'markdownBadges' => 
        array (
          'github.release' => '[![GitHub release](https://img.shields.io/github/release/{{ config.github.full_name }}.svg)](https://github.com/{{ config.github.full_name }}/releases)',
          'github.version' => '[![GitHub version](https://badge.fury.io/gh/{{ config.github.vendor }}%2F{{ config.github.name }}.svg)](https://badge.fury.io/gh/{{ config.github.vendor }}%2F{{ config.github.name }})',
          'versioneye.dependencies' => '[![Dependency Status](https://www.versioneye.com/php/{{ config.vendor.name }}:{{ config.package.name }}/dev-master/badge.svg)](https://www.versioneye.com/php/{{ config.vendor.name }}:{{ config.package.name }}/dev-master)',
        ),
      ),
      'README' => 
      array (
        'class' => 'hidev\\readme\\controllers\\ReadmeTextController',
      ),
      'README.txt' => 
      array (
        'class' => 'hidev\\readme\\controllers\\ReadmeTextController',
      ),
      'README.md' => 
      array (
        'class' => 'hidev\\readme\\controllers\\ReadmeMarkdownController',
      ),
      'README.markdown' => 
      array (
        'class' => 'hidev\\readme\\controllers\\ReadmeMarkdownController',
      ),
    ),
  ),
  'params' => NULL,
  'aliases' => 
  array (
    '@hidev/phpcsfixer' => $baseDir . '/vendor/hiqdev/hidev-php-cs-fixer/src',
    '@hidev/hiqdev' => $baseDir . '/vendor/hiqdev/hidev-vendor/src',
    '@hidev/license' => $baseDir . '/vendor/hiqdev/hidev-license/src',
    '@hidev/readme' => $baseDir . '/vendor/hiqdev/hidev-readme/src',
  ),
);
