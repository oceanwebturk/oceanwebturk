<?php

defined("REAL_BASE_DIR") or die;
use OceanWT\Support\ServiceProvider;

return [
  'name' => 'OceanWebTurk',
  'lang' => 'tr',
  'mode' => 'development',
  'minify' => true,
  'providers' => ServiceProvider::default()->merge([
   App\Providers\AppServiceProvider::class,
   App\Providers\RouteServiceProvider::class,
  ])->toArray(),
];