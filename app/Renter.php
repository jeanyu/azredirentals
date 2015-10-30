<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renter extends Model
{
    protected $fillable = [
        'first_name',
        'last_name'

    ];

    protected $table = 'renters';


}
