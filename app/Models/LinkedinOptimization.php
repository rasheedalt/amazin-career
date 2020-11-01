<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LinkedinOptimization extends Model
{
    protected $table = "linkedin_optimization_applications";

    protected $fillable = [
        'linkedin_username',
        'linkedin_password',
        'email_address',
        'phone_number',
        'cv',
        'picture',
    ];
    
}
