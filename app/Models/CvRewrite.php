<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CvRewrite extends Model
{
    protected $table = "cv_rewrite_applications";

    protected $fillable = [
        'first_name',
        'last_name',
        'email_address',
        'phone_number',
        'cv',
    ];
}
