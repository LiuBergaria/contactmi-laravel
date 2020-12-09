<?php

namespace App\Services;

use App\Services\Contracts\ContactEmailServiceInterface;
use App\Repositories\Contracts\ContactEmailRepository;

class ContactEmailService implements ContactEmailServiceInterface
{
    /**
     * @var ContactEmailRepository
     */
    private $contactEmailRepository;

    public function __construct(ContactEmailRepository $contactEmailRepository)
    {
        $this->contactEmailRepository = $contactEmailRepository;
    }
}
