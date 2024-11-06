<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>create product your product now</h1>
    <form method="POST" action="{{route('product.store')}}">
        @csrf
        <div>
            <label for="product_name">Product Name</label>
            <input type="text" name="product_name" id="product_name" placeholder="Enter product name" required />
        </div>
        <div>
            <label for="furniture">Category</label>
            <select name="furniture" id="furniture" required>
                <option value="furniture">Furniture</option>
                <option value="clothing">Clothing</option>
                <option value="kitchenware">Kitchenware</option>
            </select>
        </div>
        <div>
            <label for="place_of_production">Place of Production</label>
            <input type="text" name="place_of_production" id="place_of_production" placeholder="Enter place of production" required />
        </div>
        <div>
            <label for="company">Company</label>
            <input type="text" name="company" id="company" placeholder="Enter company name" required />
        </div>
        <div>
            <input type="submit" value="Create Product" />
        </div>
    </form>
</body>
</html>
