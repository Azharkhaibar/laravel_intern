<?php

    namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

    class productcontroller extends Controller
    {
        public function homeproduct() {
            $products = product::all();
            return view('product.homeproduct', ['products'=>$products]);
        }

        public function createproduct() {
            return view('product.addproduct');
        }

        public function edit(product $product) {
            return view('product.edit', compact('product'));
        }

        public function store(Request $request) {
            $dataProduct = $request->validate([
                'product_name'=>'required|string|max:50',
                'furniture'=>'required|in:furniture,clothing,kitchenware',
                'place_of_production'=>'required|string|max:50',
                'company'=>'required|string|max:50',
            ]);

            Product::create([
                'product_name' => $dataProduct['product_name'],
                'furniture' => $dataProduct['furniture'],
                'place_of_production' => $dataProduct['place_of_production'],
                'company' => $dataProduct['company'],
            ]);

            return redirect()->route('product.homeproduct')->with('success', 'product created');
        }

        public function updateProduct(Request $request, product $product) {
            $dataUpdate = $request->validate(["product_name" => "required|string|max:255",
                "furniture" => "required|in:furniture,clothing,kitchenware",
                "place_of_production" => "required|string|max:200",
                "company" => "required|string|max:50",
            ]);

            $product->update($dataUpdate);
            return redirect()->route('product.homeproduct')->with('success', 'product has been updated');
        }
    }
