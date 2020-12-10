<?php

namespace App\Repositories;

use App\Models\ContactEmail;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\Contracts\ContactEmailRepository;

class ContactEmailRepositoryEloquent extends BaseRepository implements ContactEmailRepository
{
    public function model()
    {
        return ContactEmail::class;
    }
}
