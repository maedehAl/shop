<?php

namespace App\Http\Controllers;


use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(){
        return view("client.product");
    }

    public function create(){

        $categories = Category::all();

        $products = Product::all();

        return view("admin.products.create",compact('products','categories'));
    }

    public function store(Request $request){


        $file = $request->file("image_input");

        $filename = md5(time().rand(1000,6000).microtime());

        $file->move(public_path()."/uploads",$filename.".".$file->getClientOriginalExtension());

        $request->request->add(["image"=>$filename.".".$file->getClientOriginalExtension()]);

        Product::create($request->all());

        return redirect()->back();

    }


    public function index(){
        $products = Product::all();
        return view("admin.products.index",compact('products'));
    }

    public function delete($id){

        $product = Product::find($id);

        unlink(public_path()."/uploads/".$product->image);

        $product->delete();

        return redirect()->back();

    }


    public function edit($id){

        $product=Product::find($id);

        $categories=Category::all();

        return view("admin.products.edit",compact('product','categories'));

    }



    public function update($id,Request $request){

        $product = Product::find($id);


        if($request->hasFile("image_input")){
            unlink(public_path()."/uploads/".$product['image']);
            $file = $request->file("image_input");
            $filename = md5(time().rand(1000,6000).microtime());
            $file->move(public_path()."/uploads",$filename.".".$file->getClientOriginalExtension());
            $request->request->add(["image"=>$filename.".".$file->getClientOriginalExtension()]);
        }

        $product->update($request->all());

        return redirect()->back();

    }
}
