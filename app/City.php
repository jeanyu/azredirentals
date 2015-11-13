<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
class City extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name'

    ];

    protected $table = 'city';

    protected $dates = ['deleted_at'];
    protected $softDelete = true;
}