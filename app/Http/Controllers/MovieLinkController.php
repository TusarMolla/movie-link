<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieLinkController extends Controller
{

    function index(){
        return view("movie_list");
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


        Storage::disk('local')->put($fileName, $req->imagefile);

        $movie->save();

        return redirect("dashboard");
    }
    //
}
