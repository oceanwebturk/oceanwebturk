<?php

defined("REAL_BASE_DIR") or die;
use OceanWT\Support\ServiceProvider;

return [
  'name' => 'PHPWebTurk',
  'lang' => 'tr',
  'mode' => 'development',
  'minify' => false,
  'key'=>'',
  'providers' => ServiceProvider::default()->merge([
   Services\AppService::class,
   Services\RouteService::class,
  ])->toArray(),
];
