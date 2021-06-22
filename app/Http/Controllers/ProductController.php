<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public function index()
    {
       $products = Product::latest()->paginate(5);

       return view('products.index', compact('products'))->with('i', (request()->input('page',1)-1)*5);
    }

    
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        
    }

   
    public function show(Product $product)
    {
     
    }

    
    public function edit(Product $product)
    {
        
    }

   
    public function update(Request $request, Product $product)
    {
      
    }

    
    public function destroy(Product $product)
    {
       
    }
}
