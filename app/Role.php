<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable =[
        'name'
    ];

    public function employes(){
        // return $this->belongsToMany('App\Employe');
        return $this->belongsToMany('App\Employe', 'role_employe', 'role_id', 'employe_id');
    }
}
