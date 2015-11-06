<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'first_name',
        'last_name'

    ];

    protected $table = 'users';

    protected $dates = ['deleted_at'];
    protected $softDelete = true;



}
