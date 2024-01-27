<?php
namespace App\Providers;
defined("REAL_BASE_DIR") or die;
/**
 * Class RouteServiceProvider
 *
 * @package App\Providers
 */
use OceanWT\Config;
use OceanWT\Support\ServiceProvider;
class RouteServiceProvider extends ServiceProvider
{
  /**
   * @return void
   */
  public function boot()
  {
   Config::get("routes");
  }
}
