<?php
defined("REAL_BASE_DIR") or die;
use OceanWT\Http\Route;

Route::get("/","Home::index");
Route::match(["GET","POST"],"/demo","Home::demo",["as"=>"csrf.token.test","filters"=>["csrf"]]);
