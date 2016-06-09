<?php

$baseDir = dirname(dirname(dirname(__DIR__)));

return array (
  '@hidev/phpcsfixer' => $baseDir . '/vendor/hiqdev/hidev-php-cs-fixer/src',
  '@hidev/scrutinizer' => $baseDir . '/vendor/hiqdev/hidev-scrutinizer/src',
  '@hidev/composer' => $baseDir . '/vendor/hiqdev/hidev-composer/src',
  '@hidev/phpunit' => $baseDir . '/vendor/hiqdev/hidev-phpunit/src',
  '@hidev/license' => $baseDir . '/vendor/hiqdev/hidev-license/src',
  '@hidev/travis' => $baseDir . '/vendor/hiqdev/hidev-travis/src',
  '@hidev/readme' => $baseDir . '/vendor/hiqdev/hidev-readme/src',
  '@hidev/php' => $baseDir . '/vendor/hiqdev/hidev-php/src',
  '@hidev/hiqdev' => $baseDir . '/vendor/hiqdev/hidev-vendor/src',
);
