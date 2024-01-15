@extends('layouts.app')

@section('content')
    <h2>Cars</h2>

    <a href="{{ route('cars.create') }}" class="btn btn-success mb-3">Add New Car</a>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Model</th>
            <th>Year</th>
            <th>Salesperson Email</th>
            <th>Manufacturer</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cars as $car)
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->year }}</td>
                <td>{{ $car->salesperson_email }}</td>
                <td>{{ $car->manufacturer->name }}</td>
                <td>
                    <a href="{{ route('cars.show', $car->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('cars.destroy', $car->id) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
