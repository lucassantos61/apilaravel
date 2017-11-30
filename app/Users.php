<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use softDeletes;

    protected $fillablle = ['name','email','phone','cel','gender','dob'];
    protected $dates = ['deleted_at'];

}

