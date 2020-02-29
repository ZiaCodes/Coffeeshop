

<?php
    $title = "Add New Coffee";
    require 'Controller/CoffeeController.php';
    $CoffeeController = new CoffeeController;
    $content = $CoffeeController->InsertCoffee();
    
    require 'template.php';

