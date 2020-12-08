<?php

namespace App\Http\Controllers;

use App\Services\Contracts\ContactServiceInterface;

class HomeController extends Controller
{
    /**
     * @var ContactServiceInterface
     */
    private $contactService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ContactServiceInterface $contactService)
    {
        $this->contactService = $contactService;
    }

    /**
     * Retorna a tela inicial com contatos
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return $this->viewWithContacts('app.home');
    }
}
