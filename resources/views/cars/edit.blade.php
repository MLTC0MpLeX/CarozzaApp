@extends('layouts.app')

@section('content')
    <h2>Edit Car</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('cars.update', $car->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="model">Model:</label>
            <input type="text" name="model" id="model" class="form-control" value="{{ $car->model }}" required>
        </div>

        <div class="form-group">
            <label for="year">Year:</label>
            <input type="text" name="year" id="year" class="form-control" value="{{ $car->year }}" required>
        </div>

        <div class="form-group">
            <label for="salesperson_email">Salesperson Email:</label>
            <input type="email" name="salesperson_email" id="salesperson_email" class="form-control" value="{{ $car->salesperson_email }}" required>
        </div>

        <div class="form-group">
            <label for="manufacturer_id">Manufacturer:</label>
            <select name="manufacturer_id" id="manufacturer_id" class="form-control" required>
                @foreach($manufacturers as $manufacturer)
                    <option value="{{ $manufacturer->id }}" {{ $car->manufacturer_id == $manufacturer->id ? 'selected' : '' }}>
                        {{ $manufacturer->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Car</button>
    </form>

    <a href="{{ route('cars.index') }}" class="btn btn-secondary mt-3">Back to Cars</a>
@endsection
