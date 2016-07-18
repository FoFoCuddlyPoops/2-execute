<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinderAnswer extends Model
{
    protected $fillable = [
        'answer1',
        'answer2',
        'answer3',
        'answer4',
        'answer5',
        'answer6',
        'answer7',
        'answer8',
    ];

    public function post()
    {
        return $this->belongsTo('App\TinderContact');
    }
}
