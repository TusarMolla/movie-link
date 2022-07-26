<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    function index(){

        return view("category_list");
    }

    function newCategory(){

        return view("add_category");
    }

    function store(Request $req){

        $category =new Category;

        $fileName = $req->imagefile->getClientOriginalName();

       Storage::disk('local')->put($fileName, $req->imagefile);

        $category->name = $req->name;
        $category->image = $fileName;
        $category->save();
       return redirect("dashboard");
    }

}
