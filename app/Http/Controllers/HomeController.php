<?php

namespace App\Http\Controllers;

use App\Services\Contracts\ContactServiceInterface;
use Illuminate\Support\Facades\Auth;

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
        $contacts = $this->contactService->getAllByUserId(Auth::user()->id);

        return view('app.home', compact('contacts'));
    }
}
