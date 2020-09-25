<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'title',
        'description',
        'company_name',
        'address',
        'deadline',
        'application_mode',
        'salary',
        'link',
    ];
}
