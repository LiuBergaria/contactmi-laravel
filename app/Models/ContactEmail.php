<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactEmail extends Model
{
    protected $fillable = [
        'id_contact',
        'email',
        'description',
    ];

    protected $casts = [];

    public $timestamps = false;
}
