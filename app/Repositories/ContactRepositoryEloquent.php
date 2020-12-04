<?php

namespace App\Repositories;

use App\Contact;
use App\Repositories\Contracts\ContactRepository;
use Prettus\Repository\Eloquent\BaseRepository;

class ContactRepositoryEloquent extends BaseRepository implements ContactRepository
{
    public function model()
    {
        return Contact::class;
    }
}
