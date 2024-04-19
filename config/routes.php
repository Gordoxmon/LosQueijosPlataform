<?php
declare(strict_types=1);

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return function (RouteBuilder $routes): void {

    /*A route matching '/' could not be found.*/

    $routes->setRouteClass(DashedRoute ::class);
    $routes->scope('/', function (RouteBuilder $routes) {
        $routes->connect('/', ['controller' => 'FrontOffice', 'action' => 'index']);
        $routes->connect('/{action}/*',['controller' => 'FrontOffice']);
    });
    $routes->scope('/CakeDefault', function (RouteBuilder $routes) {
        $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
        $routes->connect('/pages/*', 'Pages::display');
    });
};
