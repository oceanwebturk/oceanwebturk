<?php

defined("REAL_BASE_DIR") or die;
use OceanWebTurk\Support\ServiceProvider;

return [
  'name' => 'OceanWebTurk',
  'lang' => 'tr',
  'mode' => 'development',
  'minify' => true,
  'defaultTemplateEngine' => 'system',
  'providers' => ServiceProvider::default()->merge([
   App\Providers\AppServiceProvider::class,
   App\Providers\RouteServiceProvider::class,
  ])->toArray(),
];
