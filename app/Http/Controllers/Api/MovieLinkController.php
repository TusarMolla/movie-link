<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\MovieLinkCollection;
use App\Http\Resources\Api\SliderResource;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieLinkController extends Controller
{
    function index(){
        $movies = Movie::paginate(25);

        return new MovieLinkCollection($movies);

    }

    function tvSeries(){


        $movies = Movie::where('category_id',"3")->paginate(25);
        return new MovieLinkCollection($movies);

    }

    function tranding(){
        $movies = Movie::where('tranding',"1")->paginate(25);
        return new MovieLinkCollection($movies);

    }


    function sliders(){
        $movie = Movie::orderBy('id', 'desc')->take(5)->get();
        return new  SliderResource($movie);
    }
}
