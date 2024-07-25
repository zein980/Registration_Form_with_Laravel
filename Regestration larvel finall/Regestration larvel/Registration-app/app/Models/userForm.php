<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userForm extends Model
{ protected $table = 'userForm';
    use HasFactory;
    protected $fillable=[
        'full_name','user_name','birthdate','phone','address','password','confirm_password','email'
    ];
}
