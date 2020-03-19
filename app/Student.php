<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    
    protected $fillable = ['Name','Email', 'Password', 'Country', 'City', 'Address',  'Date_of_birth', 'Contact_no'
    ];
}
