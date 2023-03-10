<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clubs extends Model
{
    // use HasFactory;

    public $table = 'clubs';

    protected $fillable = [
    'stadiums_id',
    'name',
    'logo',
    'url',
    'thropy',
    'created_at',
    'updated_at',
    ];

    public function stadiums()
    {
        return $this->belongsTo(Stadiums::class, 'stadiums_id', 'id');
    }

    public function managers()
    {
        return $this->hasMany(Managers::class, 'clubs_id');
    }

    public function players()
    {
        return $this->hasMany(Players::class, 'clubs_id');
    }

    public function match_clubs()
    {
        return $this->hasOne(Matches::class, 'clubs_id');
    }

    public function match_rivals()
    {
        return $this->hasOne(Matches::class, 'clubs_id');
    }
}