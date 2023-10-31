<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'register_data';
    protected $fillable = ['name', 'email', 'phone_no', 'place'];
    // const CREATED_AT = 'created_at';
    // const UPDATED_AT = 'updated_at';
}
