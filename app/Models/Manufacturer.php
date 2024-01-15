<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $fillable = ['name', 'address', 'phone'];

    // Define any relationships or additional methods as needed
}
