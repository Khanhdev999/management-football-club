<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'daymatch',
        'prize',
    ];
    public function match() {
        return $this->belongsToMany(FootballMatch::class);
    }
}
