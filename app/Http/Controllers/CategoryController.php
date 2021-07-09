<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{

    public $categories;
    //
    // public function create(){


    //     // $categories= DB::table('categories')->select('id', 'title');
    //     $categories=Category::all();
    //     // return  $category;
    //     return view('posts.create',compact('categories'));
      
    // }

    // public function store(Request $request)
    // {
    //     // Validate the request...

    //     $category = new Category;

    //     $category->title = $request->title;

    //     $category->save();
    //     return view('posts.create',compact('$category'));
    // }

    public function show($category){

        return "este es una prueba".$category;
    }
}
