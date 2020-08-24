<?php declare(strict_types=1);

namespace Cerad\Render;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

trait TwigTrait
{
    private Environment $twig;

    /** @required */
    public function injectTwig(Environment $twig)
    {
        $this->twig = isset($this->twig) ? $this->twig: $twig;
    }
    protected function renderView(string $view, array $parameters = []): string
    {
        return $this->twig->render($view, $parameters);
    }
    protected function render(string $view, array $parameters = [], Response $response = null): Response
    {
        $content = $this->renderView($view, $parameters);

        if (null === $response) {
            $response = new Response();
        }

        $response->setContent($content);

        return $response;
    }
}