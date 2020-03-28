<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'category_id',
        'question_text',
    ];

    public function category()
    {
        return $this->belongsTo(category::class, 'category_id');
    }
    public function questionOptions()
    {
        return $this->hasMany(Option::class, 'question_id', 'id');
    }
}
