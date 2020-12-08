<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests;
    use DispatchesJobs;
    use ValidatesRequests;

    /**
     * Retorna uma determinada view com os contatos já vinculados
     * ___
     * @param  string|null  $view
     * @param  \Illuminate\Contracts\Support\Arrayable|array  $data
     * @param  array  $mergeData
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function viewWithContacts($view = null, $data = [], $mergeData = [])
    {
        /**
         * @var App\Services\Contracts\ContactServiceInterface
         */
        $contactService = App::make('App\Services\Contracts\ContactServiceInterface');

        $contacts = $contactService->getAllByUserId(Auth::user()->id)->data;

        return view($view, array_merge(compact('contacts'), $data), $mergeData);
    }
}
