<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Vehicle</title>
</head>

<body>
    <h1>Create Vehicle Data</h1>
    <form method="POST" action="{{ route('vehicle.store') }}">
        @csrf
        {{-- Dropdown for Choosing Vehicle --}}
        <div>
            <label>Type of Vehicle</label>
            <select name="TypesofVehicle" required>
                <option value="" selected disabled>Choose Vehicle</option>
                <option value="Car">Car</option>
                <option value="Motor">Motor</option>
                <option value="Truck">Truck</option>
            </select>
        </div>
        <div>
            <label>Model</label>
            <input type="string" name="Model" placeholder="Enter Model">

        </div>
        <div>
            <label>Year</label>
            <input type="string" name="Year" placeholder="Enter Year">

        </div>
        <div>
            <label>Passenger Total</label>
            <input type="number" name="PassengerTotal" placeholder="Enter Total Passanger">

        </div>
        <div>
            <label>Manufacture</label>
            <input type="string" name="Manufacturer" placeholder="Enter Manufacturer">
        </div>
        <div>
            <label>Price</label>
            <input type="number" name="Price" placeholder="Enter Price">
        </div>
        {{-- Dropdown for Oil Type --}}
        <div>
            <label>Type of Oil</label>
            <select name="OilType" id="OilType">
                <option value="" selected disabled>Choose Oil Type</option>
                <option value="Bensin">Bensin</option>
                <option value="Solar">Solar</option>
                <option value="CNG">CNG</option>
                <option value="Listrik">Listrik</option>
            </select>
        </div>
        <div>
            <label>Luggage Space</label>
            <input type="number" name="LuggageSpace" placeholder="Enter Lugggage Space">
        </div>
        <div>
            <label>Tirecount</label>
            <input type="number" name="TireCount" placeholder="Enter Tire Count">
        </div>
        <div>
            <label>Passenger Seat</label>
            <input type="number" name="PassengerSeat" placeholder="Enter Passenger Seat">
        </div>
        <div>
            <label>Cargo Area Size</label>
            <input type="number" name="CargoAreaSize" placeholder="Enter Cargo Area Size">
        </div>
        <div>
            <label>Luggage Size</label>
            <input type="number" name="LuggageSize" placeholder="Enter Lugggage Size">
        </div>
        <div>
            <label>Fuel Capacity</label>
            <input type="number" name="FuelCapacity" placeholder="Enter Fuel Capacity">
        </div>
        <div>
            <input type="submit" value="Save Vehicle Data">
        </div>
    </form>




</body>

</html>
