<?php declare(strict_types=1);

namespace Ebanx\View;

interface Renderer
{
    public function render($template, $data = []): string;
}