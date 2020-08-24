<?php declare(strict_types=1);

namespace App\Home\Index;

use Cerad\HttpKernel\Controller\ActionInterface;
use Cerad\Routing\Configure\RoutingConfigureInterface;
use Cerad\Template\PageTemplateInterface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

final class HomeIndexAction implements ActionInterface, RoutingConfigureInterface
{
    static public function configureRoutes(RoutingConfigurator $configurator)
    {
        $configurator->add('home_index', "/")->controller(self::class);
    }
    private PageTemplateInterface $pageTemplate;

    public function __construct(PageTemplateInterface $pageTemplate)
    {
        $this->pageTemplate = $pageTemplate;
    }
    public function __invoke(Request $request) : Response
    {
        return new Response($this->pageTemplate->render('Home Index Action'));
    }
}