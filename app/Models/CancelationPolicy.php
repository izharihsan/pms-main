<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CancelationPolicy extends Model
{
    use HasFactory;
    protected $table = 'cancelation_policies';
    protected $guarded = [];

}
