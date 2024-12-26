<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class ProductController extends Controller
{
    public function index()
   {
      
     return view('product');  
     
   }

   public function register() 
   {

        return view('register');
             
   }

   public function create(RegisterRequest $request) 
   {

      $products = $request->all();      
      Product::create($products);
      
      return view('products' , ['products' => $products]);
     
   }

   public function update(Request $request) 
   {

      $products = $request->all();      

      return view('/products' , ['products' => $products]);
     
   }

   public function search(Request $request)
   {

      return view('/search');

   }

   public function delete(Request $request)
   {

      $products = Product::find($request->id);

      return view('/products/{:productId}/delete', ['Product' => $products]);
   }
}