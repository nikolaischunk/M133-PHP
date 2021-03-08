<?php

use controller\LoginController;
use view\Viewer;

spl_autoload_register(function ($class) {
    require $class . ".php";
});

$controller = new controller\LoginController();

if ($controller->isLoggedIn()) {
    $viewer = new Viewer(Viewer::viewerInterface);
}else{
    $viewer = new Viewer(Viewer::login); 
}
$viewer->display();