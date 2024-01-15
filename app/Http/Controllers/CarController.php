<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $manufacturers = Manufacturer::all();

        $selectedManufacturer = $request->input('manufacturer'); // Get selected manufacturer from the request
        $cars = Car::when($selectedManufacturer, function ($query) use ($selectedManufacturer) {
            $query->where('manufacturer_id', $selectedManufacturer);
        })->get();

        return view('cars.index', compact('cars', 'manufacturers', 'selectedManufacturer'));
    }

    public function create()
    {
        $manufacturers = Manufacturer::all();
        return view('cars.create', compact('manufacturers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'model' => 'required|string',
            'year' => 'required|string',
            'salesperson_email' => 'required|email',
            'manufacturer_id' => ['required', Rule::exists('manufacturers', 'id')],
        ]);

        Car::create($request->all());

        return redirect()->route('cars.index')->with('success', 'Car added successfully!');
    }


}
