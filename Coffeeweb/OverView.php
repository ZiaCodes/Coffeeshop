
<?php

    require 'Controller/CoffeeController.php';
    $coffeeModel = new coffeeModel;
    $CoffeeController = new CoffeeController;
    $content = $CoffeeController->OverView();
               
    
    $title = 'Over View';
    require 'template.php';

