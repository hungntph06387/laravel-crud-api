<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    //
    public function index(){
         $categories=Categories::all();
         $product=Product::all();
         return view('layouts.category', compact('categories', 'product'));
    }

    public function category(Request $request, $id){
            $categories=Categories::all();
        
            $product = Categories::find($id)->getProduct;
            // dd($categories->toArray());
            return view('layouts.category', compact('categories','product'));
       
        
    }

    public function newProduct(){
            $categories=Categories::all();
            return view('layouts.newProduct', compact('categories'));
    }

    public function addProduct(){

        $product = new Product();
        $product->name = request('name');
        $product->price = request('price');
        $product->description = request('description');
        $product->categories_id = request('category_id');
        if($product->save()){
            return redirect('/category');
        }  
        // dd(request('category_id'));
    }

    public function editProduct($id){

        $product = Product::find($id);
        $category=Categories::find($id);
        return view('layouts.edit-category', compact('product', 'category'));

        //  dd(Categories::find($id));  
    }

    public function updateProduct($id){

        $product = Product::find($id);
        $product->name = request('name');
        $product->price = request('price');
        $product->description = request('description');
        $product->categories_id = request('categories_id');
        if($product->update()){
            return redirect('/category');
        }
        
    }

    public function delete($id){

        $product=Product::find($id);
        $product->delete();
        return redirect('/category');

    }

    public function search($name){
        // 
        $search = Product::where('name', 'like','%'.$name.'%')->get();
        dd($search->toArray());
    }

    public function showForm(){
        return view('layouts.upload');
    }

    public function upload(Request $request){
        return $request->file('file')->store('docs');
    }
}
