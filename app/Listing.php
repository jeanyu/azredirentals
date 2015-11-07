<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'first_name',
        'last_name'

    ];

    protected $table = 'listings';
}
