<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieLinkController extends Controller
{

    function index(){
        $movieLinks = Movie::all();

        return view("movie_link_list",['links'=>$movieLinks]);
    }

    function create(){
        $categories = Category::all();

        return view("add_movie_link",["categories"=>$categories]);
    }

    function store(Request $req){
        $movie = new Movie;


        $fileName = $req->image->getClientOriginalName();

        $movie->image = $fileName;
        $movie->name = $req->name;
        $movie->link = $req->url;
        $movie->rating = $req->rating;
        $movie->duration = $req->duration;
        $movie->category_id = $req->category;
        $movie->description = $req->description;
        $movie->release_date = $req->date;
        $movie->tranding = $req->isTranding;

        $req->image->move("public/images",$fileName);

        $movie->save();

        return redirect("dashboard");
    }

    function edit($id){

        $movie = Movie::where("id",$id)->first();
        $categories = Category::all();

        return view("edit_movie_link",["movie"=>$movie,"categories"=>$categories]);
    }

    function update(Request $req,$id){
        $movie = Movie::where("id",$id)->first();



        if($req->hasFile('image')){
            $fileName = $req->image->getClientOriginalName();
            $req->image->move("public/images",$fileName);
            $movie->image = $fileName;
        }



        $movie->name = $req->name;
        $movie->link = $req->url;
        $movie->rating = $req->rating;
        $movie->duration = $req->duration;
        $movie->category_id = $req->category;
        $movie->description = $req->description;
        $movie->release_date = $req->date;
        $movie->tranding = $req->isTranding;



        $movie->save();

        return redirect("dashboard");
    }



}
