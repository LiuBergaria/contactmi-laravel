<?php

namespace App\Repositories;

use App\ContactPhone;
use App\Repositories\Contracts\ContactPhoneRepository;
use Prettus\Repository\Eloquent\BaseRepository;

class ContactPhoneRepositoryEloquent extends BaseRepository implements ContactPhoneRepository
{
    public function model()
    {
        return ContactPhone::class;
    }
}
