<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'fax',
        'address',
        'meta_keywords',
        'meta_des',
        'doctorsNo',
        'image'
    ];

    public function categories(){
        return $this->belongsToMany(Category::class , 'categories_hospitals');
    }

}
