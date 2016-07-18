<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinderContact extends Model
{
    protected $table = 'tinder_contacts';
    protected $fillable = [
        'name',
        'email',
        'company',
        'function',
        'telephone_number',
        'match',
    ];

    public function answers()
    {
        return $this->hasMany('App\TinderAnswer');
    }
}
