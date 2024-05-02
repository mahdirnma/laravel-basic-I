<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
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
    public function create(StoreCategoryRequest $request){
        $title=$request->title;
        Category::create([
            "title"=>$title
        ]);
        return redirect("/admin/categories");
    }
    public function update($id){
        $category=Category::find($id);
        return view("admin.category.update",[
            "category"=>$category
        ]);
    }
    public function edit(StoreCategoryRequest $request,$id){
        $category=Category::find($id);
        $title=$request->title;
        $category->update([
            "title"=>$title
        ]);
        return redirect("/admin/categories");
    }
    public function delete($id){
        $category=Category::find($id);
        return view("admin.category.delete",[
            "category"=>$category
        ]);
    }
    public function remove($id){
        $category=Category::find($id);
        $category->delete();
        return redirect("/admin/categories");
    }

}
