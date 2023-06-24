<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;



class ProductController extends Controller
{
    public function index()
    {
          $product=product::latest()->paginate(3);
         return view("products.index",["products"=>$product]);
    }
    public function create()
    {
        return view("products.create");
   }
   public function store(Request $request){
     // dd($request);
     $request->validate([
               'name'=>'required',
               'description'=>'required',
               'mrp'=>'required|numeric',
               'price'=>'required|numeric',
               'image'=>'required|mimes:jpeg,jpg,png|max:10000',
          ]);

          $imageName = time().'.'.$request->image->extension();
          $request->image->move(public_path("products"), $imageName);

          $product=new product;
          $product->image= $imageName;
          $product->name=$request->name;
          $product->description=$request->description;
          $product->mrp=$request->mrp;
          $product->price=$request->price;
          $product->save();
          return back() ->withSuccess(' Product Details Added....');
    }

    public function show($id){
      $product=product::where("id",$id)->first();
      return view('products.show',['product'=>$product]);
    }

    public function edit($id){
        $product=product::where("id",$id)->first();
        return view('products.edit',['product'=>$product]);
      }
 
      public function update(Request $request ,$id){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'mrp'=>'required|numeric',
            'price'=>'required|numeric',
            'image'=>'nullable|mimes:jpeg,jpg,png|max:10000',
       ]);
       $product=product::where("id",$id)->first();

       if(isset($request->image)){
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path("products"), $imageName);
        $product->image=$imageName;
       }

      //  $product->image= $imageName;
          $product->name=$request->name;
          $product->description=$request->description;
          $product->mrp=$request->mrp;
          $product->price=$request->price;
          $product->save();
          return back() ->withSuccess(' Product Details Updated....');
    }

    public function destroy($id){
      $product=product::where("id",$id)->first();
      $product->delete();
      return back()->withSuccess(' Product Details Deleted....');
    }
}
