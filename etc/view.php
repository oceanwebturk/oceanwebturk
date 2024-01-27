<?php

defined("REAL_BASE_DIR") or die;
return [
 'default'=>'view',
 'engines'=>[
  // composer require twig/twig
  'twig'=>function($name,$data=[]){
    $loader=new \Twig\Loader\FilesystemLoader(GET_DIRS['VIEWS']);
    $twig=new \Twig\Environment($loader,[
      'cache'=>GET_DIRS['CACHES'],
    ]);
    echo $twig->render($name,$data);
  },

  // composer require jenssegers/blade
  'blade'=>function($name,$data=[]){
   $blade=new Jenssegers\Blade\Blade(GET_DIRS['VIEWS'],GET_DIRS['CACHES']);
   echo $blade->render($name,$data);
  },
 ],
];
