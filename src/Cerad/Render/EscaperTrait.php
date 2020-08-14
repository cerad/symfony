<?php declare(strict_types=1);

namespace Cerad\Render;

trait EscaperTrait
{
    protected function escape(string $value) : string
    {
        return htmlspecialchars($value, ENT_COMPAT);
    }
}