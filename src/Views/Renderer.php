<?php declare(strict_types=1);

namespace Ebanx\Views;

interface Renderer
{
    public function render($template, $data = []): string;
}