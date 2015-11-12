<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name'

    ];

    protected $table = 'region';

    protected $dates = ['deleted_at'];
    protected $softDelete = true;
}
