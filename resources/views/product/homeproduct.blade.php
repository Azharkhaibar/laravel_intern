<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ini bagian product</h1>
    <div>
        <table border="1">
            <tr>
                <th>id</th>
                <th>product</th>
                <th>furniture</th>
                <th>place production</th>
                <th>company</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->product_name}}</td>  <!-- Sesuaikan dengan kolom yang benar -->
                    <td>{{$product->furniture}}</td>     <!-- Sesuaikan dengan kolom yang benar -->
                    <td>{{$product->place_of_production}}</td>  <!-- Sesuaikan dengan kolom yang benar -->
                    <td>{{$product->company}}</td>  <!-- Sesuaikan dengan kolom yang benar -->
                    <td>
                        <a href="{{route('product.edit', ['product'=>$product])}}">edit</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
