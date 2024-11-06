<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ini Page Create</h1>
    {{-- ubah rute --}}
    <form method="POST" action="{{ route('customer.update', ['customer'=>$customer->id]) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name" value="{{$customer->name}}" />
        </div>
        <div>
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" placeholder="Phone" value="{{$customer->phone}}" />
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" value="{{$customer->email}}" />
        </div>
        <div>
            <input type="submit" value="Save a New Product" />
        </div>
    </form>
</body>
</html>
