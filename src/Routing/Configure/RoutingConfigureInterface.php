<?php declare(strict_types=1);

namespace Symfony\Component\Routing\Configure;

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

interface RoutingConfigureInterface
{
    static public function configureRoutes(RoutingConfigurator $configurator);
}