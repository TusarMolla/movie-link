<?php

namespace App\Http\Resources\Api;

use AppHelpers;

use Illuminate\Http\Resources\Json\ResourceCollection;

class MovieLinkCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data'=> $this->collection->map(function($data){
                return [
                    'name'=>$data->name,
                    'category'=>$data->category->name,
                    'image'=>  publicAssets($data->image),
                    'link'=>$data->link,
                    'rating'=>$data->rating,
                    'duration'=>$data->duration ,
                    'description'=>$data->description,
                    'release_date'=>$data->release_date,
                    'tranding'=>$data->tranding,
                ];
            }),
        ];
    }
}
