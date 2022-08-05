<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PotensiContent extends Model
{
    use HasFactory;
    protected $table = 'potensi_contents';
    protected $guarded = ['id'];
}
