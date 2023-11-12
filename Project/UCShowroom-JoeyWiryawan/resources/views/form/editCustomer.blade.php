<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
</head>
{{-- FORM for EDIT --}}

<body>
    <h1>Edit Customer Data</h1>
    <form method="post" action="{{ route('customer.update', ['customer' => $customer->id]) }}">
        @csrf
        @method('patch')
        <div>
            <label>Name</label>
            <input type="name" name="Name" placeholder="Enter Your Name" value="{{ $customer->Name }}">

        </div>
        <div>
            <label>Address</label>
            <input type="text" name="Address" placeholder="Enter Your Address" value="{{ $customer->Address }}">

        </div>
        <div>
            <label>Phone Number</label>
            <input type="string" name="PhoneNumber" placeholder="Enter Your Phone Number"
                value="{{ $customer->PhoneNumber }}">

        </div>
        <div>
            <label>IDCard</label>
            <input type="string" name="IDCard" placeholder="Enter Your IDCard" value="{{ $customer->IDCard }}">
        </div>
        <div>
            <input type="submit" value="Edit Customer">
        </div>
    </form>
</body>

</html>
