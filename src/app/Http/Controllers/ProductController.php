<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
   {
    
     return view('/product');
     
   }

   public function register() 
   {

        return view('/register');     
   }

   public function create(request $request) 
   {

      $register = register::all();

      return view('/register', ['register' => $register]);
     
   }
}

