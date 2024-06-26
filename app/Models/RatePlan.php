<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatePlan extends Model
{
    use HasFactory;

    protected $table = 'rate_plan';
    protected $guarded = ['id'];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'id');
    }
}
