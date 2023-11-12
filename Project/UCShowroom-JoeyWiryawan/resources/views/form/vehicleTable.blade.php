<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Vehicle Data</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="/test">Customer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/vehicleTable">Vehicle</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{route('order.index')}}">Order</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
    </nav>
    <div class="d-flex justify-content-center">
        <div class="container">
            <h1>Vehicle Table</h1>
            <div>
                <table class="table table-stripped">
                    <tr>
                        <th>Type Of Vehicle</th>
                        <th>Model</th>
                        <th>Year</th>
                        </th>
                        <th>Passenger Size</th>
                        <th>Manufacture</th>
                        <th>Price</th>
                        <th>Oil Type </th>
                        <th>Luggage Space</th>
                        <th>Tire Count</th>
                        <th>Passenger Seat</th>
                        <th>Cargo Area Size</th>
                        <th>Luggage Size</th>
                        <th>Fuel Capacity</th>
                        <th>Action</th>
                    </tr>
                    {{-- $form is from Customer Controller function Index  --}}
                    @foreach ($form as $vehicle)
                        <tr>
                            <td>{{ $vehicle->TypesofVehicle }}</td>
                            <td>{{ $vehicle->Model }}</td>
                            <td>{{ $vehicle->Year }}</td>
                            <td>{{ $vehicle->PassengerTotal }}</td>
                            <td>{{ $vehicle->Manufacturer }}</td>
                            <td>{{ $vehicle->Price }}</td>
                            <td>{{ $vehicle->OilType }}</td>
                            <td>{{ $vehicle->LuggageSpace }}</td>
                            <td>{{ $vehicle->TireCount }}</td>
                            <td>{{ $vehicle->PassengerSeat }}</td>
                            <td>{{ $vehicle->CargoAreaSize }}</td>
                            <td>{{ $vehicle->LuggageSize }}</td>
                            <td>{{ $vehicle->FuelCapacity }}</td>
                            <td>
                                <form action="{{ route('vehicle.destroy', ['vehicle' => $vehicle]) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                            </td>
                            {{-- <td> 
                            <a href="{{route('form.edit', ['Customer' => $vehicle])}}">Edit</a>
                        </td> --}}
                        </tr>
                    @endforeach
                </table>
            </div>
            <a href="/vehicleTable/createVehicle">
                <button type="button" class="btn btn-primary btn-lg">Add New Data</button></a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>
