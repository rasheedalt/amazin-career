<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    protected $fillable = [
        'title','description',
        'application_mode', 'link',
        'is_active', 'deadline',
        'requirements',
    ];
}
