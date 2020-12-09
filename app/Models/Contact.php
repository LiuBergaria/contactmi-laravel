<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
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
