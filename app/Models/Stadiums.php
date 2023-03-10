<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadiums extends Model
{
    // use HasFactory;

    public $table = 'stadiums';

    protected $fillable = [
    'name',
    'photo',
    'capacity',
    'address',
    'created_at',
    'updated_at',
    ];

    // Relation
    public function clubs()
    {
        return $this->hasOne(Clubs::class, 'stadiums_id');
    }
}