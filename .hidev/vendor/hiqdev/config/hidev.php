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
        'phpunit' => 
        array (
          'package' => 'phpunit/phpunit',
          'version' => '^4.8',
          'download' => 'https://phar.phpunit.de/phpunit-old.phar',
        ),
        'phpunit-skelgen' => 
        array (
          'package' => 'phpunit/phpunit-skeleton-generator',
          'version' => '^2.0',
          'download' => 'https://phar.phpunit.de/phpunit-skelgen.phar',
        ),
      ),
      'views' => 
      array (
        0 => '@hidev/phpcsfixer/views',
        1 => '@hidev/phpunit/views',
        2 => '@hidev/license/views',
        3 => '@hidev/travis/views',
        4 => '@hidev/readme/views',
        5 => '@hidev/php/views',
        6 => '@hidev/hiqdev/views',
      ),
      'vcsignore' => 
      array (
        '.php_cs.cache' => 'php-cs-fixer cache',
        'vendor' => 'vendor dirs',
        'composer.lock' => 'composer lock files',
      ),
      'scrutinizer' => 
      array (
        'class' => 'hidev\\scrutinizer\\controllers\\ScrutinizerController',
      ),
      '.scrutinizer.yml' => 
      array (
        'class' => 'hidev\\scrutinizer\\controllers\\ScrutinizerYamlController',
      ),
      'readme' => 
      array (
        'markdownBadges' => 
        array (
          'scrutinizer.coverage' => '[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/{{ config.github.full_name }}.svg)](https://scrutinizer-ci.com/g/{{ config.github.full_name }}/)',
          'scrutinizer.quality' => '[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/{{ config.github.full_name }}.svg)](https://scrutinizer-ci.com/g/{{ config.github.full_name }}/)',
          'scrutinizer.build' => '[![Scrutinizer Build Status](https://img.shields.io/scrutinizer/build/g/{{ config.github.full_name }}.svg)](https://scrutinizer-ci.com/g/{{ config.github.full_name }}/build-status/master)',
          'packagist.stable' => '[![Latest Stable Version](https://poser.pugx.org/{{ config.composer.fullName }}/v/stable)](https://packagist.org/packages/{{ config.composer.fullName }})',
          'packagist.unstable' => '[![Latest Unstable Version](https://poser.pugx.org/{{ config.composer.fullName }}/v/unstable)](https://packagist.org/packages/{{ config.composer.fullName }})',
          'packagist.license' => '[![License](https://poser.pugx.org/{{ config.composer.fullName }}/v/license)](https://packagist.org/packages/{{ config.composer.fullName }})',
          'packagist.downloads' => '[![Total Downloads](https://poser.pugx.org/{{ config.composer.fullName }}/downloads)](https://packagist.org/packages/{{ config.composer.fullName }})',
          'travis.build' => '[![Build Status](https://img.shields.io/travis/{{ config.github.full_name }}.svg)](https://travis-ci.org/{{ config.github.full_name }})',
          'github.release' => '[![GitHub release](https://img.shields.io/github/release/{{ config.github.full_name }}.svg)](https://github.com/{{ config.github.full_name }}/releases)',
          'github.version' => '[![GitHub version](https://badge.fury.io/gh/{{ config.github.vendor }}%2F{{ config.github.name }}.svg)](https://badge.fury.io/gh/{{ config.github.vendor }}%2F{{ config.github.name }})',
          'versioneye.dependencies' => '[![Dependency Status](https://www.versioneye.com/php/{{ config.vendor.name }}:{{ config.package.name }}/dev-master/badge.svg)](https://www.versioneye.com/php/{{ config.vendor.name }}:{{ config.package.name }}/dev-master)',
        ),
        'class' => 'hidev\\readme\\controllers\\ReadmeController',
      ),
      'composer' => 
      array (
        'class' => 'hidev\\composer\\controllers\\ComposerController',
      ),
      'composer.json' => 
      array (
        'class' => 'hidev\\composer\\controllers\\ComposerJsonController',
      ),
      'packagist' => 
      array (
        'class' => 'hidev\\composer\\controllers\\PackagistController',
      ),
      'phpunit' => 
      array (
        'class' => 'hidev\\phpunit\\controllers\\PhpunitController',
      ),
      'phpunit.xml.dist' => 
      array (
        'class' => 'hidev\\phpunit\\controllers\\PhpunitConfigController',
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
      'travis' => 
      array (
        'class' => 'hidev\\travis\\controllers\\TravisController',
        'install' => 
        array (
          0 => '',
        ),
        'script' => 
        array (
          0 => 'build',
        ),
      ),
      '.travis.yml' => 
      array (
        'class' => 'hidev\\travis\\controllers\\TravisYamlController',
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
      'include' => 
      array (
        0 => '@hidev/php/config/goals.yml',
        1 => '@hidev/hiqdev/config/goals.yml',
      ),
    ),
  ),
  'params' => NULL,
  'aliases' => 
  array (
    '@hidev/phpcsfixer' => $baseDir . '/vendor/hiqdev/hidev-php-cs-fixer/src',
    '@hidev/scrutinizer' => $baseDir . '/vendor/hiqdev/hidev-scrutinizer/src',
    '@hidev/composer' => $baseDir . '/vendor/hiqdev/hidev-composer/src',
    '@hidev/phpunit' => $baseDir . '/vendor/hiqdev/hidev-phpunit/src',
    '@hidev/license' => $baseDir . '/vendor/hiqdev/hidev-license/src',
    '@hidev/travis' => $baseDir . '/vendor/hiqdev/hidev-travis/src',
    '@hidev/readme' => $baseDir . '/vendor/hiqdev/hidev-readme/src',
    '@hidev/php' => $baseDir . '/vendor/hiqdev/hidev-php/src',
    '@hidev/hiqdev' => $baseDir . '/vendor/hiqdev/hidev-vendor/src',
  ),
);
