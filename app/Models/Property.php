<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $table = 'propertie';
    protected $guarded =[];


    public function address()
    {
        return $this->hasOne(PropertyAddress::class, 'properties_id', 'id');
    }

    public function category()
    {
        return $this->hasOne(PropertyCategory::class, 'properties_id', 'id');
    }

    public function terms()
    {
        return $this->hasOne(PropertyTerms::class, 'properties_id', 'id');
    }

    public function contact()
    {
        return $this->hasMany(PropertyContact::class, 'properties_id', 'id');
    }

    public function document()
    {
        return $this->hasMany(PropertyDocument::class, 'properties_id', 'id');
    }

    public function photos()
    {
        return $this->hasMany(PropertyPhotos::class, 'properties_id', 'id');
    }

    public function type()
    {
        return $this->hasMany(PropertyType::class, 'properties_id', 'id');
    }
    public function facilities()
    {
        return $this->hasMany(PropertyFacilities::class, 'properties_id', 'id');
    }

}
