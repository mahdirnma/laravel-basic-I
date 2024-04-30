<?php

namespace App\Http\Controllers;

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
    public function create(){
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

}
