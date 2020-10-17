<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [
        'name', 'code'
    ];

    public function jobs(){
        return $this->belongsToMany(Job::class);
    }
    
}
