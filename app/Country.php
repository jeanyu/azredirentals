<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name'

    ];

    protected $table = 'country';

    protected $dates = ['deleted_at'];
    protected $softDelete = true;
}
