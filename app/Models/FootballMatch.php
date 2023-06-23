<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FootballMatch extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'time'
    ];
    // public function players() {

    //     return $this->belongsToMany(Player::class);

    // }
    public function tournament() {

        return $this->belongsTo(Tournament::class);

    }
    public function goals() {

        return $this->hasMany(Goal::class);

    }
}
