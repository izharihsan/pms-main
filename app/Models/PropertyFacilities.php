<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyFacilities extends Model
{
    use HasFactory;
    protected $table = 'property_facilities';
    protected $guarded =[];


    public function property()
    {
        return $this->belongsTo(Property::class, 'properties_id', 'id');
    }

}
