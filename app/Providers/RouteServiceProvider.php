<?php
namespace App\Providers;
defined("REAL_BASE_DIR") or die;
/**
 * Class RouteServiceProvider
 *
 * @package App\Providers
 */
use OceanWebTurk\Config;
use OceanWebTurk\Support\ServiceProvider;
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
