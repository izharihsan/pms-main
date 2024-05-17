<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'room_name',
        'room_type_id',
        'number_of_room',
        'max_occupancy',
        'room_width',
        'room_length',
        'min_rate',
        'extra_guest_fee',
        'max_extra_bed',
        'price_of_extra_bed',
        'property_id',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'id');
    }

    public function facility()
    {
        return $this->hasMany(RoomFacility::class, 'room_id', 'id');
    }

    public function bedroom()
    {
        return $this->hasMany(RoomBedroom::class, 'room_id', 'id');
    }
}
