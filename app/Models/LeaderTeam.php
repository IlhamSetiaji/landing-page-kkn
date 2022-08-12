<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaderTeam extends Model
{
    use HasFactory;
    protected $table = 'leader_teams';
    protected $guarded = ['id'];
}
