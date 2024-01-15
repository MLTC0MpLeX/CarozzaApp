<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['model', 'year', 'salesperson_email', 'manufacturer_id'];

    // Define the relationship with Manufacturer
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

}
