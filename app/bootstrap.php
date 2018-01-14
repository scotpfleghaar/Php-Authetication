<?php

    // Load Congif file
    require_once 'config/config.php';

    // Load Libraries
    // require_once 'libraries/core.php';
    // require_once 'libraries/controller.php';
    // require_once 'libraries/database.php';
    // Rather than include each library like we do above, we can use the following function: 

    // Autoload Core Libraries
    // File names must tmatch class name 
    spl_autoload_register(function($className){
        require_once 'libraries/'.$className.'.php';
    });