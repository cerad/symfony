<?php declare(strict_types=1);

namespace Cerad\Template;

interface TemplateInterface
{
    // no known way to require a method returning a string
    // with a variable number of arguments
    // ducktyping would be nice
    //public function render(...$args) : string;
}