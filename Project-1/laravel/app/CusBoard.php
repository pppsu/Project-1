<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CusBoard extends Model
{
    
    protected $fillable = ['name', 'lastName','email','phone','address'];
}
