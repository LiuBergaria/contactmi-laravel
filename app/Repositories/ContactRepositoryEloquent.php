<?php

namespace App\Repositories;

use App\Models\Contact;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\Contracts\ContactRepository;

class ContactRepositoryEloquent extends BaseRepository implements ContactRepository
{
    public function model()
    {
        return Contact::class;
    }
}
