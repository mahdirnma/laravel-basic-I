<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShopProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view("home");
    }
    public function show()
    {
        $products=Product::all();
        $categories=Category::all();
        return view("admin.product.products",[
            "products"=>$products,
            "categories"=>$categories
        ]);
    }
    public function add(){
        $categories=Category::all();
        return view("admin.product.add",[
            "categories"=>$categories
        ]);
    }
    public function create(Request $request){
//        $title=$request->title;
//        $description=$request->description;
//        $category=$request->category_id;
        $validation=$request->validate([
            "description"=>"required"
        ]);
        $title=request("title");
        $description=request("description");
        $category=request("category");
        Product::create([
            "title"=>$title,
            "description"=>$description,
            "category_id"=>$category
        ]);
        return redirect("/admin/products");
    }
    public function update($id){
        $categories=Category::all();
        $products=Product::find($id);
        return view("admin.product.update",[
            "categories"=>$categories,
            "product"=>$products
        ]);
    }
    public function edit($id){
        $title=request("title");
        $description=request("description");
        $category=request("category");
        $products=Product::find($id);
        $products->update([
            "title"=>$title,
            "description"=>$description,
            "category_id"=>$category
        ]);
        return redirect("/admin/products");
    }
    public function delete($id){
        $products=Product::find($id);
        return view("admin.product.delete",[
            "product"=>$products
        ]);
    }
    public function remove($id){
        $products=Product::find($id);
        $products->delete();
        return redirect("/admin/products");
    }


}
