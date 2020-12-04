<?php

namespace App\Services;

use App\Services\Contracts\ContactEmailServiceInterface;
use App\Repositories\Contracts\ContactEmailRepository;

class ContactEmailService implements ContactEmailServiceInterface
{
    /**
     * @var ContactEmailRepository
     */
    private $repository;

    public function __construct(ContactEmailRepository $contactEmailRepository)
    {
        $this->repository = $contactEmailRepository;
    }
}
