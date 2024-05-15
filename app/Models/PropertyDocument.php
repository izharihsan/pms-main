<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDocument extends Model
{
    use HasFactory;
    protected $table = 'property_documents';
    protected $guarded =[];


    public function property()
    {
        return $this->belongsTo(Property::class, 'properties_id', 'id');
    }

}
