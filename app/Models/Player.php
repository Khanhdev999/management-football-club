<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'birthday',
        'phone',
        'address',
        'photo',
    ];
    public function team() {
        return $this->belongsTo(Team::class);
    }
    public function coach(){
        return $this->belongsTo(Coach::class);
    }
    public function goal(){
        return $this->hasMany( Goal::class);
    }
}
