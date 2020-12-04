<?php

namespace App\Services;

use App\Services\Contracts\ContactServiceInterface;
use App\Repositories\Contracts\ContactRepository;

class ContactService implements ContactServiceInterface
{
    /**
     * @var ContactRepository
     */
    private $repository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->repository = $contactRepository;
    }
}
