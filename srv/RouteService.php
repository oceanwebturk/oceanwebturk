<?php

namespace Services;

defined("REAL_BASE_DIR") or die;

use OceanWT\Config;
use OceanWT\Support\ServiceProvider;

class RouteService extends ServiceProvider
{

  /**
   * @return void
   */
  public function boot()
  {
    Config::get("routes");
  }
  
}
