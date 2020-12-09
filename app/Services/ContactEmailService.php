<?php

namespace App\Services;

use App\Repositories\Contracts\ContactEmailRepository;
use App\Services\Contracts\ContactEmailServiceInterface;

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
