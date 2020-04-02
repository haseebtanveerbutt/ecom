<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabuler extends Model
{
    protected $fillable = [
        'name',
        'title',
        'content',
        'image',
        'category_id'
    ];
}
