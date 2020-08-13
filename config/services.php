<?php declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

//use App\Home\Index\HomeIndexAction;

use Symfony\Component\HttpKernel\Controller\ControllerServiceArgumentsInterface;

return function (ContainerConfigurator $configurator) {
    $services = $configurator->services()->defaults()
        ->autowire()
        ->autoconfigure();

    $services->instanceof(ControllerServiceArgumentsInterface::class)
        ->tag('controller.service_arguments');

    // Shared
    //$services->set(PageTemplate::class);
    //$services->alias(PageTemplateInterface::class, PageTemplate::class);

    // Home
    //$services->set(HomeIndexAction::class);

    //$services->load('App\\Home\\', '../src/Home/*')
    //    ->exclude('../src/Home/{}');
};
