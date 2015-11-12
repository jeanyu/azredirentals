<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name'

    ];

    protected $table = 'state';

    protected $dates = ['deleted_at'];
    protected $softDelete = true;
}
