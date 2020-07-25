<?php

  // Load config
  require_once 'config/config.php';

  // Load libs
  // require_once 'libs/Core.php';
  // require_once 'libs/Controller.php';
  // require_once 'libs/DB.php';

  // Autoload Core libs
  spl_autoload_register(function($className){
    require_once 'libs/'.$className.'.php';
  });