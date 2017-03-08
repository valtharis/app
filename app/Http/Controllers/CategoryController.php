<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;

class CategoryController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        return view("categories", ["categories"=>$categories]);
    }
    
    public function get(){
        $id = request()->route("id");
        $category = Category::find($id);
        if(is_null($category)){
            return redirect("/");
        }
        return $category->name;
    }
}
