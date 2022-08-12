<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirstLineTeam extends Model
{
    use HasFactory;
    protected $table = 'first_line_teams';
    protected $guarded = ['id'];
}
