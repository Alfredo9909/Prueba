<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'last_name', 'first_name', 'email', 'password', 
    'age', 'sex', 'city', 'postal_zip'];
    


}
