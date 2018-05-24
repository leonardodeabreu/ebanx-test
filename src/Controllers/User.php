<?php declare(strict_types = 1);

namespace Ebanx\Controllers;

use Http\Request;
use Http\Response;
use Ebanx\Views\Renderer;

class User
{
    private $request;
    private $response;
    private $renderer;

    public function __construct(Request $request, Response $response, Renderer $renderer)
    {
        $this->request = $request;
        $this->response = $response;
        $this->renderer = $renderer;
    }

    public function show()
    {
        $data = [
            'name' => $this->request->getParameter('name', 'stranger'),
        ];
        $html = $this->renderer->render('User', $data);
        $this->response->setContent($html);
    }

}