<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomPhoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'section',
        'photo_name',
        'photo',
        'property_id',
    ];
}
