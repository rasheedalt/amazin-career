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
        'state',
        'is_active',
        'is_approved',
        'company_registration_no',
        'job_group_id',
        'job_code'
    ];

    public function states(){
        return $this->belongsToMany(State::class);
    }
}
