<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessPlan extends Model
{
    protected $table = "business_plan_applications";

    protected $fillable = [
        'first_name',
        'last_name',
        'email_address',
        'phone_number',
        'type_of_business',
    ];
}
