<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function store(Request $request){
        $category = new Category();

        $category->name = $request->input('title');
        $category->slug = str_slug($category->name);

        $category->save();
        return redirect('/admin/category')->with('msg', 'Category added successfully.');
    }

    public function destroy($id){
        echo $id;
        $category = Category::findOrFail($id);

        $category->delete();
        return redirect('/admin/category')->with('msg', 'Category Deleted');
    }
}
