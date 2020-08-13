<?php declare(strict_types=1);

use App\Home\Index\HomeIndexAction;

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {

    //$routes->add('home_index', "/")->controller(HomeIndexAction::class);
    HomeIndexAction::configureRoutes($routes);

    //$userRoutes = $routes->collection('user_')->prefix('user');
    //$userRoutes->add('login', '/login')->controller(UserLoginAction::class);
    //$userRoutes->add('logout','/logout');
    //$userRoutes->add('register', '/register')->controller(RegisterAction::class);
};