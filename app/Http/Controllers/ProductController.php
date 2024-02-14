<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(Request $request) {
        $keyword = $request->keyword;
        $products = Product::where('name_product', 'Like', "%$keyword%")->paginate(4);
        return view('admin\product\index', [
            'products'=> $products
        ]);
    }

    function create() {
        $categories = Category::all();
        return view('admin\product\create', [
            'categories' => $categories
        ]);
    }

    function insert(Request $request)  {
        $request->validate([
            'name_product'=>'required|min:10|max:100|unique:products,name_product',
            'price_product'=>'required|numeric',
            'detail_product'=>'required|min:10|max:100',
            'stock_product'=>'required',
            'image_product'=>'file|max:1024',
            'category_id'=>'required'
        ]);

        $name_product = $request->name_product;
        $price_product = $request->price_product;
        $detail_product = $request->detail_product;
        $stock_product = $request->stock_product;
        $image_product = $request->file('image_product')->store('product');
        $category_id = $request->category_id;

        Product::create([
            'name_product'=>$name_product,
            'price_product'=>$price_product,
            'detail_product'=>$detail_product,
            'stock_product'=>$stock_product,
            'image_product'=>$image_product,
            'category_id'=>$category_id
        ]);

        return redirect('admin\product');
    }

     function edit($id) {
        $product = Product::find($id);
        return view('admin\product\edit', [
            'product'=>$product
        ]);
    }

    function update(Request $request, $id) {
        if($request->hasFile('image_product')) {
            $request->validate([
                'name_product'=>'required|min:10|max:100|unique:products,name_product',
                'price_product'=>'required|numeric',
                'detail_product'=>'required|min:10|max:100',
                'stock_product'=>'required',
                'image_product'=>'file|max:1024',
                'category_id'=>'required'
            ]);

            $name_product = $request->name_product;
            $price_product = $request->price_product;
            $detail_product = $request->detail_product;
            $stock_product = $request->stock_product;
            $image_product = $request->file('image_product')->store('product');
            $category_id = $request->category_id;

            $product=Product::find($id);

            $product->name_product=$name_product;
            $product->price_product=$price_product;
            $product->detail_product=$detail_product;
            $product->stock_product=$stock_product;
            $product->image_product=$image_product; 
            $product->category_id=$category_id;
            $product->save();
    
        } else{
            $request->validate([
                'name_product'=>"required|min:10|max:100|unique:products,name_product,$id,id",
                'price_product'=>'required|numeric',
                'detail_product'=>'required|min:10|max:100',
                'stock_product'=>'required',
                'category_id'=>'required'
            ]);
            Product::find($id)->update($request->all());
        }
        
        return redirect('admin\product');
    }

    function delete($id) {
        Product::find($id)->delete();
        return redirect('admin\product');
    }

}
