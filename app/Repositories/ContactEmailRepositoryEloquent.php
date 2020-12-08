<?php

namespace App\Repositories;

use App\Models\ContactEmail;
use App\Repositories\Contracts\ContactEmailRepository;
use Prettus\Repository\Eloquent\BaseRepository;

class ContactEmailRepositoryEloquent extends BaseRepository implements ContactEmailRepository
{
    public function model()
    {
        return ContactEmail::class;
    }
}
