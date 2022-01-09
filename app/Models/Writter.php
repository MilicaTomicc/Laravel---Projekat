<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writter extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'born', 'died', 'birth_place'];
}
