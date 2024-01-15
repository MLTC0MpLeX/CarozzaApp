@extends('layouts.app')

@section('content')
    <h2>Manufacturers</h2>

    <!-- Display Manufacturers Table -->
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <!-- Add more columns if needed -->
        </tr>
        </thead>
        <tbody>
        @foreach($manufacturers as $manufacturer)
            <tr>
                <td>{{ $manufacturer->id }}</td>
                <td>{{ $manufacturer->name }}</td>
                <td>{{ $manufacturer->address }}</td>
                <td>{{ $manufacturer->phone }}</td>
                <!-- Add more cells if needed -->
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
