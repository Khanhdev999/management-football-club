<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;
    protected $fillable = [
        'count',
    ];
    public function player(){
        return $this->belongsTo( Player::class);
    }
    public function football_match(){
        return $this->belongsTo( FootballMatch::class);
    }
}
