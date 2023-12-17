<?php 
namespace App\Models;

defined("REAL_BASE_DIR") or die;

use OceanWT\Database\DB;

class Users{
 public static function getAll()
 {
  return DB::table("users")->get();
 }
}
