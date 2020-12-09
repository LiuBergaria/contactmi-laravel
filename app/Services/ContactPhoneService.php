<?php

namespace App\Services;

use App\Repositories\Contracts\ContactPhoneRepository;
use App\Services\Contracts\ContactPhoneServiceInterface;

class ContactPhoneService implements ContactPhoneServiceInterface
{
    /**
     * @var ContactPhoneRepository
     */
    private $contactEmailRepository;

    public function __construct(ContactPhoneRepository $contactPhoneRepository)
    {
        $this->contactEmailRepository = $contactPhoneRepository;
    }
}
