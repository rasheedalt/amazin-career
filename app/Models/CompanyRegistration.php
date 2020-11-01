<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyRegistration extends Model
{
    protected $table = "company_registration_applications";

    protected $fillable = [
        'first_proposed_business_name',
        'second_proposed_business_name',
        'email_address',
        'business_address',
        'phone_number',
        'start_date',
    ];
}
