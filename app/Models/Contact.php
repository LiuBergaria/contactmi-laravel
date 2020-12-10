<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'id_user',
        'name',
        'fg_favorite',
        'cep',
        'full_address',
        'address_number',
    ];

    protected $casts = [
        'fg_favorite' => 'bool'
    ];

    /**
     * Vincula os telefones do contato
     */
    public function phones()
    {
        return $this->hasMany(ContactPhone::class, 'id_contact', 'id');
    }

    /**
     * Vincula os e-mails do contato
     */
    public function emails()
    {
        return $this->hasMany(ContactEmail::class, 'id_contact', 'id');
    }
}
