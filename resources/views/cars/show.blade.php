@extends('layouts.app')

@section('content')
    <h2>Car Details</h2>

    <div>
        <strong>ID:</strong> {{ $car->id }}<br>
        <strong>Model:</strong> {{ $car->model }}<br>
        <strong>Year:</strong> {{ $car->year }}<br>
        <strong>Salesperson Email:</strong> {{ $car->salesperson_email }}<br>
        <strong>Manufacturer:</strong> {{ $car->manufacturer->name }}<br>
    </div>

    <a href="{{ route('cars.index') }}" class="btn btn-primary mt-3">Back to Cars</a>
@endsection
