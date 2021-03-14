<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobGroup extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function jobs(){
        return $this->hasMany(Job::class);
    }
}
