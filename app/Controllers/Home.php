<?php 
namespace App\Controllers;
defined("REAL_BASE_DIR") or die;
/**
 * Class Home
 * 
 * @package App\Controllers
 */
use OceanWT\Http\Controller;
class Home extends Controller{
 /* index method  */
 public function index()
 {
  $this->import->view("index");
 }
}
