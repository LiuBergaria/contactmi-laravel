<?php

namespace App\Services\Contracts;

interface ContactServiceInterface
{
    public function getAllByUserId(int $userId);
}
