<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
</head>

{{-- FORM for Creating Customer Data --}}
<body>
    <h1>Create Customer Data</h1>
    <form method="post" action="{{route('form.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="name" name="Name" placeholder="Enter Your Name">
           
        </div>
        <div>
            <label>Address</label>
            <input type="text" name="Address" placeholder="Enter Your Address">
        
        </div>
        <div>
            <label>Phone Number</label>
            <input type="string" name="PhoneNumber" placeholder="Enter Your Phone Number">

        </div>
        <div>
            <label>IDCard</label>
            <input type="string" name="IDCard" placeholder="Enter Your IDCard">
        </div>
        <div>
        <input type="submit" value="Save Customer Data">    
        </div>
    </form>
</body>

</html>
