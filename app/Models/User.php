<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $casts = [
        'purchasedCourses' => 'array',
    ];

    public function courses(){
        return $this->hasMany('App\Models\Course');
    }
    public function modules(){
        return $this->hasMany('App\Models\Module');
    }
    public function contents(){
        return $this->hasMany('App\Models\Content');
    }
}
