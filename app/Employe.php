<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $table = 'employes';

    protected $fillable =[
        'emplaoye_name',
        'email'
    ];

    public function roles(){
        // return $this->belongsToMany('App\Role');
        return $this->belongsToMany('App\Role', 'role_employe', 'employe_id', 'role_id');
    }
}
