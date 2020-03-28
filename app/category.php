<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['name'];

    public function products(){

        return $this->hasMany(Product::class);
    }

    public function categoryQuestions()
    {
        return $this->hasMany(QuizQuestion::class, 'category_id', 'id');
    }
}
