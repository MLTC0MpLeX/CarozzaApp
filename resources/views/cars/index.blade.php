@extends('layouts.app')

@section('content')
    <h2>Cars</h2>

    <!-- Display Cars Table -->
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Model</th>
            <th>Year</th>
            <th>Salesperson Email</th>
            <th>Manufacturer</th>
            <!-- Add more columns if needed -->
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
                <!-- Add more cells if needed -->
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
