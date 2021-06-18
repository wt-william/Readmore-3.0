<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class signupModel extends Model
{
    use HasFactory;
    protected $table = 'register';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
