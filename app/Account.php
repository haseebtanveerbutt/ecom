<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['customer_name', 'account_no'];

    public function bank(){
        return $this->hasOne('App\Bank');
    }
}
