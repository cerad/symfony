<?php declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Home\Index\HomeIndexAction;
use Cerad\HttpKernel\Controller\ActionInterface;
use Cerad\Template\PageTemplate;
use Cerad\Template\PageTemplateInterface;
use Symfony\Component\HttpKernel\Controller\ControllerServiceArgumentsInterface;

return function (ContainerConfigurator $configurator) {
    $services = $configurator->services()->defaults()
        ->autowire()
        ->autoconfigure();

    $services->instanceof(ActionInterface::class)
        ->tag('controller.service_arguments');

    // App Page Template
    $services->set(PageTemplate::class)->call('setTitle',['Cerad']);
    $services->alias(PageTemplateInterface::class, PageTemplate::class);

    // Home
    $services->set(HomeIndexAction::class);

    // Example of loading a directory
    //$services->load('App\\Home\\', '../src/Home/*')
    //    ->exclude('../src/Home/{}');
};
