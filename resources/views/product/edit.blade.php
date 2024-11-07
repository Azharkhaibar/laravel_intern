<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>
<body>
    <h1>Update Product</h1>
    <form method="POST" action="{{ route('product.update', ['product' => $product->id]) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="product_name">Product Name</label>
            <input type="text" name="product_name" id="product_name" placeholder="Enter product name" value="{{ old('product_name', $product->product_name) }}" required />
        </div>

        <div>
            <label for="furniture">Category</label>
            <select name="furniture" id="furniture" required>
                <option value="furniture" {{ $product->furniture == 'furniture' ? 'selected' : '' }}>Furniture</option>
                <option value="clothing" {{ $product->furniture == 'clothing' ? 'selected' : '' }}>Clothing</option>
                <option value="kitchenware" {{ $product->furniture == 'kitchenware' ? 'selected' : '' }}>Kitchenware</option>
            </select>
        </div>

        <div>
            <label for="place_of_production">Place of Production</label>
            <input type="text" name="place_of_production" id="place_of_production" placeholder="Enter place of production" value="{{ old('place_of_production', $product->place_of_production) }}" required />
        </div>

        <div>
            <label for="company">Company</label>
            <input type="text" name="company" id="company" placeholder="Enter company name" value="{{ old('company', $product->company) }}" required />
        </div>

        <div>
            <input type="submit" value="Update Product" />
        </div>
    </form>
</body>
</html>
