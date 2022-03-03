<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(5);
  
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
    
    public function create()
    {
        return view('products.crud');
    }
  
    public function store(Request $request)
    { 
        //dd($request);
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'address' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
  
        Product::create($input);
   
        return redirect()->route('products.index')
                        ->with('success','Created successfully.');
    }
   

    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }
   
    public function edit( $product_id)
    {
        $row = Product::findOrFail($product_id);
        return view('products.crud',compact('row'));
    }
  
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'address' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
        
        $product->update($input);
  
        return redirect()->route('products.index')
                        ->with('success',' Updated successfully');
    }
  
    public function destroy(Product $product)
    {   
        $product->delete();
  
        return redirect()->route('products.index')
                        ->with('success','Deleted successfully');
    }
}
