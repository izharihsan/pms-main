<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyNearby extends Model
{
    use HasFactory;
    protected $table = 'property_nearbies';
    protected $guarded =[];
}
