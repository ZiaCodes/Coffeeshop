<?php
    require 'Controller/CoffeeController.php';
    $coffeeModel = new coffeeModel;
    $CoffeeController = new CoffeeController;
    $content = $CoffeeController->DropDown().
            $coffeeModel->TableCreation($coffeeModel->ConnectionSql($coffeeModel->QuaryTable()));
               
    
    $title = 'Coffee';
    require 'template.php';