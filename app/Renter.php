<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Renter extends Model
{

    use SoftDeletes;
    protected $fillable = [
        'first_name',
        'last_name'

    ];

    protected $table = 'renters';

    protected $dates = ['deleted_at'];
    protected $softDelete = true;


}
