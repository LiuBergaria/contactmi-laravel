<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Services\Contracts\ContactServiceInterface;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    /**
     * Retorna uma determinada view com os contatos já vinculados
     * ___
     * @param  string|null  $view
     * @param  array  $data
     * @param  array  $mergeData
     *
     * @return \Illuminate\View\View
     */
    public function viewWithContacts(string $view = null, array $data = [], array $mergeData = []): View
    {
        /**
         * @var App\Services\Contracts\ContactServiceInterface
         */
        $contactService = app(ContactServiceInterface::class);

        $contacts = $contactService->getAllByUserId(Auth::user()->id)->data;

        return view($view, array_merge(compact('contacts'), $data), $mergeData);
    }
}
