<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactPhone extends Model
{
    protected $fillable = [
        'id_contact',
        'phone',
        'description',
    ];

    protected $casts = [];

    public $timestamps = false;
}
