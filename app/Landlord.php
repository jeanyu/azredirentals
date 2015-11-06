<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Landlord extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'first_name',
        'last_name'

    ];

    protected $table = 'landlords';

    protected $dates = ['deleted_at'];
    protected $softDelete = true;


}
