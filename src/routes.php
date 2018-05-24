<?php declare(strict_types=1);

return [
    ['GET', '/ebanx/public/', ['Ebanx\Controllers\User', 'show']],
    ['GET', '/ebanx/public/{slug}', ['Example\Controllers\Page', 'show']],
];

