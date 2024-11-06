<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('contact.store')}}">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name" id="name" placeholder="name" required />
        </div>
        <div>
            <label>Country</label>
            <input type="text" name="country" id="country" placeholder="country" required />
        </div>
        <div>
            <label>State</label>
            <input type="text" name="state" id="state" placeholder="state" required />
        </div>
        <div>
            <label>Company</label>
            <input type="text" name="company" id="company" placeholder="company" required />
        </div>
        <div>
            <input type="submit" value="submit data" />
        </div>
    </form>
</body>
</html>
