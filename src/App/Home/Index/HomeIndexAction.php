<?php declare(strict_types=1);

namespace App\Home\Index;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Controller\ControllerServiceArgumentsInterface;
use Symfony\Component\Routing\Configure\RoutingConfigureInterface;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

class HomeIndexAction implements ControllerServiceArgumentsInterface, RoutingConfigureInterface
{
    static public function configureRoutes(RoutingConfigurator $configurator)
    {
        $configurator->add('home_index', "/")->controller(self::class);
    }
    public function __invoke(Request $request) : Response
    {
        return new Response('Home Index Action');
    }
}