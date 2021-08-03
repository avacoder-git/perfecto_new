<?php

function classAutoLoader($class){

    $class = strtolower($class);

<<<<<<< HEAD
    $path  = "includes/{$class}.php";
=======
    $path  = "wwww.perfectoconsulting.uz/admin/includes/{$class}.php";
>>>>>>> ce7ce54 (adding a region to the references)

    if (is_file($path))
    {
        include ($path);
    }else{
        die("This file name {$class}.php was not found, man... ");
    }

<<<<<<< HEAD
=======






>>>>>>> ce7ce54 (adding a region to the references)
}

function redirect($location)
{

    header("Location: {$location} "  );


}
spl_autoload_register('classAutoLoader');




?>