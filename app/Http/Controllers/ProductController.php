<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function list(){
        return view('product.list', [
            'products' => Product::paginate(15)
        ]);
    }

    public function listAdmin(){
        return view('product.list-admin', [
            'products' => Product::paginate(15)
        ]);
    }

    public function create() {
        return view('product.create', [
            'category' => Category::all(),
        ]);
    }

    public function product(Product $product){
        return view('product.product',[
            'product' => $product
        ] );
    }


    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // validate each image
        ]);






        $product = Product::create($validation);
        foreach ($request->file('images') as $file) {
            $path = $file->store('public/product');
            $url = Storage::url($path);
            ProductImages::create([
                "path" => $url,
                "product_id" => $product->id
            ]);
        }
        return redirect()->route('product.list')->with(['message' => 'Product created successfully.']);
    }


    public function update(Product $product){
        
        return view('product.update', [
            'category' => Category::all(),
            'product' => $product,
        ]);
    }


    public function delete(Product $product){
        $product->delete();
        return redirect()->route('product.list.admin')->with(['message' => 'Product deleted successfully.']);
    }


    public function updateStore(Request $request, Product $product) {
        $validation = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // validate each image
        ]);


        $product->update($validation);

        // Update images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('public/product');
                $url = Storage::url($path);

                ProductImages::create([
                    "path" => $url,
                    "product_id" => $product->id
                ]);
            }
        }

        return redirect()->route('product', $product->id)->with(['message' => 'Product updated successfully.']);
    }
}
