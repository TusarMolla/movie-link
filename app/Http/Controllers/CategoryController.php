<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    function index(){

        $categories = Category::all();

        return view("category_list",["categories"=>$categories]);
    }

    function newCategory(){

        return view("add_category");
    }

    function store(Request $req){

        $category =new Category;

        $fileName = '';

        if($req->hasFile('imagefile')){
            $fileName = $req->imagefile->getClientOriginalName();
            $req->imagefile->move("public/images",$fileName);
        }

        $category->name = $req->name;
        $category->image = $fileName;
        $category->save();
       return redirect("dashboard");
    }


    function edit($id){
        $category = Category::where("id",$id)->first();

        return view('edit_category',["category"=>$category]);
    }


    function update(Request $req,$id){
        $category = Category::where("id",$id)->first();



        $fileName = $category->image;

        if($req->hasFile('imagefile')){
            $fileName = $req->imagefile->getClientOriginalName();
            $req->imagefile->move("public/images",$fileName);
        }

        $category->name = $req->name;
        $category->image=$fileName;

        $category->save();

        return redirect('dashboard');
    }



}
