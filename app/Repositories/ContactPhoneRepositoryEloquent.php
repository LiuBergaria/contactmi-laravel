<?php

namespace App\Repositories;

use App\Models\ContactPhone;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\Contracts\ContactPhoneRepository;

class ContactPhoneRepositoryEloquent extends BaseRepository implements ContactPhoneRepository
{
    public function model()
    {
        return ContactPhone::class;
    }
}
