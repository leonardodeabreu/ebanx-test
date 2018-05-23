<?php declare(strict_types = 1);

namespace Ebanx\Controllers;

use Http\Request;
use Http\Response;
use Ebanx\View\Renderer;

class UserController
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
        $html = $this->renderer->render('UserController', $data);
        $this->response->setContent($html);
    }

    /*public function verifyUserExists($_array)
    {
        $user = new Entities\User();
        $user->setLogin($_array[0]);
        $user->setPassword($_array[1]);

        $userRepo = new Repositories\UserRepository();
        // $userRepo
    }*/
}