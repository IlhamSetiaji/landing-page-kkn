<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdLineTeam extends Model
{
    use HasFactory;
    protected $table = 'third_line_teams';
    protected $guarded = ['id'];
}
