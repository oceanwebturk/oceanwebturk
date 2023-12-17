<?php

defined("REAL_BASE_DIR") or die;
return [
 'default' => 'mysql',
 'connections' => [
  'mysql' => [
   'driver' => 'mysql',
   'host' => 'localhost',
   'user' => 'root',
   'password' => '',
   'database' => 'phpwebturk',
   'prefix' => 'OceanWT_',
   'charset' => 'utf8',
   'options' => [],
  ],
 ],
];
