<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyUser extends Model
{
    //
    protected $fillable = ['email','username','password'];
    protected $table = 'myUsers';
}
