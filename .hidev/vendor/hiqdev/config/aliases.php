<?php

$baseDir = dirname(dirname(dirname(__DIR__)));

return array (
  '@hidev/phpcsfixer' => $baseDir . '/vendor/hiqdev/hidev-php-cs-fixer/src',
  '@hidev/hiqdev' => $baseDir . '/vendor/hiqdev/hidev-vendor/src',
  '@hidev/license' => $baseDir . '/vendor/hiqdev/hidev-license/src',
  '@hidev/readme' => $baseDir . '/vendor/hiqdev/hidev-readme/src',
);
