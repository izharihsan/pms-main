<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomRatesDetails extends Model
{
    use HasFactory;

    protected $table = 'room_rates_details';
    protected $guarded = ['id'];
}
