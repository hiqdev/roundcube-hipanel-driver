<?php

$vendorDir = dirname(__DIR__);

return array (
  'hiqdev/hidev-php-cs-fixer' => 
  array (
    'name' => 'hiqdev/hidev-php-cs-fixer',
    'version' => '0.4.1.0',
    'alias' => 
    array (
      '@hidev/phpcsfixer' => $vendorDir . '/hiqdev/hidev-php-cs-fixer/src',
    ),
  ),
  'hiqdev/hidev-vendor' => 
  array (
    'name' => 'hiqdev/hidev-vendor',
    'version' => '0.4.0.0',
    'alias' => 
    array (
      '@hidev/hiqdev' => $vendorDir . '/hiqdev/hidev-vendor/src',
    ),
  ),
  'hiqdev/hidev-license' => 
  array (
    'name' => 'hiqdev/hidev-license',
    'version' => '0.4.0.0',
    'alias' => 
    array (
      '@hidev/license' => $vendorDir . '/hiqdev/hidev-license/src',
    ),
  ),
  'hiqdev/hidev-readme' => 
  array (
    'name' => 'hiqdev/hidev-readme',
    'version' => '0.4.2.0',
    'alias' => 
    array (
      '@hidev/readme' => $vendorDir . '/hiqdev/hidev-readme/src',
    ),
  ),
);
