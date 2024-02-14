<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index() {
        $categories = Category::all();
        return view('admin/category/index', [
            'categories'=> $categories
        ]);
    }

    function create() {
        return view('admin/category/create');
    }

    function insert(Request $request)  {
        $request->validate ([
            'name'=>'required|min:10|max:100|unique:categories,name',
            'address'=>'required|alpha_dash|unique:categories,address',
            'image'=>'file|max:1024'
        ]);

        $name = $request->name;
        $address = $request->address;
        $image = $request->file('image')->store('category');

        Category::create([
            'name'=>$name,
            'address'=>$address,
            'image'=>$image
        ]);

        return redirect('admin/category');
    }

    function edit($id) {
        $category = Category::find($id);
        return view('admin/category/edit', [
            'category'=>$category
        ]);
    }

    function update(Request $request, $id) {
        if($request->hasFile('image')) {
            $request->validate ([
                'name'=>"required|min:10|max:100|unique:categories,name,$id,id",
                'address'=>"required|alpha_dash|unique:categories,address,$id,id",
                'image'=>'file|max:1024'
            ]);
    
            $name = $request->name;
            $address = $request->address;
            $image = $request->file('image')->store('category');

            $category=Category::find($id);
            
            $category->name=$name;
            $category->address=$address;
            $category->image=$image;
            $category->save();

        }else{
            $request->validate ([
                'name'=>"required|min:10|max:100|unique:categories,name,$id,id",
                'address'=>"required|alpha_dash|unique:categories,address,$id,id"
            ]);
            Category::find($id)->update($request->all());
        }

        return redirect('admin/category');
    }

    function delete($id) {
        Category::find($id)->delete();
        return redirect('admin/category');
    }
}
