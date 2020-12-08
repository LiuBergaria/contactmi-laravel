<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * Vincula os telefones do contato
     */
    public function phones()
    {
        return $this->hasMany('App\ContactPhone', 'id_contact', 'id');
    }

    /**
     * Vincula os e-mails do contato
     */
    public function emails()
    {
        return $this->hasMany('App\ContactEmail', 'id_contact', 'id');
    }
}
