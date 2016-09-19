<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Board extends Model{    
    // Mass assignable to set up assign fill in table by create()
    // to protect miss insert columns
   // protected $table = 'board'; //name
    protected $fillable = ['title', 'body'];
}
