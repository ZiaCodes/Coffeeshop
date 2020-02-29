<?php
    $title = "Update";
    require 'Controller/CoffeeController.php';
    $CoffeeController = new CoffeeController;
    $content = $CoffeeController->Update();
    
        require 'template.php';
