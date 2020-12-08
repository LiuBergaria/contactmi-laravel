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
        return $this->hasMany('App\Models\ContactPhone', 'id_contact', 'id');
    }

    /**
     * Vincula os e-mails do contato
     */
    public function emails()
    {
        return $this->hasMany('App\Models\ContactEmail', 'id_contact', 'id');
    }
}
