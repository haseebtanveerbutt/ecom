<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $fillable =[
        'emplaoye_name',
        'email'
    ];

    public function roles(){
        $this->belongsToMany('App\Role');
    }
}
