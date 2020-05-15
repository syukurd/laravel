<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;
class Admin extends Model
{
use Notifiable;
protected $guard='admin';
protected $fillable=[
    'name','email','username','password','phone','email_verified_at'
];
protected $hidden=['password'];
}
