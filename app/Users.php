<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'name',
        'username',
        'password',
        'phone',
        'email',
        'status',
        'maxa',
        'mahuyen',
        'level',
        'sadmin',
        'permission',
        'emailxt',
        'question',
        'answer'
    ];
}
