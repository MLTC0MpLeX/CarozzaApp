<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view("cars.index", compact('cars'));
    }

    // Add other methods for creating, editing, and deleting cars as needed
}
