<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'id',
        'name', 
        'description',
        'display_name', 
        'is_active',
        'description'
    ];

    public function formfield(){
        return $this->hasMany(FormFieldType::class);
    }
}
