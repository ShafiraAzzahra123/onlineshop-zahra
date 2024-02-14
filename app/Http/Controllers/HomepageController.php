<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller{
    function index() {
        $categories = Category::all();
        return view('homepage', [
            'categories'=>$categories
        ]);
    }

    function productlist() {
        $products=Product::all();
        return view('product', [
            'products'=>$products
        ]);
    }

    function categoryDetail($address) {
        $category = Category::where('address', $address)->first(); 
        return view('category', [
            'category' => $category
        ]);
    }

    function productDetail($id) {
        $product=Product::find($id);
        return view('detail-product', [
            'product'=>$product
        ]);   
    }

    function checkoutDetail($id_product) {
        $product = Product::find($id_product);
        return view('checkout', [
            'product'=>$product
        ]);
        
    }

    function processCheckout(Request $request) {
        $customer_name = $request->customer_name;
        $customer_phone = $request->customer_phone;
        $customer_email = $request->customer_email;
        $customer_address = $request->customer_address;
        $payment_proof = $request->file('payment_proof')->store('transaction');
        $quantity_product = $request->quantity_product;
        $product = Product::find($request->id_product);
        $total_amount = $request->total_amount;

        Checkout::create([
            'customer_name'=>$customer_name,
            'customer_phone'=>$customer_phone,
            'customer_email'=>$customer_email,
            'customer_address'=>$customer_address,
            'payment_proof'=>$payment_proof,
            'quantity_product'=>$quantity_product,
            'total_amount'=>$total_amount,
            'product'=>$product,
            'customer_name'=>$customer_name
        ]);
        return view('checkout');
    }

}