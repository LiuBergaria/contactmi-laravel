<?php

namespace App\Services;

use App\Services\Contracts\ContactPhoneServiceInterface;
use App\Repositories\Contracts\ContactPhoneRepository;

class ContactPhoneService implements ContactPhoneServiceInterface
{
    /**
     * @var ContactPhoneRepository
     */
    private $repository;

    public function __construct(ContactPhoneRepository $contactPhoneRepository)
    {
        $this->repository = $contactPhoneRepository;
    }
}
