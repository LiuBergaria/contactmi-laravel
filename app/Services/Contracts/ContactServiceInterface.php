<?php

namespace App\Services\Contracts;

use App\Services\Responses\ServiceResponse;

interface ContactServiceInterface
{
    public function getAllByUserId(int $userId): ServiceResponse;
}
