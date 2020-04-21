<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = ['bank_name', 'bank_location'];

    public function accounts(){
        return $this->hasMany('App\Account');
    }

}
