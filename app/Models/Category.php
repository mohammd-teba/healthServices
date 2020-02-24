<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
         'meta_des'
    ];

    public function hospitals(){
        return $this->belongsToMany(Hospital::class , 'categories_hospitals');
    }
}
