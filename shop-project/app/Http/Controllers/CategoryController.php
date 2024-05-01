<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show()
    {
        $categories=Category::all();
        return view("admin.category.categories",[
            "categories"=>$categories
        ]);
    }
    public function add()
    {
        return view("admin.category.add");
    }
    public function create(){
        $title=request("title");
        Category::create([
            "title"=>$title
        ]);
        return redirect("/admin/categories");
    }

}
