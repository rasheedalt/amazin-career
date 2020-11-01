<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoverLetter extends Model
{
    protected $table = "cover_letter_applications";

    protected $fillable = [
        'first_name',
        'last_name',
        'email_address',
        'phone_number',
        'cv',
    ];
}
