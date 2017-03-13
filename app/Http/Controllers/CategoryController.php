<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;

class CategoryController extends Controller
{
    //
    public function staticCreate(){
        $category = Category::firstOrCreate(
                [
                    'name' => 'First Category'
                ]);
        return "Category ".$category->name." is ready";

    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function get(){
        $id = request()->route("id");
        if(is_null($id)){
            $categories = \App\Category::all();
            return view("categories", ["categories"=>$categories]);
        }
        $category = \App\Category::find($id);
        if(is_null($category)){
            return redirect("category");
        }
        return view("category", ["category"=>$category]);
    }
}
