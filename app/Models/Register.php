<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $table = 'register_data'; 
    protected $fillable = ['name', 'email', 'phone_no', 'place'];
    public $timestamps = true;
}
