<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['name', 'email', 'password', 'birthDate', 'gender', 'image'];
}
