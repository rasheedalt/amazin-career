<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const SUPER_ADMIN = 1;
    const ADMIN = 2;
    const STAFF = 3;
    
    protected $fillable = [
        'id',
        'name', 
        'hierachy'
    ];
}
