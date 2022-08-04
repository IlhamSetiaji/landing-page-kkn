<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileTesti extends Model
{
    use HasFactory;
    protected $table = 'profile_testimonials';
    protected $guarded = ['id'];
}
